<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Andy Hausmann <hi@andy-hausmann.de>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 *
 * A view helper for dynamic rendering of links.
 *
 * @author Andy Hausmann <hi@andy-hausmann.de>
 * @package flexslider
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_Flexslider_ViewHelpers_DynLinkViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractTagBasedViewHelper
{

	/**
	 * @var string
	 */
	protected $tagName = 'a';

	/**
	 * @var array
	 */
	protected $paramLabels = array();

	/**
	 * Arguments initialization
	 *
	 * @return void
	 */
	public function initializeArguments()
	{
		$this->registerUniversalTagAttributes();
		$this->registerArgument('arguments', 'array', 'Given arguments by Fluid call as an array.');
		$this->registerArgument('href', 'string', 'Link href.');
		$this->paramLabels = array('href', 'target', 'class', 'title');
	}

	/**
	 * Checks and processes the given link parameters.
	 *
	 * @param string $link Output from TYPO3 link wizard.
	 * @return bool Returns true if it is possible to build a link.
	 */
	protected function processLinkParams($link)
	{
		$paramDataArr = explode(' ', $link);
		// Combine labels and values into one array
		$paramDataArr = Tx_Flexslider_Utility_Div::combineArray($this->paramLabels, $paramDataArr, false);
		// Save link data into ViewHelper arguments
		$this->setArguments($paramDataArr);

		if ($this->hasArgument('href') && !empty($this->arguments['href'])) {
			$cObj = t3lib_div::makeInstance('tslib_cObj');
			$configuration = array(
				'parameter' => $this->arguments['href'],
				'returnLast' => true
			);
			$href = $cObj->typolink('', $configuration);
			$this->arguments['href'] = $href;

			return true;
		} else {
			return false;
		}
	}

	/**
	 * Adds attributes to the tag builder if they're not empty.
	 *
	 * @return void
	 */
	protected function addTagAttributes()
	{
		foreach ($this->paramLabels as $label) {
			if ($this->hasArgument($label)
				&& !empty($this->arguments[$label]))
			{
				$this->tag->addAttribute($label, $this->arguments[$label]);
			}
		}
	}

	/**
	 * ViewHelper Bootstrap.
	 *
	 * @return mixed|void
	 */
	public function render()
	{
		if ($this->processLinkParams($this->arguments['arguments']['link'])) {
			$this->tag->setContent($this->renderChildren());
			$this->addTagAttributes();
			return $this->tag->render();
		} else {
			return $this->renderChildren();
		}
	}
}
?>
<?php
namespace SotaStudio\Flexslider\ViewHelpers;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012-2014 Andy Hausmann <ah@sota-studio.de>, SOTA Studio
 *  (c) 2012-2014 Simon Rauterberg <rauterberg@goldland-media.com>
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

use SotaStudio\Flexslider\Utility\Div,
	TYPO3\CMS\Core\Utility\GeneralUtility,
	TYPO3\CMS\Fluid\Core\ViewHelper\AbstractTagBasedViewHelper;

/**
 *
 * A view helper for dynamic rendering of links.
 *
 * @author Andy Hausmann <ah@sota-studio.de>, SOTA Studio
 * @author Simon Rauterberg <rauterberg@goldland-media.com>
 * @package flexslider
 * @subpackage ViewHelpers
 */
class DynLinkViewHelper extends AbstractTagBasedViewHelper {

	/**
	 * @var string
	 */
	protected $tagName = 'a';

	/**
	 * @var array
	 */
	protected $paramLabels = array('href', 'target', 'class', 'title');


	/**
	 * Arguments initialization
	 *
	 * @return void
	 */
	public function initializeArguments() {
		$this->registerUniversalTagAttributes();
		$this->registerArgument('arguments', 'array', 'Given arguments by Fluid call as an array.');
		$this->registerArgument('href', 'string', 'Link href.');
	}

	/**
	 * Workaround for parent::setArguments().
	 *
	 * Mentioned method is inconsistent:
	 * - in TYPO3 4.5 it expects an object instance of Tx_Fluid_Core_ViewHelper_Arguments
	 * - in TYPO3 > 4.5 it expects just an array.
	 *
	 * In order to avoid fatal errors, this new method has been temporarily implemented.
	 *
	 * @param array $arguments
	 * @return void
	 */
	public function setArgumentsFromArray(array $arguments) {
		$this->arguments = $arguments;
	}

	/**
	 * Checks and processes the given link parameters.
	 *
	 * @param string $link Output from TYPO3 link wizard.
	 * @return bool Returns TRUE if it is possible to build a link.
	 */
	protected function processLinkParams($link) {
		$paramDataArr = explode(' ', $link);
		// Combine labels and values into one array
		$paramDataArr = Div::combineArray($this->paramLabels, $paramDataArr, FALSE);

		if (isset($paramDataArr['href']) && !empty($paramDataArr['href'])) {
			// Save link data into ViewHelper arguments
			$this->setArgumentsFromArray($paramDataArr);

			$cObj = GeneralUtility::makeInstance('tslib_cObj');
			$configuration = array(
				'parameter' => $this->arguments['href'],
				'returnLast' => TRUE
			);
			$href = $cObj->typolink('', $configuration);
			$this->arguments['href'] = $href;

			return TRUE;
		} else {
			return FALSE;
		}
	}

	/**
	 * Adds attributes to the tag builder if they're not empty.
	 *
	 * @return void
	 */
	protected function addTagAttributes() {
		foreach ($this->paramLabels as $label) {
			if (isset($this->arguments[$label])
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
	public function render() {
		if ($this->processLinkParams($this->arguments['arguments']['link'])) {
			$this->tag->setContent($this->renderChildren());
			$this->addTagAttributes();
			return $this->tag->render();
		} else {
			return $this->renderChildren();
		}
	}

}
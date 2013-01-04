<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012-2013 Andy Hausmann <andy@sota-studio.de>
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
 * Class that adds the wizard icon.
 *
 * @author Andy Hausmann <andy@sota-studio.de>
 * @package flexslider
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class flexslider_pi1_wizicon
{

	protected $extKey = '';
	protected $plugin = '';
	protected $pluginSignature = '';


	public function __construct()
	{
		$this->extKey = 'flexslider';
		$this->plugin = 'pi1';
		$this->pluginSignature = strtolower($this->extKey . '_' . $this->plugin);
	}


	/**
	 * Processing the wizard items array
	 *
	 * @param array $wizardItems: The wizard items
	 * @return array Modified array with wizard items
	 */
	public function proc($wizardItems)
	{
		$locallang = $this->includeLocalLang();

		$wizardItems['plugins_tx_' . $this->extKey] = array(
			'icon' => t3lib_extMgm::extRelPath($this->extKey) . 'Resources/Public/Icons/' . $this->plugin . '_ce_wiz.gif',
			'title' => $GLOBALS['LANG']->getLLL($this->plugin . '_title', $locallang),
			'description' => $GLOBALS['LANG']->getLLL($this->plugin . '_plus_wiz_description', $locallang),
			'params' => '&defVals[tt_content][CType]=list&defVals[tt_content][list_type]=' . $this->pluginSignature
		);

		return $wizardItems;
	}


	/**
	 * Reads the Backend Localization file.
	 *
	 * @return array The array with language labels
	 */
	protected function includeLocalLang()
	{
		$llFile = t3lib_extMgm::extPath($this->extKey) . 'Resources/Private/Language/locallang_be.xml';

		$l10n = t3lib_div::makeInstance('language');
		$l10n->init($GLOBALS['LANG']->lang);
		$l10nArr = $l10n->includeLLFile($llFile, false);

		// Removed following lines, because this will only work with TYPO3 4.6+
		//$l10nParser = t3lib_div::makeInstance('t3lib_l10n_parser_Llxml');
		//return $l10nParser->getParsedData($llFile, $GLOBALS['LANG']->lang);

		return $l10nArr;
	}

}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/flexslider/Resources/Private/Php/class.flexslider_wizicon.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/flexslider/Resources/Private/Php/class.flexslider_wizicon.php']);
}
?>
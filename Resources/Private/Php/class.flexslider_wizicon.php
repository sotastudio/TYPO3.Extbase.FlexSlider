<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012-2014 Andy Hausmann <ah@sota-studio.de>, SOTA Studio
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
 * @author Andy Hausmann <ah@sota-studio.de>, SOTA Studio
 * @package flexslider
 * @subpackage Resources\Private\Php
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class flexslider_pi1_wizicon {

	/** @var string */
	protected $extKey = '';
	/** @var string  */
	protected $plugin = '';
	/** @var string  */
	protected $pluginSignature = '';
	/** @var \TYPO3\CMS\Lang\LanguageService */
	protected $LANG;


	public function __construct() {
		$this->extKey = 'flexslider';
		$this->plugin = 'pi1';
		$this->pluginSignature = strtolower($this->extKey . '_' . $this->plugin);
		$this->LANG =& $GLOBALS['LANG'];
	}

	/**
	 * Processing the wizard items array
	 *
	 * @param array $wizardItems: The wizard items
	 * @return array Modified array with wizard items
	 */
	public function proc($wizardItems) {
		$locallang = $this->includeLocalLang();

		$wizardItems['plugins_tx_' . $this->extKey] = array(
			'icon' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($this->extKey) . 'Resources/Public/Icons/' . $this->plugin . '_ce_wiz.gif',
			'title' => $this->LANG->getLLL($this->plugin . '_title', $locallang),
			'description' => $this->LANG->getLLL($this->plugin . '_plus_wiz_description', $locallang),
			'params' => '&defVals[tt_content][CType]=list&defVals[tt_content][list_type]=' . $this->pluginSignature
		);

		return $wizardItems;
	}

	/**
	 * Reads the Backend Localization file.
	 *
	 * @return array The array with language labels
	 */
	protected function includeLocalLang() {
		$llFile = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($this->extKey) . 'Resources/Private/Language/locallang_be.xml';

		$l10n = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\CMS\Lang\LanguageService');
		$l10n->init($this->LANG->lang);
		$l10nArr = $l10n->includeLLFile($llFile, FALSE);

		// Removed following lines, because this will only work with TYPO3 4.6+
		//$l10nParser = t3lib_div::makeInstance('t3lib_l10n_parser_Llxml');
		//return $l10nParser->getParsedData($llFile, $this->LANG->lang);

		return $l10nArr;
	}

}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/flexslider/Resources/Private/Php/class.flexslider_wizicon.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/flexslider/Resources/Private/Php/class.flexslider_wizicon.php']);
}

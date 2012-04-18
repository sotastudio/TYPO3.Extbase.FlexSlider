<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

// Build extension name vars - used for plugin registration, flexforms and similar
$extensionName = t3lib_div::underscoredToUpperCamelCase($_EXTKEY);
$pluginSignature = strtolower($extensionName) . '_pi1';

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Pi1',
	'FlexSlider'
);


// Clean up the Flexform fields in the backend a bit
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature] = 'layout,select_key,splash_layout';
// Add own flexform stuff.
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';

t3lib_extMgm::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform.xml');

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'FlexSlider');

t3lib_extMgm::addLLrefForTCAdescr('tx_flexslider_domain_model_flexslider', 'EXT:flexslider/Resources/Private/Language/locallang_csh_tx_flexslider_domain_model_flexslider.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_flexslider_domain_model_flexslider');
$TCA['tx_flexslider_domain_model_flexslider'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:flexslider/Resources/Private/Language/locallang_db.xml:tx_flexslider_domain_model_flexslider',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'sortby' => 'sorting',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/FlexSlider.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_flexslider_domain_model_flexslider.gif'
	),
);

?>
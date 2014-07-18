<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'SotaStudio.' . $_EXTKEY,
	'Pi1',
	array(
		'FlexSlider' => 'list',
	)
);
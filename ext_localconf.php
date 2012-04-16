<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Pi1',
	array(
		'FlexSlider' => 'list',
		
	),
	// non-cacheable actions
	array(
		'FlexSlider' => '',
		
	)
);

?>
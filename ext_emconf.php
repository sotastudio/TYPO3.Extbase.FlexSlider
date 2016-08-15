<?php

$EM_CONF[$_EXTKEY] = array(
	'title' => 'FlexSlider',
	'description' => 'Brings WooThemes\' awesome responsive Slider to TYPO3',
	'category' => 'plugin',
	'version' => '7.0.0',
	'state' => 'stable',
	'uploadfolder' => 1,
	'createDirs' => '',
	'clearCacheOnLoad' => 1,
	'author' => 'Andy Hausmann',
	'author_email' => 'ah@sota-studio.de',
	'author_company' => 'SOTA Studio',
	'constraints' => array(
		'depends' => array(
			'typo3' => '7.6.0-7.6.99'
		),
		'conflicts' => array(),
		'suggests' => array(
			't3jquery' => '3.0.2-0.0.0'
		),
	),
);

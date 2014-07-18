<?php

$EM_CONF[$_EXTKEY] = array(
	'title' => 'FlexSlider',
	'description' => 'Brings WooThemes\' awesome responsive Slider to TYPO3',
	'category' => 'plugin',
	'version' => '1.5.0',
	'state' => 'stable',
	'uploadfolder' => 1,
	'createDirs' => '',
	'clearCacheOnLoad' => 1,
	'author' => 'Andy Hausmann',
	'author_email' => 'ah@sota-studio.de',
	'author_company' => 'SOTA Studio',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.1.0-6.2.99',
			'cms' => '',
			'fluidcontent' => '',
		),
		'conflicts' => array(),
		'suggests' => array(),
	),
);
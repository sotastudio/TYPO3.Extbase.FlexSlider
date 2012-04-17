<?php

########################################################################
# Extension Manager/Repository config file for ext "flexslider".
#
# Auto generated 16-04-2012 21:33
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'FlexSlider',
	'description' => '',
	'category' => 'plugin',
	'author' => 'Andy Hausmann, Andreas Walter',
	'author_email' => 'hi@andy-hausmann.de, mail@andreas-walter.info',
	'author_company' => 'SOTAStudio, SOTAStudio',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
			'extbase' => '1.3.0',
			'fluid' => '1.3.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:22:{s:12:"ext_icon.gif";s:4:"e922";s:17:"ext_localconf.php";s:4:"fb33";s:14:"ext_tables.php";s:4:"a3cd";s:14:"ext_tables.sql";s:4:"58a4";s:43:"Classes/Controller/FlexSliderController.php";s:4:"f36a";s:35:"Classes/Domain/Model/FlexSlider.php";s:4:"bacb";s:50:"Classes/Domain/Repository/FlexSliderRepository.php";s:4:"aa53";s:36:"Configuration/FlexForms/flexform.xml";s:4:"9c4f";s:32:"Configuration/TCA/FlexSlider.php";s:4:"e8fc";s:38:"Configuration/TypoScript/constants.txt";s:4:"9c53";s:34:"Configuration/TypoScript/setup.txt";s:4:"1e71";s:40:"Resources/Private/Language/locallang.xml";s:4:"efaa";s:43:"Resources/Private/Language/locallang_be.xml";s:4:"55ab";s:84:"Resources/Private/Language/locallang_csh_tx_mmflexslider_domain_model_flexslider.xml";s:4:"64f7";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"06b8";s:38:"Resources/Private/Layouts/Default.html";s:4:"9749";s:48:"Resources/Private/Templates/FlexSlider/List.html";s:4:"2c99";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:66:"Resources/Public/Icons/tx_flexslider_domain_model_flexslider.gif";s:4:"905a";s:50:"Tests/Unit/Controller/FlexSliderControllerTest.php";s:4:"52c4";s:42:"Tests/Unit/Domain/Model/FlexSliderTest.php";s:4:"958a";s:14:"doc/manual.sxw";s:4:"8d2d";}',
);

?>
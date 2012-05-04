<?php

########################################################################
# Extension Manager/Repository config file for ext "flexslider".
#
# Auto generated 04-05-2012 10:46
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'FlexSlider',
	'description' => 'Brings WooThemes\' awesome responsive Slider to TYPO3',
	'category' => 'plugin',
	'author' => 'Andy Hausmann',
	'author_email' => 'hi@andy-hausmann.de',
	'author_company' => '',
	'state' => 'stable',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.2.0',
	'constraints' => array(
		'depends' => array(
			'extbase' => '1.3',
			'fluid' => '1.3',
			'typo3' => '4.5-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
			't3jquery' => '',
		),
	),
	'_md5_values_when_last_written' => 'a:37:{s:9:"README.md";s:4:"d415";s:12:"ext_icon.gif";s:4:"25cc";s:17:"ext_localconf.php";s:4:"5d47";s:14:"ext_tables.php";s:4:"e7c2";s:14:"ext_tables.sql";s:4:"316b";s:12:"t3jquery.txt";s:4:"00cf";s:43:"Classes/Controller/FlexSliderController.php";s:4:"b6b1";s:35:"Classes/Domain/Model/FlexSlider.php";s:4:"9afa";s:50:"Classes/Domain/Repository/FlexSliderRepository.php";s:4:"9c7a";s:25:"Classes/Utility/Debug.php";s:4:"d2e4";s:23:"Classes/Utility/Div.php";s:4:"4b62";s:42:"Classes/ViewHelpers/AddCssJsViewHelper.php";s:4:"42d7";s:43:"Classes/ViewHelpers/AddJQueryViewHelper.php";s:4:"b53d";s:36:"Configuration/FlexForms/flexform.xml";s:4:"0704";s:32:"Configuration/TCA/FlexSlider.php";s:4:"a535";s:38:"Configuration/TypoScript/constants.txt";s:4:"8f54";s:34:"Configuration/TypoScript/setup.txt";s:4:"8e43";s:40:"Resources/Private/Language/locallang.xml";s:4:"dfbc";s:43:"Resources/Private/Language/locallang_be.xml";s:4:"c1f0";s:82:"Resources/Private/Language/locallang_csh_tx_flexslider_domain_model_flexslider.xml";s:4:"0a8b";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"3b08";s:38:"Resources/Private/Layouts/Default.html";s:4:"7cb6";s:42:"Resources/Private/Partials/JavaScript.html";s:4:"ff12";s:45:"Resources/Private/Partials/ResourceFiles.html";s:4:"812b";s:50:"Resources/Private/Php/class.flexslider_wizicon.php";s:4:"1a49";s:48:"Resources/Private/Templates/FlexSlider/List.html";s:4:"234b";s:35:"Resources/Public/Css/flexslider.css";s:4:"968f";s:37:"Resources/Public/Icons/pi1_ce_wiz.gif";s:4:"a145";s:64:"Resources/Public/Icons/tx_flexslider_domain_model_flexslider.gif";s:4:"a85b";s:42:"Resources/Public/Images/bg_control_nav.png";s:4:"5ccb";s:44:"Resources/Public/Images/bg_direction_nav.png";s:4:"f595";s:33:"Resources/Public/Js/jquery-min.js";s:4:"398f";s:44:"Resources/Public/Js/jquery.flexslider-min.js";s:4:"41df";s:33:"Resources/Public/Misc/LICENSE.txt";s:4:"0fea";s:32:"Resources/Public/Misc/README.txt";s:4:"e107";s:50:"Tests/Unit/Controller/FlexSliderControllerTest.php";s:4:"b289";s:42:"Tests/Unit/Domain/Model/FlexSliderTest.php";s:4:"08c1";}',
);

?>
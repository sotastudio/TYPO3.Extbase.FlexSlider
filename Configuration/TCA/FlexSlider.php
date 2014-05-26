<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

// Extension manager configuration
$configuration = Tx_Flexslider_Utility_EmConfiguration::getConfiguration();

$pathLL = 'LLL:EXT:flexslider/Resources/Private/Language/locallang_db.xml:';

$TCA['tx_flexslider_domain_model_flexslider'] = array(
	'ctrl' => $TCA['tx_flexslider_domain_model_flexslider']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, title, subtitle, image, link, caption, type',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, name, title, subtitle, image, link, caption, type,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access,starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xml:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xml:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_flexslider_domain_model_flexslider',
				'foreign_table_where' => 'AND tx_flexslider_domain_model_flexslider.pid=###CURRENT_PID### AND tx_flexslider_domain_model_flexslider.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'name' => array(
			'exclude' => 0,
			'label' => $pathLL . 'tx_flexslider_domain_model_flexslider.name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'title' => array(
			'exclude' => 0,
			'label' => $pathLL . 'tx_flexslider_domain_model_flexslider.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'subtitle' => array(
			'exclude' => 0,
			'label' => $pathLL . 'tx_flexslider_domain_model_flexslider.subtitle',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 5,
				'eval' => 'trim'
			),
		),
		'image' => array(
			'exclude' => 0,
			'label' => $pathLL . 'tx_flexslider_domain_model_flexslider.image',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'file',
				'uploadfolder' => 'uploads/tx_flexslider',
				'show_thumbs' => 1,
				'size' => 1,
				'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
				'disallowed' => '',
				'maxitems' => '1',
				'minitems' => '1'
			),
		),
		'link' => array(
			'exclude' => 0,
			'label' => $pathLL . 'tx_flexslider_domain_model_flexslider.link',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim',
				'wizards' => array(
					'_PADDING' => 2,
					'link' => array(
						'type' => 'popup',
						'title' => 'Link',
						'icon' => 'link_popup.gif',
						'script' => 'browse_links.php?mode=wizard',
						'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1'
					)
				)
			),
		),
		'caption' => array(
			'exclude' => 0,
			'label' => $pathLL . 'tx_flexslider_domain_model_flexslider.caption',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'type' => array(
			'exclude' => 1,
			'label' => $pathLL . 'tx_flexslider_domain_model_flexslider.type',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array(
						'',
						'0'
					),
				),
				'default' => '0'
			)
		),
	),
);


/**
 * Conditional configuration
 */

// Extend the subtitle field, if the corresponding value in EM Config is set.
if ($configuration['extendSubtitleByRTE'])	{
	$TCA['tx_flexslider_domain_model_flexslider']['columns']['subtitle']['config']['wizards'] = array(
		'RTE' => array(
			'icon' => 'wizard_rte2.gif',
			'notNewRecords'=> 1,
			'RTEonly' => 1,
			'script' => 'wizard_rte.php',
			'title' => 'LLL:EXT:cms/locallang_ttc.xml:bodytext.W.RTE',
			'type' => 'script'
		),
	);
	$TCA['tx_flexslider_domain_model_flexslider']['columns']['subtitle']['defaultExtras'] = 'richtext[]';
	$TCA['tx_flexslider_domain_model_flexslider']['types']['1']['showitem'] = str_replace(
		'subtitle',
		'subtitle;;;richtext:rte_transform[mode=ts_css]',
		$TCA['tx_flexslider_domain_model_flexslider']['types']['1']['showitem']
	);
}
<?php
return array(
	'BE' => array(
		'disable_exec_function' => 0,
		'fileCreateMask' => '0666',
		'folderCreateMask' => '2777',
		'installToolPassword' => '59c695874389930ee3afe98cfe7edc42',
		'loginSecurityLevel' => 'rsa',
	),
	'DB' => array(
		'database' => 'Introduction',
		'extTablesDefinitionScript' => 'extTables.php',
		'host' => 'localhost',
		'password' => 'delta',
		'username' => 'root',
	),
	'EXT' => array(
		'extConf' => array(
			'indexed_search' => 'a:17:{s:8:"pdftools";s:9:"/usr/bin/";s:8:"pdf_mode";s:2:"20";s:5:"unzip";s:9:"/usr/bin/";s:6:"catdoc";s:9:"/usr/bin/";s:6:"xlhtml";s:9:"/usr/bin/";s:7:"ppthtml";s:9:"/usr/bin/";s:5:"unrtf";s:9:"/usr/bin/";s:9:"debugMode";s:1:"0";s:18:"fullTextDataLength";s:1:"0";s:23:"disableFrontendIndexing";s:1:"0";s:6:"minAge";s:2:"24";s:6:"maxAge";s:1:"0";s:16:"maxExternalFiles";s:1:"5";s:26:"useCrawlerForExternalFiles";s:1:"0";s:11:"flagBitMask";s:3:"192";s:16:"ignoreExtensions";s:0:"";s:17:"indexExternalURLs";s:1:"0";}',
			'realurl' => 'a:4:{s:10:"configFile";s:26:"typo3conf/realurl_conf.php";s:14:"enableAutoConf";s:1:"1";s:14:"autoConfFormat";s:1:"1";s:12:"enableDevLog";s:1:"0";}',
			'rtehtmlarea' => 'a:13:{s:21:"noSpellCheckLanguages";s:23:"ja,km,ko,lo,th,zh,b5,gb";s:15:"AspellDirectory";s:15:"/usr/bin/aspell";s:17:"defaultDictionary";s:2:"en";s:14:"dictionaryList";s:2:"en";s:20:"defaultConfiguration";s:105:"Typical (Most commonly used features are enabled. Select this option if you are unsure which one to use.)";s:12:"enableImages";s:1:"1";s:20:"enableInlineElements";s:1:"0";s:19:"allowStyleAttribute";s:1:"1";s:24:"enableAccessibilityIcons";s:1:"0";s:16:"enableDAMBrowser";s:1:"0";s:16:"forceCommandMode";s:1:"0";s:15:"enableDebugMode";s:1:"0";s:23:"enableCompressedScripts";s:1:"1";}',
			'saltedpasswords' => 'a:2:{s:3:"FE.";a:2:{s:7:"enabled";s:1:"1";s:21:"saltedPWHashingMethod";s:28:"tx_saltedpasswords_salts_md5";}s:3:"BE.";a:2:{s:7:"enabled";s:1:"1";s:21:"saltedPWHashingMethod";s:28:"tx_saltedpasswords_salts_md5";}}',
			'tt_news' => 'a:15:{s:13:"useStoragePid";s:1:"0";s:13:"noTabDividers";s:1:"0";s:25:"l10n_mode_prefixLangTitle";s:1:"1";s:22:"l10n_mode_imageExclude";s:1:"1";s:20:"hideNewLocalizations";s:1:"0";s:13:"prependAtCopy";s:1:"1";s:17:"requireCategories";s:1:"0";s:5:"label";s:5:"title";s:9:"label_alt";s:8:"datetime";s:10:"label_alt2";s:5:"short";s:15:"label_alt_force";s:1:"0";s:11:"treeOrderBy";s:5:"title";s:21:"categorySelectedWidth";s:1:"0";s:17:"categoryTreeWidth";s:1:"0";s:18:"categoryTreeHeigth";s:1:"5";}',
			'wt_spamshield' => 'a:10:{s:12:"useNameCheck";s:1:"0";s:12:"usehttpCheck";s:1:"3";s:9:"notUnique";s:0:"";s:13:"honeypodCheck";s:1:"1";s:15:"useSessionCheck";s:1:"1";s:16:"SessionStartTime";s:2:"10";s:14:"SessionEndTime";s:3:"600";s:10:"AkismetKey";s:0:"";s:12:"email_notify";s:0:"";s:3:"pid";s:2:"-1";}',
		),
		'extList' => 'css_styled_content,info,perm,func,filelist,about,version,tsconfig_help,context_help,extra_page_cm_options,impexp,sys_note,tstemplate,tstemplate_ceditor,tstemplate_info,tstemplate_objbrowser,tstemplate_analyzer,func_wizards,wizard_crpages,wizard_sortpages,lowlevel,install,belog,beuser,aboutmodules,setup,taskcenter,info_pagetsconfig,viewpage,rtehtmlarea,t3skin,t3editor,reports,felogin,form,introduction,rsaauth,saltedpasswords,workspaces,scheduler,linkvalidator,automaketemplate,realurl,tt_news,indexed_search,wt_spamshield,jquerycolorbox',
		'extListArray' => array(
			'css_styled_content',
			'info',
			'perm',
			'func',
			'filelist',
			'about',
			'version',
			'tsconfig_help',
			'context_help',
			'extra_page_cm_options',
			'impexp',
			'sys_note',
			'tstemplate',
			'tstemplate_ceditor',
			'tstemplate_info',
			'tstemplate_objbrowser',
			'tstemplate_analyzer',
			'func_wizards',
			'wizard_crpages',
			'wizard_sortpages',
			'lowlevel',
			'install',
			'belog',
			'beuser',
			'aboutmodules',
			'setup',
			'taskcenter',
			'info_pagetsconfig',
			'viewpage',
			'rtehtmlarea',
			't3skin',
			't3editor',
			'reports',
			'felogin',
			'form',
			'introduction',
			'rsaauth',
			'saltedpasswords',
			'workspaces',
			'scheduler',
			'linkvalidator',
			'automaketemplate',
			'realurl',
			'tt_news',
			'indexed_search',
			'wt_spamshield',
			'jquerycolorbox',
		),
	),
	'FE' => array(
		'loginSecurityLevel' => 'rsa',
		'pageNotFound_handling' => 'http://localhost/t3-playground/Introduction/index.php?id=16',
	),
	'GFX' => array(
		'gdlib_png' => 1,
		'im_path_lzw' => '',
		'im_version_5' => 'gm',
		'jpg_quality' => '80',
	),
	'SYS' => array(
		'compat_version' => '6.0',
		'encryptionKey' => '8eea15b94dee4c8b1eb3d34feb11c9f313d9c981c39773bf65627ab82be90d9c8003f0a3b6156480e05c0c0000ab2469',
		'sitename' => 'New TYPO3 site',
	),
);
?>
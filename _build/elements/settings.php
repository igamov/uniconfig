<?php

return [
	'friendly_urls' => [
		'key' => 'friendly_urls',
		'xtype' => 'combo-boolean',
		'value' => true,
		'area' => 'furls',
		'namespace' => 'core',
	],
	'link_tag_scheme' => [
		'key' => 'link_tag_scheme',
		'xtype' => 'textfield',
		'value' => 'abs',
		'area' => 'site',
		'namespace' => 'core',
	],
	'pdotools_elements_path' => [
		'key' => 'pdotools_elements_path',
		'xtype' => 'textfield',
		'value' => '{core_path}components/uniconfig/elements/',
		'area' => 'pdotools_main',
		'namespace' => 'pdotools',
	],
	'fenom_parser' => [
		'key' => 'pdotools_fenom_parser',
		'xtype' => 'combo-boolean',
		'value' => true,
		'area' => 'pdotools_main',
		'namespace' => 'pdotools',
	],
  'error_page' => [
    'key' => 'error_page',
    'xtype' => 'textfield',
    'value' => '4',
    'area' => 'site',
    'namespace' => 'core',
  ],
  'unauthorized_page' => [
    'key' => 'unauthorized_page',
    'xtype' => 'textfield',
    'value' => '6',
    'area' => 'site',
    'namespace' => 'core',
  ],
];
<?php

/**
 * Extension Manager/Repository config file for ext "cf_cookiemanager_uikit".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'CodingFreaks Cookiemanager UiKit Demo',
    'description' => 'An Demo UI Kit for the Cookie Manager',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'fluid_styled_content' => '12.4.0-12.4.99',
            'rte_ckeditor' => '12.4.0-12.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'CodingFreaks\\CfCookiemanagerUikit\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Florian Eibisberger',
    'author_email' => 'cookiemanager@coding-freaks.com',
    'author_company' => 'CodingFreaks',
    'version' => '1.0.0',
];

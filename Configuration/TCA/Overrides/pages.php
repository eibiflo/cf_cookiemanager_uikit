<?php
defined('TYPO3') or die('Access denied.');
call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'cf_cookiemanager_uikit';

    /**
     * Default PageTS for CfCookiemanagerUikit
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TsConfig/Page/All.tsconfig',
        'CodingFreaks Cookiemanager UiKit'
    );
});

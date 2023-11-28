<?php
defined('TYPO3') or die('Access denied.');
call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'cf_cookiemanager_uikit';

    /**
     * Default TypoScript for CfCookiemanagerUikit
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'CodingFreaks Cookiemanager UiKit'
    );
});

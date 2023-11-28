Demo UIKit for the "cf cookiemanager"
==============================================================

## Demo Override Settingsmodal Template
To override the a CookieManager template, you have to add the following line to your `additional.php`(v12), or  `additionalConfigurtaion.php`(v11) in your TYPO3 installation:

Replace (cf_cookiemanager_uikit) with your extension key.

```php
$GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['cf_cookiemanager']['CF_SETTINGSMODAL_TEMPLATE'] = 'EXT:cf_cookiemanager_uikit/Resources/Static/CfCookiemanager/settingsmodal.html';

//for all Components use:
$GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['cf_cookiemanager']['CF_SETTINGSMODAL_TEMPLATE'] = 'EXT:cf_cookiemanager_uikit/Resources/Static/CfCookiemanager/settingsmodal.html';
$GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['cf_cookiemanager']['CF_CONSENTMODAL_TEMPLATE'] = 'EXT:cf_cookiemanager_uikit/Resources/Static/CfCookiemanager/consentmodal.html';
$GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['cf_cookiemanager']['CF_SETTINGSMODAL_CATEGORY_TEMPLATE'] = 'EXT:cf_cookiemanager_uikit/Resources/Static/CfCookiemanager/settingsmodal_category.html';
```

The ID of the HTML elements if important for the Frontend Functionality. Please do not change the ID's, this breaks the functionality.

## TODO List

- [ ] Add more Frontend-UIKit Templates
- [ ] Add an CSS Example Override
- [ ] Add a Font Example Override
- [ ] Add an JS Example Override for API calls
- [ ] Request for more Examples
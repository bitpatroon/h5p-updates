<?php
defined('TYPO3_MODE') or die('¯\_(ツ)_/¯');

$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['H5PContentValidator']    = ['className' => \BPN\H5pUpdates\Core\UpdatedH5PContentValidator::class];
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['H5PCore']                = ['className' => \BPN\H5pUpdates\Core\UpdatedH5PCore::class];
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['H5PDefaultStorage']      = ['className' => \BPN\H5pUpdates\Core\UpdatedH5PDefaultStorage::class];
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['H5PValidator']           = ['className' => \BPN\H5pUpdates\Core\UpdatedH5PValidator::class];
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['H5peditor']              = ['className' => \BPN\H5pUpdates\Editor\UpdatedH5peditor::class];

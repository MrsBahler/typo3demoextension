<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function () {
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'BenediktSeurig.ListEverything',
            'Pi1',
            [
                'ListEverything' => 'list',
            ],
            // non-cacheable actions
            [
                'ListEverything' => '',
            ]
        );
    }
);

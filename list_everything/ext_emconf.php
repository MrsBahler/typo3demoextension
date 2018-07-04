<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'List Everything',
    'description' => 'An extension to manage a listnumber.',
    'category' => 'plugin',
    'author' => 'Benedikt Seurig',
    'author_company' => 'SalesMachine',
    'author_email' => 'seurig@salesmachine.biz',
    'state' => 'alpha',
    'clearCacheOnLoad' => true,
    'version' => '0.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.9.99',
        ]
    ],
    'autoload' => [
        'psr-4' => [
            'BenediktSeurig\\ListEverything\\' => 'Classes'
        ]
    ],
];

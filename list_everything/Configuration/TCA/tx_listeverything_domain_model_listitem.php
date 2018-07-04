<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:list_everything/Resources/Private/Language/locallang_db.xlf:tx_listeverything_domain_model_listitem',
        'label' => 'name',
        'iconfile' => 'EXT:list_everything/Resources/Public/Icons/Listitem.svg'
    ],
    'columns' => [
        'name' => [
            'label' => 'LLL:EXT:list_everything/Resources/Private/Language/locallang_db.xlf:tx_listeverything_domain_model_listitem.item_label',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'eval' => 'trim'
            ]
        ],
        'description' => [
            'label' => 'LLL:EXT:list_everything/Resources/Private/Language/locallang_db.xlf:tx_listeverything_domain_model_listitem.item_description',
            'config' => [
                'type' => 'text',
                'eval' => 'trim'
            ],
            'defaultExtras' => 'richtext[]'
        ],
        'listnumber' => [
            'label' => 'LLL:EXT:list_everything/Resources/Private/Language/locallang_db.xlf:tx_listeverything_domain_model_listitem.item_listnumber',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ]
        ],
    ],
    'types' => [
        '0' => ['showitem' => 'name, description, listnumber']
    ]
];

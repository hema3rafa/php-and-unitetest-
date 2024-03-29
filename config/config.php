<?php
/**
 * @author : Ibrahim Elsawaf
 * @created Date : 10/8/2021
 * @project : jumia-exercise
 */


return [
    'database' => [
        'connection-SQLite' => 'sqlite:../resources/assets/sample.db'
    ],
    'countries' => [
        'Cameroon',
        'Ethiopia',
        'Morocco',
        'Mozambique',
        'Uganda'
    ],
    'phone_numbers_validators' => [
        'Cameroon' => [
            'code' => '+237',
            'regex' => '\(237\)\ ?[2368]\d{7,8}$'
        ],
        'Ethiopia' => [
            'code' => '+251',
            'regex' => '\(251\)\ ?[1-59]\d{8}$'
        ],
        'Morocco' => [
            'code' => '+212',
            'regex' => '\(212\)\ ?[5-9]\d{8}$'
        ],
        'Mozambique' => [
            'code' => '+258',
            'regex' => '\(258\)\ ?[28]\d{7,8}$'
        ],
        'Uganda' => [
            'code' => '+256',
            'regex' => '\(256\)\ ?\d{9}$'
        ]
    ]

];



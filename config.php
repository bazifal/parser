<?php
return [
    'input' => [
        'class' => \app\input\CsvInput::class,
        'source' => './data/hotels.scv',
        'format' => [
            [
                'index' => 0,
                'name' => 'name',
                'validator' => 'string',
            ],
            [
                'index' => 1,
                'name' => 'url',
                'validator' => 'url',
            ],
            [
                'index' => 2,
                'name' => 'stars',
                'validator' => 'integer',
            ]
        ]
    ]
];
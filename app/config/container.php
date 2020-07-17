<?php
return [
    'controllers' => [
        'hello_world_class' => [
            'class' => 'ExampleApp\Controller\HelloWorldController',
            'arguments' => []
        ]
    ],
    'routes' => [
        'hello_php' => [
            'handler' => ['ExampleApp\Controller\HelloWorldController', 'helloPHPView'],
            'method' => 'GET'
        ]
    ]
];
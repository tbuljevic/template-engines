<?php
return [
    'controllers' => [
        'hello_world_class' => [
            'class' => 'ExampleApp\Controller\HelloWorldController',
            'arguments' => []
        ],
        'home_class' => [
            'class' => 'ExampleApp\Controller\HomeController',
            'arguments' => []
        ]
    ],
    'routes' => [
        'hello_php' => [
            'handler' => ['ExampleApp\Controller\HelloWorldController', 'helloPHPView'],
            'method' => 'GET'
        ],
        'hello_twig' => [
            'handler' => ['ExampleApp\Controller\HelloWorldController', 'helloTwigView'],
            'method' => 'GET'
        ],
        'hello_smarty' => [
            'handler' => ['ExampleApp\Controller\HelloWorldController', 'helloSmartyView'],
            'method' => 'GET'
        ],
        'hello_blade' => [
            'handler' => ['ExampleApp\Controller\HelloWorldController', 'helloBladeView'],
            'method' => 'GET'
        ],
        'home' => [
            'handler' => ['ExampleApp\Controller\HomeController', 'index'],
            'method' => 'GET'
        ],
        '' => [
            'handler' => ['ExampleApp\Controller\HomeController', 'dashboard'],
            'method' => 'GET'
        ],
        'api-create' => [
            'handler' => ['ExampleApp\Controller\HomeController', 'create'],
            'method' => 'GET'
        ],
        'api-show' => [
            'handler' => ['ExampleApp\Controller\HomeController', 'show'],
            'method' => 'GET'
        ]
    ]
];
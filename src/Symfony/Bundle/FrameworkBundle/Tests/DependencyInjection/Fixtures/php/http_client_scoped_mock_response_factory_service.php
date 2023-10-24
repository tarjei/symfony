<?php

$container->loadFromExtension('framework', [
    'annotations' => false,
    'http_method_override' => false,
    'handle_all_throwables' => true,
    'php_errors' => ['log' => true],
    'http_client' => [
        'default_options' => null,
        'scoped_clients' => [
            'notMocked' => [
                'base_uri' => 'https://symfony.com'
            ],
            'mocked' => [
                'base_uri' => 'https://symfony.com',
                'mock_response_factory' => 'my_response_factory'
            ],
        ]
    ],
]);

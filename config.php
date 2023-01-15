<?php

return [
    'database' => [
        'name' => 'khar',
        'username' => 'root',
        'password' => '',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
        ],
    'admin' => [
        'admin_email' => 'elghamry@fal.com',
        'admin_pass' => 'Elghamry123'
    ]
];
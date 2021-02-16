<?php 

return [
    'database' => [
        'name' => 'mytodo',
        'user' => 'postgres',
        'password' => '',
        'connection' => 'pgsql:host=localhost',
        'port' => 5432,
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];


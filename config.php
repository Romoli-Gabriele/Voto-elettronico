<?php

return [

    "database"=>[
        "name"=>"voto-elettonico",
        "username"=>"root",
        "password"=>"password",
        "connection"=>"mysql:host=127.0.0.1",
        "options"=> [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ],
        "charset" => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
    ],
    "crypt"=>[
        
    ]
];
<?php
/**
 * Created by PhpStorm.
 * User: justi
 * Date: 2016-09-18
 * Time: 20:07
 */

return [
    'database' => [
        'name' => 'tastyrecipes',
        'username' => 'tasty',
        'password' => 'tasty',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ]
    ]
];
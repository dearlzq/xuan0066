<?php
    $config = [
        'host' => '127.0.0.1',
        'dbname' => 'shop',
        'user' => 'root',
        'password' => 'oneinstack'

    ];
    //连接数据库
    $db = new PDO("mysql:host={$config['host']};dbname={$config['dbname']}",$config['user'],$config['password']);

   

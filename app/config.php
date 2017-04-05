<?php
return [
    'app' => [
        'power' => [
            'rewrite' => 0,//伪静态开关
        ],
    ],
    
    'cache' => [
        'common' => [
            'driver'  => 'memcache',
            'options' => [
                'host' => '127.0.0.1',
                'port' => '11211',
            ],
        ],
        
        'other' => [
            'driver'  => 'memcached',
            'options' => [
                'host' => '127.0.0.1',
                'port' => '11211',
            ],
        ],
        'redis' => [
            'driver'  => 'redis',
            'options' => [
                'host'     => '127.0.0.1',
                'port'     => '6379',
                'password' => null,
                'database' => 0,
            ],
        ],
    ],
    
    'database' => [
        'master' => [
            'host'     => '127.0.0.1',
            'port'     => '3306',
            'username' => 'root',
            'password' => 'root',
            'database' => 'kuxin',
        ],
        'slave'  => [
            [
                'host'     => '127.0.0.1',
                'port'     => '3306',
                'username' => 'root',
                'password' => 'root',
                'database' => 'kuxin',
            ],
            [
                'host'     => '127.0.0.1',
                'port'     => '3306',
                'username' => 'root',
                'password' => 'root',
                'database' => 'kuxin',
            ],
        ],
    ],
    
    'storage' => [
        'runtime' => [
            'driver'  => 'file',
            'options' => [
                'path' => PT_ROOT . '/runtime',
            ],
        ],
        'ftp'     => [
            'driver'  => 'ftp',
            'options' => [
                'host'     => '',
                'port'     => '',
                'username' => '',
                'password' => '',
                'path'     => '',
            ],
        ],
        'mongodb' => [
            'driver'  => 'mongodb',
            'options' => [
                'host'     => '',
                'port'     => '',
                'username' => '',
                'password' => '',
                'database' => '',
            ],
        ],
    ],
    
    'coookie' => [
        'prefix'   => 'PTCMS_',
        // cookie 保存时间
        'expire'   => 2592000,
        // cookie 保存路径
        'path'     => '/',
        // cookie 有效域名
        'domain'   => '',
        //  cookie 启用安全传输
        'secure'   => false,
        // httponly设置
        'httponly' => '',
    ],
    
    'session' => [
        'handler' => '',
        'path'    => '',
        'host'    => '',
        'port'    => '',
    ],

];
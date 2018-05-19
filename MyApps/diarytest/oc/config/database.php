<?php defined('SYSPATH') or die('No direct script access.');
return array
(
    'default' => array(
        'type'       => 'mysqli',
        'connection' => array(
            'hostname'   => 'localhost',
            'username'   => 'incredib_testing',
            'password'   => 'Incr254@#$',
            'persistent' => FALSE,
            'database'   => 'incredib_diarytest',
            'variables'  => array('sql_mode'=>'')
            ),
        'table_prefix' => 'oc2_',
        'charset'      => 'utf8',
        'profiling'    => (Kohana::$environment===Kohana::DEVELOPMENT)? TRUE:FALSE,
     ),
);
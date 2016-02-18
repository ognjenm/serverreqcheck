<?php
/**
 * Created by PhpStorm.
 * User: ognjenm
 * Date: 16/02/16
 * Time: 14:47
 */

return [
    'masterview'=> 'layouts.layout.master',
    'contentarea'=> 'content',
    'csssection'=>'pagestyles',
    'javascriptsection'=>'page_level_scripts',
    'authfilter'=>'basicAuth',
    'password' => '1234567',
    'host'=>'localhost',
    'servers'=>[
        ['name' => 'Web Server','port' => 80, 'description' => 'Checking if a web server, such as Apache or Nginx is running.'],
        ['name' => 'SSH','port' => 22, 'description' => 'Checking if a Secure SHell service is running for remote access.'],
        ['name' => 'MySQL','port' => 3306, 'description' => 'Checking if there is a MySQL/Percona database server running.'],
        ['name' => 'ELASTICSEARCH','port' => 9200, 'description' => 'Checking if there is an Elasticsearch server running.'],
        ['name' => 'TIKA server','port' => 9998, 'description' => 'Checking if there is an Tika server running to allow text extraction.'],
        ['name' => 'Beanstalkd','port' => 11300, 'description' => 'Checking if there is a Beanstalkd server running to allow queue management'],
        ['name' => 'Unoconv','port' => 2002, 'description' => 'Checking if there is a Telnet server running to allow (unsecure) remote access.']

    ]
];
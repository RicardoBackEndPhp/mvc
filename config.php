<?php
require 'environment.php';

global $config;
$config = array();
if(ENVIRONMENT == 'development') 
{
    $config['dbname'] = 'teste';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
} 
else 
{
    $config['dbname'] = 'blog';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = 'root';
}
?>
<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 05/12/2018
 * Time: 22:58
 */

require 'environment.php';

global $config;
$config = array();

//Nome do Site
$config['NomeProject'] = 'Inclusão Digital';

//Configuração e conexão com Banco de dados;
global $db;
$db = array();
if (ENVIRONMENT === 'develepment') {
    $db['user'] = 'root';
    $db['password'] = '';
    $db['host'] = 'localhost';
    $db['name'] = 'inclusaodigital';
} else {
    $db['user'] = 'root';
    $db['password'] = '';
    $db['host'] = 'localhost';
    $db['name'] = 'inclusaodigital';
}




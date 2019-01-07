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
define('HASH_ECRYPT', md5(sha1('inclusaodigital2019')));

//Conexão com banco de dados;
define(DB_HOST, 'localhost');
define(DB_USER, 'root');
define(DB_PASSWORD, '');
define(DB_NAME, 'inclusaodigital');
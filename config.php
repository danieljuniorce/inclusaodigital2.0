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


//Conexão ao banco de dados na parte de desenvolvimento e produçõa;
if(ENVIRONMENT == "development"){
    $config['DB_USER'] = 'root';
    $config['DB_PASSWD'] = '';
    $config['DB_DATABASE'] = 'inclusao_digital';
    $config['DB_HOST'] = 'localhost';
}else{
    $config['DB_USER'] = '';
    $config['DB_PASSWD'] = '';
    $config['DB_DATABASE'] = '';
    $config['DB_HOST'] = '';
}
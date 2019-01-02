<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 05/12/2018
 * Time: 23:26
 */

class model
{
    protected $pdo;
    protected $token;
    public function __construct()
    {
        global $config;
        try {
            $this->pdo = new PDO("mysql:host=localhost;port=3306;dbname=inclusaodigital", 'root', '');
            //echo 'Conexão com banco de dados feita com sucesso';
        } catch (PDOException $e) {
            echo 'Falhou a conexão com banco de dados (Error: ' . $e->getMessage() . ')';
        }
    }

}

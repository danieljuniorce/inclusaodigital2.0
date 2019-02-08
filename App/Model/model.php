<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 05/12/2018
 * Time: 23:26
 */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class model
{
    protected $pdo;
    protected $token;
    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=inclusaodigital', 'root', '86318162');
            //echo 'Conexão com banco de dados feita com sucesso';
        } catch (PDOException $e) {
            echo 'Falhou a conexão com banco de dados (Error: ' . $e->getMessage() . ')';
        }
    }

    public function csrf()
    {
        if ($_SESSION['token'] == $this->token) {
            return true;
        } else {
            return false;
        }
    }
}

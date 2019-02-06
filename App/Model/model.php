<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 05/12/2018
 * Time: 23:26
 */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
class model
{
    protected $pdo;
    protected $token;
    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=sql201.byethost.com;port=3306;dbname=b15_22255918_inclusaodigital', 'b15_22255918', '86318162');
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

    public function envioEmail($titulo, $corpo, $email) {
        $mail = new PHPMailer(true); 
        $mail->setLanguage('pt_br', '/optional/path/to/language/directory/');
        try {
            //Server settings
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'portal.inclusaodigital19@gmail.com';                 // SMTP username
            $mail->Password = 'ophxhwsvfycytkos';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587; 
        
            //Recipients
            $mail->setFrom('portal.inclusaodigital19@gmail.com', utf8_decode('Inclusão Digital'));
            $mail->addAddress($email);     // Add a recipient
        
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = utf8_decode($titulo);
            $mail->Body = utf8_decode($corpo);
        
            $mail->send();
        
            echo 'E-mail enviado com sucesso';
        } catch(Exception $e) {
            echo 'Error ao enviar o e-mail: '.$mail->ErrorInfo;
        }

    }

}

<?php
class usuariosController extends controller
{

    public function __construct()
    {

    }

    public function index()
    {
        header('Location: /usuarios/login');
    }

    public function login()
    {
        $this->view('', 'login');
    }
    public function carregar()
    {
        $u = new usuarios();
        if (!empty($_POST['matricula']) && !empty($_POST['senha'])) {
            $matricula = filter_var($_POST['matricula']);
            $senha = filter_var(md5($_POST['senha']));

            $u->entrar($matricula, $senha);
            header('Location: /home');
        } else {
            header('Location: /teste');
        }
    }

    public function sair()
    {
        session_start();
        unset($_SESSION);
        session_destroy();
        header('Location: /usuarios/login');
    }

}

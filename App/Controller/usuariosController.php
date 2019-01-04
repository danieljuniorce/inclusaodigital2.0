<?php
class usuariosController extends controller
{

    public function __construct()
    {
        session_start();
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

            $g = new geral();
            $senha = filter_var($g->hashIntegrate($_POST['senha']));

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

    public function curso()
    {
        $this->template('usuarios', 'curso');
    }

    public function frequencia()
    {
        $this->template('usuarios', 'frequencia');
    }
}

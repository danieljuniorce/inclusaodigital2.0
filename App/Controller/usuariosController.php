<?php

class usuariosController extends controller
{

    public function __construct()
    {
        session_start();
        if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
        } else {

        }
    }

    public function index()
    {
        header('Location: /usuarios/login');
    }

    public function login()
    {
        $u = new usuarios();
        if (!empty($_POST['matricula']) && !empty($_POST['senha'])) {
            $matricula = filter_var($_POST['matricula']);
            $g = new geral();
            $senha = filter_var($g->hashIntegrate($_POST['senha']));
            $token = filter_var($_POST['token']);
                
            $u->entrar($matricula, $senha, $token);
            header('Location: /home');
        } else {

        }

        $this->view('', 'login');
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
        $u = new usuarios();
        $frequencia = $u->frequencia();

        $diasCursos = 25;
        $dados['frequencia'] = (($diasCursos- $frequencia['falta'] ) / $diasCursos) * 100;

        $this->template('usuarios', 'frequencia', $dados);
    }
    public function notas()
    {
        $u = new usuarios();
        $dados['notas'] = $u->notas();
        $this->template('usuarios', 'notas', $dados);
    }
}

<?php
class professorController extends controller
{
    public function __construct()
    {
        session_start();
        if (isset($_SESSION['acesso']) && $_SESSION['acesso'] && $_SESSION['acesso'] == 'adm') {

        } else if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
            header('Location: /home');
        } else {
            header('Location: /usuarios/login');
        }

    }
    
    public function index()
    {
        $this->template('area-professor');
    }

    public function notas()
    {
        $professor = new professor();

        $dados['turmas'] = $professor->selectedTurmas();

        $this->template('notas-participantes', $dados);
    }
}

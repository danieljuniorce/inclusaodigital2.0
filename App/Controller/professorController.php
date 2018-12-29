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

    public function notasparticipantes($turma)
    {
        $professor = new professor();

        $dados['participantes'] = $professor->selectedParticipantePorTurma($turma);
        $dados['turma'] = $turma;

        $this->template('editar-notas', $dados);
    }
    public function editarnotas($matricula)
    {
        $dados = array();
        $professor = new professor();
        $dados['participante'] = $professor->selectedParticipante($matricula);
        $dados['notas'] = $professor->selectdNota($matricula);

        if (isset($matricula) && !empty($matricula)) {
            $moduloUm = filter_var($_POST['modulo_um']);
            $moduloDois = filter_var($_POST['modulo_dois']);
            $moduloTres = filter_var($_POST['modulo_tres']);
            $moduloQuatro = filter_var($_POST['modulo_quatro']);

            if (!empty($_POST['matricula']) && isset($_POST['matricula'])) {
                $professor->updateNota($matricula, $moduloUm, $moduloDois, $moduloTres, $moduloQuatro);
            }
        }
        $this->template('trocas-notas-participantes', $dados);
    }
}

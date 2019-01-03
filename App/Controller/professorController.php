<?php
class professorController extends controller
{
    public function __construct()
    {
        ini_set('default_charset', 'UTF-8');
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
        $this->template('professor', 'area-professor');
    }

    public function notas()
    {
        $professor = new professor();

        $dados['turmas'] = $professor->selectedTurmas();

        $this->template('professor', 'notas-participantes', $dados);
    }

    public function notasparticipantes($turma)
    {
        $professor = new professor();

        $dados['participantes'] = $professor->selectedParticipantePorTurma($turma);
        $dados['turma'] = $turma;

        $this->template('professor', 'editar-notas', $dados);
    }
    public function editarnotas($matricula)
    {
        $dados = array();
        $professor = new professor();
        $dados['participante'] = $professor->selectedParticipante($matricula);
        $dados['notas'] = $professor->selectdNota($matricula);

        if (isset($dados['participante']) && !empty($dados['participante'])) {
            if (isset($_POST['matricula']) && !empty($_POST['matricula'])) {
                $moduloUm = filter_var($_POST['modulo_um']);
                $moduloDois = filter_var($_POST['modulo_dois']);
                $moduloTres = filter_var($_POST['modulo_tres']);
                $moduloQuatro = filter_var($_POST['modulo_quatro']);

                $professor->updateNota($matricula, $moduloUm, $moduloDois, $moduloTres, $moduloQuatro);
                header('Location: /adm/sucesso');
            } else {

            }
        }
        $this->template('professor', 'trocas-notas-participantes', $dados);
    }

    public function questoes()
    {
        $this->template('professor', 'banco-de-questoes');
    }
    
    public function criarquestoes()
    {
        $professor = new professor();
        if (isset($_POST['questao']) && !empty($_POST['questao'])) {
            $modulo = filter_var(utf8_decode($_POST['modulo']));
            $questao = filter_var(utf8_decode($_POST['questao']));
            $primeriaAlt = filter_var(utf8_decode($_POST['primeira_alt']));
            $segundaAlt = filter_var(utf8_decode($_POST['segunda_alt']));
            $terceiraAlt = filter_var(utf8_decode($_POST['terceira_alt']));
            $quartaAlt = filter_var(utf8_decode($_POST['quarta_alt']));

            $professor->criarquestao($modulo, $questao, $primeriaAlt, $segundaAlt, $terceiraAlt, $quartaAlt);

            header('Location: /adm/sucesso');
        }
        $this->template('professor', 'criar-questoes');
    }

    public function frequencia()
    {
        $professor = new professor();

        $dados['turmas'] = $professor->selectedTurmas();

        $this->template('professor', 'frequencia', $dados);
    }
    public function frequenciaturma($turma)
    {
        $professor = new professor();

        $dados['participantes'] = $professor->selectedParticipantePorTurma($turma);
        $participantes = $professor->selectedParticipantePorTurma($turma);
        $dados['turma'] = $turma;

        //Envio para banco de dados a frequencia individual de cada participante
        if (isset($_POST['data_frequencia']) && !empty($_POST['data_frequencia'])) {

            $frequencia = $_POST['frequencia'];

            

        }


        $this->template('professor', 'frequencia-turma', $dados);
    }

}

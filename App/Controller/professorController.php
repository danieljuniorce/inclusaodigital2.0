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
        $_SESSION['name'] = 'Área do Professor';
        $this->template('professor', 'area-professor');
    }

    public function notas()
    {
        $_SESSION['name'] = 'Relações de Notas';
        $professor = new professor();

        $dados['turmas'] = $professor->selectedTurmas();

        $this->template('professor', 'notas-participantes', $dados);
    }

    public function notasparticipantes($turma)
    {
        $_SESSION['name'] = 'Relações de Notas';
        $professor = new professor();

        $dados['participantes'] = $professor->selectedParticipantePorTurma($turma);
        $dados['turma'] = $turma;

        $this->template('professor', 'editar-notas', $dados);
    }
    public function editarnotas($matricula)
    {
        $_SESSION['name'] = 'Editar Notas';
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

                $_SESSION['aviso_sucesso'] = "Notas Atualizadas.";
                header('Location: /adm/sucesso');
            } else {

            }
        }
        $this->template('professor', 'trocas-notas-participantes', $dados);
    }

    public function questoes()
    {
        $_SESSION['name'] = 'Questões';
        $this->template('professor', 'banco-de-questoes');
    }
    
    public function criarquestoes()
    {
        $_SESSION['name'] = 'Criar Questão';
        $professor = new professor();
        if (isset($_POST['questao']) && !empty($_POST['questao'])) {
            $modulo = filter_var(utf8_decode($_POST['modulo']));
            $questao = filter_var(utf8_decode($_POST['questao']));
            $primeriaAlt = filter_var(utf8_decode($_POST['primeira_alt']));
            $segundaAlt = filter_var(utf8_decode($_POST['segunda_alt']));
            $terceiraAlt = filter_var(utf8_decode($_POST['terceira_alt']));
            $quartaAlt = filter_var(utf8_decode($_POST['quarta_alt']));

            $professor->criarquestao($modulo, $questao, $primeriaAlt, $segundaAlt, $terceiraAlt, $quartaAlt);
            $_SESSION['aviso_sucesso'] = "Questão Criada com sucesso.";
            header('Location: /adm/sucesso');
        }
        $this->template('professor', 'criar-questoes');
    }

    public function frequencia()
    {
        $_SESSION['name'] = 'Frequência';
        $professor = new professor();

        $dados['turmas'] = $professor->selectedTurmas();

        $this->template('professor', 'frequencia', $dados);
    }
    public function frequenciaturma($turma)
    {
        $_SESSION['name'] = 'Frequência da Turma';
        $professor = new professor();

        $dados['participantes'] = $professor->selectedParticipantePorTurma($turma);
        $participantes = $professor->selectedParticipantePorTurma($turma);
        $dados['turma'] = $turma;

        //Envio para banco de dados a frequencia individual de cada participante
        if (isset($_POST['data_frequencia']) && !empty($_POST['data_frequencia'])) {
            $dataFrequencia = filter_var($_POST['data_frequencia']);
            $frequencia = $_POST['frequencia'];

            foreach ($participantes as $participante) {
                $professor->frequencia($participante['matricula'], $dataFrequencia, $frequencia[$participante['id']]);
            }
            $_SESSION['aviso_sucesso'] = "Frequência feita com sucesso.";
            $_SESSION['redirecionar'] = '/professor/frequencia';
            header('Location: /adm/sucesso');
        }


        $this->template('professor', 'frequencia-turma', $dados);
    }

}

<?php

class admController extends controller
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
        $dados = array();
        $_SESSION['name'] = 'Administração';

        $adm = new Adm();
        $dados['quantidade'] = $adm->quantidadeParticipante();
        $dados['idades'] = $adm->idadePorPaticipante();

        $this->template('adm', "adm-home", $dados);
    }

    public function cadastrar()
    {
        $dados = array();
        $adm = new adm();
        $_SESSION['name'] = 'Cadastrar Participante';
        if (isset($_POST['nome_completo']) && !empty($_POST['nome_completo'])) {
            //Variaveis com paramentros passado pelo cadastro;
            $nomeCompleto = filter_var($_POST['nome_completo']);
            $dataNascimento = filter_var($_POST['data_nascimento']);
            $estadoParticipante = filter_var($_POST['estado_participante']);
            $rg = filter_var($_POST['rg']);
            $cpf = filter_var($_POST['cpf']);
            $matricula = filter_var($_POST['matricula']);
            $celular = filter_var($_POST['celular']);
            $telefone = filter_var($_POST['telefone']);
            $email = filter_var($_POST['email']);
            $sexo = filter_var($_POST['sexo']);
            $tipo = filter_var($_POST['tipo']);
            $numeroTipo = filter_var($_POST['numero_tipo']);
            $token = filter_var($_POST['token']);
            $g = new geral();
            $senha = filter_var($g->hashIntegrate('senhapadrao'));

            $adm->novoParticipante($nomeCompleto, $dataNascimento, $estadoParticipante, $rg, $cpf, $matricula, $celular, $telefone, $email, $sexo, $senha, $tipo, $numeroTipo, $token);
        } else {
            $dados['aviso'] = "Deu Ruim doido";
        }

        $this->template('adm', "cadastro", $dados);
    }

    //Vizualização sucesso e falhou no cadastramento.
    public function sucesso()
    {
        $_SESSION['name'] = 'Sucesso';
        $this->template('adm', 'cadastro-sucesso');
    }
    public function falhou()
    {
        $_SESSION['name'] = 'Falhou';
        $this->template('adm', 'cadastro-falhou');
    }

    public function estados($estado)
    {
        $adm = new adm();
        $_SESSION['name'] = 'Estado do Participante';
        if ($estado == 'ativo') {
            $dados['estado'] = 'ATIVO';
        } else if ($estado == 'pre_inscricao') {
            $dados['estado'] = 'PRE-INSCRITO';
        } else if ($estado == 'concludente') {
            $dados['estado'] = 'CONCLUDENTE';
        } else if ($estado == 'nao_concludente') {
            $dados['estado'] = 'NÃO CONCLUDENTE';
        } else if ($estado == 'inativo') {
            $dados['estado'] = 'INATIVO';
        }

        if (!empty($estado)) {
            $dados['dados'] = $adm->estado($estado);
        }

        $this->template('adm', 'participantes-ativos', $dados);
    }

    public function partipantes()
    {
        
    }

    public function editar($matricula)
    {
        $dados = array();
        $adm = new adm();
        $_SESSION['name'] = 'Editar';
        //Vizualizar os dados
        if (!empty($matricula)) {
            $dados['dados'] = $adm->vizualizarDados($matricula);
            $dados['turmas'] = $adm->visualizarTurmas();

            if (isset($_POST['matricula']) && !empty($_POST['matricula'])) {

                $matricula = filter_var($_POST['matricula']);
                $nomeCompleto = filter_var($_POST['nome_completo']);
                $dataNascimento = filter_var($_POST['data_nascimento']);
                $rg = filter_var($_POST['rg']);
                $cpf = filter_var($_POST['cpf']);
                $celular = filter_var($_POST['celular']);
                $telefone = filter_var($_POST['telefone']);
                $estadoParticipante = filter_var($_POST['estado_participante']);
                $token = filter_var($_POST['token']);

                $g = new geral();
                $senha = filter_var($g->hashIntegrate($_POST['senha']));

                $email = filter_var($_POST['email']);
                $sexo = filter_var($_POST['sexo']);
                $turma = filter_var($_POST['turma']);

                $adm->atualizarDados($nomeCompleto, $dataNascimento, $estadoParticipante, $rg, $cpf, $celular, $telefone, $email, $senha, $matricula, $sexo, $turma, $token);

                header('Location: /adm/sucesso');
            }
        } else {
            $dados['dados'] = "Nenhum Resultado encontrado";
        }

        $this->template('adm', 'participantes-perfil', $dados);
    }

    public function criarturmas()
    {
        $adm = new adm();
        $dados = array();
        $_SESSION['name'] = 'Criar Turma';
        if (!empty($_POST['inicio']) && !empty($_POST['final']) && !empty($_POST['turma'])) {

            $dataInicio = filter_var($_POST['inicio']);
            $dataFinal = filter_var($_POST['final']);
            $numeroTurma = filter_var($_POST['turma']);
            $dataCriacao = date('Y-m-d');
            $curso = filter_var($_POST['curso']);
            $turno = filter_var($_POST['turno']);
            $horario = filter_var($_POST['horario']);
            $token = filter_var($_POST['token']);

            $adm->criarturmas($dataInicio, $dataFinal, $numeroTurma, $dataCriacao, $curso, $turno, $horario, $token);
            header('Location: /adm/sucesso');
        }

        $this->template('adm', 'criarturmas', $dados);
    }
    public function turmas()
    {
        $_SESSION['name'] = 'Turmas';
        $dados = array();
        $adm = new adm();

        if (!empty($_SESSION['acesso']) && $_SESSION['acesso'] == 'adm') {
            $dados['turmas'] = $adm->turmas();
        } else {
            $dados['turmas'];
        }

        $this->template('adm', 'turmas', $dados);
    }

    public function editarturma($turma)
    {
        $_SESSION['name'] = 'Editar Turmas';
        $dados = array();
        $dados['turmas'] = $turma;
        $adm = new adm();
        if (isset($turma) && !empty($turma)) {
            $dados['turma'] = $adm->visualiazarTurma($turma);

            if (isset($_POST['turma']) && !empty($_POST['turma'])) {
                $dataInicio = filter_var($_POST['inicio']);
                $dataFinal = filter_var($_POST['final']);
                $dataCriacao = filter_var($_POST['criacao']);
                $curso = filter_var($_POST['curso']);
                $turno = filter_var($_POST['turno']);
                $horario = filter_var($_POST['horario']);
                $token = filter_var($_POST['token']);

    
                $adm->editarTurmas($turma, $dataInicio, $dataFinal, $curso, $turno, $horario, $token);
                header('Location: /adm/sucesso');
            }
        } else {
            header('Location: /adm/falhou');
        }
        $this->template('adm', 'editarturmas', $dados);
    }

    public function avisos() {
        $dados = array();
        $adm = new adm();

        if (isset($_POST['envio_email']) && !empty($_POST['envio_email'])) {

            $envioEmail = filter_var($_POST['envio_email']);
            $tituloAviso = filter_var($_POST['titulo_aviso']);
            $corpoAviso = filter_var($_POST['corpo_aviso']);
            $dataAviso = date('Y-m-d');
            $horaAviso = date('h:m:s');

            $adm->criaraviso($envioEmail, $tituloAviso, $corpoAviso, $dataAviso, $horaAviso);
            $_SESSION['aviso_sucesso'] = 'Aviso enviado com Sucesso';

            header('Location: /adm/sucesso');
        }
        $this->template('adm', 'avisos', $dados);
    }
}

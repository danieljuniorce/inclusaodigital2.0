<?php
/**
 * Created by PhpStorm.
 * User: DanielPC02
 * Date: 23/12/2018
 * Time: 11:33
 */

class adm extends model
{

    public function novoParticipante($nomeCompleto, $dataNascimento, $estadoParticipante, $rg, $cpf, $matricula, $celular, $telefone, $email, $sexo)
    {

        if (isset($nomeCompleto) && isset($dataNascimento) && isset($estadoParticipante) && isset($celular) && isset($matricula)) {
            //Inciando a query;
            $sql = "INSERT INTO participantes SET nome_completo = :nomeCompleto, data_nascimento = :dataNascimento, estado_participante = :estadoParticipante, rg = :rg, cpf = :cpf, matricula = :matricula, celular = :celular, telefone = :telefone, email = :email, sexo = :sexo";
            $sql = $this->pdo->prepare($sql);

            //Paramentros;
            $sql->bindParam(':nomeCompleto', $nomeCompleto);
            $sql->bindParam(':dataNascimento', $dataNascimento);
            $sql->bindParam(':estadoParticipante', $estadoParticipante);
            $sql->bindParam(':rg', $rg);
            $sql->bindParam(':cpf', $cpf);
            $sql->bindParam(':matricula', $matricula);
            $sql->bindParam(':celular', $celular);
            $sql->bindParam(':telefone', $telefone);
            $sql->bindParam(':email', $email);
            $sql->bindParam(':sexo', $sexo);

            $sql->execute();

            //Inserção na tabela de Notas;
            $sqlNotas = "INSERT INTO notas SET matricula_participante = '$matricula'";
            $sqlNotas = $this->pdo->query($sqlNotas);

            //Inserção na tabela de Frequencia
            $sqlInsert = "INSERT INTO frequencias SET matricula = '$matricula'";
            $this->pdo->query($sqlInsert);

            //Verificando se foi inserido o participante;
            $sql = "SELECT * FROM participantes WHERE matricula = '$matricula' AND data_nascimento = '$dataNascimento'";
            $sql = $this->pdo->query($sql);
            if ($sql->rowCount() > 0) {
                $_SESSION['aviso_sucesso'] = "Conta de Participante, criada com sucesso.";
                header('Location: /adm/sucesso');
                return true;
            } else {
                
                header('Location: /adm/falhou');
                return false;
            }
        } else {
            header('Location: /adm/falhou');
            return false;
        }
    }
    public function estado($estadoParticipante)
    {
        $sql = "SELECT * FROM participantes WHERE estado_participante = '$estadoParticipante' ORDER BY nome_completo ASC";
        $sql = $this->pdo->query($sql);

        if ($sql->rowCount() > 0) {

            return $sql->fetchAll();
        } else {
            return false;
        }

    }

    public function vizualizarDados($matricula)
    {
        if (!empty($matricula)) {
            $sql = "SELECT * FROM participantes WHERE matricula = '$matricula'";

            $sql = $this->pdo->query($sql);

            if ($sql->rowCount() > 0) {
                return $sql->fetch();
            } else {
                return "Nenhum resultado encontrado";
            }
        }
    }
    public function visualizarTurmas()
    {
        $sqlPart = "SELECT * FROM turmas";
        $sqlPart = $this->pdo->query($sqlPart);

        if ($sqlPart->rowCount() > 0) {
            return $sqlPart->fetchAll();
        } else {
            return false;
        }
        
    }

    public function atualizarDados($nomeCompleto, $dataNascimento, $estadoParticipante, $rg, $cpf, $celular, $telefone, $email, $senha, $matricula, $sexo, $turma)
    {
        $dados = array();
        if (isset($matricula) && !empty($matricula)) {
            $sql = "SELECT * FROM participantes WHERE matricula = '$matricula'";
            $sql = $this->pdo->query($sql);

            if ($sql->rowCount() > 0) {
                $dados = $sql->fetch();

                //Operação ternaria de preenchimento de dados;
                $nomeCompleto = isset($nomeCompleto) && !empty($nomeCompleto) ? $nomeCompleto : $dados['nome_completo'];
                $dataNascimento = isset($dataNascimento) && !empty($dataNascimento) ? $dataNascimento : $dados['data_nascimento'];
                $estadoParticipante = isset($estadoParticipante) && !empty($estadoParticipante) ? $estadoParticipante : $dados['estado_participante'];
                $rg = isset($rg) && !empty($rg) ? $rg : $dados['rg'];
                $cpf = isset($cpf) && !empty($cpf) ? $cpf : $dados['cpf'];
                $celular = isset($celular) && !empty($celular) ? $celular : $dados['celular'];
                $telefone = isset($telefone) && !empty($telefone) ? $telefone : $dados['telefone'];
                $email = isset($email) && !empty($email) ? $email : $dados['email'];
                $senha = isset($senha) && !empty($senha) ? $senha : $dados['senha'];
                $sexo = isset($sexo) && !empty($sexo) ? $sexo : $dados['sexo'];
                $turma = isset($turma) && !empty($turma) ? $turma : $dados['turma'];

                $sqlAtt = "UPDATE participantes SET nome_completo = :nomeCompleto, data_nascimento = :dataNascimento, estado_participante = :estadoParticipante, rg = :rg, cpf = :cpf, celular = :celular, telefone = :telefone, email = :email, senha = :senha, sexo = :sexo, turma = :turma WHERE matricula = :matricula";
                $sqlAtt = $this->pdo->prepare($sqlAtt);

                $sqlAtt->bindParam(':nomeCompleto', $nomeCompleto);
                $sqlAtt->bindParam(':dataNascimento', $dataNascimento);
                $sqlAtt->bindParam(':estadoParticipante', $estadoParticipante);
                $sqlAtt->bindParam(':rg', $rg);
                $sqlAtt->bindParam(':cpf', $cpf);
                $sqlAtt->bindParam(':celular', $celular);
                $sqlAtt->bindParam(':telefone', $telefone);
                $sqlAtt->bindParam(':email', $email);
                $sqlAtt->bindParam(':senha', $senha);
                $sqlAtt->bindParam(':sexo', $sexo);
                $sqlAtt->bindParam(':turma', $turma);
                $sqlAtt->bindParam(':matricula', $matricula);
                $sqlAtt->execute();

                $_SESSION['aviso_sucesso'] = "Dados Atualizado com sucesso.";
                return $dados;

            } else {
                $dados = "Dados não encontrado";
            }
        } else {
            $dados = "Dados não encontrado";
        }
    }

    public function criarturmas($dataInicio, $dataFinal, $numeroTurma, $dataCriacao, $curso, $turno, $horario)
    {
        $sql = "INSERT INTO turmas SET inicio = :inico, final = :fim, turma = :turma, criacao = :criacao, curso = :curso, turno = :turno, horario = :horario";
        $sql = $this->pdo->prepare($sql);

        $sql->bindParam(':inico', $dataInicio);
        $sql->bindParam(':fim', $dataFinal);
        $sql->bindParam(':turma', $numeroTurma);
        $sql->bindParam(':criacao', $dataCriacao);
        $sql->bindParam(':curso', $curso);
        $sql->bindParam(':turno', $turno);
        $sql->bindParam(':horario', $horario);
        $sql->execute();
    }

    public function turmas()
    {
        $sql = "SELECT * FROM turmas";
        $sql = $this->pdo->query($sql);

        if ($sql->rowCount() > 0) {
            return $sql->fetchAll();
        } else {
            return "Deu Ruim";
        }
    }

    public function visualiazarTurma($turma) {
        if (isset($turma) && !empty($turma)) {
            $sql = "SELECT * FROM turmas WHERE turma = '$turma'";
            $sql = $this->pdo->query($sql);
            
            if ($sql->rowCount() > 0) {
                return $sql->fetch();
            } else {
                return false;
            }
        }
    }

    public function editarTurmas($turma, $dataInicio, $dataFinal, $curso, $turno, $horario)
    {
        if (isset($turma) && !empty($turma)) {

                $dataInicio = isset($dataInicio) && !empty($dataInicio) ? $dataInicio : $dados['inicio'];
                $dataFinal = isset($dataFinal) && !empty($dataFinal) ? $dataFinal : $dados['final'];
                $dataCriacao = isset($dataCriacao) && !empty($dataCriacao) ? $dataCriacao : $dados['criacao'];
                $curso = isset($curso) && !empty($curso) ? $curso : $dados['curso'];
                $turno = isset($turno) && !empty($turno) ? $turno : $dados['turno'];
                $horario = isset($horario) && !empty($horario) ? $horario : $dados['horario'];
    
                $sqlAtt = "UPDATE turmas SET inicio = '$dataInicio', final = '$dataFinal', curso = '$curso', turno = '$turno', horario = '$horario' WHERE turma = '$turma'";
                $sqlAtt = $this->pdo->query($sqlAtt);

                $_SESSION['aviso_sucesso'] = "Turma Atualizada com Sucesso";
        } else {
            $dados = "Turma não Encontrada";
        }
    }
}

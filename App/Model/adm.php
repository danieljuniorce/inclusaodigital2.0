<?php
/**
 * Created by PhpStorm.
 * User: DanielPC02
 * Date: 23/12/2018
 * Time: 11:33
 */

class adm extends model
{

    public function novoParticipante($nomeCompleto, $dataNascimento, $tipoCurso, $estadoParticipante, $rg, $cpf, $matricula, $turno, $horario, $celular, $telefone, $email, $sexo)
    {

        if (isset($nomeCompleto) && isset($dataNascimento) && isset($tipoCurso) && isset($estadoParticipante) && isset($celular) && isset($matricula)) {
            //Inciando a query;
            $sql = "INSERT INTO participantes SET nome_completo = '$nomeCompleto', data_nascimento = '$dataNascimento', tipo_curso = '$tipoCurso', estado_participante = '$estadoParticipante', rg = '$rg', cpf = '$cpf', matricula = '$matricula', turno = '$turno', horario = '$horario', celular = '$celular', telefone = '$telefone', email = '$email', sexo = '$sexo'";
            $sql = $this->pdo->query($sql);

            //Verificando se foi inserido o participante;
            $sql = "SELECT * FROM participantes WHERE matricula = '$matricula' AND data_nascimento = '$dataNascimento'";
            $sql = $this->pdo->query($sql);
            if ($sql->rowCount() > 0) {
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

    public function atualizarDados($nomeCompleto, $dataNascimento, $tipoCurso, $estadoParticipante, $rg, $cpf, $turno, $horario, $celular, $telefone, $email, $senha, $matricula, $sexo)
    {
        $dados = array();
        if (isset($matricula) && !empty($matricula)) {
            $sql = "SELECT * FROM participantes WHERE matricula = '$matricula'";
            $sql = $this->pdo->query($sql);

            if ($sql->rowCount() > 0) {
                $dados = $sql->fetch();

                $nomeCompleto = isset($nomeCompleto) && !empty($nomeCompleto) ? $nomeCompleto : $dados['nome_completo'];
                $dataNascimento = isset($dataNascimento) && !empty($dataNascimento) ? $dataNascimento : $dados['data_nascimento'];
                $tipoCurso = isset($tipoCurso) && !empty($tipoCurso) ? $tipoCurso : $dados['tipo_curso'];
                $estadoParticipante = isset($estadoParticipante) && !empty($estadoParticipante) ? $estadoParticipante : $dados['estado_participante'];
                $rg = isset($rg) && !empty($rg) ? $rg : $dados['rg'];
                $cpf = isset($cpf) && !empty($cpf) ? $cpf : $dados['cpf'];
                $turno = isset($turno) && !empty($turno) ? $turno : $dados['turno'];
                $horario = isset($horario) && !empty($horario) ? $horario : $dados['horario'];
                $celular = isset($celular) && !empty($celular) ? $celular : $dados['celular'];
                $telefone = isset($telefone) && !empty($telefone) ? $telefone : $dados['telefone'];
                $email = isset($email) && !empty($email) ? $email : $dados['email'];
                $senha = isset($senha) && !empty($senha) ? $senha : $dados['senha'];
                $sexo = isset($sexo) && !empty($sexo) ? $sexo : $dados['sexo'];

                $sqlAtt = "UPDATE participantes SET nome_completo = '$nomeCompleto', data_nascimento = '$dataNascimento', tipo_curso = '$tipoCurso', estado_participante = '$estadoParticipante', rg = '$rg', cpf = '$cpf', turno = '$turno', horario = '$horario', celular = '$celular', telefone = '$telefone', email = '$email', senha = '$senha', sexo = '$sexo' WHERE matricula = '$matricula'";
                $sqlAtt = $this->pdo->query($sqlAtt);

            } else {
                $dados = "Dados não encontrado";
            }
        } else {
            $dados = "Dados não encontrado";
        }
    }

    public function criarturmas($dataInicio, $dataFinal, $numeroTurma, $dataCriacao)
    {
        $sql = "INSERT INTO turmas SET inicio = :inico, final = :fim, turma = :turma, criacao = :criacao";
        $sql = $this->pdo->prepare($sql);

        $sql->bindParam(':inico', $dataInicio);
        $sql->bindParam(':fim', $dataFinal);
        $sql->bindParam(':turma', $numeroTurma);
        $sql->bindParam(':criacao', $dataCriacao);
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
}

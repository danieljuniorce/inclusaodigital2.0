<?php
class professor extends model
{
    public function selectedParticipante($matricula)
    {
        $sql = "SELECT * FROM participantes WHERE matricula = '$matricula'";
        $sql = $this->pdo->query($sql);

        if ($sql->rowCount() > 0) {
            return $sql->fetch();
        } else {
            return false;
        }
    }

    public function selectedTurmas()
    {
        $sql = "SELECT * FROM turmas ORDER BY turma ASC";
        $sql = $this->pdo->query($sql);

        if ($sql->rowCount() > 0) {
            return $sql->fetchAll();
        } else {
            return false;
        }
    }
    public function selectedParticipantePorTurma($turma)
    {
        $sql = "SELECT * FROM participantes WHERE turma = '$turma' ORDER BY nome_completo ASC";
        $sql = $this->pdo->query($sql);

        if ($sql->rowCount() > 0) {
            return $sql->fetchAll();
        } else {
            return false;
        }
    }

    public function selectdNota($matriculaParticipante)
    {
        $sql = "SELECT * FROM notas WHERE matricula_participante = '$matriculaParticipante'";
        $sql = $this->pdo->query($sql);

        if ($sql->rowCount() > 0) {
            return $sql->fetch();
        }
    }
    public function updateNota($matricula, $moduloUm, $moduloDois, $moduloTres, $moduloQuatro)
    {
        $sql = "SELECT * FROM notas WHERE matricula_participante = '$matricula'";
        $sql = $this->pdo->query($sql);

        if ($sql->rowCount() > 0) {

            $dados = $sql->fetch();

            $moduloUm = isset($moduloUm) && !empty($moduloUm) ? $moduloUm : $dados['modulo_um'];
            $moduloDois = isset($moduloDois) && !empty($moduloDois) ? $moduloDois : $dados['modulo_dois'];
            $moduloTres = isset($moduloTres) && !empty($moduloTres) ? $moduloTres : $dados['modulo_tres'];
            $moduloQuatro = isset($moduloQuatro) && !empty($moduloQuatro) ? $moduloQuatro : $dados['modulo_quatro'];

            $sqlAtt = "UPDATE notas SET modulo_um = '$moduloUm', modulo_dois = '$moduloDois', modulo_tres = '$moduloTres', modulo_quatro = '$moduloQuatro' WHERE matricula_participante = '$matricula'";
            $this->pdo->query($sqlAtt);
        }
    }

    public function criarquestao($modulo, $questao, $primeiraAlt, $segundaAlt, $terceiraAlt, $quartaAlt)
    {
        $sql = "INSERT INTO banco_de_questao SET modulo = '$modulo', questao = '$questao', primeira_alt = '$primeiraAlt', segunda_alt = '$segundaAlt', terceira_alt = '$terceiraAlt', quarta_alt = '$quartaAlt'";
        $sql = $this->pdo->query($sql);
    }

    public function frequencia($matricula, $dataFrequencia, $frequencia)
    {

        if ($frequencia == 'falta') {

            $sqlSelected = "SELECT * FROM frequencias WHERE matricula = '$matricula'";
            $sqlSelected = $this->pdo->query($sqlSelected);

            if ($sqlSelected->rowCount() > 0) {
                $sqlUpdate = "UPDATE frequencias SET falta = '$frequencia', data_frequencia = '$dataFrequencia' WHERE matricula = '$matricula'";
            } else {
                $sqlInsert = "INSERT INTO frequencias SET matricula = '$matricula'";
                $this->pdo->query($sqlInsert);

                $sqlSelected = "SELECT * FROM frequencias WHERE matricula = '$matricula'";
                $sqlSelected = $this->pdo->query($sqlSelected);
            }

        } else if ($frequencia == 'presenca') {
            
            $sqlSelected = "SELECT * FROM frequencias WHERE matricula = '$matricula'";
            $sqlSelected = $this->pdo->query($sqlSelected);

            if ($sqlSelected->rowCount() > 0) {
                $sqlUpdate = "UPDATE frequencias SET presenca = '$frequencia', data_frequencia = '$dataFrequencia' WHERE matricula = '$matricula'";
            } else {
                $sqlInsert = "INSERT INTO frequencias SET matricula = '$matricula'";
                $this->pdo->query($sqlInsert);

                $sqlSelected = "SELECT * FROM frequencias WHERE matricula = '$matricula'";
                $sqlSelected = $this->pdo->query($sqlSelected);
            }
        }

    }
}

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
}

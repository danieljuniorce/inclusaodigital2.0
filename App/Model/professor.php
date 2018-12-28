<?php
class professor extends model
{

    public function selectedTurmas()
    {
        $sql = "SELECT * FROM turmas";
        $sql = $this->pdo->query($sql);

        if ($sql->rowCount() > 0) {
            return $sql->fetchAll();
        } else {
            return false;
        }
    }
    public function selectedParticipantePorTurma($turma)
    {
        $sql = "SELECT * FROM participantes WHERE turma = '$turma'";
        $sql = $this->pdo->query($sql);

        if ($sql->rowCount > 0) {
            return $sql->fetchAll();
        } else {
            return false;
        }
    }

    public function selectdAndUpdateNota($matriculaParticipante)
    {
        $sql = "SELECT * FROM notas WHERE matricula = '$matriculaParticipante";
        $sql = $this->pdo->query($sql);

        if ($sql->rowCount() > 0) {
            return $sql->fetch();
        }
    }
}

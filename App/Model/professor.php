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
        
    }
}

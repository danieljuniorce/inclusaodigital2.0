<?php
class usuarios extends model
{

    public function entrar($matricula, $senha, $token)
    {
        if (!empty($matricula) and !empty($senha)) {
            $this->token = $token;
            if ($this->csrf() != false) {

                $sql = "SELECT * FROM participantes WHERE matricula = :matricula AND senha = :senha";
                $sql = $this->pdo->prepare($sql);

                $sql->bindParam(':matricula', $matricula);
                $sql->bindParam(':senha', $senha);
                $sql->execute();

                if ($sql->rowCount() > 0) {
                    $user = $sql->fetch();
                    session_start();

                    $_SESSION['id'] = $user['id'];
                    $_SESSION['matricula'] = $user['matricula'];
                    $_SESSION['nome_completo'] = $user['nome_completo'];
                    $_SESSION['acesso'] = $user['acesso'];
                    $_SESSION['sexo'] = $user['sexo'];
                    unset($_SESSION['errorLogin']);
                    return $user;
                    header('Location: /home');
                } else {
                    $_SESSION['errorLogin'] = 'Senha ou Matricula, foram digitadas incorretamente.';
                }

            } else {
                return 'Atualize sua página para sua segurança';
            }
        } else {
            return 'Deu ruim 2.0';
        }
    }
    public function selecionar()
    {

        $sql = "SELECT * FROM participantes WHERE matricula = :matricula";
        $sql = $this->pdo->prepare($sql);

        $sql->bindParam(':matricula', $_SESSION['matricula']);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            return $sql->fetch();
        } else {
            return false;
        }
    }

    public function frequencia() {
        $sql = "SELECT * FROM frequencias WHERE matricula = :matricula";
        $sql = $this->pdo->prepare($sql);

        $sql->bindParam(':matricula', $_SESSION['matricula']);
        $sql->execute();

        return $sql->fetch();
    }

    public function notas()
    {
        $sql = "SELECT * FROM notas WHERE matricula_participante = :matricula";
        $sql = $this->pdo->prepare($sql);

        $sql->bindParam(':matricula', $_SESSION['matricula']);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            return $sql->fetch();
        } else {
            header('Location: /home');
        }
        
    }
}

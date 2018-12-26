<?php
    class usuarios extends model
    {

        public function entrar($matricula, $senha){

            if(!empty($matricula) AND !empty($senha))
            {
                $sql = "SELECT * FROM participantes WHERE matricula = :matricula AND senha = :senha";
                $sql = $this->pdo->prepare($sql);

                $sql->bindParam(':matricula', $matricula);
                $sql->bindParam(':senha', $senha);
                $sql->execute();

                if ($sql->rowCount() > 0)
                {
                    $user = $sql->fetch();
                    session_start();

                    $_SESSION['id'] = $user['id'];
                    $_SESSION['matricula'] = $user['matricula'];
                    $_SESSION['nome_completo'] = $user['nome_completo'];
                    $_SESSION['acesso'] = $user['acesso'];
                    header('Location: /home');

                    return $user;
                }
            }else{
                return 'Deu ruim 2.0';
            }

        }
        public function selecionar(){

            $sql = "SELECT * FROM participantes WHERE matricula = :matricula";
            $sql = $this->pdo->prepare($sql);

            $sql->bindParam(':matricula', $_SESSION['matricula']);
            $sql->execute();

            if($sql->rowCount() > 0){
                return $sql->fetch();
            }else{
                return false;
            }
        }


    }
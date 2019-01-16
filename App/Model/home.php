<?php
class home extends model
{

    public function selectdAvisos()
    {
        $sql = "SELECT * FROM avisos order by id DESC limit 3";
        $sql = $this->pdo->query($sql);

        if ($sql->rowCount() > 0) {
            return $sql->fetchAll();
        } else {
            return '';
        }
    }

}
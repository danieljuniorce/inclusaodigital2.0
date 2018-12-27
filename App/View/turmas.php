<?php 

function dateHora($data) 
{
    return  date("d/m/Y", strtotime($data)); //exibe no formato d/m/a
}

?>

<div>
    <h4 class="center-align"> <i class="material-icons">reorder</i> Turmas</h4>
    <hr>
</div>
<br>

<div class="container">
    <div class="row">
        <div>
            <ul class="collapsible popout" data-collapsible="accordion">
                <?php
                        foreach($turmas as $turma){
                            echo '<li>';
                                echo '<div class="collapsible-header"><i class="material-icons">face</i>Turma Nº: '.$turma['turma'].' - Criada em '.dateHora($turma['criacao']).'</div>';
                                echo '<div class="collapsible-body">
                                        <h5 class="center-align">Dados da Turma</h5>
                                        <p>Data de Inicio: '.dateHora($turma['inicio']).'</p>
                                        <p>Data de Encerramento: '.dateHora($turma['final']).'</p>
                                        <p>Curso: '.$turma['curso'].'</p>
                                        <p>Turno da Turma: '.$turma['turno'].'</p>
                                        <a class="btn orange" href="/adm/editarturma/'.$turma['turma'].'">Editar</a>
                                    </div>';
                            echo '</li>';
                        }
                ?>
            </ul>
        </div>
    </div>
</div>
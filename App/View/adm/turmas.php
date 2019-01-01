<?php 

function dateHora($data) 
{
    return  date("d/m/Y", strtotime($data)); //exibe no formato d/m/a
}

?>

<div class="orange">
    <br>
    <h4 class="center-align color-white"><span class="text-white">Turmas</span></h4>
    <br>
</div>
<br>

<div class="container">
    <div class="row">
        <div>
            <ul class="collapsible popout" data-collapsible="accordion">
                <?php
                        foreach($turmas as $turma){
                            //Horario
                            if ($turma['horario'] == 'primeiro_horario') {
                                $horario = '08:00 as 09:30';
                            } else if($turma['horario'] == 'segundo_horario'){
                                $horario = '09:30 as 11:00';
                            } else if($turma['horario'] == 'terceiro_horario'){
                                $horario = '13:00 as 14:30';
                            } else if($turma['horario'] == 'quarto_horario') {
                                $horario = '14:30 as 16:00';
                            } else  {
                                $horario = 'Sem horario';
                            }

                            //Curso
                            if ($turma['curso'] == 'informatica_basica') {
                                $curso = 'Informática Básica';
                            } else if($turma['curso'] == 'excel_avancado'){
                                $curso = 'Excel Avançado';
                            } else if($turma['curso'] == 'excel_intensivo') {
                                $curso = 'Excel Intensivo';
                            } else {
                                $curso = 'Sem Curso';
                            }

                            //Turno
                            if ($turma['turno'] == 'manha') {
                                $turno = 'Manhã';
                            } else if($turma['turno'] == 'tarde'){
                                $turno = 'Tarde';
                            } else {
                                $turno = 'Sem turno';
                            }

                            echo '<li>';
                                echo '<div class="collapsible-header"><i class="material-icons">face</i>Turma Nº: '.$turma['turma'].' - Criada em '.dateHora($turma['criacao']).'</div>';
                                echo '<div class="collapsible-body">
                                        <h5 class="center-align">Dados da Turma</h5>
                                        <p>Data de Inicio: '.dateHora($turma['inicio']).'</p>
                                        <p>Data de Encerramento: '.dateHora($turma['final']).'</p>
                                        <p>Curso: '.$curso.'</p>
                                        <p>Turno da Turma: '.$turno.' - Horário: '.$horario.'</p>
                                        <a class="btn orange" href="/adm/editarturma/'.$turma['turma'].'">Editar</a>
                                    </div>';
                            echo '</li>';
                        }
                ?>
            </ul>
        </div>
    </div>
</div>
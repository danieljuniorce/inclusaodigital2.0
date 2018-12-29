<div class="orange">
    <br>
    <h5 class="center-align color-white"><span class="text-white">RELAÇÕES DE NOTAS</span></h5>
    <br>
</div>

<ul class="collapsible" data-collapsible="accordion">
    <?php
    foreach ($turmas as $turmas) {
        if ($turmas['turno'] == 'manha') {
            $turno = 'Manhã';
        } else if ($turmas['turno'] == 'tarde') {
            $turno = 'Tarde';
        } else {
            $turno = 'Nenhum Turno Selecionado';
        }
        if ($turmas['horario'] == 'primeiro_horario') {
            $horario = '08:00 as 09:30';
          } else if ($turmas['horario'] == 'segundo_horario') {
            $horario = "09:30 as 11:00";
          } else if ($turmas['horario'] == 'terceiro_horario') {
            $horario = "13:00 as 14:30";
          } else if ($turmas['horario'] == 'quarto_horario') {
            $horario = "14:30 as 16:00";
          } else {
            $horario = "Sem Nenhum horário";
          }

        echo '<li>';
        echo '<div class="collapsible-header"><i class="material-icons">place</i>Turma: '.$turmas['turma'].' - Turno: '.$turno.' / Horário: '.$horario.'</div>';
        echo '<div class="collapsible-body">
                <p class="center-align">VISUALIZAR PARTICIPANTES - ALTERAÇÕES DE NOTAS</p>
                <p class="center-align"><a href="/professor/notasparticipantes/'.$turmas['turma'].'" class="btn orange">IR PARA NOTAS DOS PARTICIPANTES</a></p>
            </div>';
        echo '</li>';
    }
    ?>
  </ul>
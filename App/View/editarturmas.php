<?php
  $idTurma = date('Y') . rand(1, 200);

?>

<form method="POST">
    <div class="orange">
        <br>
        <h4 class="center-align color-white"><span class="text-white">Cadastramento de Turmas Nº: <?php echo $turmas; ?></span></h4>
        <br>
    </div>
    <input type="hidden" value="<?php echo $turmas;?>" name="turma">
    <hr>
    <br>
    <div class="row container">
        <div class="col s12 m6 l6">
            <div class="input-field s12">
                <p class="">Inicio da Turma</p>
                <input type="date" name="inicio" id="inicio" class="center-align" value="<?php echo $turma['inicio'] ?>">
            </div>
        </div>
        <div class="col s12 m6 l6">
        <div class="input-field s12">
                <p class="">Encerramento da Turma</p>
                <input type="date" name="final" id="final" class="center-align" value="<?php echo $turma['final'] ?>">
            </div>
        </div>
    </div>
    <div class="row container">
        <div class="col s12 m6 l6">
            <div class="input-field s12">
                <select name="curso" id="curso">
                  <?php 
                    if ($turma['curso'] == 'informatica_basica') {
                      echo '<option value="informatica_basica" selected>Informática Básica</option>';
                      echo '<option value="excel_avancado">Excel Avançado</option>';
                      echo '<option value="excel_intensivo">Excel Intensivo</option>';
                    } else if ($turma['curso'] == 'excel_avancado') {
                      echo '<option value="informatica_basica">Informática Básica</option>';
                      echo '<option value="excel_avancado" selected>Excel Avançado</option>';
                      echo '<option value="excel_intensivo">Excel Intensivo</option>';
                    } else if ($turma['curso'] == 'excel_intensivo') {
                      echo '<option value="informatica_basica">Informática Básica</option>';
                      echo '<option value="excel_avancado">Excel Avançado</option>';
                      echo '<option value="excel_intensivo" selected>Excel Intensivo</option>';
                    } else {
                      echo '<option value="" selected disabled>Seleciona o Curso</option>';
                      echo '<option value="informatica_basica">Informática Básica</option>';
                      echo '<option value="excel_avancado">Excel Avançado</option>';
                      echo '<option value="excel_intensivo">Excel Intensivo</option>';
                    }
                  ?>
                </select>
                <label for="curso">Curso</label>
            </div>
        </div>
        <div class="col s12 m6 l6">
            <div class="input-field s12">
                <select name="turno" id="turno">
                    <?php 
                      if ($turma['turno'] == 'manha') {
                        echo '<option value="manha" selected>Manhã</option>';
                        echo '<option value="tarde">Tarde</option>';
                      } else if ($turma['turno'] == 'tarde') {
                        echo '<option value="manha">Manhã</option>';
                        echo '<option value="tarde" selected>Tarde</option>';
                      } else {
                        echo '<option value="" selected disabled>Selecione o Horario</option>';
                        echo '<option value="manha">Manhã</option>';
                        echo '<option value="tarde">Tarde</option>';
                      }
                    ?>
                </select>
                <label for="curso">Turno</label>
            </div>
        </div>
    </div>
    <div class="row container">
        <div class="col s12 m6 l6">
            <div class="input-field s12">
                <select name="horario" id="horario">
                      <?php 
                        if ($turma['horario'] == 'primeiro_horario') {
                          echo '<option value="primeiro_horario" selected>08:00 as 09:30</option>';
                          echo '<option value="segundo_horario">09:30 as 11:00</option>';
                          echo '<option value="terceiro_horario">13:00 as 14:30</option>';
                          echo '<option value="quarto_horario">14:30 as 16:00</option>';
                        } else if ($turma['horario'] == 'segundo_horario') {
                          echo '<option value="primeiro_horario">08:00 as 09:30</option>';
                          echo '<option value="segundo_horario" selected>09:30 as 11:00</option>';
                          echo '<option value="terceiro_horario">13:00 as 14:30</option>';
                          echo '<option value="quarto_horario">14:30 as 16:00</option>';
                        } else if ($turma['horario'] == 'terceiro_horario') {
                          echo '<option value="primeiro_horario">08:00 as 09:30</option>';
                          echo '<option value="segundo_horario">09:30 as 11:00</option>';
                          echo '<option value="terceiro_horario" selected>13:00 as 14:30</option>';
                          echo '<option value="quarto_horario">14:30 as 16:00</option>';
                        } else if ($turma['horario'] == 'quarto_horario') {
                          echo '<option value="primeiro_horario">08:00 as 09:30</option>';
                          echo '<option value="segundo_horario">09:30 as 11:00</option>';
                          echo '<option value="terceiro_horario">13:00 as 14:30</option>';
                          echo '<option value="quarto_horario" selected>14:30 as 16:00</option>';
                        } else {
                          echo '<option value="" disabled selected>Selecione o Horário</option>';
                          echo '<option value="primeiro_horario">08:00 as 09:30</option>';
                          echo '<option value="segundo_horario">09:30 as 11:00</option>';
                          echo '<option value="terceiro_horario">13:00 as 14:30</option>';
                          echo '<option value="quarto_horario">14:30 as 16:00</option>';
                        }
                      ?>
                </select>
                <label for="curso">Horário</label>
            </div>
        </div>
        <div class="col s12 m6 l6">
            <div class="input-field s12">
        </div>
    </div>
    <div class="row container">
        <div class="col s12 m6 l6">
        </div>
        <div class="col s12 m6 l6">
            <div class="input-field s12">
                <input type="submit" value="Atualizar Turma" id="final" class="right btn orange z-depth-0">
            </div>
        </div>
    </div>
</form>

<?php
$idTurma = date('Y') . rand(1, 200);
?>

<form method="POST">
    <div class="orange">
        <br>
        <h5 class="center-align color-white"><span class="text-white">Cadastramento de Turmas Nº: <?php echo $idTurma; ?></span></h5>
    <br>
    </div>
    <input class="btn z-depth-0" value="<?php echo $idTurma; ?>" type="hidden" id="turma" name="turma"/>
    <br>
    <div class="row container">
        <div class="col s12 m6 l6">
            <div class="input-field s12">
                <p class="">Inicio da Turma</p>
                <input type="date" name="inicio" id="inicio" class="center-align">
            </div>
        </div>
        <div class="col s12 m6 l6">
        <div class="input-field s12">
                <p class="">Encerramento da Turma</p>
                <input type="date" name="final" id="final" class="center-align">
            </div>
        </div>
    </div>
    <div class="row container">
        <div class="col s12 m6 l6">
            <div class="input-field s12">
                <select name="curso" id="curso">
                    <option value="" disabled selected>Selecione o Curso</option>
                    <option value="informatica_basica">Informática Básica</option>
                    <option value="excel_avancado">Excel Avançado</option>
                    <option value="excel_intensivo">Excel Intensivo</option>
                </select>
                <label for="curso">Curso</label>
            </div>
        </div>
        <div class="col s12 m6 l6">
            <div class="input-field s12">
                <select name="turno" id="turno">
                    <option value="" disabled selected>Selecione o turno</option>
                    <option value="manha">Manhã</option>
                    <option value="tarde">Tarde</option>
                </select>
                <label for="curso">Turno</label>
            </div>
        </div>
    </div>
    <div class="row container">
        <div class="col s12 m6 l6">
            <div class="input-field s12">
                <select name="horario" id="horario">
                    <option value="" disabled selected>Selecione o Curso</option>
                    <option value="primeiro_horario">08:00 as 09:30</option>
                    <option value="segundo_horario">09:30 as 11:00</option>
                    <option value="terceiro_horario">13:00 as 14:30</option>
                    <option value="quarto_horario">14:30 as 16:00</option>
                </select>
                <label for="horario">Horário</label>
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
                <input type="submit" value="Cadastrar Turma" id="final" class="right btn orange z-depth-0">
            </div>
        </div>
    </div>
</form>

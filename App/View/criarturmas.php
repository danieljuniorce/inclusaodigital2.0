<?php
$idTurma = date('Y') . rand(1, 200);
?>

<form method="POST">
    <h4 class="center-align">Cadastramento de Turmas Nº: <?php echo $idTurma; ?></h4>
    <input class="btn z-depth-0" value="<?php echo $idTurma; ?>" type="hidden" id="turma" name="turma"/>
    <hr>
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
        </div>
        <div class="col s12 m6 l6">
            <div class="input-field s12">
                <input type="submit" value="Cadastrar Turma" id="final" class="right btn orange z-depth-0">
            </div>
        </div>
    </div>
</form>

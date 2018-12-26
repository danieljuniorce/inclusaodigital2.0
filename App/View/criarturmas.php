<?php 
    $idTurma = date('Y').rand();
?>

<form method="POST">
    <h4 class="center-align">Cadastramento de Turmas Nº: <?php echo $idTurma;?></h4>
    <input class="btn z-depth-0" value="<?php echo $idTurma;?>" type="hidden" id="turma" name="turma"/>
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
        </div>
        <div class="col s12 m6 l6">
            <div class="input-field s12">
                <input type="submit" value="Cadastrar Turma" id="final" class="right btn orange z-depth-0">
            </div>
        </div>
    </div>
</form>

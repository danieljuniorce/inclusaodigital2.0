<div class="orange">
    <br>
    <h5 class="center-align color-white">Participante: <?php echo $participante['nome_completo']?>, com a Matricula: <?php echo $participante['matricula']?></h5>
    <br>
</div>

<br><br>
<form action="" method="POST">      
    <input type="hidden" name="matricula" value="<?php echo $participante['matricula']?>">
    <h5 class="center-align">MÓDULOS - CURSO DE INFORMÁTICA BÁSICA</h5>
    <br>
    <div class="row">
        <div class="col s12 m3 l3">
            <div class="input-field">
                <input type="number" class="center-align" name="modulo_um" id="modulo_um" placeholder="<?php echo $notas['modulo_um'];?>">
                <label for="modulo_um">MODULO 1</label>
            </div>
        </div>
        <div class="col s12 m3 l3">
            <div class="input-field">
                <input type="number" class="center-align" name="modulo_dois" id="modulo_dois" placeholder="<?php echo $notas['modulo_dois'];?>">
                <label for="modulo_dois">MODULO 2</label>
            </div>
        </div>
        <div class="col s12 m3 l3">
            <div class="input-field">
                <input type="number" class="center-align" name="modulo_tres" id="modulo_tres" placeholder="<?php echo $notas['modulo_tres'];?>">
                <label for="modulo_tres">MODULO 3</label>
            </div>
        </div>
        <div class="col s12 m3 l3">
            <div class="input-field">
                <input type="number" class="center-align" name="modulo_quatro" id="modulo_quatro" placeholder="<?php echo $notas['modulo_quatro'];?>">
                <label for="modulo_quatro">MODULO 4</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m4 l4">
        </div>
        <div class="col s12 m2 l2">
        </div>
        <div class="col s12 m3 l3">
        </div>
        <div class="col s12 m3 l3">
            <input class="btn orange" value="Atualizar Nota" type="submit">
        </div>
    </div>
</form>
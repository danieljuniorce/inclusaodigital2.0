<div class="orange">
    <br>
    <h5 class="center-align color-white">NOTAS</h5>
    <br>
</div>
<br>
<div class="container ">
    <div class="container">
        <div>
            <div class="card-panel center-align orange">
                <h5 class="btn black z-depth-0 darken-4">Modulo 1 / NOTA:  <?php echo $notas['modulo_um']; ?></h5>
            </div>
        </div>
    </div>
    <div class="container">
        <div>
            <div class="card-panel center-align orange">
                <h5 class="btn black z-depth-0 ">Modulo 2 / NOTA: <?php echo $notas['modulo_dois']; ?></h5>
            </div>
        </div>
    </div>
    <div class="container">
        <div>
            <div class="card-panel center-align orange">
                <h5 class="btn black z-depth-0 darken-4">Modulo 3 / NOTA:  <?php echo $notas['modulo_tres']; ?></h5>
            </div>
        </div>
    </div>
    <div class="container">
        <div>
            <div class="card-panel center-align orange">
                <h5 class="btn black z-depth-0 darken-4">Modulo 4 / NOTA: <?php echo $notas['modulo_quatro']; ?></h5>
            </div>
        </div>
    </div>
    <div class="container">
        <div>
            <div class="card-panel center-align orange">
                <h5 class="btn black z-depth-0 darken-4">NOTA GERAL: <?php echo ($notas['modulo_quatro'] + $notas['modulo_tres'] + $notas['modulo_dois'] + $notas['modulo_um']) / 4; ?></h5>
            </div>
        </div>
    </div>
</div>

<div class="right">
   <p style="color: red;">*Nota Geral para aprovação é 6,5.</p>
</div>
<br>
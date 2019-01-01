<div class="orange">
    <br>
        <div>
            <h5 class="center-align color-white"><span class="text-white">Lista de Frequência da Turma <?php echo $turma; ?></span></h5>
        </div>
    <br>
</div>
<form method="POST">
    <div class="container">
        <div class="row">
            <div class="col m8 l9">
            </div>
            <div class="col s12 m4 l4 right">
                <label class="data_frequencia">Data da Frequência</label>
                <input type="date" name="data_frequencia" id="data_frequencia" class="center-align">
            </div>
        </div>
        <hr>
        <?php
        foreach ($participantes as $participante) {
            echo '<div class="row card-panel">';
            echo '<div class="col s6 m6 l6">';
            echo '<p>Participante: ' . $participante['nome_completo'] . '</p>';
            echo '</div>';
            echo '<div class="col s3 m3 l3">';
            echo '<p>
                                    <input name="group1" type="checkbox" id="presenca[' . $participante['id'] . ']" name="presenca[' . $participante['id'] . ']" class="filled-in" value="1"/>
                                    <label for="presenca[' . $participante['id'] . ']">Presente</label>
                                </p>';
            echo '</div>';
            echo '<div class="col s3 m3 l3">';
            echo '<p>
                                <input name="group1" type="checkbox" id="falta[' . $participante['id'] . ']" name="falta[' . $participante['id'] . ']" class="filled-in" value="1"/>
                                <label for="falta[' . $participante['id'] . ']">Faltou</label>
                            </p>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    <input type="submit" value="Fazer Frequência" class="btn orange right">
    <br>
    </div>
</form>

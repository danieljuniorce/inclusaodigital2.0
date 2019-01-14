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
                <input type="date" name="data_frequencia" id="data_frequencia" class="center-align" value="<?php echo date('Y-m-d')?>">
            </div>
        </div>
        <hr>
        <?php
        if (!empty($participantes)) {
            foreach ($participantes as $participante) {
                echo '<div class="card-panel">';
                    echo '<div class="row">
                        <div class="col s6 m6 l6">
                            Participantes: '.$participante['nome_completo'].'
                        </div>
                        <div class="col s3 m3 l3">
                            <input id="presenca['.$participante['id'].']" name="frequencia['.$participante['id'].']" type="radio" checked value="presenca">
                            <label for="presenca['.$participante['id'].']">Presença</label>
                        </div>
                        <div class="col s3 m3 l3">
                            <input id="falta['.$participante['id'].']" name="frequencia['.$participante['id'].']" type="radio" value="falta">
                            <label for="falta['.$participante['id'].']">Falta</label>
                        </div>
                    </div>';
                echo '</div>';
            }
        } else {
            echo 'Nenhum Participante desta turma foi encontrado.';
        }
        ?>
        <input type="submit" value="Fazer Frequência" class="btn orange right">
    <br>
    </div>
</form>

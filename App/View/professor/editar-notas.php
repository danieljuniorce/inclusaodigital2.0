<div class="orange">
    <br>
        <h5 class="center-align color-white">EDITAR NOTAS DOS PARTICIPANTES - TURMA: <?php echo $turma; ?></h5>
    <br>
</div>

<ul class="collapsible" data-collapsible="accordion">
    <?php
    foreach ($participantes as $participante) {
        echo '<li>';
            echo '<div class="collapsible-header">Nome: '.$participante['nome_completo'].'</div>';
            echo '<div class="collapsible-body">
                    <p class="center-align">EDITAR NOTAS DO PARTICIPANTE</p>
                    <p class="center-align"><a href="/professor/editarnotas/'.$participante['matricula'].'" class="btn orange">ALTERAR NOTA</a></p>
                </div>';
        echo '</li>';
    }
    ?>
</ul>
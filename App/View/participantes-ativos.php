<div class="">
    <h4 class="center-align">Participantes com Status <?php echo $estado;?></h4>
    <hr>
    <br>
    <table class="bordered highlight">
        <thead>
            <tr>
                <th>Matricula</th>
                <th>Nome</th>
                <th>Vizualizar</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($dados as $participantes) {
                    echo '<tr>';
                    echo '<th>'.$participantes['matricula'].'</th>';
                    echo '<th>'.$participantes['nome_completo'].'</th>';
                    echo '<th><a class="btn orange" href="/adm/editar/'; echo $participantes['matricula'].'">EDITAR</a></th>';       
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>
</div>
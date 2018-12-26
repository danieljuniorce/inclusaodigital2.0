<h4 class="center-align">PARTICIPANTES COM ESTADO <?php echo $estado;?></h4>
<hr>
<br>
<div class="container">
    <ul class="collapsible popout" data-collapsible="accordion">
        <?php
            foreach ($dados as $participantes) {
                echo '<li>';
                    echo '<div class="collapsible-header "><i class="material-icons">face</i>Participante: '.$participantes['nome_completo'].' /  Matricula de Nº:'.$participantes['matricula'].'</div>';
                    echo '<div class="collapsible-body">
                            <p class="">Dados do Participante</p>
                            <p class="">Nome: '.$participantes['nome_completo'].'</p>
                            <p class="">E-mail: '.$participantes['email'].'</p>
                            <p class="">Matricula: '.$participantes['matricula'].'</p>
                            <p class="">Curso: '.$participantes['tipo_curso'].'</p>
                            <p class="">Turno: '.$participantes['turno'].'</p>
                            <p class="">Horário: '.$participantes['horario'].'</p>
                            <p class="">Celular: '.$participantes['celular'].'</p>
                            <p class="">Telefone: '.$participantes['telefone'].'</p>
                            <p class="">CPF: '.$participantes['cpf'].'</p>
                            <p class="">RG: '.$participantes['rg'].'</p>
                        </div>';
                echo '</li>';
            }
        ?>
    </ul>
</div>
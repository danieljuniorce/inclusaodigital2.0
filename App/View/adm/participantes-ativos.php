<h4 class="center-align">PARTICIPANTES COM ESTADO <?php echo $estado;?></h4>
<hr>
<br>
<div class="container">
    <ul class="collapsible popout" data-collapsible="accordion">
        <?php
            if (!empty($dados)) {
                foreach ($dados as $participantes) {
                    echo '<li>';
                        echo '<div class="collapsible-header "><i class="material-icons">face</i>Participante: '.$participantes['nome_completo'].' /  Matricula de Nº:'.$participantes['matricula'].'</div>';
                        echo '<div class="collapsible-body">
                                <h5 class="center-align">Dados do Participante</h5>
                                <hr>
                                <div class="row">
                                    <div class="col s12 m6 l6">
                                        <p class="">E-mail: '.$participantes['email'].'</p>
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <p class="">Matricula: '.$participantes['matricula'].'</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m6 l6">
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <p class="">Celular: '.$participantes['celular'].'</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m6 l6">
                                        <p class="">Telefone: '.$participantes['telefone'].'</p>
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <p class="">CPF: '.$participantes['cpf'].'</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m6 l6">
                                    <p class="">RG: '.$participantes['rg'].'</p>
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <p class="center-align"><a href="/adm/editar/'.$participantes['matricula'].'" class="btn orange center-align">Editar</a></p>
                                    </div>
                                </div>
                            </div>';
                    echo '</li>';
                }
            } else {
                echo 'Nenhum participante encontrado.';
            }
        ?>
    </ul>
</div>
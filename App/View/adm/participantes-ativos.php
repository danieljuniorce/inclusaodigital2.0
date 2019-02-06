<?php 
    function idadePelaDataNascimento($data)
    {
        $date = date("d/m/Y", strtotime($data));

        list($dia, $mes, $ano) = explode('/', $date);

        $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));

        $nascimento = mktime(0, 0, 0, $mes, $dia, $ano);

        return $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
    }
    function transDate($data)
    {
        return date("d/m/Y", strtotime($data));
    }

?>

<div class="orange">
    <br>
    <h4 class="center-align color-white">PARTICIPANTES COM ESTADO <?php echo $estado;?></h4>
    <br>
</div>
<br>
<div class="container">
    <ul class="collapsible popout" data-collapsible="accordion">
        <?php $i = 1; if (!empty($dados)): ?>
            <?php foreach ($dados as $participante):?>
                <li>
                    <div class="collapsible-header">
                        <i class="material-icons">face</i>
                        <?php echo $i++.' - ';?>
                        <?=$participante['nome_completo'];?>
                    </div>
                    <div class="collapsible-body">
                        <div class="orange">
                            <p class="center-align color-white">DADOS DO PARTICIPANTE</p>
                        </div>
                        <div class="row">
                            <div class="col s12 m6 l6 center-align">
                                Idade: <?php echo idadePelaDataNascimento($participante['data_nascimento']);?>
                                <hr>
                            </div>
                            <div class="col s12 m6 l6 center-align">
                                Data de Nascimento <?=transDate($participante['data_nascimento']);?>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6 l6 center-align">
                                Turma: <?=$participante['turma']?>
                                <hr>
                            </div>
                            <div class="col s12 m6 l6 center-align">
                                E-mail: <?=$participante['email'];?>
                                <hr>
                            </div>
                        </div>
                        <div class="row center-align">
                            Telefone/Celular: <?=$participante['telefone'];?> / <?=$participante['celular'];?>
                        </div>
                        <div class="row right-align">
                            <a href="/adm/editar/<?=$participante['matricula'];?>" class="btn orange z-depth-0">EDITAR</a>
                        </div>
                    </div>
                </li>
            <?php endforeach;?>
        <?php else: ?>
            <li>
                <div class="collapsible-header">
                    NENHUM PARTICIPANTE ENCONTRADO COM ESTADO: <?=$estado;?>.
                </div>
            </li>
        <?php endif; ?>
    </ul>
</div>
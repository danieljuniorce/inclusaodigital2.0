<?php
function idadePelaDataNascimento($data)
{
    $date = date("d/m/Y", strtotime($data));

    list($dia, $mes, $ano) = explode('/', $date);

    $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));

    $nascimento = mktime(0, 0, 0, $mes, $dia, $ano);

    return $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
}
?>
<div class="card-panel">
            <br>
            <div class="orange">
                <br>
                <h4 class="center-align color-white"><span class="text-white">PARTICIPANTES EM GERAL</span></h4>
                <br>
            </div>
            <h4 class="center-align" style="font-weight:bolder;"></h4>
            <br>
            <div class="row">
                <div class="col s12 m12 l6">
                        <h5 class="center-align">PARTICIPANTES</h5>
                        <hr>
                        <br>
                        <ul class="collapsible popout" data-collapsible="accordion">
                            <li>
                                <div class="collapsible-header"><i class="material-icons">filter_drama</i>PARTICIPANTES ATIVOS</div>
                                <div class="collapsible-body">
                                    <p class="center-align">Visualizar todos participantes</p>
                                    <p class="center-align"><a href="/adm/estados/ativo" class="btn orange center-align">ATIVO</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons">filter_drama</i>PARTICIPANTES PRE-INSCRITOS</div>
                                <div class="collapsible-body">
                                    <p class="center-align">Visualizar todos participantes</p>
                                    <p class="center-align"><a href="/adm/estados/pre_inscricao" class="btn orange center-align">PRE-INSCRITO</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons">filter_drama</i>PARTICIPANTES CONCLUDENTES</div>
                                <div class="collapsible-body">
                                    <p class="center-align">Visualizar todos participantes</p>
                                    <p class="center-align"><a href="/adm/estados/concludente" class="btn orange center-align">CONCLUDENTES</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons">filter_drama</i>PARTICIPANTES NÃO CONCLUDENTES</div>
                                <div class="collapsible-body">
                                    <p class="center-align">Visualizar todos participantes</p>
                                    <p class="center-align"><a href="/adm/estados/nao_concludente" class="btn orange center-align">NÃO CONCLUDENTES</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons">filter_drama</i>PARTICIPANTES INATIVOS</div>
                                <div class="collapsible-body">
                                    <p class="center-align">Visualizar todos participantes</p>
                                    <p class="center-align"><a href="/adm/estados/inativo" class="btn orange center-align">INATIVOS</a></p>
                                </div>
                            </li>
                        </ul>
                        <br>
                </div>
                <div class="col s12 m12 l6">
                    <h5 class="center-align">TODOS PARTICIPANTES</h5>
                    <hr>
                    <br>
                    <ul class="collapsible popout">
                        <li>
                            <div class="collapsible-header"> <i class="material-icons">cloud</i> INFORMAÇÕES</div>
                            <div class="collapsible-body">
                                <P class="center-align">Dados</P>

                                Participantes Cadastrados: <?php echo $quantidade;?>.

                                <p class="center-align">FILTRO POR IDADE</p>
                                <?php
                                $primeiraIdade = 0;
                                $segundaIdade = 0;
                                $teceiraIdade = 0;
                                foreach ($idades as $idade)
                                {
                                    if (idadePelaDataNascimento($idade['data_nascimento']) >= 13 && idadePelaDataNascimento($idade['data_nascimento']) <= 17 ) {
                                        $primeiraIdade++;
                                    } else if (idadePelaDataNascimento($idade['data_nascimento']) >= 18 && idadePelaDataNascimento($idade['data_nascimento']) <= 29) {
                                        $segundaIdade++;
                                    } else if (idadePelaDataNascimento($idade['data_nascimento']) >= 30) {
                                        $teceiraIdade++;
                                    }
                                }
                                ?>
                                13 ~ 17: <?php echo $primeiraIdade;?> Participantes.<br>
                                18 ~ 29: <?php echo $segundaIdade;?> Participantes.<br>
                                30 ~ Diante: <?php echo $teceiraIdade;?> Participantes.
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
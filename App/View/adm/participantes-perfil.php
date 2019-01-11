<?php 
    $token = sha1(md5(date('Y-m-d').rand()));
    $_SESSION['token'] = $token;
?>

<div class="card-panel">
        <div class="orange">
            <br>
            <div>
                <h5 class="center-align color-white"><span class="text-white">Participante: <?php echo $dados['nome_completo'];?> - Matricula: <?php echo $dados['matricula'];?></span></h5>
            </div>
        <br>
    </div>

    <form method="POST" class="container">
    <input type="hidden" value="<?php echo $dados['matricula'];?>" name="matricula"/>
    <input type="hidden" value="<?php echo $token;?>" name="token">
    <br>
        <div class="row">
            <div class="col s12 m6 l6">
                <div class="input-field s12">
                    <i class="material-icons prefix">face</i>
                    <input type="text" value="" id="nome_completo" name="nome_completo" placeholder="<?php echo $dados['nome_completo'];?>">
                    <label for="nome_completo">Nome Completo</label>
                </div>
            </div>
            <div class="col s12 m6 l6">
                <div class="input-field s12">
                    <i class="material-icons prefix">fingerprint</i>
                    <input type="number" value="" id="rg" name="rg" placeholder="<?php echo $dados['rg'];?>">
                    <label for="rg">RG</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m6 l6">
                <div class="input-field s12">
                    <i class="material-icons prefix">assignment_ind</i>
                    <input type="number" value="" id="cpf" name="cpf" placeholder="<?php echo $dados['cpf'];?>">
                    <label for="cpf">CPF</label>
                </div>
            </div>
            <div class="col s12 m6 l6">
                <div class="input-field s12">
                    <i class="material-icons prefix">calendar_today</i>
                    <input type="number" value="" id="data_nascimento" name="data_nascimento" placeholder="<?php echo $dados['data_nascimento'];?>">
                    <label for="data_nascimento">Data de Nascimento</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m6 l6">
                <div class="input-field s12">
                    <i class="material-icons prefix">phone_android</i>
                    <input type="number" value="" id="celular" name="celular" placeholder="<?php echo $dados['celular'];?>">
                    <label for="celular">Celular</label>
                </div>
            </div>
            <div class="col s12 m6 l6">
                <div class="input-field s12">
                    <i class="material-icons prefix">assignment_ind</i>
                    <input type="number" value="" id="telefone" name="telefone" placeholder="<?php echo $dados['telefone'];?>">
                    <label for="telefone">Telefone</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m6 l6">
                <div class="input-field s12">
                    <i class="material-icons prefix">email</i>
                    <input type="email" value="" id="email" name="email" placeholder="<?php echo $dados['email'];?>">
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="col s12 m6 l6">
                <div class="input-field s12">
                    <i class="material-icons prefix">verified_user</i>
                    <input type="password" value="" id="senha" name="senha">
                    <label for="senha">Senha</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m6 l6">
                <div class="input-field">
                    <i class="material-icons prefix">done</i>
                    <select name="estado_participante" id="estado_participante">
                    <?php
                        if ($dados['estado_participante'] == 'ativo') {
                            echo '<option value="ativo" selected>Ativo</option>';
                            echo '<option value="inativo">Inativo</option>';
                            echo '<option value="pre_inscrito">Pre-Inscrito</option>';
                            echo '<option value="concludente">Concludente</option>';
                            echo '<option value="nao_concludente">Não Concludente</option>';
                        } else if ($dados['estado_participante'] == 'pre_inscricao') {
                            echo '<option value="ativo">Ativo</option>';
                            echo '<option value="inativo">Inativo</option>';
                            echo '<option value="pre_inscrito" selected>Pre-Inscrito</option>';
                            echo '<option value="concludente">Concludente</option>';
                            echo '<option value="nao_concludente">Não Concludente</option>';
                        } else if ($dados['estado_participante'] == 'concludente') {
                            echo '<option value="ativo">Ativo</option>';
                            echo '<option value="inativo">Inativo</option>';
                            echo '<option value="pre_inscrito">Pre-Inscrito</option>';
                            echo '<option value="concludente" selected>Concludente</option>';
                            echo '<option value="nao_concludente">Não Concludente</option>';
                        } else {
                            echo '<option value="ativo">Ativo</option>';
                            echo '<option value="inativo">Inativo</option>';
                            echo '<option value="pre_inscrito">Pre-Inscrito</option>';
                            echo '<option value="concludente">Concludente</option>';
                            echo '<option value="nao_concludente">Não Concludente</option>';
                        }
                    ?>
                    </select>
                    <label for="estado_participante">Estado do Participante</label>
                </div>
            </div>
            <div class="col s12 m6 l6">
                <div class="input-field s12">
                    <select name="turma" id="turma">
                    <?php
                    echo '<option value="" disabled selected>Selecione a Turma</option>';
                        foreach ($turmas as $turma) {

                            if ($turma['turno'] == 'manha') {
                                $turno = 'Manhã';
                            } else if ($turma['turno'] == 'excel') {
                                $turno = 'Tarde';
                            }

                            if ($turma['horario'] == 'primeiro_horario') {
                                $horario = '08:00 as 09:30';
                            } else if ($turma['horario'] == 'segunda_horario') {
                                $horario = '09:30 as 11:00';
                            } else if ($turma['horario'] == 'terceiro_horario') {
                                $horario = '13:00 as 14:30';
                            } else if ($turma['horario'] == 'quarto_horario') {
                                $horario = '14:30 as 16:00';
                            } else {
                                $horario = 'Sem Horário';
                            }
                            
                            if ($turma['turma'] != ''){
                                
                                echo '<option value="'.$turma['turma'].'">Turma: '.$turma['turma'].' / Turno: '.$turno.', Horário: '.$horario.'</option>';

                            } else {
                                echo '<option value="'.$turma['turma'].'">Turma: '.$turma['turma'].' / Turno: '.$turno.', Horário: '.$horario.'</option>';
                            }
                            
                        }
                    ?>
                    </select>
                    <label for="turma">Turma</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m6 l6">
                <div class="input-field s6 offset-2">
                    <i class="material-icons prefix">face</i>
                    <select name="sexo" id="sexo">
                        <?php 
                            if($dados['sexo'] == 'masculino'){
                                echo '<option value="masculino" selected>Masculino</option>';
                                echo '<option value="feminina">Feminina</option>';
                            } else if($dados['sexo'] == 'feminina') {
                                echo '<option value="masculino">Masculino</option>';
                                echo '<option value="feminina" selected>Feminina</option>';
                            }else {
                                echo '<option value="" selected disabled>Selecione o Sexo</option>';
                                echo '<option value="masculino">Masculino</option>';
                                echo '<option value="feminina">Feminina</option>';
                            }
                        ?>
                    </select>
                    <label for="sexo">Sexo</label>
                </div>
            </div>
            <div class="col s12 m6 l6">
            </div>
        </div>
        <div class="row">
            <div class="col s12 m6 l6">
            </div>
            <div class="col s12 m6 l6">
                <button class="btn orange right z-depth-0" type="submit">Atualizar Dados</button>
            </div>
        </div>
    </form>

</div>
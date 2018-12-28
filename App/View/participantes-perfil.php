<div class="card-panel">
        <div class="orange">
            <br>
            <h5 class="center-align color-white"><span class="text-white">Participante: <?php echo $dados['nome_completo'];?> - Matricula: <?php echo $dados['matricula'];?></span></h5>
        <br>
    </div>

    <form method="POST" class="container">
    <input type="hidden" value="<?php echo $dados['matricula'];?>" name="matricula"/>
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
                        } else if ($dados['estado_participante'] == 'pre_inscrito') {
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
                            echo '<option value="nao_concludente" selected>Não Concludente</option>';
                        }
                    ?>
                    </select>
                    <label for="estado_participante">Estado do Participante</label>
                </div>
            </div>
            <div class="col s12 m6 l6">
                <div class="input-field s12">
                    <i class="material-icons prefix">update</i>
                    <select name="turno" id="turno">
                        <?php 
                            if ($dados['turno'] == 'manha'){
                                echo '<option value="manha" selected>Manhã</option>';
                                echo '<option value="tarde" >Tarde</option>';
                            } else {
                                echo '<option value="tarde" selected>Tarde</option>';
                                echo '<option value="manha" >Manhã</option>';
                            }
                        ?>
                    </select>
                    <label for="turno">Turno</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m6 l6">
                <div class="input-field s12">
                    <i class="material-icons prefix">hourglass_empty</i>
                    <select name="horario" id="horario">
                        <?php 
                            if($dados['horario'] == 'primeiro_horario'){
                                echo '<option value="primeiro_horario" selected>08:00 as 09:30</option>';
                                echo '<option value="segundo_horario">09:30 as 11:00</option>';
                                echo '<option value="terceiro_horario">13:00 as 14:30</option>';
                                echo '<option value="quarto_horario">14:30 as 16:00</option>';
                            }else if($dados['horario'] == 'segundo_horario'){
                                echo '<option value="primeiro_horario">08:00 as 09:30</option>';
                                echo '<option value="segundo_horario" selected>09:30 as 11:00</option>';
                                echo '<option value="terceiro_horario">13:00 as 14:30</option>';
                                echo '<option value="quarto_horario">14:30 as 16:00</option>';
                            }else if($dados['horario'] == 'terceiro_horario'){
                                echo '<option value="primeiro_horario">08:00 as 09:30</option>';
                                echo '<option value="segundo_horario">09:30 as 11:00</option>';
                                echo '<option value="terceiro_horario" selected>13:00 as 14:30</option>';
                                echo '<option value="quarto_horario">14:30 as 16:00</option>';
                            }else if($dados['horario'] == 'quarta_horario'){
                                echo '<option value="primeiro_horario">08:00 as 09:30</option>';
                                echo '<option value="segundo_horario">09:30 as 11:00</option>';
                                echo '<option value="terceiro_horario">13:00 as 14:30</option>';
                                echo '<option value="quarto_horario" selected>14:30 as 16:00</option>';
                            }else{
                                echo '<option value="" disabled selected>Não tem horário Escolhido</option>';
                                echo '<option value="primeiro_horario">08:00 as 09:30</option>';
                                echo '<option value="segundo_horario">09:30 as 11:00</option>';
                                echo '<option value="terceiro_horario">13:00 as 14:30</option>';
                                echo '<option value="quarto_horario">14:30 as 16:00</option>';
                            }
                        ?>
                    </select>
                    <label for="horario">Horário</label>
                </div>
            </div>
            <div class="col s12 m6 l6">
                <div class="input-field s12">
                    <i class="material-icons prefix">book</i>
                    <select name="curso" id="curso">
                        <?php
                            if($dados['tipo_curso'] == 'informatica_basica'){
                                echo '<option value="informatica_basica" selected>Informática Básica</option>';
                                echo '<option value="excel_avancado">Excel Avançado</option>';
                                echo '<option value="excel_intensivo">Excel Intensivo</option>';
                            }else if($dados['tipo_curso'] == 'excel_avancado'){
                                echo '<option value="informatica_basica" >Informática Básica</option>';
                                echo '<option value="excel_avancado" selected>Excel Avançado</option>';
                                echo '<option value="excel_intensivo">Excel Intensivo</option>';
                            }else if($dados['tipo_curso'] == 'excel_intensivoo'){
                                echo '<option value="informatica_basica" >Informática Básica</option>';
                                echo '<option value="excel_avancado">Excel Avançado</option>';
                                echo '<option value="excel_intensivo" selected>Excel Intensivo</option>';
                            }else{
                                echo '<option value="" selected disabled>Selecione o Curso</option>';
                                echo '<option value="informatica_basica">Informática Básica</option>';
                                echo '<option value="excel_avancado">Excel Avançado</option>';
                                echo '<option value="excel_intensivo">Excel Intensivo</option>';
                            }
                        ?>
                    </select>
                    <label for="telefone">Curso</label>
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
                <div class="input-field">
                    <?php
                        if ($dados['turma'] == '') {
                            echo '<select name="turma" id="turmas">';
                                echo '<option value="" disabled selected>Escolha a turma</option>';
                            foreach ($turmas as $turmas) {
                                if ($turmas['curso'] == 'informatica_basica')
                                {
                                    $turma = 'Informática Básica';
                                } else if($turmas['curso'] == 'excel_avancado') {
                                    $turma = 'Excel Avançado';
                                } else {
                                    $turma = 'Excel Intensivo';
                                }

                                if ($turmas['turno'] == 'tarde') {
                                    $turno = 'Manhã';
                                } else {
                                    $turno = 'Tarde';
                                }
                                echo '<option value="'.$turmas['turma'].'">Nº: '.$turmas['turma'].' Curso: '.$turma.' - '.$turno.'</option>';
                            }
                            
                            echo '</select>';
                            echo '<label for="turmas">Turmas</label>';
                        } else {
                            echo '<input type="number" id="turma" name="turma" placeholder="'.$dados['turma'].'";>';
                            echo '<label for="turma">Turma</label>';
                        }
                    ?>    
                </div>
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
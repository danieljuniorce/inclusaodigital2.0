
<?php $matricula = date('Y').rand();?>
<div class="">
  <div class="row">
    <button class="right btn orange z-depth-0">Matricula Gerada: <?php echo $matricula; ?></button>
  </div>
  <h5 class="center-align">Cadastro de novos Participantes</h5>
  <hr>
  <br>
  <div class="row">
    <div class="col s12 m1 l1">

    </div>
    <form method="POST" >
      <input type="hidden" value="<?php echo $matricula;?>" name="matricula">
    <div class="col s12 m10 l10">
        <!-- Curso e Estado do Participante -->
        <div class="row">
          <div class="col s12 m6 l6">
              <div class="input-field">
                <i class="material-icons prefix">book</i>
                <select name="tipo_curso" id="tipo_curso" required>
                  <option value="sem_curso" disabled selected>Selecione o Tipo do Curso</option>
                  <option value="informatica_basica">Informática Básica</option>
                  <option value="excel_avancado">Excel Avançado</option>
                  <option value="excel_intensivo">Excel Intensivo</option>
                </select>
                <label for="tipo_curso">Tipo de Curso</label>
              </div>
          </div>
          <div class="col s12 m6 l6">
          <div class="input-field">
                <i class="material-icons prefix">done</i>
                <select name="estado_participante" id="estado_participante" requerid>
                  <option value="nao_especificado" disabled selected>Selecione o estado do participante</option>
                  <option value="pre_inscricao">Pre-Inscrição</option>
                  <option value="ativo">Ativo</option>
                  <option value="concludente">Concludente</option>
                  <option value="nao_concludente">Não Concludente</option>
                </select>
                <label for="estado_participante">Estado do Participante</label>
              </div>
          </div>
        </div>
        
        <!-- Nome Completo e data de nascimento -->
        <div class="row">
          <div class="col s12 m6 l6">
              <div class="input-field s6 offset-2">
                <i class="material-icons prefix">face</i>
                <input type="text" id="nome_completo" name="nome_completo" required>
                <label for="nome_complete">Nome Completo</label>
              </div>
          </div>
          <div class="col s12 m6 l6">
            <div class="input-field s6 offset-2">
                <i class="material-icons prefix">calendar_today</i>
                <input type="text" id="data_nascimento" name="data_nascimento" required>
                <label for="data_nascimento">Data de Nascimento</label>
              </div>
          </div>
        </div>
        <!-- RG e CPF -->
        <div class="row">
          <div class="col s12 m6 l6">
              <div class="input-field s6 offset-2">
                <i class="material-icons prefix">fingerprint</i>
                <input type="number" id="rg" name="rg">
                <label for="rg">RG</label>
              </div>
          </div>
          <div class="col s12 m6 l6">
            <div class="input-field s6 offset-2">
                <i class="material-icons prefix">assignment_ind</i>
                <input type="number" id="cpf" name="cpf" data-length="11">
                <label for="cpf" data-success="Observe se o digitos corresponde aos 11 pedido." data-error="Digitos maior do que o permitido.">CPF</label>
              </div>
          </div>
        </div>
        <!-- Horário Disponiveis e Turno -->
        <div class="row">
          <div class="col s12 m6 l6">
              <div class="input-field">
                  <i class="material-icons prefix">update</i>
                <select name="turno" id="turno">
                  <option value="nao_especificado" disabled selected>Selecione o Turno</option>
                  <option value="manha">Manhã</option>
                  <option value="tarde">Tarde</option>
                </select>
                <label for="turno">Turno</label>
              </div>
          </div>
          <div class="col s12 m6 l6">
            <div class="input-field">
                <i class="material-icons prefix">hourglass_empty</i>
              <select name="horario" id="horario">
                  <option value="nao_especificado" disabled selected>Selecione o Horário</option>
                  <option value="primeiro_horario">08:00 as 09:30</option>
                  <option value="segundo_horario">09:30 as 11:00</option>
                  <option value="terceiro_horario">13:00 as 14:30</option>
                  <option value="terceiro_horario">14:30 as 16:00</option>
                </select>
                <label for="horario">Horario</label>
              </div>
            </div>
          </div>
        <!--Telefone e Celular -->
         <div class="row">
            <div class="col s12 m6 l6">
                <div class="input-field s6 offset-2">
                    <i class="material-icons prefix">phone_android</i>
                    <input type="number" id="celular" name="celular" required>
                    <label for="celular">Celular</label>
                </div>
            </div>
            <div class="col s12 m6 l6">
                <div class="input-field s6 offset-2">
                    <i class="material-icons prefix">local_phone</i>
                    <input type="number" id="telefone" name="telefone">
                    <label for="telefone">Telefone</label>
                </div>
            </div>
        </div>

        <!--Email e Sexo -->
        <div class="row">
            <div class="col s12 m6 l6">
                <div class="input-field s6 offset-2">
                    <i class="material-icons prefix">face</i>
                    <select name="sexo" id="sexo">
                      <option value="" disabled selected>Selecione o Sexo</option>
                      <option value="masculino">Masculino</option>
                      <option value="feminina">Feminina</option>
                    </select>
                    <label for="sexo">Sexo</label>
                </div>
            </div>
            <div class="col s12 m6 l6">
                <div class="input-field s6 offset-2">
                  <i class="material-icons prefix">email</i>
                  <input class="email" name="email" id="email">
                  <label for="email">E-mail</label>
                </div>
            </div>
        </div>

        <!-- Botão de Cadastro-->
        <div class="row">
            <div class="col s12 m6 l6">
            </div>
            <div class="col s12 m6 l6">
                <br>
                <button class="btn z-depth-0 right orange" type="submit">Cadastrar</button>
            </div>
        </div>
      </form>

    <div class="col s12 m1 l1">
 
    </div>
</div>



<?php $matricula = date('Y').rand(100, 400);?>
<div class="">
  <div class="row">
    <button class="right btn orange z-depth-0">Matricula Gerada: <?php echo $matricula; ?></button>
  </div>
  <div class="orange">
    <br>
    <h5 class="center-align color-white"><span class="text-white">Cadastrar novos Participantes</span></h5>
    <br>
  </div>
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
          <div class="col s12 m3 l3">
            <div class="input-field">
            <select name="tipo" id="tipo">
                    <option value="" disabled selected>Tipo de Participante</option>
                    <option value="avulso">Avulso</option>
                    <option value="corpaticipante">Corpaticipante</option>
                </select>
                <label for="tipo">Tipo</label>
            </div>
          </div>
          <div class="col s12 m3 l3">
            <div class="input-field">
                <input type="text" name="numero_tipo" id="numero_tipo">
                <label for="numero_tipo">Númeração</label>
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
                <p class="">Nome Completo</p>
                <i class="material-icons prefix">face</i>
                <input type="text" id="nome_completo" name="nome_completo" required placeholder="Digite o nome completo do participante.">
              </div>
          </div>
          <div class="col s12 m6 l6">
            <div class="input-field s6 offset-2">
                <p class="">Data de Nascimento</p>
                <i class="material-icons prefix">calendar_today</i>
                <input type="date" id="data_nascimento" name="data_nascimento" required>
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
                <div class="input-field">
                  <i class="material-icons prefix">email</i>
                  <input class="email" name="email" id="email" placeholder="Digite o E-mail">

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


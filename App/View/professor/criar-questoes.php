<div class="orange">
    <br>
    <h5 class="center-align color-white">CRIAR QUESTÃO</h5>
    <br>
</div>
<br>

<form method="POST">
    <div class="row">
        <div class="col s8 m3 l3 right">
            <div class="input-field s12">
                <select name="modulo" id="modulo">
                    <option value="" disabled selected>Escolha o Módulo</option>
                    <option value="word">Word</option>
                    <option value="excel">Excel</option>
                    <option value="powerpoint">PowerPoint</option>
                    <option value="nocoes_basicas">Noções Básicas</option>
                </select>
                <label for="modulo">Modulo da Questão</label>
            </div>
        </div>
        <div class="col s4 m9 l9">
        </div>
    </div>

    <div class="row">
        <div class="col s12 m12 l12">
            <div class="input-field s11 m11 l11">
                <i class="material-icons prefix">edit</i>
                <textarea name="questao" id="questao" class="materialize-textarea" data-length="500"></textarea>
                <label for="questao">Enunciado da Questão</label>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s12 m6 l6">
            <div class="input-field s11 m11 l11">
                <i class="material-icons prefix">book</i>
                <textarea name="primeira_alt" id="primeira_alt" class="materialize-textarea" data-length="300"></textarea>
                <label for="primeira_alt">Primeira Alternativa</label>
            </div>
        </div>
        <div class="col s12 m6 l6">
            <div class="input-field s11 m11 l11">
                <i class="material-icons prefix">book</i>
                <textarea name="segunda_alt" id="segunda_alt" class="materialize-textarea" data-length="300"></textarea>
                <label for="segunda_alt">Segunda Alternativa</label>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s12 m6 l6">
            <div class="input-field s11 m11 l11">
                <i class="material-icons prefix">book</i>
                <textarea name="terceira_alt" id="terceira_alt" class="materialize-textarea" data-length="300"></textarea>
                <label for="terceira_alt">Terceira Alternativa</label>
            </div>
        </div>
        <div class="col s12 m6 l6">
            <div class="input-field s11 m11 l11">
                <i class="material-icons prefix">book</i>
                <textarea name="quarta_alt" id="quarta_alt" class="materialize-textarea" data-length="300"></textarea>
                <label for="quarta_alt">Quarta Alternativa</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m6 l6">
        </div>
        <div class="col s12 m6 l6">
            <input type="submit" value="Enviar Questão" class="btn right orange z-depth-0">
        </div>
    </div>
</form>
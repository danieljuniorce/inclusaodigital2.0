<div class="orange">
    <br>
    <h5 class="center-align color-white">ENVIO DE AVISOS</h5>
    <br>
</div>
<br>
<form method="POST">
    <div class="container">
        <div class="row">
            <div class="col s12 m5 l5 right">
                <div class="input-field">
                    <select name="envio_email" id="envio_email">
                        <option value="" disabled selected>Envio para E-mail?</option>
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                    </select>
                    <label for="envio_email">Enviar para E-mail</label>
                </div>
            </div>
            <div class="col m7 l7"></div>
        </div>

        <div class="row">
            <div class="input-field">
                <input type="text" data-height="100" name="titulo_aviso" id="titulo_aviso" data-length="120">
                <label for="titulo_aviso">Titulo do Aviso</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field">
                <textarea name="corpo_aviso" id="corpo_aviso" class="materialize-textarea" data-length="600"></textarea>
                <label for="corpo_aviso">Corpo do Aviso</label>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s12 m6 l6">
        </div>
        <div class="col m4 l4">
            <div class="input-field">
                <input type="submit" value="Enviar Aviso" class="btn orange z-depth-0 right">
            </div>
        </div>
    </div>
</form>
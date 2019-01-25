<?php
$token = sha1(md5(date('Y-m-d').rand()));
$_SESSION['token'] = $token;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../../src/css/materialize.css" media="screen,projection"/>
    <title>Login - Inclusão Digital</title>
</head>
<body class="orange lighten-2">
  <div class="row container" style="top: 60px; position: relative;">
    <div class="col s0 m3 l3"></div>
    <div class="col s12 m6 l6">

      <div class="card-panel">
        <h5 class="center-align">SIA - INCLUSÃO DIGITAL</h5>
        <br>
        <div class="row">
        <form method="POST" class="col s12">
          <div class="input-field s6">
            <i class="material-icons prefix">email</i>
            <input type="text" id="matricula" name="matricula" class="validate" required>
            <label for="matricula">Matricula</label>
          </div>
          <div class="input-field s6">
            <i class="material-icons prefix">verified_user</i>
            <input type="password" id="senha" name="senha" required>
            <label for="senha">Senha</label>
              <?php if(!empty($_SESSION['errorLogin'])): ?>
                  <p class="red-text"><?php echo $_SESSION['errorLogin'];?></p>
              <?php else: ?>

              <?php endif; ?>
          </div>
            <br>
            <a class="btn left red" href="/usuarios/recuperar">Esqueci a Senha</a>
          <button class="btn right orange" type="submit">Entrar</button>&nbsp;&nbsp;
          <input type="hidden" value="<?php echo $token;?>" name="token">
        </form>
      </div>
      </div>

    </div>
    <div class="col s0 m3 l3"></div>
  </div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="../../src/js/materialize.js"></script>
<script type="text/javascript" src="../../src/js/script.js"></script>
</body>
</html>

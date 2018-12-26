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
    <link rel="stylesheet" type="text/css" href="../../src/css/style.css"/>
    <title>Página Inicial - Inclusão Digital</title>
</head>
<body class="grey lighten-5">
    <ul id="slide-out" class="side-nav fixed ">
        <li>
        <div class="user-view">
            <div class="background orange">
            </div>
            <a href="#!user"><img class="circle" src="../../src/img/perfil.jpg"></a>
            <a href="#!name"><span class="white-text name"><?php echo $_SESSION['nome_completo'];?></span></a>
            <a href="#!email"><span class="white-text email">Matricula: <?php echo $_SESSION['matricula'];?></span></a>
        </div>
        </li>
        <?php

            if ($_SESSION['acesso'] == 'user')
            {
                echo '<li><a href="" class="waves-effect"><i class="material-icons">book</i>Seu Curso</a></li>';
                echo '<li><a href="" class="waves-effect"><i class="material-icons">book</i>Acâdemico</a></li>';

                echo '<li><div class="divider"></div></li>';
                echo '<li><a href="/usuarios/sair" class="waves-effect"><i class="material-icons">book</i>Sair</a></li>';
            }else{
                echo '<li><a href="/adm" class="waves-effect"><i class="material-icons">face</i>Participantes</a></li>';
                echo '<li><a href="/adm/cadastrar" class="waves-effect"><i class="material-icons">add</i>Cadastrar</a></li>';
                echo '<li><a href="/adm/criarturmas" class="waves-effect"><i class="material-icons">add</i>Turmas</a></li>';
                echo '<li><div class="divider"></div></li>';
                echo '<li><a href="/usuarios/sair" class="waves-effect"><i class="material-icons">exit_to_app</i>Sair</a></li>';
            }

        ?>
    </ul>                
                
    <nav class="orange z-depth-0  hide-on-large-only">
        <ul class="nav-wrapper">
            <li>
                <a href="#" data-activates="slide-out" class="left hide-on-large-only" id="btn">
                    <i class="material-icons right">menu</i>
                    MENU
                </a>
            </li>
        </ul>
    </nav>
    <div class="card-panel">
        <?php  $this->LoadViewTemplate($viewName, $viewData);?>
    </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="../../src/js/materialize.js"></script>
<script type="text/javascript" src="../../src/js/script.js"></script>
<script>
 $(document).ready(function() {
    $('select').material_select();
    $('.modal').modal();
    $("#btn").sideNav();
    $('.carousel').carousel();

  });    
</script>
</body>
</html>


<?php

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
    <link rel="stylesheet" type="text/css" href="../../src/css/style.css"/>
    <title><?php echo $_SESSION['name'];?> - Inclusão Digital</title>
</head>
<body class="">
    <ul id="slide-out" class="side-nav fixed ">
        <li>
        <div class="user-view">
            <div class="background orange">
            </div>

            <?php if ($_SESSION['sexo'] == 'masculino'): ?>
                <a href="#!user"><img class="circle" src="../../src/img/perfil-boy.jpg"></a>
            <?php else: ?>
                <a href="#!user"><img class="circle" src="../../src/img/perfil-girl.jpg"></a>
            <?php endif; ?>

            <a href="#!name"><span class="white-text name"><?php echo $_SESSION['nome_completo'];?></span></a>
            <a href="#!email"><span class="white-text email">Matricula: <?php echo $_SESSION['matricula'];?></span></a>
        </div>
        </li>
            <li>
                <a href="/home"> <i class="material-icons left">home</i> Página Inicial</a>
            </li>
            <?php if ($_SESSION['acesso'] == 'adm'): ?>
                <li><a href="/adm" class="waves-effect"><i class="material-icons">face</i>Participantes</a></li>
                <li><a href="/adm/cadastrar" class="waves-effect"><i class="material-icons">add</i>Cadastrar</a></li>
                <li><a class="dropdown-button" href="#" data-activates="turma"><i class="material-icons left">reorder</i><i class="material-icons right">arrow_drop_down</i>Turmas</a></li>
                <!--li><a class="dropdown-button" href="#" data-activates="requerimentos"><i class="material-icons left">vertical_split</i><i class="material-icons right">arrow_drop_down</i>Requerimentos</a></li-->
                <li><a href="/professor" class="hide-on-small-only"><i class="material-icons">work</i>Área do Professor</a></li>
                <li><a class="dropdown-button hide-on-large-only show-on-small" data-activates="professor"><i class="material-icons">work</i><i class="material-icons right">arrow_drop_down</i>Área do Professor</a></li>
                <li><a href="/adm/avisos" class="waves-effect"><i class="material-icons">warning</i>Criar Avisos</a></li>
                <li><div class="divider"></div></li>
                <li><a href="/usuarios/sair" class="waves-effect"><i class="material-icons">exit_to_app</i>Sair</a></li>
            <?php else: ?>
                <li><a href="/usuarios/curso" class="waves-effect"><i class="material-icons">book</i>Seu Curso</a></li>
                <li><a href="/usuarios/frequencia"><i class="material-icons">calendar_today</i>Frequência</a></li>
                <li><a href="/usuarios/notas"><i class="material-icons">verified_user</i>Notas</a></li>

                <li><div class="divider"></div></li>
                <li><a href="/usuarios/sair" class="waves-effect"><i class="material-icons">arrow_drop_down</i>Sair</a></li>
            <?php endif; ?>
    </ul>

    <ul id='turma' class='dropdown-content'>
        <li><a href="/adm/criarturmas"><i class="material-icons">add</i>Criar</a></li>
        <li><a href="/adm/turmas"><i class="material-icons">view_column</i>Visualizar</a></li>
    </ul>
    <ul id='professor' class='dropdown-content'>
        <li>
            <a class="/professor/frequencia"><i class="material-icons left">how_to_reg</i>FREQUENCIA</a>
        </li>
        <li>
            <a href="/professor/questoes"><i class="material-icons left">book</i>BANCO DE QUESTÕES</a>
        </li>
        <li>
            <a href="/professor/notas"><i class="material-icons left">markunread_mailbox</i>Notas</a>
        </li>
        <li>
            <a><i class="material-icons left">alternate_email</i>Resultados</a>
        </li>
    </ul>
    <!--
    <ul id='requerimentos' class='dropdown-content'>
        <li><a href="/adm/criarturmas"><i class="material-icons">class</i>Pendentes</a></li>
        <li><a href="/adm/turmas"><i class="material-icons">verified_user</i>Fechados</a></li>
    </ul>
    -->

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
        <?php  $this->LoadViewTemplate($viewPaste, $viewName, $viewData);?>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="../../src/js/materialize.js"></script>
    <script type="text/javascript" src="../../src/js/script.js"></script>
    <!--Start of Tawk.to Script-->
    <?php if ($_SESSION['acesso'] == 'user'):?>
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5c59d46c6cb1ff3c14cb3c3b/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <?php endif; ?>
    <!--End of Tawk.to Script-->
    <script>
     $(document).ready(function() {
        $('select').material_select();
        $('.modal').modal();
        $("#btn").sideNav();
        $('.carousel').carousel();
        $('.dropdown-button').dropdown({
          belowOrigin: true, // Displays dropdown below the button
          alignment: 'right', // Displays dropdown with edge aligned to the left of button
          stopPropagation: false, // Stops event propagation
        }
      );
      });
    </script>
</body>
</html>


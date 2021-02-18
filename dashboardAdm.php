<?php
  session_start();
  if (!isset($_SESSION['usuarioNiveisAcessoid'])) {
  header("Location: index.php?log=out");
}
?>
<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Projeto OncoHeart</title>
    <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/master.css">
    <link href="css/signup.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <style type="text/css">
        .escondido {
        display: none;
        }
    </style>   
        
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="css\bootstrap-4.4.1-dist\css\bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <script src="css\bootstrap-4.4.1-dist\js\bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/menu_sidebar.js"></script>
    <script>
    $(document).ready(function(){
      $("#formBusca").submit(function(event){
        event.preventDefault();
        var busca = $("#inputBusca").val();
        $("#exibePacientes").load("buscaPacientes.php", {
          busca: busca
        });
      });
    });
    </script>
</head>
<body>

<!--wrapper start-->
<div class="wrapper">
    <!--header menu start-->
    <div class="header">
        <div class="header-menu">
            <div class="title">PROJETO <span>ONCO HEART</span></div>     
                <ul>
                    <li><a href="dashboardAdm.php"><i class="fas fa-home"></i></a></li>
                    <li><a href="includes/logout.inc.php"><i class="fas fa-power-off"></i></a></li>
                </ul>
        </div>
    </div>
    <!--header menu end-->
    <!--sidebar start-->
    <div class="sidebar">
        <div class="sidebar-menu">
            <center class="profile">
                <img src="images\user.png" class="img-fluid" alt="">
                    <p class="card-text">Administrador</p>
            </center>
            <li class="item">
                <a id="bt1" href="#messages" class="menu-btn">
                    <i class="fas fa-desktop"></i><span>Página Inicial</span>
                </a>
            </li>
            <li class="item" id="profile">
                <a id="bt2" href="#messages" class="menu-btn">
                    <i class="fas fa-user"></i><span>Add novo Usuário </span>
                </a>
            </li>
            <li class="item" id="messages">
                <a id="bt3" href="#pacientes" class="menu-btn">
                    <i class="fas fa-user"></i><span>Pacientes</span>
                </a>
            </li>
            <li class="item" id="messages">
                <a id="bt4" href="#questionarioPacientes" class="menu-btn">
                    <i class="fas fa-file-medical"></i><span>Questionários</span>
                </a>
            </li>
            <li class="item">
                <a href="includes/logout.inc.php" class="menu-btn">
                    <i class="fas fa-times-circle"></i><span>Sair</span>
                </a>
            </li>
        </div>
    </div>
    <!--sidebar end-->
    <!--main container start-->
    <div class="main-container">

        <!--DIV1-->
        <div class="escondido" id="div1">
            <link rel="stylesheet" href="css\bootstrap-4.4.1-dist\css\bootstrap.min.css">
        <br><br><br><br><br>
        <div class="container clearfix width-full text-center">
            <img src="images/oncohearthp.png" class="img-fluid" alt="">
            <a class="header-logo"  aria-label="Homepage" >
          </a>
    
       </div>
       </div>

        <!--DIV2--> 
        <div class="container escondido" id="div2">
          
        <form class="form-signin" method="POST" action="includes\cadastro.usuario.php">
        <h2 class="form-signin-heading">Cadastro de Usuário</h2>
        <label for="inputEmail" class="sr-only">Nome</label>
        <input type="text" name="uid" id="username" aria-describedby="emailHelp" class="form-control" onfocus="this.value='';" placeholder="Usuario" required autofocus>

        <label for="inputE-mail" class="sr-only">Email</label>
        <input type="email" name="email" id="useremail" class="form-control" placeholder="Email" required autofocus>
        
        <label for="inputContact" class="sr-only">Contato</label>
        <input type="tel" name="end" id="usercontato" class="form-control" placeholder="Endereço Completo" required autofocus>

        <label for="inputBirthday" class="sr-only">Data de Aniversário: </label><br>Data de Nascimento:
        <input type="date" name="birthday" id="userbirthday" class="form-control" placeholder="Data de Nascimento" required autofocus>        

        <label for="inputTell" class="sr-only">Telefone</label>
        <input type="tel" name="tell" id="usertell" class="form-control" placeholder="Telefone de Contato" required autofocus>

        <label for="inputNivel" class="sr-only">Nivel</label>
        <input type="text" name="nivel" id="usernivel" class="form-control" placeholder="Nivel de Acesso" required autofocus>

        <label for="inputPassword" class="sr-only">Senha</label>
        <input onfocus="this.value='';" type="password" name="psw" id="password" class="form-control" placeholder="Senha" required>
        

        <button class="btn btn-lg btn-danger btn-block" name="cadastro-button" type="submit">CADASTRAR</button>
    
      </form>
        </div>
        
        <!--DIV3-->
        <div id="div3" class="jumbotron dasboard-panel escondido">
            <div class="search-bar-btn d-flex justify-content-between">
                <div class="row">
                    <form action="includes\addpaciente.inc.php" method="post">
                        <div class="form-inline form-block">
                            <input type="text" name="Pnome" class="form-control" id="nomePaciente" placeholder="Adicionar um paciente">
                            <button type="submit" name="add-pessoas-submit" type="button" class="btn btn-outline-dark"><i class="fa fa-user-plus" aria-hidden="true"></i></button>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <form id="formBusca" method="post" action="buscaPacientes.php" class="form-inline form-block">
                        <input id="inputBusca" class="form-control" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                        <button id="botaoBusca" class="btn btn-outline-success" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
            <div class="dashboard-table" id="exibePacientes">
                <?php
                    include_once("database/db.dashboard.php");
                    $sql = "SELECT * FROM pessoas;";
                    $result = mysqli_query($conn, $sql);
                ?>
                <table class="table table-hover table-responsive-sm">
                    <thead class="table-dark table-primary">
                        <tr>
                           <th>Pacientes</th>
                           <th>Ações</th>
                        </tr>
                    </thead>
                    <?php while ($linha = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo $linha['nome']?></td>
                        <td><a href="registros.adm.php?paciente=<?php echo $linha['pid']?>" class="btn btn-danger" type="button" name="ver">Ver</a></td>
                    </tr>
                    <?php endwhile; ?>
                </table>
            </div>
        </div>
        <div class="container escondido" id="div4">
      <h1 class="questionario-h1">Escolher um Questionário</h1>
      <div class="">
        <form class="form-group" action="questionarioPacientes" method="post" onsubmit="return checkForEmpty()">
          <fieldset class="">
            <select class="custom-select" name="questionario" id="questionarios">
              <option selected value="0">Escolha um tipo de questionário</option>
              <option value="1">ESCALA DE SONOLÊNCIA DE EPWORTH (ESS-BR)</option>
              <option value="2">FICHA DE CONSULTA CARDIOLÓGICA</option>
              <option value="3">FICHA DE INVESTIGAÇÃO</option>
              <option value="4">QUESTIONÁRIO DE INFORMAÇÕES SOCIODEMOGRÁFICAS E DE SAÚDE</option>
              <option value="5">TESTE DE ORIENTAÇÃO DE VIDA (TOV-R)</option>
              <option value="6">THE WORLD HEALTH ORGANIZATION QUALITY OF LIFE (WHOQOL-BREF)</option>
            </select>
            <br>
            <br>
          </fieldset>
          <fieldset id="a" style="display:none" >
            <?php include_once("templates/questExcel1.php");?>
          </fieldset>
          <fieldset id="b" style="display:none">
            <?php include_once("templates/questExcel2.php");?>
          </fieldset>
          <fieldset id="c" style="display:none">
            <?php include_once("templates/questExcel3.php");?>
          </fieldset>
          <fieldset id="d" style="display:none">
            <?php include_once("templates/questExcel4.php");?>
          </fieldset>
          <fieldset id="e" style="display:none">
            <?php include_once("templates/questExcel5.php");?>
          </fieldset>
          <fieldset id="f" style="display:none">
            <?php include_once("templates/questExcel6.php");?>
          </fieldset>


        </form>

      </div>
    </div>

    
        
    </div>
    <!--main container end-->
</div>
<!--wrapper end-->
<!-- Mostra ou esconde questionários -->
    <script src="js/mostra-esconde-quest.js"></script>
 <script type="text/javascript">
        $(document).ready(function(){
            $(".sidebar-btn").click(function(){
                $(".wrapper").toggleClass("collapse");
            });
        });
        </script>
</body>
</html>
      
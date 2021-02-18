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
                    <div class="title">PROJETO ONCO HEART</div>
                    
                    <ul>
                    <li><a href="dashboardAreaPesquisador.php"><i class="fas fa-home"></i></a></li>
                    <li><a href="includes/logout.inc.php"><i class="fas fa-power-off"></i></a></li>
                </ul>
                </div>
            </div>
            <!--header menu end-->
            <!--sidebar start-->
            <div class="sidebar">
                <div class="sidebar-menu">
                    <center class="profile">
                        <img src="images\user.png" alt="">
                    <p class="card-text">Pesquisador</p>
                    </center>
                    <li class="item">
                       <a id="bt1" href="#Home" class="menu-btn">
                          <i class="fas fa-desktop"></i><span>Página Inicial</span>
                       </a>
                    </li>
                    <li class="item" id="messages">
                       <a id="bt2" href="#pacientes" class="menu-btn">
                         <i class="fas fa-user"></i><span>Lista Pacientes</span>
                       </a>
                    </li>
                    <li class="item" id="messages">
                       <a id="bt3" href="#questionarioPacientes" class="menu-btn">
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
            <div id="div1">
                <link rel="stylesheet" href="css\bootstrap-4.4.1-dist\css\bootstrap.min.css">
                <br><br><br><br><br>
              <div class="container clearfix width-full text-center">
                <img src="images/oncohearthp.png" class="img-fluid" alt="">
                <a class="header-logo"  aria-label="Homepage"></a>
              </div>
            </div>
            <!--DIV2-->
            <div id="div2" class="jumbotron dasboard-panel escondido">
            <div class="search-bar-btn d-flex justify-content-between">
                <div class="row">
                    <form action="includes\addpaciente.pesquisador.php" method="post">
                        <div class="form-inline form-block">
                            <input type="text" name="Pnome" class="form-control" id="nomePaciente" placeholder="Adicionar um paciente">
                            <button type="submit" name="add-pessoas-submit" type="button" class="btn btn-outline-dark"><i class="fa fa-user-plus" aria-hidden="true"></i></button>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <form id="formBusca" method="post" action="buscaPacientes.pesquisador.php" class="form-inline form-block">
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
                           <th>Pacientes</th>
                           <th>Ações</th>
                        </tr>
                    </thead>
                    <?php while ($linha = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo $linha['nome']?></td>
                        <td><a href="registrosPesquisador.php?paciente=<?php echo $linha['pid']?>" class="btn btn-danger" type="button" name="ver">Ver</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </table>
            </div>
            </div>
        </div>
        <div class="container escondido" id="div3">
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
      
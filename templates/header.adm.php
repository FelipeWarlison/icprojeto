<?php
  session_start();
  if (!isset($_SESSION['usuarioNiveisAcessoid'])) {
  header("Location: index.php?log=out");
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="images/favicon.ico">
    <title>Projeto Onco Heart</title>

    <!-- bootstrap CSS -->
    <link href="css/signup.css" rel="stylesheet">
    <link rel="stylesheet" href="css\master.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css\bootstrap-4.4.1-dist\css\bootstrap-grid.min.css">
    <link rel="stylesheet" href="css\bootstrap-4.4.1-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="css\bootstrap-4.4.1-dist\js\bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
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
<header>
<!--header menu start-->
<div class="wrapper">
    <div class="header">
        <div class="header-menu">
            <div class="title">PROJETO <span>ONCOHEART</span></div>
            
                <ul>
                    <li><a href="dashboardAdm.php"><i class="fas fa-home"></i></a></li>
                    <li><a href="includes/logout.inc.php"><i class="fas fa-power-off"></i></a></li>
                </ul>
        </div>
    </div>
</div>
<br><br><br>
    <!--header menu end-->
</header>
<?php
if (isset($_GET['error'])):
  $error = $_GET['error'];
  if($error == 'emptyfields'):?>
    <div class="text-center alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Campos vazios!</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php elseif($error == 'wrong'):?>
    <div class="text-center alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Credenciais incorretas!</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php elseif($error == 'empty'):?>
    <div class="text-center alert alert-danger" role="alert">
      <strong>Campo vazio!</strong>
    </div>
  <?php elseif($error == 'sqlerror'):?>
    <div class="text-center alert alert-danger" role="alert">
      <strong>Erro ao conectar com o banco de dados!</strong>
    </div>
  <?php elseif($error == 'noAd'):?>
    <div class="text-center alert alert-success" role="alert">
      <strong>Paciente cadastrado com sucesso!</strong>
    </div>
  <?php elseif($error == 'emptyfield'):?>
    <div class="text-center alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Campo vazio!</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php elseif($error == 'nomeexiste'):?>
    <div class="text-center alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Este já é o nome do paciente!</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php elseif($error == 'noEd'):?>
    <div class="text-center alert alert-success alert-dismissible fade show" role="alert">
      <strong>Nome editado com sucesso!</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php elseif($error == 'NoS'):?>
    <div class="text-center alert alert-success" role="alert">
      <strong>Questionário adicionado com sucesso!</strong>
    </div>
  <?php endif;
  endif;
  ?>
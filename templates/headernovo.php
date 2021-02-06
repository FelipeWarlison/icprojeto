<?php
  
  if (!isset($_SESSION['userUid'])) {
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
            .hidden{
                display: none;
            }
           
        </style>
        <script src="js/ie10-viewport-bug-workaround.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
         <!-- bootstrap CSS -->
         <link rel="stylesheet" href="css\bootstrap-4.4.1-dist\css\bootstrap-grid.min.css">
         <link rel="stylesheet" href="css\bootstrap-4.4.1-dist\css\bootstrap.min.css">
    
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

        <script type="text/javascript">
        $(document).ready(function(){
            $(".sidebar-btn").click(function(){
                $(".wrapper").toggleClass("collapse");
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
            <div class="title">PROJETO <span>ONCOHEART</span></div>        
                <ul>
                    <li><a href="dashboard.php"><i class="fas fa-home"></i></a></li>
                    <li><a href="includes/logout.inc.php"><i class="fas fa-power-off"></i></a></li>
                </ul>
        </div>
    </div>
    <!--header menu end-->

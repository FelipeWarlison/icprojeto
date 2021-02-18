

<!DOCTYPE html>
<html lang="pt" dir="ltr"">

	<head>
		 <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>Contato</title>
	<head>
	<body>
    <?php
       include_once("includes/resp.inc.php");

      $aux1 = mysqli_fetch_assoc($result2);
      $pessoa = $aux1['nome'];

      $aux = mysqli_fetch_assoc($result1);
      $tipo = $aux['tipo'];
      $data = date('d/m/Y', strtotime($aux["data"]));

      if($tipo == 1):
      include_once("templates/planilha1.php");    
    ?>
    
    <?php
      elseif($tipo == 2):
      include_once("templates/planilha2.php"); 
    ?>

    <?php
      elseif($tipo == 3):
      include_once("templates/planilha3.php");   
    ?>
    <?php
      elseif($tipo == 4):
      include_once("templates/planilha4.php"); 
    ?>

    <?php
      elseif($tipo == 5):
      include_once("templates/planilha5.php");            
    ?>

    <?php
      elseif($tipo == 6):
      include_once("templates/planilha6.php");
    ?>
        <?php endif; ?>

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="css\bootstrap-4.4.1-dist\js\bootstrap.min.js"></script>
    </body> 
</html>
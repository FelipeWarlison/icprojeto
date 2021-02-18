<?php
  if (isset($_POST["add-pessoas-submit"])) {
    require "..\database\db.dashboard.php";

    $nomePaciente = $_POST['Pnome'];

    if(empty($nomePaciente)){
      header("Location: ../dashboardAdm.php?error=empty");
    } else {
      $sql = "SELECT nome from pessoas where nome=?";
      $stmt = mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location: ../dashboardAdm.php?error=sqlerror");
        exit();
      } else {
        mysqli_stmt_bind_param($stmt,"s", $nomePaciente);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
        if ($resultCheck > 0){
          header("Location: ../dashboardAdm.php?error=pacienteexiste");
          exit();
        } else {
          $sql = "INSERT INTO pessoas (nome) VALUES (?)";
          $stmt = mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../dashboardAdm.php?error=sqlerror");
            exit();
          } else {
            mysqli_stmt_bind_param($stmt,"s", $nomePaciente);
            mysqli_stmt_execute($stmt);
              echo "
                    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/projetoy/projeto_ic/public_html/dashboardAdm.php#pacientes'>
                    <script type=\"text/javascript\">
                        alert(\"Usuario cadastrado com Sucesso.\");
                    </script>
                    ";
          }
        }
      }
    }
  } else {
    header("Location: ../dashboardAdm.php");
    exit();
  }

 ?>

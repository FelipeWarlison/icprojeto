<?php
require "database\db.dashboard.php";

if(isset($_GET['Idq']) && isset($_GET['pid'])){
  $questId = $_GET['Idq'];
  $pid = $_GET['pid'];
  $sql = "SELECT * FROM questionarios WHERE tipo=?;";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
    header("Location: dashboardAdm.php?#error=sqlerror");
    exit();
  } else {
    mysqli_stmt_bind_param($stmt,"i", $questId);
    mysqli_stmt_execute($stmt);
    $result1 = mysqli_stmt_get_result($stmt);
  }
  $sql = "SELECT * FROM pessoas WHERE pid=?;";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
    header("Location: dashboardAdm.php?#error=sqlerror");
    exit();
  } else {
    mysqli_stmt_bind_param($stmt,"i", $pid);
    mysqli_stmt_execute($stmt);
    $result2 = mysqli_stmt_get_result($stmt);
  }
}  
?>

<div class="jumbotron dasboard-panel escondido" id="div4">
           <div class="dashboard-table" id="">
            <?php
                    include_once("database/db.dashboard.php");
                    include_once("includes/reg.inc.php");
                    $sql = "SELECT * FROM questionarios;";
                    $result1 = mysqli_query($conn, $sql);
                    $aux = mysqli_fetch_assoc($result2);
                    $pid = $aux['pid'];?>
            <table class="table table-hover table-striped table-responsive-sm">
                    <thead>
                        <tr>
                           <th>QUESTIONÁRIOS</th>
                           <th>AÇÕES</th>
                        </tr>
                    </thead>
                <tr>
                  <td> ESCALA DE SONOLÊNCIA </td>
                 </tr>   
                   <?php while ($linha = mysqli_fetch_assoc($result1)): ?>
                   <tr>
                     <td> 
                    <?php if($linha['tipo'] == 1){
                        $pid = $linha['pid'];

                        $sql_pacientes = "SELECT * FROM pessoas WHERE pid = '$pid'";
                        $result_pacientes = mysqli_query($conn,$sql_pacientes);
                        while ($lista_pacientes = mysqli_fetch_assoc($result_pacientes)){
                            echo $lista_pacientes['nome']."<br>";
                        }
                      }
                    ?>
                    </td>
                    <td> <a href="gerar_planilha?Idq=<?php echo $linha['questId'];?>&pid=<?php echo $pid;?>" type="button" class="btn btn-outline-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Gerar Excel</a>
                    </td>
                    <td>
                <a href="respostas.php?Idq=<?php echo $linha['questId'];?>&pid=<?php echo $pid;?>">
                  <?php
                    if($linha['tipo'] == 1){echo "ESCALA DE SONOLÊNCIA DE EPWORTH (ESS-BR)";}
                  ?>
                </a>
              </td>
                    </tr>  
                 <?php endwhile; ?>
                  
              </tr>
              <tr>
                  
              </tr>
              </table> 

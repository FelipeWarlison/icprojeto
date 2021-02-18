    <?php
      
      include_once("includes/resp.inc.php");
      include_once("database/db.dashboard.php");
          $sql = "SELECT * FROM questionarios;";
          $result1 = mysqli_query($conn, $sql);
          $result2 = mysqli_query($conn, $sql);
          $aux = mysqli_fetch_assoc($result2);
          //$pessoa = $aux['nome'];
          $pid = $aux['pid'];
    ?>
    <div class="container">
        <br>
        <br>
        <div class="dashboard-table">
          <table class="table table-hover table-striped table-responsive-sm">
            <thead>
              <tr>
                <th><h5>PACIENTES</h5></th>
                <th><h5>AÇÕES</h5></th>
              </tr>
            </thead>
            
            <?php while ($linha = mysqli_fetch_assoc($result1)): ?>
            <?php if ($linha['tipo'] == 5): ?>
            <tr>              
              <td>
                <?php $pid = $linha['pid'];

                  $sql_pacientes = "SELECT * FROM pessoas WHERE pid = '$pid'";
                  $result_pacientes = mysqli_query($conn,$sql_pacientes);
                    while ($lista_pacientes = mysqli_fetch_assoc($result_pacientes)){
                      echo $lista_pacientes['nome'];
                    } 
                ?>
              </td>
              <td>
                <a href="gerar_planilha2?Idq=<?php echo $linha['questId'];?>&pid=<?php echo $pid;?>" type="button" class="btn btn-outline-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Gerar Excel
                </a>  
              </td>
            </tr>
            <?php endif ?>
            <?php endwhile; ?>
          </table>
        </div>    
  </div>
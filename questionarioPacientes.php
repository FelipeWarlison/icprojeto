
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
            <?php if ($linha['tipo'] == 1): ?>
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
                <a href="gerar_planilha?Idq=<?php echo $linha['questId'];?>&pid=<?php echo $pid;?>" type="button" class="btn btn-outline-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Gerar Excel
                </a>  
              </td>
            </tr>
            <?php endif ?>
            <?php endwhile; ?>
          </table>
        </div>    
  </div>
  
<!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="css\bootstrap-4.4.1-dist\js\bootstrap.min.js"></script>
  
        
 <!--DIV4-->
        <div class="jumbotron dasboard-panel escondido" id="div4">
           <div class="dashboard-table" id="">
            <?php
                    include_once("database/db.dashboard.php");
                    $sql = "SELECT * FROM questionarios;";
                    $result1 = mysqli_query($conn, $sql);
                    $aux = mysqli_fetch_assoc($result2);
                    $pessoa = $aux['nome'];
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
                    <td> <a href="gerar_planilha?Idq=<?php echo $linha['questId'];?>&pid=<?php echo $linha['pid'];?>" type="button" class="btn btn-outline-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Gerar Excel</a>
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
            </div> 
        </div>
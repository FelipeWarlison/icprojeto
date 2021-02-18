<!--DIV4-->
        <div class="jumbotron dasboard-panel escondido" id="div4">
           <div class="dashboard-table" id="">
                <?php
                    include_once("database/db.dashboard.php");
                    $sql = "SELECT * FROM questionarios;";
                    $result = mysqli_query($conn, $sql);
                    $sqlp = "SELECT * FROM pessoas;";
                    $resultp = mysqli_query($conn, $sqlp);
                ?>
                <table class="table table-hover table-striped table-responsive-sm">
                    <thead>
                        <tr>
                           <th>QUESTIONÁRIOS</th>
                           <th>AÇÕES</th>
                        </tr>
                    </thead>
                    <tr>
                    <th>ESCALA DE SONOLÊNCIA DE EPWORTH (ESS-BR)</th>
                    </tr>
                    <tr> 
                      <td>
                        <?php while ($linha = mysqli_fetch_assoc($result)):?>
                         <?php
                         if($linha['tipo'] == 1) {echo $linha['pid'];}
                         ?>
                         <?php endwhile; ?>               
                       </td>
                       <td>
                           <a href="gerar_planilha.php" type="button" class="btn btn-outline-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Gerar Excel</a>
                       </td>
                    </tr>
                    
                </table>
            </div> 

            <?php
                    include_once("database/db.dashboard.php");
                    $sql = "SELECT * FROM questionarios;";
                    $result = mysqli_query($conn, $sql);

                    while ($linha = mysqli_fetch_assoc($result)) {
                        echo $linha['tipo']."<br>";
                        $pid = $linha['pid'];

                        $sql_pacientes = "SELECT * FROM pessoas WHERE pid = '$pid'";
                        $result_pacientes = mysqli_query($conn,$sql_pacientes);
                        while ($lista_pacientes = mysqli_fetch_assoc($result_pacientes)){
                            echo $lista_pacientes['nome']."<br><hr>";
                        }
                    }
                ?>

                    <?php
    include_once("database/db.dashboard.php");
    $result = "SELECT 'questionarios'.*, 'pessoas', 'nome' FROM 'questionarios' INNER JOIN 'pessoas' ON 'questionarios'.'pid' = 'pessoas'.'pid' ORDER BY 'questionarios'.'nome' ASC";
    $resultado = mysqli_query($conn, $result);
    while ($rows = mysqli_fetch_assoc($resultado)) {
        echo "QUESTIONÁRIOS: " .$rows['tipo'];
        echo "Paciente: " .$rows['nome'];
    }
                        
    ?>
?Idq=<?php echo $linha['questId'];?>&pid=<?php echo $pid;?>


    ?Idq=<?php echo $linha['questId'];?>&pid=<?php echo $pid;?>
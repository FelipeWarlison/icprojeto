    
       <div id="mp" class="jumbotron dasboard-panel hidden">
            <div class="search-bar-btn d-flex justify-content-between">
                <div class="row">
                    <form action="includes\addpaciente.inc.php" method="post">
                        <div class="form-inline form-block">
                            <input type="text" name="Pnome" class="form-control" id="nomePaciente" placeholder="Adicionar um paciente">
                            <button type="submit" name="add-pessoas-submit" type="button" class="btn btn-outline-dark"><i class="fa fa-user-plus" aria-hidden="true"></i></button>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <form id="formBusca" method="post" action="buscaPacientes.php" class="form-inline form-block">
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
                <table class="table table-hover table-striped table-responsive-sm">
                    <thead>
                        <tr>
                           <th>Pacientes</th>
                           <th>Ações</th>
                        </tr>
                    </thead>
                    <?php while ($linha = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo $linha['nome']?></td>
                        <td><a href="registros.php?paciente=<?php echo $linha['pid']?>" class="btn btn-danger" type="button" name="ver">Ver</a></td>
                    </tr>
                    <?php endwhile; ?>
                </table>
            </div>
        </div>
        <?php 
         include_once("dashboard.php");  
       ?>
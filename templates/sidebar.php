
    <!--sidebar start-->
    <div class="sidebar">
        <div class="sidebar-menu">
            <center class="profile">
                <img src="images\user.png" alt="">
                    <p class="card-text"><?php echo $_SESSION['userUid']; ?></p>
            </center>
            <li class="item">
                <a href="dashboard.php" class="menu-btn">
                    <i class="fas fa-desktop"></i><span>Página Inicial</span>
                </a>
            </li>
            <li class="item" id="profile">
                <a href="#profile" class="menu-btn" onclick="mostrausuario('cadastro_usuario')">
                    <i class="fas fa-user-md"></i><span>Administrativo <i class="fas fa-chevron-down drop-down"></i></span>
                </a>
                <div class="sub-menu">
                 <a href=""><i class="fas fa-user"></i><span>Adicionar Usuário</span></a>
                    <a href="#"><i class="fas fa-image"></i><span>Alterar imagen</span></a>
                </div>
            </li>
            <li class="item" id="messages">
                <a href="#messages" class="menu-btn">
                    <i class="fas fa-user"></i><span>Pacientes <i class="fas fa-chevron-down drop-down"></i></span>
                </a>
                <div class="sub-menu">
                    <a href="painel_pacientes.php"><i class="fas fa-user"></i><span>Lista de Pacintes</span></a>
                    <a href="imagem.php"><i class="fas fa-user"></i><span>Editar Paciente</span></a>
                </div>
            </li>
            <li class="item">
                <a href="includes/logout.inc.php" class="menu-btn">
                    <i class="fas fa-times-circle"></i><span>Sair</span>
                </a>
            </li>
        </div>
    </div>

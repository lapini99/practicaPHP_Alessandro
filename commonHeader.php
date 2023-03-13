<header>
    <nav>
        <ul>
            <li class="menu"><img src="./multimedia/images/DarkTheme/NB_Logo_White.png" alt="" id="NBLogo"></li>
            <li class="menu"><a href="./index.php">Inicio</a></li>
            <li class="menu"><a href="./catalog.php">Catálogo</a></li>
            <?php 
            if(isset($_SESSION["id"]) &&  $_SESSION["id"] == 1) {
                "<script>alert('Mi id es 1')</script>";
                echo "<li class='menu'><a href='./administrator.php'>Administrador</a></li>";
            } else {
                "<script>alert('Mi id no es 1')</script>";
            }
            ?>
            <li class="menu" id="dropdown"><img src="./multimedia/images/profPicDefault.png" alt="user" id="profPic"></a>
                <div id="dropdown-content">
                    <?php
                    if (!isset($_SESSION["id"])) :
                    ?>
                        <a href="./login.php">Iniciar/Registrarse</a>
                    <?php else : ?>
                        <a href="./profile.php">Perfil</a>
                        <a href="./logout.php">Cerrar sesión</a>
                    <?php endif; ?>
                </div>
            </li> <!-- cargar imagen del usuario guardada como profPic en la db-->
        </ul>
    </nav>
</header>
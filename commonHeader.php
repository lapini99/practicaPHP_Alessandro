<header>
    <nav>
        <ul>
            <li class="menu"><img src="./multimedia/images/DarkTheme/NB_Logo_White.png" alt="" id="NBLogo"></li>
            <li class="menu"><a href="./index.php">Inicio</a></li>
            <li class="menu"><a href="./catalog.php">Catálogo</a></li>
            <?php 
            if (isset($_SESSION["id"]) &&  $_SESSION["id"] == 1) {
                echo "<li class='menu'><a href='./administrator.php'>Administrador</a></li>";
            }
            ?>
            <li class="menu" id="dropdown"><img src="<?php echo isset($_SESSION["id"]) ? $_SESSION["profPic"] : "./multimedia/images/profPicDefault.png"; ?>" alt="user" id="profPic"></a>
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
            </li>
        </ul>
    </nav>
</header>
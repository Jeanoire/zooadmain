<?php
    session_start();
    if(isset($_SESSION["usuario"])){
        $tipoUsuario = $_SESSION["usuario"]['perfil'];
    }else{
        $tipoUsuario = "";
    }
?>

<?php
if(!isset($_SESSION["usuario"])){  // no hay sesion
?>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#"><span class="color-acento">ZOO</span>admin</a>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav me-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                  <a class="nav-link" href="index.php?controlador=paginas&accion=inicio">Inicio <span class="visually-hidden">(current)</span></a>
              </li>

          </ul>

          <ul  class = "nav navbar-nav navbar-right">
                <li class = "d-flex my-auto">
                    <?php 
                        if (isset($_SESSION["usuario"])){
                            echo '<strong>';
                            echo "Hola, ".$_SESSION["usuario"]['nombre']."》   ".$_SESSION["usuario"]['perfil'];
                            echo '</strong>';
                        }
                    ?>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuarios</a>
                  <div class="dropdown-menu" aria-labelledby="dropdownId">
                      <a class="dropdown-item" href="index.php?controlador=paginas&accion=login">Ingresar</a>
                      <a class="dropdown-item" href="index.php?controlador=paginas&accion=registro">Registrese</a>
                  </div>
                </li>
          </ul>
      </div>
    </div>
    </nav>

<?php 
}  //fin sin sesion
?>

<?php
if ($tipoUsuario == "administrador"){   //aqui abre el menu del administrador
?>

    <nav class="navbar navbar-expand-sm navbar-light bg-success">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="color-acento">ZOO</span>admin</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?controlador=paginas&accion=inicio">Inicio <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="index.php?controlador=animales&accion=mostrar" >Animales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?controlador=paginas&accion=consejos">Consejos</a>
                </li>

                
            </ul>
            <ul  class = "nav navbar-nav navbar-right ">
                <li class = "d-flex my-auto">
                    <?php 
                        if (isset($_SESSION["usuario"])){
                            echo '<strong>';
                            echo "".$_SESSION["usuario"]['nombre']." 》 ".$_SESSION["usuario"]['perfil'];
                            echo '</strong>';
                        }
                    ?>

                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuarios</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        
                        <a class="dropdown-item" href="index.php?controlador=paginas&accion=registro">Registrese</a>
                        <a class="dropdown-item" href="./vistas/modulos/salir.php">Salir</a>
                    </div>
                </li>
            </ul>
        </div>
      </div>
    </nav>

<?php
}        //aqui cierra el menu del administrador
?>

<?php
if ($tipoUsuario == "usuario"){   //aqui abre el menu del usuario
?>

    <nav class="navbar navbar-expand-sm navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="color-acento">ZOO</span>admin</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?controlador=paginas&accion=inicio">Inicio <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?controlador=animales&accion=mostrar">Animales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?controlador=paginas&accion=consejos">Consejos</a>
                </li>
            </ul>
            <ul  class = "nav navbar-nav navbar-right">
            <li class = "d-flex my-auto">
                    <?php 
                        if (isset($_SESSION["usuario"])){
                            echo '<strong>';
                            echo "".$_SESSION["usuario"]['nombre']."》   ".$_SESSION["usuario"]['perfil'];
                            echo '</strong>';
                        }
                    ?>
            </li>
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuarios</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="./vistas/modulos/salir.php">Salir</a>
                    </div>
            </li>
            </ul>
        </div>
      </div>
    </nav>

<?php
}        //aqui cierra el menu del usuario
?>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">Sistema Académico</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <?php
                
                if (!isset($_SESSION['legajo']))
                  {
                    ?><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="iniciarSesion.php">Iniciar Sesión</a><?php
                  }
                else{
                    $usuario = $_SESSION['nombre'];
                    ?><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="
                    <?php
                    
                    if($_SESSION['tipoUsuario'] == "Administrador"){
                      echo "menuAdministrador.php";
                      }
                      else if($_SESSION['tipoUsuario'] == "Alumno"){
                      echo "menuAlumno.php";           
                      }
                  
                      else if($_SESSION['tipoUsuario'] == "Docente"){
                      echo "menuDocente.php";
                      }

                    ?>
                    ">Hola, <?php echo $usuario ?></a><?php
                    ?>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                      <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="cerrarSesion.php">Cerrar Sesión</a>
                    <?php
                }
              ?>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="contacto.php">Contactanos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
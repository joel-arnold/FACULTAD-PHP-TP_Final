<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

    <title>Menú ABM Docentes</title>

    
   <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css"/>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet"/>

    <link href="estilo.css" rel="stylesheet" type="text/css" />

    

</head>
<body id="page-top">
    <?php

    session_start();
    ?>
        <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
                <div class="container">
                  <a class="navbar-brand js-scroll-trigger" href="#page-top">Sistema Académico</a>
                  <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item mx-0 mx-lg-1">
                        <!--<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="iniciarSesion.html">Iniciar Sesión</a>-->
                        <div class="btn-group">
                            <div class="boton-desplegable">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                  ABM Docentes <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                
                                  <li class="lista-desplegable"><a href="#alta">Alta </a></li>
                                  <br>
                                  <li class="lista-desplegable"><a href="#modificar">Modificar</a></li>
                                  <br>
                                  <li class="lista-desplegable"><a href="#baja">Baja</a></li>
            
                                </ul>
                              
                      <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="perfil.php">
                            <?php  
                                $user = $_SESSION['nombre']; 
                                echo("$user");  
                            ?></a>
                      </li>
                      <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="cerrarSesion.php">Cerrar Sesion</a>
                      </li>
                    </ul>
                </div>
                    </div>
                  </div>
                </div>
              </nav>
              <header class="masthead bg-primary text-white text-center">
                
                    
                    <div class="container">
                        
                    
                   <h2>ABM Docentes</h2>
                   <hr class="star-light">
                   <p class="recordatorio">Para dar de alta, baja o modificar, NO OLVIDE COMPLETAR TODOS LOS DATOS!</p>
                   <img class="img-atencion mb-5 d-block mx-auto" src="Atención.jpg" alt="atencion" id="atencion">
                   
                   <section class="porfolio" id="alta">
                            <div class="container">
                              <h2 class="text-center text-uppercase text-white">Alta Docentes</h2>
                              <div class="formAltaAlumnos">

                                    <form class="form-horizontal" role="form" action="altaPersonas.php" method="POST" name="formalta">
                                        <div class="form-group">
                                             <label for="inputnomyape" class="label-sm-2">Nombre y Apellido (*)</label>
                                            <div class="input-sm-5">
                                               <input type="text" class="form-control" id="inputnomyape" name="nomyape" placeholder="Nombre y apellido" />
                                             </div>
                                         </div>
                                          <div class="form-group">       
                                            <label for="inputemail" class="label-sm-2">Email (*)</label>
                                                <div class="input-sm-5">
                                                   <input type="text" class="form-control" id="inputemail" name="email" placeholder="Email" />
                                                </div>
                                         </div>
                                         <div class="form-group">       
                                            <label for="inputdirec" class="label-sm-2">Dirección (*)</label>
                                                <div class="input-sm-5">
                                                    <input type="text" class="form-control" id="inputdirec" name="direccion" placeholder="Dirección" />
                                                </div>
                                        </div>
                                        <div class="form-group">       
                                            <label for="inputTel" class="label-sm-2">Teléfono (*)</label>
                                                <div class="input-sm-5">
                                                    <input type="text" class="form-control" id="inputTel" name="telefono" placeholder="Teléfono" />
                                                </div>
                                        </div>
                                        <div class="form-group">       
                                            <label for="inputfecha" class="label-sm-2">Fecha de Nacimiento (*)</label>
                                                <div class="input-sm-5">
                                                    <input type="date" class="form-control" id="inputfecha" name="fecha_nac" placeholder="DD-MM-AAAA" />
                                                </div>
                                        </div>
                                        <div class="form-group">       
                                                <label for="inputpass" class="label-sm-2">Contraseña Temporal (*)</label>
                                                    <div class="input-sm-5">
                                                        <input type="password" class="form-control" id="inputpass" name="password" placeholder="Asigne una contraseña " />
                                                    </div>
                                        </div>

                                         <div class="form-group">
                                                <label for="tipoUSuario" class="label-sm-2">Tipo de usuario (*)</label>
                                                <div class="input-sm-5">
                                                <select class="form-control" name="tipoUsuario" id="tipoUSuario">

                                                        <option>Seleccione tipo de usuario</option>
                                                        
                                                        <option>Alumno</option>
                                                        
                                                        <option>Docente</option>

                                                        <option>Director</option>
                                                        
                                                </select>
                                                  </div>
                                            </div>
                                         <div class="form-group">
                                              <div class="boton-sm-offset-2">
                                                  
                                                <input type="button"  class="btn btn-default" value="Agregar Alumno" onClick="validacion()"/>
                                                
                                              </div>
                                              <br>
                                           
                                        </div>
                                        </form>
                            </div>
                    </section>

                    <section class="bg-primary text-white mb-0" id="modificar"> <!-- arreglar este formulario NO OLVIDAR!!-->
                            <div class="container">
                              <h2 class="text-center text-uppercase text-white">Modificar Docentes</h2>
                              <div class="formModifAlumnos">

                                    <form class="form-horizontal" role="form" action="menuABMAlumnos.php#modificar" method="POST" name="formModif">
                                        <div class="form-group">
                                             <label for="inputlegajo" class="label-sm-2">Legajo del docente que desea buscar:</label>
                                            <div class="input-sm-5">
                                               <input type="text" class="form-control" id="inputlegajo" name="legajo" placeholder="Legajo" value="<?php if(!empty($_POST['legajo'])) echo $_POST['legajo']; ?>" />
                                             </div>
                                         </div>
                                         <div class="form-group">
                                            <div class="boton-sm-offset-2">
                                                  
                                            <button type="submit" class="btn btn-default">Buscar</button>
                                                
                                            </div>
                                           
                                        </div>
                                    </form>
                                </div>
                                <?php 
                                if(!empty($_POST['legajo'])){
                                    include "modificarPersonas.php";
                                    
                                }
                                ?>

                            </div>
                    </section>
                    <section id="baja">
                            <div class="container">
                              <h2 class="text-center text-uppercase text-white">Baja Docentes</h2>
                              <div class="formModifAlumnos">

                                    <form class="form-horizontal" role="form" action="bajaPersonas.php" method="POST" name="formBaja">
                                        <div class="form-group">
                                             <label for="inputlegajo" class="label-sm-2">Legajo del docente que desea buscar:</label>
                                            <div class="input-sm-5">
                                               <input type="text" class="form-control" id="inputlegajo" name="legajo" placeholder="Legajo"/>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                            <div class="boton-sm-offset-2">
                                                  
                                            <button type="submit" class="btn btn-default">Borrar</button>
                                                
                                            </div>
                                           
                                        </div>
                                    </form>
                                </div>
                                
                            </div>
                    </section>
                </div>
              </header>
    
    <script src="validacion.js"></script>
</body>
</html>
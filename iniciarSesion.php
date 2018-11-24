<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
  
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

    <title>Inicio de sesión</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

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
    
<?php include("encabezado.php"); ?>

        <header class="masthead bg-primary text-white text-center">
                <div class="container">
                     <h2>Iniciar Sesión</h2>
                     <hr class="star-light">
                      <div class="formLogin">
                          <form class="form-horizontal" role="form" action="login.php" method="POST" name="formlogin">
                              <div class="form-group">
                                  <label for="inputlegajo" class="label-sm-2">Legajo</label>
                                  <div class="input-sm-5">
                                    <input type="legajo" class="form-control" id="inputlegajo" name="legajo" placeholder="Legajo" />
                                  </div>
                              </div>
                                <div class="form-group">
                                <label for="inputpassword" class="label-sm-2">Contraseña</label>
                                  <div class="input-sm-5">
                                    <input type="password" class="form-control" id="inputpassword" name="contrasena" placeholder="Contraseña" />
                                  </div>
                                </div>
                              <div class="form-group">
                                </div>
                              <div class="form-group">
                                    <div class="boton-sm-offset-2">
                                      <button type="submit" class="btn btn-default">Iniciar Sesion</button>
                                    </div>
                              </div>
                        </form>
                    </div>
            </div>
        </header>
    <?php include("pieDePagina.php"); ?>  
</body>

</html>
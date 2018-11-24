<?php session_start(); ?>
<!DOCTYPE html>

<html lang="es">

  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contactanos</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <?php include("encabezado.php"); ?>

    <br /><br /><br /><br />

    <!-- Contact Section -->
    <section id="contact">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-1">Contactanos</h2>
        <br />
        <h5 class="text-center text-uppercase text-secondary mb-2">Dejanos tu consulta o comentario</h5>
        <h6 class="text-center text-uppercase text-secondary mb-3">A la brevedad, te responderemos al correo electrónico indicado</h6>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <form name="sentMessage" id="contactForm" novalidate="novalidate" action="enviaCorreo.php" method="post">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label title="etiqNombre">Nombre</label>
                  <input title="nombrecito" class="form-control" id="name" name="nombrecito" type="text" placeholder="Nombre" required="required" data-validation-required-message="Por favor, ingrese su nombre.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label title="etiqEmail">Email</label>
                  <input class="form-control" name="email" id="email" type="email" placeholder="Email" required="required" data-validation-required-message="Por favor, ingrese su correo electrónico.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label title="etiqTelefono">Teléfono</label>
                  <input class="form-control" name="phone" id="phone" type="tel" placeholder="Tel&eacute;fono" required="required" data-validation-required-message="Por favor, ingrese su número de teléfono.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label title="etiqMensaje">Mensaje</label>
                  <textarea class="form-control" name="message" id="message" rows="5" placeholder="Mensaje" required="required" data-validation-required-message="Debe escribir un mensaje."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Enviar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <?php include("pieDePagina.php"); ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>
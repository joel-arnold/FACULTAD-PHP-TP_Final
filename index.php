<?php session_start(); ?>
<!DOCTYPE html>

<html lang="es">

  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema Académico</title>

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

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="img/profile.png" alt="">
        <h1 class="text-uppercase mb-0">Bienvenido al Sistema Academico</h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">Gestión integral de su institución educativa.</h2>
      </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">NOVEDADES</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <h6 class="text-secondary text-center text-uppercase mb-0">Colación de alumnos 2017-2018</h6>
              <img class="img-fluid" src="img/portfolio/graduados.png" alt="Colación de alumnos 2017-2018">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-2">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <h6 class="text-secondary text-center text-uppercase mb-0">La institución abrió sus puertas</h6>
              <img class="img-fluid" src="img/portfolio/sum1.png" alt="UTN abrió sus puertas">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-3">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <h6 class="text-secondary text-center text-uppercase mb-0">Jornada de emprendedores</h6>
              <img class="img-fluid" src="img/portfolio/emprendedores.png" alt="Emprendedores de la UTN">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">Acerca de nosotros</h2>
        <hr class="star-light mb-5">
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p class="lead">Somos una institución educativa pública que persigue los más altos estándares de calidad. Nuestro objetivo es formar ingenieros de calidad para acompañar el desarrollo de la Industria Nacional.</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead" > Nuestras carreras:
              <ul>
                <li>Ingeniería en Sistemas de Información</li>
                <li>Ingeniería Química</li>
                <li>Ingeniería Civil</li>
                <li>Ingeniería Mecánica</li>
              </ul>
            </p>
          </div>
        </div>
        <div class="text-center mt-4">
          <a class="btn btn-xl btn-outline-light" href="contacto.php">
            <i class="fas fa-envelope mr-2"></i>
            ¡Contactanos y enterate de como podés formar parte de nuestra institución!
          </a>
        </div>
      </div>
    </section>

    <?php include("pieDePagina.php"); ?>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Portfolio Modals -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Actos de Colación de Grados 2017 - 2018</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/graduados.png" alt="Graduados">
              <p class="mb-5">Invitamos a la comunidad educativa a los Actos de Colación de Grados que se realizarán en el SUM de la Facultad (Zeballos 1341), de acuerdo al siguiente cronograma:
              <br />
              28/11/2018 - 19:30 hs. - Ingeniería Civil, Ingeniería Eléctrica e Ingeniería Mecánica.
              <br />
              29/11/2018 - 19:30 hs. - Ingeniería Química y Técnico Universitario en Química.
              <br />
              30/11/2018 - 19:30 hs. - Ingeniería en Sistemas de Información y Analista Universitario de Sistemas.
              <br />
              Los programas ya están disponibles y puede retirarse en la Secretaría de Extensión Universitaria.
              <br />
              Informes: seu@frro.utn.edu.ar</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Cerrar noticia</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">La UTN abrió sus puertas</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/sum1.png" alt="SUM">
              <p class="mb-5">El Área Ingreso realizó el día viernes 26 de octubre, de 8:45 a 12:30 hs.,  en el edifico sede, Zeballos 1341, la jornada la Universidad abre sus puertas. En esta oportunidad, alrededor de 200 alumnos de ocho instituciones educativas visitaron los Departamentos Académicos, sus aulas, laboratorios, instalaciones y conversaron  sobre las Carreras de ingeniería que se dictan en nuestra facultad. Consultas: ingreso@frro.utn.edu.ar</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Cerrar noticia</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-3">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Actividad del Club de Emprendedores</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/emprendedores.png" alt="Emprendedores">
              <p class="mb-5">En el marco de la “Semana del Emprendedorimos” llega la “Noche de los Clubes” un encuentro en paralelo con todos los clubes del país. Se va a realizar el día 15 de Noviembre de 15:00 a 17:30 horas en el Club de Emprendedores de Rosario (San Martin 1080, Esq San Juan)   Vamos a contar con una actividad de Networking: Que el objetivo de la misma es que todos los actores reconozcan el potencial que tienen como grupo a partir de la colaborar con las necesidades del otro. La misma será moderada por un formador de Academia. Vamos a contar para esta con la presencia de Ivo Kraljev y Gabriel Freites, creadores de Arbanit Fellow, que nos va a contar su recorrido por el club y su experiencia.   También queremos que sean parte de la final de 18:00 a 20:00 de la “Competencia de planes de negocios” ,es una propuesta organizada por la Municipalidad de Rosario, a través de la Secretaría de Producción, JCI Rosario, la Agencia de Desarrollo Región Rosario, ENDEAVOR Rosario, el Gobierno de Santa Fe, a través del Ministerio de Ciencia, Tecnología e Innovación Productiva de Santa Fe y del Ministerio de la Producción, la Universidad Nacional de Rosario, Universidad Abierta Interamericana y la Aceleradora Bio.r. Su finalidad fue apoyar y capacitar a emprendedores para transformar sus ideas y proyectos de negocios en emprendimientos sostenibles, a través de un proceso continuo de aprendizaje e intercambio, en un plan de negocio.    Los participantes después de un año de trabajo, podrá saber quién es el ganador y queremos que estés presente junto a ellos.   Después de un año lleno de actividades y encuentros, los esperamos a todos para compartir un cóctel de bebida y comida en lo que va a ser la última actividad del Club de Emprendedores. ¡Los esperamos a todos!</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Cerrar noticia</a>
            </div>
          </div>
        </div>
      </div>
    </div>

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
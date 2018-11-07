<<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

    <title>Alta Alumnos</title>

    
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
<body>
    <?php
        include("conexion.php");

        $nom_apel = $_POST['nomyape'];
        $email = $_POST['email'];
        $direc = $_POST['direccion'];
        $fec_nac = $_POST['fecha_nac'];
        $telefono = $_POST['telefono'];
        $tipo_usu = $_POST['tipoUsuario'];
        $contra = $_POST['password'];
       

        $vSQL = "insert into usuario (nombre_apellido, email, direccion, telefono, fecha_nacimiento, tipo_usuario, pass)
        values ('$nom_apel', '$email', '$direc', '$telefono','$fec_nac', '$tipo_usu', '$contra')";

        mysqli_query($link,$vSQL) or die(mysqli_error($link));

        header("Location:menuABMAlumnos.php");

        mysqli_close($link);



    ?>
</body>
</html>
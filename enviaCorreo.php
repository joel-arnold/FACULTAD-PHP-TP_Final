<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Contacto</title>
</head>

<body>
    <?php
        $nombre = $_POST['nombrecito'];
        $fecha=date("d-m-Y");
        $hora= date("H :i:s");
        $correoDestino="joel.arnold.ar@gmail.com";
        $telefono = $_POST['phone'];
        $asunto="Contacto de ".$nombre." a través la web.";
        $correoEmisor=$_POST['email'];
        $comentario = $_POST['message'];
        $cuerpoMensaje= "
        \n
        Nombre: $nombre\n
        Email: $correoEmisor\n
        Teléfono: $telefono\n
        Consulta: $comentario\n
        Enviado: $fecha a las $hora\n
        \n
        ";

        //ini_set("SMTP", "smtp.gmail.com");
        //ini_set("sendmail_from", "joel.arnold.ar@gmail.com");
        //ini_set("smtp_port", "587");

        mail($correoDestino, $asunto, $cuerpoMensaje, $correoEmisor);
        echo "Consulta enviada. Gracias por contactarnos.";

    ?>
</body>

</html>
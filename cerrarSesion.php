<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Cierre de sesión</title>
</head>

<body>
<?php
    session_start();
        if(!isset($_SESSION['legajo'])){
            echo "<script>
                    alert('No hay sesion iniciada');
                    window.location.href='index.php';
                 </script>";
        }
        else{
            session_destroy();
            header("Location:index.php");
        }
?>
</body>

</html>
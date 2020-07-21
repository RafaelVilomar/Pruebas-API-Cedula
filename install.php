<?php
    if($_POST){
        $con = mysqli_connect($_POST['DB_HOST'], $_POST['DB_USER'], $_POST['DB_PASS']) or die(
            "<script>
                alert('Conexion Invalida, se requiere que vuelva a conectar');
                window.location = 'install.php';   
            </script>"
        );

        mysqli_query($con, "DROP DATABASE`{$_POST['DB_NAME']}`");
        mysqli_query($con, "CREATE DATABASE `{$_POST['DB_NAME']}`");
        mysqli_query($con, "use `{$_POST['DB_NAME']}`");
        mysqli_query($con, "CREATE TABLE IF NOT EXISTS `partidarios` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `nombre/s` varchar(50) NOT NULL,
          `apellido/s` varchar(50) NOT NULL,
          `cedula` varchar(15) NOT NULL,
          `fechaNacimiento` datetime DEFAULT CURRENT_TIMESTAMP,
          `ciudad` varchar(100) NOT NULL,
          `zodiaco` varchar(15) NOT NULL,
          `foto` varchar(150) NOT NULL,
          `edad` int(3) NOT NULL,
          PRIMARY KEY (`id`),
          UNIQUE KEY `cedula` (`cedula`)
        ) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
        ");        

        $archivo = "<?php
        define('servidor', '{$_POST['DB_HOST']}');
        define('usuario', '{$_POST['DB_USER']}');
        define('pass', '{$_POST['DB_PASS']}');
        define('dbname', '{$_POST['DB_NAME']}');
        ";
        file_put_contents('database/config_x.php', $archivo);
        echo "<script>
            window.location = 'index.php';
        </script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Instalar Base de Datos</title>
</head>
<body>
    <div class="container">
        <h3>Instalador</h3>
        <p>Configura tu app</p>
        <form action="" method="POST">
            <div class="form-group">
                <label >Servidor:</label>
                <input type="text" class="form-control" id="inpNombre" placeholder="" name="DB_HOST">
            </div>

            <div class="form-group">
                <label >Usuario:</label>
                <input type="text" class="form-control" id="inpNombre" placeholder="" name="DB_USER">
            </div>

            <div class="form-group">
                <label >Clave:</label>
                <input type="text" class="form-control" id="inpNombre" placeholder="" name="DB_PASS">
            </div>

            <div class="form-group">
                <label >Base de Datos:</label>
                <input type="text" class="form-control" id="inpNombre" placeholder="" name="DB_NAME">
            </div>

            <div class="text-center">
                <button type="submit">Guardar</button>
            </div>
        </form>
    
    </div>
</body>
</html>
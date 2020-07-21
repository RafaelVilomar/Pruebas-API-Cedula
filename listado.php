<?php 
    require_once ('includes/header.php');
    require_once ('database/conexion.php');
    require_once ('database/config_x.php');
    require_once ('core.php');
?>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand">Partido de Desarrolladores Dominicanos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-item nav-link" href="index.php">Agregar <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="buscar.php">Buscar</a>
            <a class="nav-item nav-link active" href="listado.php">Listado</a>
            <a class="nav-item nav-link" href="ciudad.php">Ciudades</a>
            </div>
        </div>
    </nav>
</header>
<div class="container contenedor">
    <div>
        <a href="reporte.php" target="_blank"><button type="button" class="btn btn-primary btn-lg btn-block">Generar Reporte (PDF)</button></a>
    </div>
    <table class="table table-striped">
        <thead class="">
            <tr>
                <th scope="col">Nombre/s</th>
                <th scope="col">Apellido/s</th>
                <th scope="col">Cédula</th>
                <th scope="col">Fecha Nacimiento</th>
                <th scope="col">Edad</th>
                <th scope="col">Ciudad</th>
                <th scope="col">Zodiaco</th>
                <th scope="col">Foto</th>
            </tr>
        </thead>
        <?php
            $sql="SELECT * FROM `partidarios`";
            $r = conexion::consulta($sql);

            while($cargar=mysqli_fetch_array($r)){
        ?>
        <tr>
            <td><?php echo $cargar['nombre/s'] ?></td>
            <td><?php echo $cargar['apellido/s'] ?></td>
            <td><?php echo $cargar['cedula'] ?></td>
            <td><?php echo $cargar['fechaNacimiento'] ?></td>
            <td><?php echo $cargar['edad'] ?></td>
            <td><?php echo $cargar['ciudad'] ?></td>
            <td><?php echo $cargar['zodiaco'] ?></td>
            <td><img class="listadoImg" src="<?php echo $cargar['foto'] ?>" alt=""></td>
        </tr>
        <?php
            }
        ?>
    </table>
</div>
<?php include_once 'includes/footer.php'?>


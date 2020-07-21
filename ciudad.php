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
            <a class="nav-item nav-link" href="listado.php">Listado</a>
            <a class="nav-item nav-link active" href="ciudad.php">Ciudades</a>
            </div>
        </div>
    </nav>
</header>
    <div class="container contenedor">
    <table class="table table-striped">
        <thead class="">
            <tr>
                <th scope="col">Ciudad</th>
                <th scope="col">Cant. Partidarios</th>
            </tr>
        </thead>
        <?php
            $sql="SELECT `ciudad`, COUNT(`ciudad`) FROM `partidarios` GROUP BY ciudad";
            $r = conexion::consulta($sql);

            while($cargar=mysqli_fetch_array($r)){
        ?>
        <tr>
            <td><?php echo $cargar[0] ?></td>
            <td><?php echo $cargar[1] ?></td>
        </tr>
        <?php
            }
        ?>
    </table>
</div>

<?php include_once 'includes/footer.php'?>
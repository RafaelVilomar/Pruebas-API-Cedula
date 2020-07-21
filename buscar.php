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
            <a class="nav-item nav-link active" href="buscar.php">Buscar</a>
            <a class="nav-item nav-link" href="listado.php">Listado</a>
            <a class="nav-item nav-link" href="ciudad.php">Ciudades</a>
            </div>
        </div>
    </nav>
</header>
    <!---Contenedor de datos------------------>
    <div class="contenedor">      
                <!-------Boton Consultar---------->
                <div class="btn1">
                    <button class="btn btn-info btn-lg btn1" type="button" data-toggle="modal" data-target="#consultar">Buscar una persona</button>
                </div>
                
                <form action="" method="GET" id="frm1">
                <?php if ($_GET){
                    $sql="SELECT * FROM partidarios WHERE `cedula` = '{$_GET['cedula']}'";
                    $r = conexion::consulta($sql);
                    $cargar=mysqli_fetch_array($r);
                    //<!-----Alerta en caso de Error----------->
                    if (isset($_GET['cedula']) && isset($cargar['ciudad'])){?> 
                        <div class="row">
                            <!-----Datos de la consulta------------->
                            <div class="datos col-md-8">
                                <div class="row datos2">
                                    <div class="col-auto">
                                        <ul class="list-group list-group-flush ulDatos">
                                            <li class="list-group-item h5 liDatos">Nombre/s</li>
                                            <li class="list-group-item h5 liDatos">Apellido/s</li>
                                            <li class="list-group-item h5 liDatos">Cédula</li>
                                            <li class="list-group-item h5 liDatos">Fecha de Nacimiento</li>
                                            <li class="list-group-item h5 liDatos">Edad</li>
                                            <li class="list-group-item h5 liDatos">Lugar de Nacimiento</li>
                                            <li class="list-group-item h5 liDatos">Zodiaco</li>
                                        </ul>
                                    </div>
                                    <div class="col-auto ulDatos">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item liDatos"><?php echo $cargar['nombre/s'] ?></li>
                                            <li class="list-group-item liDatos"><?php echo $cargar['apellido/s'] ?></li>
                                            <li class="list-group-item liDatos"><?php echo $cargar['cedula'] ?></li>
                                            <li class="list-group-item liDatos"><?php echo $cargar['fechaNacimiento'] ?></li>
                                            <li class="list-group-item liDatos"><?php echo $cargar['edad'] ?></li>
                                            <li class="list-group-item liDatos"><?php echo $cargar['ciudad'] ?></li>
                                            <li class="list-group-item liDatos"><?php echo $cargar['zodiaco'] ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--------Imagen de la consulta-------------->
                            <div class="col-md-4 imagen">
                                <img src="<?php echo $cargar['foto'] ?>" alt=" Consulta a una persona para ver su foto">
                            </div>
                            <!-------Boton Guardar---------->
                            <div class="btn1">
                                <button class="btn btn-success btn-lg btn1" name="guardar" id="guardar" type="submit">Guardar</button>
                            </div>
                        </div>

                        <input type="hidden" name="nombre" value="<?php echo $d->Nombres;?>">
                        <input type="hidden" name="apellido" value="<?php echo $d->Apellido1;?> <?php echo $d->Apellido2;?>">
                        <input type="hidden" name="cedula2" value="<?php echo $d->Cedula;?>">
                        <input type="hidden" name="fechaNacimiento" value="<?php echo $d->FechaNacimiento;?>">
                        <input type="hidden" name="edad" value="<?php echo $edad;?>">
                        <input type="hidden" name="lugarNacimiento" value="<?php echo $d->LugarNacimiento;?>">
                        <input type="hidden" name="foto" value="<?php echo $d->Foto;?>">
                    
                        <?php }
                        else{//EN CASO DE ERROR?>
                            <div class="alertaError">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    Ha ocurrido un error al consultar la cédula <strong><?=$_GET['cedula']?></strong>
                                    <br>Considere lo siguiente: 
                                    <br><ul>
                                        <li><i>Asegúrese de que la cédula sea correcta</i></li>
                                    </ul>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        <?php
                        }?>
                    <?php
                    }?>
                <!---Fin de alerta en caso de Error----------->
           

                <!-- Modal -->
                <div class="modal fade" id="consultar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalTitle">Buscar un Partidario</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                                <div class="modal-body">
                                    <div>
                                        <input class="form-control text-center" type="text" placeholder="Ingrese la Cedula" name="cedula" id="cedula" onKeyPress="return soloNumeros(event)">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Consultar</button>
                                </div>
                        </div>
                    </div>
                </div>
                <!--Fin de Modal----------->
            </form>
        </div>
        <!-----------Fin del contenedor de datos------------------------>

<?php include_once 'includes/footer.php'; ?>

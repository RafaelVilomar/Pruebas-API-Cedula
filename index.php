<?php 
    require_once ('includes/header.php');
    require_once ('database/conexion.php');
    require_once ('database/config_x.php');
    require_once ('core.php');
    instalador();

    if($_GET){
        $cedula = $_GET['cedula'];

        //Cunsulta api
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://173.249.49.169:88/api/test/consulta/{$cedula}");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);  

        $d = json_decode($output);
        
        $edad = calculaedad($d->FechaNacimiento);

    }
    if ($_POST){
        $p=new stdClass();
        $p->nombre = $_POST['nombre'];
        $p->apellido = $_POST['apellido'];
        $p->cedula = $_POST['cedula'];
        $p->fechaNacimiento = $_POST['fechaNacimiento'];
        $p->edad = $_POST['edad'];
        $p->lugarNacimiento = $_POST['lugarNacimiento'];
        $p->foto = $_POST['foto'];

        saveDato($p);
    }
?>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand">Partido de Desarrolladores Dominicanos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-item nav-link active" href="index.php">Agregar <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="buscar.php">Buscar</a>
            <a class="nav-item nav-link" href="listado.php">Listado</a>
            <a class="nav-item nav-link" href="ciudad.php">Ciudades</a>
            </div>
        </div>
    </nav>
</header>
    <!---Contenedor de datos------------------>
    <div class="contenedor">
            <form action="" method="POST" id="frm1">        
                <!-------Boton Consultar---------->
                <div class="">
                    <button class="btn btn-outline-info btn-lg btn1" type="button" data-toggle="modal" data-target="#consultar">Consultar una cédula</button>
                </div>
                <!-----Alerta en caso de Error----------->
                    <?php if (isset($_GET['cedula']) && is_null($d->Cedula)):?>
                        <div class="alertaError">
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                Ha ocurrido un error al consultar la cédula <strong><?=$cedula?></strong>
                                <br>Considere lo siguiente: 
                                <br><ul>
                                    <li><i>Asegúrese de que la cédula sea correcta</i></li>
                                </ul>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    <?php endif;?>
                <!---Fin de alerta en caso de Error----------->
                <div class="row">
                <?php if (isset($d->Cedula)):?>
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
                                    <li class="list-group-item h5 liDatos" hidden>Edad</li>
                                </ul>
                            </div>
                            <div class="col-auto ulDatos">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item liDatos"><?=isset($d->Nombres)? $d->Nombres:"";?></li>
                                    <li class="list-group-item liDatos"><?=isset($d->Apellido1)? $d->Apellido1:"";?> <?=isset($d->Apellido2)? $d->Apellido2:"";?></li>
                                    <li class="list-group-item liDatos"><?=isset($d->Cedula)? $d->Cedula:"";?></li>
                                    <li class="list-group-item liDatos"><?=isset($d->FechaNacimiento)? $d->FechaNacimiento:"";?></li>
                                    <li class="list-group-item liDatos"><?=isset($edad)&& $edad<150? $edad:"";?></li>
                                    <li class="list-group-item liDatos"><?=isset($d->LugarNacimiento)? $d->LugarNacimiento:"";?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--------Imagen de la consulta-------------->
                    <div class="col-md-4 imagen">
                        <img src="<?=$d->Foto; ?>" alt=" Consulta a una persona para ver su foto">
                    </div>
                    <!-------Boton Guardar---------->
                    <div class="btn1">
                        <button class="btn btn-success btn-lg btn1" name="guardar" id="guardar" type="submit">Guardar</button>
                    </div>
                </div>
                <!--<input type="hidden" name="nombre" value="<?=isset($d->Nombres)? $d->Nombres:"";?>">
                <input type="hidden" name="apellido" value="<?=isset($d->Apellido1)? $d->Apellido1:"";?> <?=isset($d->Apellido2)? $d->Apellido2:"";?>">
                <input type="hidden" name="cedula" value="<?=isset($d->Cedula)? $d->Cedula:"";?>">
                <input type="hidden" name="fechaNacimiento" value="<?=isset($d->FechaNacimiento)? $d->FechaNacimiento:"";?>">
                <input type="hidden" name="edad" value="<?=isset($edad)&& $edad<150? $edad:"";?>">
                <input type="hidden" name="lugarNacimiento" value="<?=isset($d->LugarNacimiento)? $d->LugarNacimiento:"";?>">
                <input type="hidden" name="foto" value="<?=isset($d->Foto)? $d->Foto:"";?>">-->

                <input type="hidden" name="nombre" value="<?php echo $d->Nombres;?>">
                <input type="hidden" name="apellido" value="<?php echo $d->Apellido1;?> <?php echo $d->Apellido2;?>">
                <input type="hidden" name="cedula" value="<?php echo $d->Cedula;?>">
                <input type="hidden" name="fechaNacimiento" value="<?php echo $d->FechaNacimiento;?>">
                <input type="hidden" name="edad" value="<?php echo $edad;?>">
                <input type="hidden" name="lugarNacimiento" value="<?php echo $d->LugarNacimiento;?>">
                <input type="hidden" name="foto" value="<?php echo $d->Foto;?>">
            
                <?php endif;?>
            </form>

                <!-- Modal -->
            <form action="" method="GET" id="frm2">
                <div class="modal fade" id="consultar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalTitle">Consultar cédula</h5>
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


<?php include_once 'includes/footer.php' ?>


<?php 
    require ('includes/header.php');
    require ('database/conexion.php');
    require ('database/config_x.php');
    require ('core.php');?>

<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
<!------------------------------------------1-------------------------------------------------->
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <!---Contenedor de datos------------------>
        <div class="contenedor">
            <form action="" method="POST" id="frm1">        
                <!-------Boton Consultar---------->
                <div class="btn1">
                    <button class="btn btn-outline-info btn-lg btn1" type="button" data-toggle="modal" data-target="#consultar">Buscar una persona</button>
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

  </div>
  <!--------------------------------------------2---------------------------------------->
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
</div>

<?php include 'includes/footer.php' ?>
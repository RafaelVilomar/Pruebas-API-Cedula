<?php 
    //require_once ('includes/header.php');
    require_once ('database/conexion.php');
    require_once ('database/config_x.php');
    //require_once ('core.php');
    require ('plantilla.php');

	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();

    $query = "SELECT * FROM `partidarios` WHERE `zodiaco` = 'Geminis'";
	$resultado1 = conexion::consulta($query);
        $pdf->SetFillColor(232,232,232);
        $pdf->SetFont('Arial','I',10);
        $pdf->cell('',10,'Signo Zodiacal: Geminis',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(35, 6, 'Nombre/s',1,0,'C',1);
        $pdf->Cell(35, 6, 'Apellido/s',1,0,'C',1);
        $pdf->Cell(20, 6, 'Cedula',1,0,'C',1);
        $pdf->Cell(35, 6, 'Fecha de Nacimiento',1,0,'C',1);
        $pdf->Cell(10, 6, 'Edad',1,0,'C',1);
        $pdf->Cell(45, 6, 'Ciudad',1,0,'C',1);
        $pdf->Cell(15, 6, 'Zodiaco',1,1,'C',1);
        
        $pdf->SetFont('Arial','',8);
        
        while($row = $resultado1->fetch_assoc())
        {
            $pdf->Cell(35,12,utf8_decode($row['nombre/s']),1,0,'C');
            $pdf->Cell(35,12,$row['apellido/s'],1,0,'C');
            $pdf->Cell(20,12,utf8_decode($row['cedula']),1,0,'C');
            $pdf->Cell(35,12,utf8_decode($row['fechaNacimiento']),1,0,'C');
            $pdf->Cell(10,12,$row['edad'],1,0,'C');
            $pdf->Cell(45,12,utf8_decode($row['ciudad']),1,0,'C');
            $pdf->Cell(15,12,utf8_decode($row['zodiaco']),1,1,'C');
        }


    
	$query = "SELECT * FROM `partidarios` WHERE `zodiaco` = 'Acuario'";
	$resultado = conexion::consulta($query);
        $pdf->SetFillColor(232,232,232);
        $pdf->SetFont('Arial','I',10);
        $pdf->cell('',10,'Signo Zodiacal: Acuario',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(35, 6, 'Nombre/s',1,0,'C',1);
        $pdf->Cell(35, 6, 'Apellido/s',1,0,'C',1);
        $pdf->Cell(20, 6, 'Cedula',1,0,'C',1);
        $pdf->Cell(35, 6, 'Fecha de Nacimiento',1,0,'C',1);
        $pdf->Cell(10, 6, 'Edad',1,0,'C',1);
        $pdf->Cell(45, 6, 'Ciudad',1,0,'C',1);
        $pdf->Cell(15, 6, 'Zodiaco',1,1,'C',1);
        
        $pdf->SetFont('Arial','',8);
        
        while($row = $resultado->fetch_assoc())
        {
            $pdf->Cell(35,12,utf8_decode($row['nombre/s']),1,0,'C');
            $pdf->Cell(35,12,$row['apellido/s'],1,0,'C');
            $pdf->Cell(20,12,utf8_decode($row['cedula']),1,0,'C');
            $pdf->Cell(35,12,utf8_decode($row['fechaNacimiento']),1,0,'C');
            $pdf->Cell(10,12,$row['edad'],1,0,'C');
            $pdf->Cell(45,12,utf8_decode($row['ciudad']),1,0,'C');
            $pdf->Cell(15,12,utf8_decode($row['zodiaco']),1,1,'C');
        }


    $query = "SELECT * FROM `partidarios` WHERE `zodiaco` = 'Piscis'";
	$resultado = conexion::consulta($query);
        $pdf->SetFillColor(232,232,232);
        $pdf->SetFont('Arial','I',10);
        $pdf->cell('',10,'Signo Zodiacal: Piscis',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(35, 6, 'Nombre/s',1,0,'C',1);
        $pdf->Cell(35, 6, 'Apellido/s',1,0,'C',1);
        $pdf->Cell(20, 6, 'Cedula',1,0,'C',1);
        $pdf->Cell(35, 6, 'Fecha de Nacimiento',1,0,'C',1);
        $pdf->Cell(10, 6, 'Edad',1,0,'C',1);
        $pdf->Cell(45, 6, 'Ciudad',1,0,'C',1);
        $pdf->Cell(15, 6, 'Zodiaco',1,1,'C',1);
        
        $pdf->SetFont('Arial','',8);
        
        while($row = $resultado->fetch_assoc())
        {
            $pdf->Cell(35,12,utf8_decode($row['nombre/s']),1,0,'C');
            $pdf->Cell(35,12,$row['apellido/s'],1,0,'C');
            $pdf->Cell(20,12,utf8_decode($row['cedula']),1,0,'C');
            $pdf->Cell(35,12,utf8_decode($row['fechaNacimiento']),1,0,'C');
            $pdf->Cell(10,12,$row['edad'],1,0,'C');
            $pdf->Cell(45,12,utf8_decode($row['ciudad']),1,0,'C');
            $pdf->Cell(15,12,utf8_decode($row['zodiaco']),1,1,'C');
        }


    $query = "SELECT * FROM `partidarios` WHERE `zodiaco` = 'Aries'";
	$resultado = conexion::consulta($query);
        $pdf->SetFillColor(232,232,232);
        $pdf->SetFont('Arial','I',10);
        $pdf->cell('',10,'Signo Zodiacal: Aries',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(35, 6, 'Nombre/s',1,0,'C',1);
        $pdf->Cell(35, 6, 'Apellido/s',1,0,'C',1);
        $pdf->Cell(20, 6, 'Cedula',1,0,'C',1);
        $pdf->Cell(35, 6, 'Fecha de Nacimiento',1,0,'C',1);
        $pdf->Cell(10, 6, 'Edad',1,0,'C',1);
        $pdf->Cell(45, 6, 'Ciudad',1,0,'C',1);
        $pdf->Cell(15, 6, 'Zodiaco',1,1,'C',1);
        
        $pdf->SetFont('Arial','',8);
        
        while($row = $resultado->fetch_assoc())
        {
            $pdf->Cell(35,12,utf8_decode($row['nombre/s']),1,0,'C');
            $pdf->Cell(35,12,$row['apellido/s'],1,0,'C');
            $pdf->Cell(20,12,utf8_decode($row['cedula']),1,0,'C');
            $pdf->Cell(35,12,utf8_decode($row['fechaNacimiento']),1,0,'C');
            $pdf->Cell(10,12,$row['edad'],1,0,'C');
            $pdf->Cell(45,12,utf8_decode($row['ciudad']),1,0,'C');
            $pdf->Cell(15,12,utf8_decode($row['zodiaco']),1,1,'C');
        }
    

    $query = "SELECT * FROM `partidarios` WHERE `zodiaco` = 'Tauro'";
	$resultado = conexion::consulta($query);
        $pdf->SetFillColor(232,232,232);
        $pdf->SetFont('Arial','I',10);
        $pdf->cell('',10,'Signo Zodiacal: Tauro',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(35, 6, 'Nombre/s',1,0,'C',1);
        $pdf->Cell(35, 6, 'Apellido/s',1,0,'C',1);
        $pdf->Cell(20, 6, 'Cedula',1,0,'C',1);
        $pdf->Cell(35, 6, 'Fecha de Nacimiento',1,0,'C',1);
        $pdf->Cell(10, 6, 'Edad',1,0,'C',1);
        $pdf->Cell(45, 6, 'Ciudad',1,0,'C',1);
        $pdf->Cell(15, 6, 'Zodiaco',1,1,'C',1);
        
        $pdf->SetFont('Arial','',8);
        
        while($row = $resultado->fetch_assoc())
        {
            $pdf->Cell(35,12,utf8_decode($row['nombre/s']),1,0,'C');
            $pdf->Cell(35,12,$row['apellido/s'],1,0,'C');
            $pdf->Cell(20,12,utf8_decode($row['cedula']),1,0,'C');
            $pdf->Cell(35,12,utf8_decode($row['fechaNacimiento']),1,0,'C');
            $pdf->Cell(10,12,$row['edad'],1,0,'C');
            $pdf->Cell(45,12,utf8_decode($row['ciudad']),1,0,'C');
            $pdf->Cell(15,12,utf8_decode($row['zodiaco']),1,1,'C');
        }





    $query = "SELECT * FROM `partidarios` WHERE `zodiaco` = 'Cancer'";
	$resultado = conexion::consulta($query);
        $pdf->SetFillColor(232,232,232);
        $pdf->SetFont('Arial','I',10);
        $pdf->cell('',10,'Signo Zodiacal: Cáncer',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(35, 6, 'Nombre/s',1,0,'C',1);
        $pdf->Cell(35, 6, 'Apellido/s',1,0,'C',1);
        $pdf->Cell(20, 6, 'Cedula',1,0,'C',1);
        $pdf->Cell(35, 6, 'Fecha de Nacimiento',1,0,'C',1);
        $pdf->Cell(10, 6, 'Edad',1,0,'C',1);
        $pdf->Cell(45, 6, 'Ciudad',1,0,'C',1);
        $pdf->Cell(15, 6, 'Zodiaco',1,1,'C',1);
        
        $pdf->SetFont('Arial','',8);
        
        while($row = $resultado->fetch_assoc())
        {
            $pdf->Cell(35,12,utf8_decode($row['nombre/s']),1,0,'C');
            $pdf->Cell(35,12,$row['apellido/s'],1,0,'C');
            $pdf->Cell(20,12,utf8_decode($row['cedula']),1,0,'C');
            $pdf->Cell(35,12,utf8_decode($row['fechaNacimiento']),1,0,'C');
            $pdf->Cell(10,12,$row['edad'],1,0,'C');
            $pdf->Cell(45,12,utf8_decode($row['ciudad']),1,0,'C');
            $pdf->Cell(15,12,utf8_decode($row['zodiaco']),1,1,'C');
        }



    $query = "SELECT * FROM `partidarios` WHERE `zodiaco` = 'Leo'";
	$resultado = conexion::consulta($query);
        $pdf->SetFillColor(232,232,232);
        $pdf->SetFont('Arial','I',10);
        $pdf->cell('',10,'Signo Zodiacal: Leo',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(35, 6, 'Nombre/s',1,0,'C',1);
        $pdf->Cell(35, 6, 'Apellido/s',1,0,'C',1);
        $pdf->Cell(20, 6, 'Cedula',1,0,'C',1);
        $pdf->Cell(35, 6, 'Fecha de Nacimiento',1,0,'C',1);
        $pdf->Cell(10, 6, 'Edad',1,0,'C',1);
        $pdf->Cell(45, 6, 'Ciudad',1,0,'C',1);
        $pdf->Cell(15, 6, 'Zodiaco',1,1,'C',1);
        
        $pdf->SetFont('Arial','',8);
        
        while($row = $resultado->fetch_assoc())
        {
            $pdf->Cell(35,12,utf8_decode($row['nombre/s']),1,0,'C');
            $pdf->Cell(35,12,$row['apellido/s'],1,0,'C');
            $pdf->Cell(20,12,utf8_decode($row['cedula']),1,0,'C');
            $pdf->Cell(35,12,utf8_decode($row['fechaNacimiento']),1,0,'C');
            $pdf->Cell(10,12,$row['edad'],1,0,'C');
            $pdf->Cell(45,12,utf8_decode($row['ciudad']),1,0,'C');
            $pdf->Cell(15,12,utf8_decode($row['zodiaco']),1,1,'C');
        }



    $query = "SELECT * FROM `partidarios` WHERE `zodiaco` = 'Virgo'";
	$resultado = conexion::consulta($query);
        $pdf->SetFillColor(232,232,232);
        $pdf->SetFont('Arial','I',10);
        $pdf->cell('',10,'Signo Zodiacal: Virgo',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(35, 6, 'Nombre/s',1,0,'C',1);
        $pdf->Cell(35, 6, 'Apellido/s',1,0,'C',1);
        $pdf->Cell(20, 6, 'Cedula',1,0,'C',1);
        $pdf->Cell(35, 6, 'Fecha de Nacimiento',1,0,'C',1);
        $pdf->Cell(10, 6, 'Edad',1,0,'C',1);
        $pdf->Cell(45, 6, 'Ciudad',1,0,'C',1);
        $pdf->Cell(15, 6, 'Zodiaco',1,1,'C',1);
        
        $pdf->SetFont('Arial','',8);
        
        while($row = $resultado->fetch_assoc())
        {
            $pdf->Cell(35,12,utf8_decode($row['nombre/s']),1,0,'C');
            $pdf->Cell(35,12,$row['apellido/s'],1,0,'C');
            $pdf->Cell(20,12,utf8_decode($row['cedula']),1,0,'C');
            $pdf->Cell(35,12,utf8_decode($row['fechaNacimiento']),1,0,'C');
            $pdf->Cell(10,12,$row['edad'],1,0,'C');
            $pdf->Cell(45,12,utf8_decode($row['ciudad']),1,0,'C');
            $pdf->Cell(15,12,utf8_decode($row['zodiaco']),1,1,'C');
        }
    



    $query = "SELECT * FROM `partidarios` WHERE `zodiaco` = 'Libra'";
	$resultado = conexion::consulta($query);
        $pdf->SetFillColor(232,232,232);
        $pdf->SetFont('Arial','I',10);
        $pdf->cell('',10,'Signo Zodiacal: Libra',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(35, 6, 'Nombre/s',1,0,'C',1);
        $pdf->Cell(35, 6, 'Apellido/s',1,0,'C',1);
        $pdf->Cell(20, 6, 'Cedula',1,0,'C',1);
        $pdf->Cell(35, 6, 'Fecha de Nacimiento',1,0,'C',1);
        $pdf->Cell(10, 6, 'Edad',1,0,'C',1);
        $pdf->Cell(45, 6, 'Ciudad',1,0,'C',1);
        $pdf->Cell(15, 6, 'Zodiaco',1,1,'C',1);
        
        $pdf->SetFont('Arial','',8);
        
        while($row = $resultado->fetch_assoc())
        {
            $pdf->Cell(35,12,utf8_decode($row['nombre/s']),1,0,'C');
            $pdf->Cell(35,12,$row['apellido/s'],1,0,'C');
            $pdf->Cell(20,12,utf8_decode($row['cedula']),1,0,'C');
            $pdf->Cell(35,12,utf8_decode($row['fechaNacimiento']),1,0,'C');
            $pdf->Cell(10,12,$row['edad'],1,0,'C');
            $pdf->Cell(45,12,utf8_decode($row['ciudad']),1,0,'C');
            $pdf->Cell(15,12,utf8_decode($row['zodiaco']),1,1,'C');
        }



    $query = "SELECT * FROM `partidarios` WHERE `zodiaco` = 'Escorpio'";
	$resultado = conexion::consulta($query);
        $pdf->SetFillColor(232,232,232);
        $pdf->SetFont('Arial','I',10);
        $pdf->cell('',10,'Signo Zodiacal: Escorpio',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(35, 6, 'Nombre/s',1,0,'C',1);
        $pdf->Cell(35, 6, 'Apellido/s',1,0,'C',1);
        $pdf->Cell(20, 6, 'Cedula',1,0,'C',1);
        $pdf->Cell(35, 6, 'Fecha de Nacimiento',1,0,'C',1);
        $pdf->Cell(10, 6, 'Edad',1,0,'C',1);
        $pdf->Cell(45, 6, 'Ciudad',1,0,'C',1);
        $pdf->Cell(15, 6, 'Zodiaco',1,1,'C',1);
        
        $pdf->SetFont('Arial','',8);
        
        while($row = $resultado->fetch_assoc())
        {
            $pdf->Cell(35,12,utf8_decode($row['nombre/s']),1,0,'C');
            $pdf->Cell(35,12,$row['apellido/s'],1,0,'C');
            $pdf->Cell(20,12,utf8_decode($row['cedula']),1,0,'C');
            $pdf->Cell(35,12,utf8_decode($row['fechaNacimiento']),1,0,'C');
            $pdf->Cell(10,12,$row['edad'],1,0,'C');
            $pdf->Cell(45,12,utf8_decode($row['ciudad']),1,0,'C');
            $pdf->Cell(15,12,utf8_decode($row['zodiaco']),1,1,'C');
        }



    $query = "SELECT * FROM `partidarios` WHERE `zodiaco` = 'Sagitario'";
	$resultado = conexion::consulta($query);
        $pdf->SetFillColor(232,232,232);
        $pdf->SetFont('Arial','I',10);
        $pdf->cell('',10,'Signo Zodiacal: Sagitario',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(35, 6, 'Nombre/s',1,0,'C',1);
        $pdf->Cell(35, 6, 'Apellido/s',1,0,'C',1);
        $pdf->Cell(20, 6, 'Cedula',1,0,'C',1);
        $pdf->Cell(35, 6, 'Fecha de Nacimiento',1,0,'C',1);
        $pdf->Cell(10, 6, 'Edad',1,0,'C',1);
        $pdf->Cell(45, 6, 'Ciudad',1,0,'C',1);
        $pdf->Cell(15, 6, 'Zodiaco',1,1,'C',1);
        
        $pdf->SetFont('Arial','',8);
        
        while($row = $resultado->fetch_assoc())
        {
            $pdf->Cell(35,12,utf8_decode($row['nombre/s']),1,0,'C');
            $pdf->Cell(35,12,$row['apellido/s'],1,0,'C');
            $pdf->Cell(20,12,utf8_decode($row['cedula']),1,0,'C');
            $pdf->Cell(35,12,utf8_decode($row['fechaNacimiento']),1,0,'C');
            $pdf->Cell(10,12,$row['edad'],1,0,'C');
            $pdf->Cell(45,12,utf8_decode($row['ciudad']),1,0,'C');
            $pdf->Cell(15,12,utf8_decode($row['zodiaco']),1,1,'C');
        }


    $query = "SELECT * FROM `partidarios` WHERE `zodiaco` = 'Capricornio'";
	$resultado = conexion::consulta($query);
        $pdf->SetFillColor(232,232,232);
        $pdf->SetFont('Arial','I',10);
        $pdf->cell('',10,'Signo Zodiacal: Capricornio',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(35, 6, 'Nombre/s',1,0,'C',1);
        $pdf->Cell(35, 6, 'Apellido/s',1,0,'C',1);
        $pdf->Cell(20, 6, 'Cedula',1,0,'C',1);
        $pdf->Cell(35, 6, 'Fecha de Nacimiento',1,0,'C',1);
        $pdf->Cell(10, 6, 'Edad',1,0,'C',1);
        $pdf->Cell(45, 6, 'Ciudad',1,0,'C',1);
        $pdf->Cell(15, 6, 'Zodiaco',1,1,'C',1);
        
        $pdf->SetFont('Arial','',8);
        
        while($row = $resultado->fetch_assoc())
        {
            $pdf->Cell(35,12,utf8_decode($row['nombre/s']),1,0,'C');
            $pdf->Cell(35,12,$row['apellido/s'],1,0,'C');
            $pdf->Cell(20,12,utf8_decode($row['cedula']),1,0,'C');
            $pdf->Cell(35,12,utf8_decode($row['fechaNacimiento']),1,0,'C');
            $pdf->Cell(10,12,$row['edad'],1,0,'C');
            $pdf->Cell(45,12,utf8_decode($row['ciudad']),1,0,'C');
            $pdf->Cell(15,12,utf8_decode($row['zodiaco']),1,1,'C');
        }
        if(is_null($resultado)){
            $pdf->Cell('',12,"0 registros encontrados",0,0,'C');
        }
    
	$pdf->Output();
?>
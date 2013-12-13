<?php 
require_once ('conect.php');

  $nombre = $_POST['nombre'];
  $domicilio = $_POST['domicilio'];
   $telefono = $_POST['telefono'];
  $nombre_p = $_POST['nombre_p'];
   $habitacion = $_POST['habitacion'];
   $entrada = date("F j, Y, g:i a");
    echo $nombre;
	echo $domicilio;
	echo $habitacion;
	echo    $entrada;
	/*
conectar();

$consulta=" INSERT INTO contacto(ap, am, nombre,domicilio,colonia,cp,municipio,estado,pais,telefono,celular,radio,email,observaciones) 
VALUES ('$apPaterno','  $apMaterno','  $Nombre','$Domicilio', '$Colonia','$CP',' $Municipio','$Estado','$Pais','$Telefono',' $Celular', '$Radio',' $Correo','$Observaciones');";

mysql_query($consulta);

header('Location: guardardado.php');
*/
?>
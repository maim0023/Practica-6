<?php 
require_once ('conexion.php');

  $apMaterno = $_POST['apMaterno'];
  $apPaterno = $_POST['apPaterno'];
   $Nombre = $_POST['Nombre'];
  $Domicilio = $_POST['Domicilio'];
   $Colonia = $_POST['Colonia'];
  $CP = $_POST['CP'];
   $Municipio = $_POST['Municipio'];
  $Estado = $_POST['Estado'];
   $Pais = $_POST['Pais'];
  $Telefono = $_POST['Telefono'];
   $Radio = $_POST['Radio'];
  $Correo = $_POST['Correo'];
   $Celular = $_POST['Celular'];
  $Observaciones = $_POST['Observaciones'];  

 $conx = mysql_connect ("localhost","root","");
  if (!$conx) die ("Error al abrir la base <br/>". mysql_error()); 
  mysql_select_db("controlhospital") OR die("Connection Error to Database");    
  
  
$consulta=" INSERT INTO contacto(ap, am, nombre,domicilio,colonia,cp,municipio,estado,pais,telefono,celular,radio,email,observaciones) 
VALUES ('$apPaterno','  $apMaterno','  $Nombre','$Domicilio', '$Colonia','$CP',' $Municipio','$Estado','$Pais','$Telefono',' $Celular', '$Radio',' $Correo','$Observaciones');";

mysql_query($consulta);

header('Location: guardardado.php');

?>
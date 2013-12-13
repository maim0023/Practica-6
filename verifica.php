<?php
 session_start();
    $CODIGO=$_POST[ 'codigo' ];
    $PASS=$_POST[ 'pass' ];
	$_SESION['codigo']=$_POST['codigo'];
	
	
	if($CODIGO==100 and $PASS==100){
	echo"bienvenido".$CODIGO;
	}else{
	echo"Codigo o Pasword incorrecto";
	echo"<br/>";
	echo"vuelve a intentarlo ";
	echo "<a href=index.php> Regresar </ a>";
	

	}
	header('Location: intranetbienvenida.php');
	
	
?>
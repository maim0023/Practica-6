<?php
 session_start();
 require_once('contacto.php');
require_once('listarContactos.php');
 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="description" content="Ejemplo de HTML5" />
        <meta name="keywords" content="HTML5,CSS3,JavaScript" />
        <title>Bienvenida</title>
        <link rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
    	
         <div style="position:absolute; left:250px">
		 
        Bienvenido 
		<br/>
		<a href=formulario.php> Registro Nuevo </a>
         
		 
	<?php
            $modelo = new Contacto();
            $contactos = $modelo->encontrarTodos();
            $listar = new ListarContactos();
            $listar->contactos = $contactos;
            $listar->generaTabla();
        ?>
       
        </div>
    </body>
</html>
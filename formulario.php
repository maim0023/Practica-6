<!DOCTYPE html>
<html>
    <head>
        <meta name="description" content="Ejemplo de HTML5" />
        <meta name="keywords" content="HTML5,CSS3,JavaScript" />
        <title>Formulario</title>
        <link rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
    	
         <div style="position:absolute; left:250px">
             <form action="guardar.php" method="POST" enctype="multipart/form-data">

<fieldset>
                 
                    
                    
                     <legend>Contacto</legend>
                   
					  <label for="txtNombre">Apellido Materno</label><br/>
                     <input type="text" size="40" maxlength="255" name="apMaterno" />
                     <br/>
                     <br/>
					  <label for="txtNombre">Apellido Paterno</label><br/>
                     <input type="text" size="40" maxlength="255" name="apPaterno" />
                     <br/>
                     <br/>
                     <label for="txtFecha">Nombre </label><br/>
                     <input type="text" size="40" maxlength="255"  name="Nombre" />
                     <br/>
                     <br/>
                     <label for="txtFecha">Domicilio </label><br/>
                     <input type="text" size="40" maxlength="255"  name="Domicilio" />
                     <br/>
                     <br/>
                      <label for="txtFecha">Colonia</label><br/>
                     <input type="text" size="40" maxlength="255" id="txtCorreo" name="Colonia" />
                     <br/>
                     <br/>
                      <label for="txtFecha">C.P.</label><br/>
                     <input type="text" size="40" maxlength="255" id="txtCorreo" name="CP" />
                     <br/>
                     <br/>
                      <label for="txtFecha">Municipio</label><br/>
                     <input type="text" size="60" maxlength="255" id="txtCorreo" name="Municipio" />
                     <br/>
                     <br/>
                      <label for="txtFecha">Estado</label><br/>
                     <input type="text" size="60" maxlength="255" id="txtCorreo" name="Estado" />
                     <br/>
                     <br/>
                 
                      <label for="txtSeguro">Pais</label><br/>
                    <SELECT name="Pais">
					<OPTION VALUE="">---------</OPTION>
						<OPTION VALUE="Arabia">Arabia</OPTION>
                        <OPTION VALUE="Canada">Canada</OPTION>
                        <OPTION VALUE="Estados Unidos">Estados unidos</OPTION>                      
                        <OPTION VALUE="Francia">Francia</OPTION>
                        <OPTION VALUE="India">India</OPTION>
                        <OPTION VALUE="Jamaica">Jamaica</OPTION>
                        <OPTION VALUE="Europa">Europa</OPTION>
                        <OPTION VALUE="Mexico">Mexico</OPTION>
                        <OPTION VALUE="guatemala">guatemala</OPTION>
                        <OPTION VALUE="chile">chile</OPTION>
                        <OPTION VALUE="ecuador">ecuador</OPTION>
                    </SELECT>
                      <br/>
                      <br/>
					       <label for="txtFecha">Telefono</label><br/>
                     <input type="text" size="20" maxlength="255"  name="Telefono" />
                     <br/>
                     <br/>
					    <label for="txtFecha">Celular</label><br/>
                     <input type="text" size="20" maxlength="255"  name="Celular" />
                     <br/>
                     <br/>
					      <label for="txtFecha">Radio </label><br/>
                     <input type="text" size="20" maxlength="255"  name="Radio" />
                     <br/>
                     <br/>
					  <label for="txtSeguro">Correo</label><br/>
                    <input type="text" size="60" maxlength="255"  name="Correo" />
                     <br/>
                     <br/>
					      <label for="txtFecha">Observaciones </label><br/>
                     <input type="text" size="20" maxlength="255"  name="Observaciones" />
                     <br/>
                     <br/>
                    
                 </fieldset>
				 
				  <input type="submit" name="enviar" value="Guardar" />
             </form>
         </div>
       
        
    </body>
</html>
<div class="contenedor">
	<div class="enLinea" id="login">
		<?php echo $msjEstado;?>	
		<form action="login.php" method="post">
		  	<fieldset>
			    <legend>ENTRA A TU CUENTA</legend>
			    <label for="email">email:</label> <input type="text" name="email"><br>
			    <label for="pwd">password:</label> <input type="password" name="pwd"><br>
		  	</fieldset>
			<button type="submit" class="boton">INICIAR SESIÓN</button>
		</form>
	</div>
	<div class="enLinea" id="registro">
		<form action="registro.php" method="post">
		  	<fieldset>
		    	<legend>CREA UN NUEVO USUARIO</legend>
		    	<label for="apellido">Apellido:</label> <input type="text" name="apellido" value=<?php echo $apellido ?>>
		    		<?php if(isset($errorApellido)&&$errorApellido!=''){echo $errorApellido;}?>	<br>
		    	<label for="nombre">Nombre:</label> <input type="text" name="nombre" value=<?php echo $nombre ?> >
		    		<?php if(isset($errorNombre)&&$errorNombre!=''){echo $errorNombre;}?>	<br>
		    	<label for="email">email:</label> <input type="text" name="email" value=<?php echo $email ?>>
		    		<?php if(isset($errorEmail)&&$errorEmail!=''){echo $errorEmail;}?>	<br>
		    	<label for="pwd">password:</label> <input type="password" name="pwd">
		    		<?php if(isset($errorPwd)&&$errorPwd!=''){echo $errorPwd;}?>	<br>
		    	<label for="pwd2">confirmar password:</label> <input type="password" name="pwd2">
		    		<?php if(isset($errorPwd2)&&$errorPwd2!=''){echo $errorPwd2;}?>	<br>
		    	<label for="telefono">Teléfono:</label> <input type="text" name="telefono"  value=<?php echo $telefono ?>>
		    		<?php if(isset($errorTelefono)&&$errorTelefono!=''){echo $errorTelefono;}?>	<br>
		    	<label for="dni">DNI:</label> <input type="text" name="dni" value=<?php echo $dni ?>>
		    		<?php if(isset($errorDni)&&$errorDni!=''){echo $errorDni;}?>	<br>
		    	<label for="sexo">Sexo:</label>
		    		<select name="sexo">
		    			<option selected="selected" value="M">Masculino</option>
		    			<option value="F">Femenino</option>
		    		</select>
		    		<?php if(isset($errorSexo)&&$errorSexo!=''){echo $errorSexo;}?>	
		  	</fieldset>
			<button type="submit" class="boton">CREAR USUARIO</button>
		</form>
	</div>
</div>

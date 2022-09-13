<?PHP 
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $noControl = $_POST['noControl'];
    $apellido = $_POST['apellido'];
    $nombre = $_POST['nombre'];
    $carrera = $_POST['carrera'];
    $email = $_POST['emailuser'];
    $password = $_POST['pass'];
    $password2 = $_POST['rpass'];
    $password = md5($password);
    $password2 = md5($password2);
}

?>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/tabla2.css">
    <link rel="stylesheet" type="text/css" href="css/materialize.css">
	<script type="text/javascript"> src="validar.js"</script>
	<title>Log in</title>

	
</head>
<body>
<nav>
		<div class="nav-wrapper">
            <!--<a href="#" class="brand-logo"><img src="imagenes/62540.jpg" alt=""></a>-->
            <ul id="nav-mobile" class="right hide-on-med-and-down">
			<li><img src="imagenes/62540.jpg" width="400" height="60" > </li>
			<li><a href="index.php">Regresar a inicio </a></li>

            </ul>
        </div>
</nav>
		
    	<div id="content" align = "center" background-color: #09017a>
		<h1>Registro de Usuarios</h1>
		<form action="saveUser.php"  method="POST"  >
	        <table border="1">
		        <tr>
		            <td><label for = "noControl">No.Control</label></td>
		            <td><input id="noControl" = type="text" name="noControl" placeholder="noControl" minlength="8" maxlength="9" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)"  required value = "<?php $noControl ?>" /></td>
				</tr>
				<tr>
		            <td><label for = "apellidos">Apellidos</label></td>	
		            <td><input id="apellidos" type="text" name="apellido" placeholder="Apellido" onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 97 && event.charCode <= 122 || event.charCode == 32  	)" min="1" maxlength="50" required value = "<?php $apellido ?>"/></td>
		        </tr>
		        <tr>
		            <td><label for = "nombre">Nombre</label></td>
		            <td><input id="nombre" type="text" name="nombre" placeholder="Nombre" onkeypress="return (event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 97 && event.charCode <= 122 || event.charCode == 32 )" min="1" maxlength="50" required value = "<?php $nombre ?>"/></td>
				</tr>
				<tr>
		            <td><label for = "carrera">Carrera</label></td>
		            <td>
						<select name="carrera" required>
							<option>ISC</option>
							<option>IME</option>
							<option>INA</option>
							<option>IBQ</option>
							<option>IPE</option>
							<option>IEZ</option>
							<option>IGE</option>
						</select>
					</td>
		        </tr>
		        <tr>
		            <td><label for = "correo">Correo electronico</label></td>
		            <td><input id="correo" type="email" name="emailuser" placeholder="example@mail.com" required value = "<?php $email ?>"/></td>
		        </tr>
		        <tr>
		            <td><label for = "contraseña">Contraseña</label></td>
		            <td><input id= "contraseña" type="password" name="pass" placeholder="**********" min minlength="8"  required/></td>
		        </tr>
		        <tr>
		            <td><label for = "contraseña2">Repetir Contraseña</label></td>
		            <td><input id= "contraseña2" type="password" name="rpass" placeholder="**********" minlength="8"  required/></td>
		        </tr>
		        <tr>
				
		            <td><label><input type="submit" value="Registrarme"></input></label></td>
					<td><label><input type="reset" value="Limpiar campos"></input></label></td>
				</tr>

		</form>
	</div>
	
</body>
</html>
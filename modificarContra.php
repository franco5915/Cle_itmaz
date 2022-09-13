<style>

input[type=number]::-webkit-outer-spin-button,

input[type=number]::-webkit-inner-spin-button {

    -webkit-appearance: none;

    margin: 0;

}

 

input[type=number] {

    -moz-appearance:textfield;

}
</style>
<?php
session_start();
include_once("conexion.php");

?>

<html>
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/tabla.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
    <title>Panel administrador</title>
</head>

<body>
<?php if(isset($_SESSION['loginT']) == true){ ?>
    
    <ul class ="menu">
        <li><a href="alumnos.php">  Regresar   </a></li>
    </ul>
    <div id="content" align = "Center">
		<h1>cambio de contraseña</h1>
		<form action="contraseña.php" method="POST">
	        <table border="1">
		        <tr>
		            <td><label>noControl</label></td>
		            <td><input type="text" placeholder="noControl" minlength="8" maxlength="9" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" name="noControl" required/></td>
				</tr>
				<tr>
		            <td><label>nueva Contraseña</label></td>	
		            <td><input type="text" name="contraseña" minlength="8" placeholder="NUEVA CONTRASEÑA" required/></td>
		        </tr>
		            <td><label><input type="submit" value="ACTUALIZAR CONTRASEÑA"></input></label></td>
		        </tr>
		</form>
	</div>
    
<?php } ?>
</body>
</html>
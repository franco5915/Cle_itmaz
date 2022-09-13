<?php
session_start();
include_once("conexion.php");
?>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/tabla.css">
	<title>Panel administrador</title>
</head>

<body>
<?php if(isset($_SESSION['loginT']) == true){ ?>
        
    <ul  class="img">
        <li><img src="imagenes/62540.jpg" alt=""></li>
    </ul>
    <ul class ="menu">
        <li><a href="index.php">  Regresar   </a></li>
    </ul>
	<div id="main-container">
    <table border="1" >
		<tr>
			<td>No Control</td>
			<td>nombre</td>
			<td>apellido</td>
			<td>email</td>
            <td>Carrera</td>
            <td>pago</td>	
		</tr>

        <?php 
       
		$stmt = $conn->prepare(
            "SELECT  DISTINCT `alumnos`.`noControl`, `alumnos`.`alumnoNombre`, `alumnos`.`alumnoApellido`, `alumnos`.`alumnoCorreo`, `alumnos`.`Carrera`, `pago`.`ruta`
            FROM `alumnos` 
            LEFT JOIN `pago` ON `pago`.`noControl` = `alumnos`.`noControl`;");
		$stmt->execute();
		$stmt->bind_result($nocontrol ,$nombre, $apellido,$correo,$carrera,$pago);
        
        while ($stmt->fetch()){

		 ?>

		<tr>
			<td><?php echo $nocontrol ?></td>
			<td><?php echo $nombre ?></td>
			<td><?php echo $apellido ?></td>
			<td><?php echo $correo?></td>
            <td><?php echo $carrera ?></td>
           
            <td><a target="_blank" href= "pdfs/<?php echo $pago ?>"><?php echo $pago ?> </a></td>
		</tr>
	<?php 
	}
	 ?>
	</table>
	</div>
<?php } ?>
</body>
</html>
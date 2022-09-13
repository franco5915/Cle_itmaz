<?php
session_start();
include_once("conexion.php");
$noControl = $_POST['noControl'];
$contraseña = $_POST['contraseña'];
$contraseña = md5($contraseña);
$stmt = $conn-> prepare ("UPDATE alumnos set alumnoContraseña = ? where noControl = ? ");
                $stmt->bind_param('si', $contraseña, $noControl);
                $stmt->execute();
if($stmt->affected_rows > 0){

    echo '<script type="text/javascript">
    alert("se a cambiado la contraseña exitosamente, No. Control : '.$noControl.'");
    window.location.href="http://cleitmaz.net:8080/alumnos.php";
     </script>';                
}
else{
    echo '<script type="text/javascript">
    alert("no funcionó");
    window.location.href="http://cleitmaz.net:8080/alumnos.php";
   </script>';
}
                $stmt->close();
                $conn->close();


?>
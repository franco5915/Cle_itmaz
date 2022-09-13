<?php
 
	if(isset($_POST["entrar"])) {
 
		include_once("conexion.php");
 
			$loginNoControl = $_POST["noControl"];
			$loginPassword = $_POST["pass"];
			$loginPassword = md5($loginPassword);
 
			try {
				// Seleccionar el administrador de la base de datos
				$stmt = $conn->prepare("SELECT noControl , alumnoNombre , alumnoContraseña FROM alumnos WHERE noControl = ?");
				$stmt->bind_param('i', $loginNoControl);
				$stmt->execute();
				// Loguear el usuario
				$stmt->bind_result($noControl, $alumnoNombre, $passwordBD);
				$stmt->fetch();
				if($noControl){
					// El usuario existe, verificar el password
					if($passwordBD == $loginPassword){
						// Iniciar la sesion
						session_start();
						$_SESSION['noControl'] = $noControl;
						$_SESSION['alumnoNombre'] = $alumnoNombre;
						$_SESSION['login'] = true;
						echo "<script>
								alert('Bienvenido ".$alumnoNombre."');
								location.href='/';
							</script>";

					} else {
						echo "<script>
								alert('Usuario o contraseña incorrecta');
								location.href='/';
							</script>";
					}
		  
				} else {
					echo "<script>
								alert('Usuario o contraseña incorrecta');
								location.href='/';
							</script>";
				}
				$stmt->close();
				$conn->close();
			} catch(Exception $e) {
				echo "<script>
								alert('Error en la base de datos !');
								location.href='/';
							</script>";
			}
		}
 ?>
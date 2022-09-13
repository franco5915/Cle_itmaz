<?php
 
	if(isset($_POST["entrar"])) {
 
		include_once("conexion.php");
 
		 	$loginUsuario = $_POST["usuarioT"];
			$loginPassword = $_POST["pass"];
			try {
				// Seleccionar el administrador de la base de datos
				$stmt = $conn->prepare("SELECT idteacher ,nicknameTeacher,contraseñaTeacher  FROM teacher WHERE nicknameTeacher = ?");
				$stmt->bind_param('s', $loginUsuario);
				$stmt->execute();
				// Loguear el usuario
				$stmt->bind_result($idteacher ,$teacherUsu, $passwordBD);
				$stmt->fetch();
				if($teacherUsu){
					// El usuario existe, verificar el password
					if($passwordBD == $loginPassword){
						// Iniciar la sesion
						session_start();
						$_SESSION['usuarioT'] = $teacherUsu;
						$_SESSION['loginT'] = true;
						echo "<script>
								alert('Bienvenido ".$teacherUsu."');
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
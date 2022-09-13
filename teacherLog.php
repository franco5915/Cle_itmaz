<html>
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/tabla2.css">
    <link rel="stylesheet" type="text/css" href="css/materialize.css">
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
        <div id="content" align = "Center">
            <h1>Teacher Log</h1> 
            <form action="teacherLogin.php" method="POST">
           
                <table border="1">
                    <tr>
                        <td><label>UsuarioT</label></td>
                        <td><input type="text" name="usuarioT" placeholder="usuarioT" required/></td>
                    </tr>
                    <tr>
                        <td><label>Contraseña</label></td>
                        <td><input type="password" name="pass" placeholder="**********************" required/></td>
                    </tr>
                   
                    <tr>
                        <td><label><input name="entrar" type="submit" value="entrar"></input></label></td>
                        <td><label><input type="reset" value="Reestablecer"></input></label></td>
                    </tr>
            </form>
        </div>
        
</html>
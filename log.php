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
        <div id="content" align = "center"> 
            <h1>Login</h1>
          
            <form action="login.php" method="POST">
           
                <table border="1">
                    <tr>
                        <td><label>noControl</label></td>
                        <td><input type="text"  minlength="8" maxlength="9" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" name="noControl" placeholder="noControl" required/></td>
                    </tr>
                    <tr>
                        <td><label>Contraseña</label></td>
                        <td><input type="password" name="pass" minlength="8" placeholder="**********************" required/></td>
                    </tr>
                   
                    <tr>
                        <td><label><input name="entrar" type="submit" value="entrar"></input></label></td>
                        <td><label><input type="reset" value="Limpiar Campos"></input></label></td>
                    </tr>
            </form>
        </div>
        
        
        <br>
</html>
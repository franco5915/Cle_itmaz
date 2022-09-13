<?php
session_start();
?>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/estiloIndex.css">
	<title>CLE ITMAZ</title>
</head>

<body>
    <ul  class="img">
        <li><img src="imagenes/62540.jpg" alt=""></li>
    </ul>
    <ul class ="menu">

    <?php if(isset($_SESSION['loginT']) == false  ){ ?>
        <?php if(isset($_SESSION['login']) == false  ){ ?>
        <li><a href="log.php">   Identificarse    </a></li>
        <li><a href="Formulario.php">   Registrarse      </a></li>
        <?php } ?>
        <?php } ?>
        <li><a href="Pagos.php">   Pagos        </a></li>
        <!--  Comentado    <li><a href="Inscripciones.php">   Inscripciones    </a></li>    -->
            <?php if(isset($_SESSION['login']) == true){ ?>
                <li><a href="logout.php"> logout </a></li>
           <?php } ?>

           
           <?php if(isset($_SESSION['loginT']) == true){ ?>
                <li><a href="Alumnos.php"> Alumnos </a></li>
           <?php } ?>

           <?php if(isset($_SESSION['loginT']) == true){ ?>
                <li><a href="logout.php"> logout </a></li>
           <?php } ?>



    </ul>
    <p>aquí va toda la infornación referente a noticias que
        se irán actualizando
    </p>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php if(isset($_SESSION['loginT']) == false  ){ ?>
        <?php if(isset($_SESSION['login']) == false  ){ ?>
    <a href="teacherlog.php"> login teacher </a>
    <?php } ?>
        <?php } ?>
</body>
<footer align = "center">
        <div class="copy">
            <p> Todos los derechos reservados </p>
            <p>&copy;CLE</p>
        </div>

        <div class="redes">
            <a href = "ttps://www.facebook.com/CLE" target="blank"> Facebook </a>
        </div>
    </footer>
</html>

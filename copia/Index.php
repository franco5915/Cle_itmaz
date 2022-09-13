<?php
session_start();

?>
<html>
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/estiloIndex.css">
    <link rel="stylesheet" type="text/css" href="css/estiloIndex2.css">
	<title>CLE ITMAZ</title>
</head>

<body>
    <ul  class="img" align = "center";>
        <li><img src="imagenes/62540.jpg" alt=""></li>
    </ul>
    <ul class ="menu" align = "center";>
    <?php if(isset($_SESSION['login']) == true){ ?>
        <li><a> bienvenido <?php echo ($_SESSION['alumnoNombre']) ?></a></li>
           <?php } ?>
     <?php if(isset($_SESSION['loginT']) == true){ ?>
        <li><a> bienvenido <?php echo ($_SESSION['usuarioT']) ?></a></li>
           <?php } ?>
    
    

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
    <div class="noticias">
        <div>
            <img src="imagenes/4.jpg" alt="">

            <div class="desc">
                <h1>Requisitos</h1>
                <p>
                    Es requerido que sea un alumno del TecNM vigente al periodo correspondiente,
                    Requiere tener un correo electrónico,
                    Se requiere un número de celular.
                    Se requieren sus datos personales para el registro
                </p>
            </div>
        </div>
        <div>
            <img src="imagenes/2.jpg" alt="">

            <div class="desc">
                <h1>Examen de conocimientos</h1>
                <p>
                        Estas son algunas pruebas para conocer su nivel actual en ingles:<br>
                        <a href = "https://www.hacertest.com/ingles/basico/" target="blank">Nivel básico </a><br>
                        <a href = "https://www.hacertest.com/ingles/intermedio/" target="blank">Nivel medio </a><br>
                        <a href = "https://www.hacertest.com/ingles/avanzado/" target="blank">Nivel avanzado </a>

                </p>
            </div>
        </div>
        <div>
            <img src="imagenes/1.jpg" alt="">

            <div class="desc">
                <h1>Forma de pago</h1>
                <p>
                        Usted debe de 
                        <?php if(isset($_SESSION['loginT']) == false  ){ ?>
                        <?php if(isset($_SESSION['login']) == false  ){ ?>
                        <li><a href="log.php">   Identificarse   O     </a></li> 
                        <li><a href="Formulario.php">   Registrarse      </a></li>
                        <?php } ?>
                        <?php } ?>
                        <?php if(isset($_SESSION['login']) == true or isset($_SESSION['loginT'])){ ?>
                        <li><a > Identificarse o registrarse </a></li>
                        <?php } ?>
                        
                          y posteriormente identificarse
                          en la página para proceder a subir su archivo  de pago.

                </p>
            </div>
        </div>
        <div>
            <img src="imagenes/2.jpg" alt="">

            <div class="desc">
                <h1>Fechas</h1>
                <p>
                        “Los periodos de inscripción son dados por su Teacher responsable”, 
                        “ Debe cubrir con el pago del vaucher y proceder a subir su archivo de pago en formato pdf 
                        en las fechas dadas”.
                </p>
            </div>
        </div>

    </div>


    <br>
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
            <a href = "https://www.facebook.com/CLE.mazatlan" target="blank"> Facebook </a>
        </div>
    </footer>
</html>

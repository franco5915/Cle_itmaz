<?php
session_start();
?>
<html>
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/estiloIndex.css">
    <link rel="stylesheet" type="text/css" href="css/estiloIndex2.css">
    <link rel="stylesheet" type="text/css" href="css/materialize.css">
    <script src="js/materialize.js"></script>

	<title>CLE ITMAZ</title>
</head>

<body>
    <nav>
        <div class="nav-wrapper">
            <!--<a href="#" class="brand-logo"><img src="imagenes/62540.jpg" alt=""></a>-->
            <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><img src="imagenes/62540.jpg" width="400" height="60" > </li>
            <?php if(isset($_SESSION['login']) == true){ ?>
        <li><a> bienvenido <?php echo ($_SESSION['alumnoNombre']) ?></a></li>
           <?php } ?>
     <?php if(isset($_SESSION['loginT']) == true){ ?>
        <li><a> bienvenido <?php echo ($_SESSION['usuarioT']) ?></a></li>
           <?php } ?>
                <?php if(isset($_SESSION['loginT']) == false  ){ ?>
                    <?php if(isset($_SESSION['login']) == false  ){ ?>
                        <li><a href="log.php">Identificarse</a></li>
                        <li><a href="formulario.php">Registrarse</a></li>
                    <?php } ?>
                <?php } ?>

                <?php if(isset($_SESSION['loginT']) == false  ){ ?>
                    
                        <li><a href="pagos.php">Pagos</a></li>
                        
                <?php } ?>
                <!-- Comentado    <li><a href="Inscripciones.php">   Inscripciones    </a></li>    -->
                <?php if(isset($_SESSION['login']) == true){ ?>
                    <li><a href="logout.php"> logout </a></li>
                <?php } ?>

            <?php if(isset($_SESSION['loginT']) == true){ ?>
                    <li><a href="alumnos.php"> Alumnos </a></li>
            <?php } ?>

            <?php if(isset($_SESSION['loginT']) == true){ ?>
                    <li><a href="logout.php"> logout </a></li>
            <?php } ?>

            </ul>
        </div>
    </nav>
    <!-- <ul  class="img" align = "center";>
        <li><img src="imagenes/62540.jpg" alt=""></li>
    </ul>
    <ul class ="menu" align = "center";>

    <?php if(isset($_SESSION['loginT']) == false  ){ ?>
        <?php if(isset($_SESSION['login']) == false  ){ ?>
            <li><a href="log.php">   Identificarse    </a></li>
            <li><a href="Formulario.php">   Registrarse      </a></li>
        <?php } ?>
    <?php } ?>
        <li><a href="Pagos.php">   Pagos        </a></li>
         Comentado    <li><a href="Inscripciones.php">   Inscripciones    </a></li>   
            <?php if(isset($_SESSION['login']) == true){ ?>
                <li><a href="logout.php"> logout </a></li>
           <?php } ?>

           
           <?php if(isset($_SESSION['loginT']) == true){ ?>
                <li><a href="Alumnos.php"> Alumnos </a></li>
           <?php } ?>

           <?php if(isset($_SESSION['loginT']) == true){ ?>
                <li><a href="logout.php"> logout </a></li>
           <?php } ?>



    </ul>  -->

    <div class="row">
        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-image">
                    <img width="150" src="imagenes/4.jpg">
                   <span class="card-title"></span>
                </div>
                <div class="card-content">
                    <p>
                        <strong><b>Requisitos</b></strong><br>
                        Es requerido que sea un alumno del TecNM vigente al periodo correspondiente,
                        Requiere tener un correo electrónico,
                        Se requiere un número de celular.
                        Se requieren sus datos personales para el registro</p>
                </div>
            </div>
        </div>

        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-image">
                    <img width="150" src="imagenes/2.jpg">
                    <span class="card-title"></span>
                </div>
                <div class="card-content">
                    <p>
                            <strong><b>Examen de admisión</b></strong><br>
                            Estas son algunas pruebas para conocer su nivel actual en ingles:<br>
                            <a href = "https://www.hacertest.com/ingles/basico/" target="blank">Nivel básico </a><br>
                            <a href = "https://www.hacertest.com/ingles/intermedio/" target="blank">Nivel medio </a><br>
                            <a href = "https://www.hacertest.com/ingles/avanzado/" target="blank">Nivel avanzado </a>
                    </p>
                </div>
            </div>
        </div>
        
        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-image">
                    <img width="150" src="imagenes/1.jpg">
                    <span class="card-title"></span>
                </div>
                <div class="card-content">
                    <p>
                            <strong><b>Pagos</b></strong><br>
                            Usted debe de:  
                            <?php if(isset($_SESSION['loginT']) == false  ){ ?>
                            <?php if(isset($_SESSION['login']) == false  ){ ?>
                            <li><a href="log.php">   Identificarse   O     </a></li> 
                            <li><a href="formulario.php">   Registrarse      </a></li>
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
        </div>
        
        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-image">
                    <img width="150" src="imagenes/2.jpg">
                    <span class="card-title"></span>
                </div>
                <div class="card-content">
                    <p>
                            <strong><b>Fechas</b></strong><br>
                            “Los periodos de inscripción son dados por su Teacher responsable”, 
                            “ Debe cubrir con el pago del vaucher y proceder a subir su archivo de pago en formato pdf 
                            en las fechas dadas”.
                    </p>
                </div>
            </div>
        </div>
    </div>
<!-- 
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

    </div> -->


    <br>
    <?php if(isset($_SESSION['loginT']) == false  ){ ?>
        <?php if(isset($_SESSION['login']) == false  ){ ?>
    <a href="teacherlog.php"> login teacher </a>
    <?php } ?>
        <?php } ?>
</body>

<footer style="padding-top:0px" class="page-footer">

    <div class="container">
        <div class="footer-copyright">
            © 2019 Copyright Todos los derechos reservados
        </div>
        <div style="margin-bottom:0px" class="row">

            <div class="col l4 offset-l2 s12">
                <a style="color:white" href = "https://www.facebook.com/CLE.mazatlan" target="blank"> Facebook </a></li>
            </div>
        </div>
    </div>
</footer>

<!-- <footer align = "center">
        <div class="copy">
            <p> Todos los derechos reservados </p>
            <p>&copy;CLE</p>
        </div>

        <div class="redes">
            <a href = "https://www.facebook.com/CLE.mazatlan" target="blank"> Facebook </a>
        </div>
    </footer> -->
</html>

<?php
session_start();
include_once('conexion.php');
$nombre = "";
if (isset($_POST['submit'])) {
    if(is_uploaded_file($_FILES['fichero']['tmp_name'])) {


      // creamos las variables para subir a la db
        $ruta = "pdfs/";
        $nombrefinal= trim ($_FILES['fichero']['name']); //Eliminamos los espacios en blanco
        $tipo_imagen = $_FILES['fichero']['type'];
        $upload= $ruta . $nombrefinal;

        if($tipo_imagen=="application/pdf" ){


            $nombre  = $_SESSION['noControl'];
            
            $stmt = $conn->prepare("SELECT * FROM pago where noControl = $nombre ");
            $stmt->execute();
            $stmt->store_result();
            $rows = $stmt->num_rows;
            $stmt->close();
            
            

            if ($rows >= 1 ){
                move_uploaded_file($_FILES['fichero']['tmp_name'], $upload);
                $stmt = $conn-> prepare ("UPDATE pago set ruta = ? where noControl = ? ");
                $stmt->bind_param('si', $nombrefinal, $nombre);
                $stmt->execute();
                $stmt->close();
                $conn->close();
                echo '<script type="text/javascript">
             alert("se actualizado su archivo");
            window.location.href="Pagos.php";
            </script>';
            }
            else {

    
        if(move_uploaded_file($_FILES['fichero']['tmp_name'], $upload)) { //movemos el archivo a su ubicacion
            include_once('conexion.php');
           $archivox = $_FILES['fichero']['type'];
           $nombre  = $_SESSION['noControl'];

           $stmt = $conn->prepare ("INSERT INTO pago (noControl,ruta,tipo) VALUES (?,?,?)");
           $stmt->bind_param('iss',$nombre,$nombrefinal,$archivox);
           $stmt->execute();
           // Loguear el usuario

           $stmt->close();
           $conn->close();
           echo '<script type="text/javascript">
             alert("se ha subido su archivo");
            window.location.href="http://cleitmaz.net:8080/Pagos.php";
            </script>';
        }
        }
    }
        
    }
 }

?>
<html>
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/estiloIndex.css">
    <link rel="stylesheet" type="text/css" href="css/materialize.css">
    <title>DOCUMENTO DE PAGO</title>
</head>

<body align = "center">

<nav>
        <div class="nav-wrapper">
            <!--<a href="#" class="brand-logo"><img src="imagenes/62540.jpg" alt=""></a>-->
            <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><img src="imagenes/62540.jpg" width="400" height="60" > </li>
                <li><a href="index.php">Inicio</a></li>

            </ul>
        </div>
    </nav>
    <?php if(isset($_SESSION['login']) == false){ ?>

        <br><br><br> <p><h1>Inicie sesión para poder subir su archivo de pago</h1></p>
        <div id="main-container">
    <table border="1" >
        <?php
        if(isset($_SESSION['loginT']) == false  ){
            if(isset($_SESSION['loginT']) == false  ){
                if(isset($_SESSION['login']) == false  ){
        global $nombre;
        $noControl =$_SESSION['noControl'];
        $stmt = $conn->prepare(
            "SELECT ruta FROM pagos where noControl = ?");
        $stmt->bind_param('s', $noControl);
        $stmt->execute();
        $stmt->bind_result($pago);
        $nombre = $pago;
        }
    }
        while ($stmt->fetch()){
            echo "holiwis"
         ?>

        <tr>
            <td><a href= "pdfs/<?php global $nombre; echo $nombre ?>">< tu pago amigix  </a></td>
        </tr>
    <?php
    }
     ?>
    </table>
    </div>

        <?php } ?>
       
    <?php if(isset($_SESSION['login']) == true){ ?>

    <h1>Sube tu archivo de pago formato PDF por nombre tu número de control 
    <a href= "pdfs/<?php global $nombre; echo "$nombre   " ?>">< tu archivo de pago  </a>
    </h1>
    
    <br>
    
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
    Seleccione archivo: <input name="fichero" type="file" size="150" maxlength="150">
    <br><br>
  <input name="submit" type="submit" value="SUBIR ARCHIVO">
</form>

    <?php } ?>
<div><p><a href= "pdfs/<?php global $nombre; echo $nombre ?>"> tu pago amigix  </a></p> </div>

</body>
</html>
<div id="main-container">
    <table border="1" >
        <?php
        $_SESSION['noControl']
        $stmt = $conn->prepare(
            "SELECT  DISTINCT pago.ruta
            FROM alumnos where alumnos.noControl = ?
            LEFT JOIN pago ON pago.noControl = alumnos.noControl;");
        $stmt->bind_param('s', $noControl);
        $stmt->execute();
        $stmt->bind_result($pago);

        while ($stmt->fetch()){

         ?>

        <tr>
            <td><a target="_blank" href= "pdfs/<?php echo $pago ?>"><?php echo $pago ?> </a></td>
        </tr>
    <?php
    }
     ?>
    </table>
    </div>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mis Enlaces</title>
        <link rel="stylesheet" type="text/css" href="css/estilosimagensss.css">
        <script language="javascript" type="text/javascript" src="js/jsPrueba.js" ></script>
    </head>
    <body>
        <h1>Editar Clientes</h1>
        <form  action="actualizar.php" method="POST"  name="frmDatos" >
        <?php
            include("conexion.php");
            $cliId=$_GET['cliId'];
            $sql="SELECT * FROM clientes WHERE CLIID=$cliId";
            $registros=mysqli_query($con,$sql);
            $registro=mysqli_fetch_assoc($registros);

        ?>
            <p><label>Codigo:</label>
                <input type="text" name="txtCodigo" id="txtCodigo" size="20" value="<?php echo $registro['CLIID']?>" readonly></p>

            <p><label>Cedula:</label>
                <input type="text" name="txtCedula" id="txtCedula" size="20"  value="<?php echo $registro['CLICEDULA']?>"></p>

            <p><label>Nombre:</label>
                <input type="text" name="txtNombre" id="txtNombre" size="50" value="<?php echo $registro['CLINOMBRE']?>"></p>

            <p>
                <label>Dirección:</label>
                <input type="text" name="txtDireccion" id="txtDireccion" value="<?php echo $registro['CLIDIRECCION']?>">
            </p>
            <p>
                <la bel>Telefono:</label>
                <input type="text" name="txtTelefono" id="txtTelefono" value="<?php echo $registro['CLITELEFONO']?>">
            </p>
            <input type="submit" value="Actualizar">
        </form>        
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mis Enlaces</title>
        <link rel="stylesheet" type="text/css" href="css/estilosimagensss.css">
        <script language="javascript" type="text/javascript" src="js/jsPrueba.js" ></script>
    </head>
    <body>
        
        <form  action="grabar.php" method="POST"  name="frmDatos" >
            <p><label>Cedula:</label>
                <input type="text" name="txtCedula" id="txtCedula" size="20"  placeholder="ingrese la cedula..." ></p>

            <p><label>Nombre:</label>
                <input type="text" name="txtNombre" id="txtNombre" size="50" placeholder="Ingrese su Nombre..." ></p>

            <p>
                <label>Dirección:</label>
                <input type="text" name="txtDireccion" id="txtDireccion" >
            </p>
            <p>
                <la bel>Telefono:</label>
                <input type="text" name="txtTelefono" id="txtTelefono">
            </p>
            <input type="submit" value="Grabar">
        </form>        
    </body>
</html>
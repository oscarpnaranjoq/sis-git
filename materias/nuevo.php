<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mis Enlaces</title>
        <link rel="stylesheet" type="text/css" href="css/estilosimagensss.css">
        <script language="javascript" type="text/javascript" src="js/jsPrueba.js" ></script>
    </head>
    <body>
        <h1>Registro de Materias</h1>
        <br>
        
        <form  action="grabar.php" method="POST"  name="frmDatos" >
            <p><label>Codigo:</label>
                <input type="text" name="txtCodigo" id="txtCodigo" ></p>

            <p><label>Carrera:</label>
                <select name="cmbCarrera" id="cmbCarrera" >
                <?php
                    include("../conexion.php");
                    $sql="SELECT * FROM carreras ORDER BY CARNOMBRE";
                    $resultados=mysqli_query($con,$sql);
                    while($registro=mysqli_fetch_assoc($resultados)){
                ?>
                    <option value="<?php echo $registro['CARID']?>"><?php echo $registro['CARNOMBRE']?></option>
                <?php
                    }
                ?>
                </select>
           
            <p><label>Materia:</label>
                <input type="text" name="txtMateria" id="txtMateria" size="50" placeholder="Ingrese su Nombre..." ></p>

            <p>
                <label>Estado:</label>
                <select name="cmbEstado" id="cmbEstado">
                    <option value="ACTIVO">ACTIVO</option>
                    <option value="INACTIVO">INACTIVO</option>
                </select>
                 <input type="text" name="txtEstado" id="txtEstado" >
            </p>

            </p>
            <input type="submit" value="Grabar">
        </form>        
    </body>
</html>
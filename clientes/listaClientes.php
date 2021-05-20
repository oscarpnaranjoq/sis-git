<?php
    include("conexion.php");
?>
<html>
	<head>

		<title>
			Listado de Clientes
		</title>
        <script src="js/bootstrap.min.css"></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script language="javascript" type="text/javascript" src="js/bootstrap.js" ></script>                    
	</head>
	<body>
		<center><h1>Listado de Clientes</h1></center>
        <a class="btn btn-outline-primary" href="nuevo.php">Ingresar Nuevo Clientes <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
  <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
</svg></a>

        <table class="table table-dark table-striped table-hover">
            <tr>
                <th>Código</th>
                <th>Cédula</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
            <?php
                $sql="SELECT * FROM clientes";
                $resultados=mysqli_query($con,$sql);
                while($registro=mysqli_fetch_assoc($resultados) ){
            ?>
                    <tr>
                        <td><?php echo $registro['CLIID']?></td>
                        <td><?php echo $registro['CLICEDULA']?></td>
                        <td><?php echo $registro['CLINOMBRE']?></td>
                        <td><?php echo $registro['CLIDIRECCION']?></td>
                        <td><?php echo $registro['CLITELEFONO']?></td>
                        <td>
							<a class="btn btn-warning" href="editar.php?cliId=<?php echo $registro['CLIID']?>">Editar</a>
							<a class="btn btn-danger" href="eliminar.php?cliId=<?php echo $registro['CLIID']?>">Eliminar</a>
						</td>
                    </tr>

            <?php
                }
            ?>


        </table>
	</body>
</html>
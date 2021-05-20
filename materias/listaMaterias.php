<?php
    include("../conexion.php");
    session_start();
    if (!$_SESSION['usuario']) {
    header('location: ../index.php');
}

?>
<html>
	<head>

		<title>
			Listado de Materias
		</title>
        <script src="../js/bootstrap.min.css"></script>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <script language="javascript" type="text/javascript" src="../js/bootstrap.js" ></script>                    
	</head>
	<body>
		<center><h1>Listado de Materias</h1></center>
        <a class="btn btn-outline-primary" href="nuevo.php">Ingresar Nueva Materia ></a>
        <a class="btn btn-outline-primary" href="../reportes/reporte.php">Imprimir Listado </a>

        <table class="table table-dark table-striped table-hover">
            <tr>
                <th>Código</th>
                <th>Materia</th>
                <th>Carrera</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
            <?php
                $sql="SELECT MATID,MATNOMBRE,CARNOMBRE,MMATESTADO FROM materias m, carreras c WHERE m.CARID=c.CARID";
                $resultados=mysqli_query($con,$sql);
                while($registro=mysqli_fetch_assoc($resultados) ){
            ?>
                    <tr>
                        <td><?php echo $registro['MATID']?></td>
                        <td><?php echo $registro['MATNOMBRE']?></td>
                        <td><?php echo $registro['CARNOMBRE']?></td>
                        <td><?php echo $registro['MMATESTADO']?></td>
                        <td>
							<a class="btn btn-warning" href="materias/editar.php?matId=<?php echo $registro['MATID']?>">Editar</a>
							<a class="btn btn-danger" href="materias/eliminar.php?matId=<?php echo $registro['MATID']?>">Eliminar</a>
						</td>
                    </tr>
            <?php
                }
            ?>
        </table>
	</body>
</html>
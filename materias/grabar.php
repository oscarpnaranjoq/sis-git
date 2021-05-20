<?php
    include("../conexion.php");
    $carId=$_POST['cmbCarrera'];
    $materia=$_POST['txtMateria'];
    $estado=$_POST['cmbEstado'];


    $sql="INSERT INTO materias (CARID,MATNOMBRE,MMATESTADO)
            VALUES($carId, '$materia', '$estado')";
            echo "->".$sql;
    $insertar=mysqli_query($con,$sql);            
    if($insertar){
        echo 'Datos guardados con éxito...';
        header("Location: listaMaterias.php");
    }else{
        echo 'Error al guardar los datos...';
    }
?>
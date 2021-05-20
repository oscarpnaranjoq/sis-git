<?php
    include("conexion.php");
    $cedula=$_POST['txtCedula'];
    $nombre=$_POST['txtNombre'];
    $direccion=$_POST['txtDireccion'];
    $telefono=$_POST['txtTelefono'];

    $sql="INSERT INTO clientes (CLICEDULA,CLINOMBRE,CLIDIRECCION,CLITELEFONO)
            VALUES('$cedula', '$nombre', '$direccion', '$telefono')";
    $insertar=mysqli_query($con,$sql);            
    if($insertar){
        echo 'Datos guardados con éxito...';
        header("Location: listaClientes.php");
    }else{
        echo 'Error al guardar los datos...';
    }
?>
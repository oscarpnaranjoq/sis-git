<?php
    include("conexion.php");
    $codigo=$_POST['txtCodigo'];
    $cedula=$_POST['txtCedula'];
    $nombre=$_POST['txtNombre'];
    $direccion=$_POST['txtDireccion'];
    $telefono=$_POST['txtTelefono'];

    $sql="UPDATE clientes SET CLICEDULA='$cedula',CLINOMBRE='$nombre',CLIDIRECCION='$direccion',CLITELEFONO='$telefono'
        WHERE CLIID=$codigo";
    $actualizar=mysqli_query($con,$sql);            
    if($actualizar){
        echo 'Datos actualizados con éxito...';
        header("Location: listaClientes.php");
    }else{
        echo 'Error al actualizar los datos...'.mysqli_connect_error();
    }
?>
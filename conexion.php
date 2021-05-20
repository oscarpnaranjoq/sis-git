<?php
//Parametros de conexión a la BD
    $dbHost="localhost";
    $dbUserName="root";
    $dbPassword="";
    $dbName="sm-db";

    $con=mysqli_connect($dbHost,$dbUserName,$dbPassword,$dbName);

    if(mysqli_connect_errno()){
        echo 'Conexión Fallida... Verifique...'.mysqli_connect_error();
    }else{
        echo 'Conexión exitosa...';
    }
?>
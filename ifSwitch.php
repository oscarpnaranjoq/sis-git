<?php
    $nombre="Luis";
    $genero="Masculino"; # Masculino= porcentaje normal , Femenino= porcentaje es el 50% y si es otro=doble del porcentaje
    $baseImponible=7000; # es igual o pasa los 10000 automaticamente paga 1000
    $sueldo=10000;
    $porIR=20;
    $valorIR=0;
    if($genero=="Masculino"){
        if($sueldo>=10000){
            $valorIR=1000;
        }else{
            $diferencia=$baseImponible-$sueldo;
            $valorIR=$diferencia*($porIR/100);
        }
    }else if($genero=="Femenino"){
        $diferencia=$baseImponible-$sueldo;
        $valorIR=($diferencia*($porIR/100))/2;
    }else{
        $diferencia=$baseImponible-$sueldo;
        $valorIR=($diferencia*($porIR/100))*2;
    }    
    echo "El Valor del IR a pagar de ".$nombre." es: ".$valorIR ."<br>";

    $diaSemana=3;
    $nombreDia="";
    switch($diaSemana){
        case 1:
            $nombreDia="Lunes";
            break;
        case 2:
            $nombreDia="Martes";
            break;
        case 3:
            $nombreDia="Miércoles";    
            break;
        case 4:
            $nombreDia="Jueves";    
            break;
        case 5:
            $nombreDia="Viernes";    
            break;
        case 6:
            $nombreDia="Sábado";    
            break;            
        case 7:
            $nombreDia="Domingo";    
            break;
        default:
            $nombreDia="No sabemos que dia es...";
    }
    echo "El día seleccinado es: ".$nombreDia;

    //array(clave=>valor, clave => valor);
    $alumnos=array(0=> 'Diego Sanchez',1=>'Julio Vizñay',3=>'Edison Lopez');
    $directorio=array('Ivan'=>'099999','Gianella'=>'098888','Alexandra'=>'0955555');
    $datosPersonales=array('nombre'=>'Jose','apellido'=>'Bohorquez','fecha_nacimiento'=>'09-02-2010');
    $datosExtras=array('Jose','Bohorquez','09-02-2010');
    print_r($alumnos);
    echo "<br>";
    print_r($directorio);
    echo "<br>";
    print_r($datosPersonales);
    echo "<br>";

    echo $alumnos[0];
    echo "<br>";
    
    echo $directorio['Gianella'];
    echo "<br>";

    echo $datosPersonales['fecha_nacimiento'];
    echo "<br>";
    echo $datosExtras[0];

    echo "<hr>";
    foreach($alumnos as $alumno){
        echo "<br>Dato: ".$alumno;
    }

    echo "<hr>";
    foreach($directorio as $dir){
        echo "<br>Dato: ".$dir;
    }
    echo "<hr>";
    foreach($datosPersonales as $dato){
        echo "<br>Dato: ".$dato;
    }

    $anios=array();
    $anio=2000;
    while($anio<=2021){
        $anios[]=$anio;
        $anio++;
    }
    print_r($anios);

    // funciones
    function bienvenido(){
        echo "<h1>Bievenidos programadores PHP...</h1>";
    }

    bienvenido();

    function sumar($num1,$num2){
        $suma=$num1+$num2;
        echo "sumatoria es: ".$suma;
    }

    sumar(5,20);

    function restar($num1,$num2){
        $resta=$num1-$num2;
        return $resta;        
    }

    echo "<br>La resta es: ".restar(100,20);

?>


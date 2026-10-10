<?php
//Script para procesar quincena del primer ejercicio
    $nombre = $_POST['nombre'];
    $cedula = $_POST['cedula'];
    $horas_diurnas = $_POST['horas_diurnas'];
    $horas_vespertinas = $_POST['horas_vespertinas'];
    $horas_nocturnas = $_POST['horas_nocturnas'];

    function procesarQuincena($nombre, $cedula, $horas_diurnas, $horas_vespertinas, $horas_nocturnas)
    {
        $sueldoBruto = 0; //Variable que almacena el sueldo bruto en base a las horas trabajadas por turno ($horas_diurnas, $horas_vespertinas, $horas_nocturnas)
        //Calculo de $sueldoBruto
        if($horas_diurnas > 0){
            $sueldoBruto += (675*$horas_diurnas); 
        }
        if($horas_vespertinas > 0){
            $sueldoBruto += 700*($horas_vespertinas); 
        }
        if($horas_nocturnas > 0){
            $sueldoBruto += 956.23*($horas_nocturnas); 
        }

        $sueldoQuincena = 0; //Variable que almacena la quincena teniendo en cuenta las deducciones en el sueldo bruto ($sueloBruto)
        //Calculo de $sueldoQuincenal
        if($sueldoBruto < 85000){
            $sueldoQuincena = $sueldoBruto - (($sueldoBruto*0.001)+($sueldoBruto*0.0015));
        }
        if($sueldoBruto >= 85000 && $sueldoBruto <= 150000){
            $sueldoQuincena = $sueldoBruto - (($sueldoBruto*0.0015)+($sueldoBruto*0.002));
        }
        if($sueldoBruto > 150000){
            $sueldoQuincena = $sueldoBruto - (($sueldoBruto*0.003)+($sueldoBruto*0.0025));
        }        

        //Retorno de la funcion
        echo "Hola ". $nombre. " de cedula: ". $cedula. ", su sueldo quincenal es: ". $sueldoQuincena . "Bs.";
        return;
    }

?>
    <h2> <?php procesarQuincena($nombre, $cedula, $horas_diurnas, $horas_vespertinas, $horas_nocturnas); ?> </h2>
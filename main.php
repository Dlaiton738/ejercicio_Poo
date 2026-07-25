<?php

include 'clases.php';

$moto = new Moto(" yamaha"," Deportiva"," encendida");

$carro = new Carro(" mazda"," sedán"," apagado");

$moto -> Informacion();
$moto -> encender();

echo "<hr>";

$carro -> Informacion();
$carro -> encender();
<?php
$tripulacion = [
    'alex raider'
    'mia kovalik'
    'raj patel'
    'elena vega'
    'jules berman'
];
$tripulacion[]= 'sam cartyer';
$tripulacion[]= 'leo mu';
$tripulacion[]= 'zara khan';
var_dump(value: $tripulacion);
function agregar($nuevoString, &$arreglo){
    $arreglo[]=$nuevoString
}

agregar('polaco', $tripulacion);
var_dump($tripulacion);
?>
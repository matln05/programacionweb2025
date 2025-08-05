<?php
$Videojuegos =[
    $Juego = "The Legend Of Zelda"
    $Consola => "NES"
    $Año = "1986"
    $Precio = "50.00"
]
foreach($Videojuegos as $key => $Value){
echo $Value
}

$Videojuegos["stok"] = 40
$Videojuegos["venta"] ='Verdadero';
foreach($Videojuegos as $key => $Value){
echo $Value
}

?>
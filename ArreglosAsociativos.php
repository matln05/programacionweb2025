<?php
$Videojuegos =[
    'Juego' => 'The Legend Of Zelda',
    'Consola' => 'NES',
    'Año' => 1986,
    'Precio' => 50.00
]
$Videojuegos['Desarrollador'] = 'Nintendo';
$Videojuegos['Genero'] = 'Aventura';
$Videojuegos['Stock'] = 20;
$Videojuegos['Venta'] = true;
foreach($Videojuegos as $key => $Value){
echo $Value . "<br>";
}

$Videojuegos["stok"] = 10
$Videojuegos["venta"] ='Verdadero';
foreach($Videojuegos as $key => $Value){
echo $Value
}

$inventario=[
    'sumer_mario_bros_3'=>[
    'consola' => 'nes',
    'año' => 1988,
    'precio' => 45.00,
    'stock' => 10,
    'venta' => true
    ]
    'crono_trigger'=>[
    'consola' => 'snes',
    'año' => 1995,
    'precio' => 80.00,
    'stock' => 5,
    'venta' => true
    ]
    'Super Mario 3D Land'=>[
    'consola' => '3ds',
    'año' => 2011,
    'precio' => 40.00,
    'stock' => 15,
    'venta' => true   
    ]
    ];
foreach($inventario as $key => $Value){
    echo "juego:" . $key . "<br>";
    foreach($Value as $key2 => $Value2){
        echo $key2 . ": " . $Value2 . "<br>";
    }
}
?>
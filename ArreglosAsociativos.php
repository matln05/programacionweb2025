<?php
$Videojuegos =[
    'Juego' => 'The Legend Of Zelda',
    'Consola' => 'NES',
    'Año' => 1986,
    'Precio' => 50.00,
    'stock' => 10,
    'venta' => true
];
foreach ($Videojuegos as $key => $value) {
    echo $key . ": " . $value . "<br>";
}
    echo "--------------------<br>";
$inventario = [
    'super mario bros 3' => [
        'consola' => 'nes',
        'año' => 1988,
        'precio' => 45.00,
        'stock' => 10,
        'venta' => true
    ],
    'crono trigger' => [
        'consola' => 'snes',
        'año' => 1995,
        'precio' => 80.00,
        'stock' => 5,
        'venta' => true
    ],
    'Super Mario 3D Land' => [
        'consola' => '3ds',
        'año' => 2011,
        'precio' => 40.00,
        'stock' => 15,
        'venta' => true
    ],
    'The Legend of Zelda: Breath of the Wild' => [
        'consola' => 'switch',
        'año' => 2017,
        'precio' => 60.00,
        'stock' => 8,
        'venta' => true
    ]
];
foreach ($inventario as $key => $Value) {
    echo "juego:" . $key . "<br>";
    foreach ($Value as $key2 => $Value2) {
        echo $key2 . ": " . $Value2 . "<br>";
    }
    echo "--------------------<br>";
}
echo "Total de juegos en inventario: " . count($inventario) . "<br>";
echo "Total de juegos en stock: " . array_sum(array_column($inventario, 'stock')) . "<br>";
echo "Total de juegos en venta: " . count(array_filter($inventario, function($item) {
    return $item['venta'] === true;
})) . "<br>";
foreach ($inventario as $key => &$juego) {
    if ($juego['consola'] === 'nes') {
        $juego['precio'] *= 0.9;
    }
}    echo "--------------------<br>";
    echo "juegos con descuento del 10%" . "<br>";
    echo "--------------------<br>";
    
unset($juego);
foreach ($inventario as $key => $Value) {
    echo "juego:" . $key . "<br>";
    foreach ($Value as $key2 => $Value2) {
        echo $key2 . ": " . $Value2 . "<br>";
    }
    echo "--------------------<br>";
}
$busqueda = 'crono trigger';
$encontrado = false;

foreach ($inventario as $titulo => $detalles) {
    if (strtolower($titulo) === strtolower($busqueda)) {
        echo "Juego encontrado: " . $titulo . "<br>";
        foreach ($detalles as $key => $value) {
            echo $key . ": " . $value . "<br>";
        }
        $encontrado = true;
        break;
    }
}
    echo "--------------------<br>";
    echo "Resultado de la búsqueda:<br>";
if ($encontrado) {
    echo "El juego " . $busqueda . " está disponible en el inventario.<br>";
} else {
    echo "El juego " . $busqueda . " no está disponible en el inventario.<br>";
}
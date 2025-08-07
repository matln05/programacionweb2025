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
    'Castlevania' => [
        'consola' => 'nes',
        'año' => 1986,
        'precio' => 35.00,
        'stock' => 7,
        'venta' => true
    ],
    'Mega Man 2' => [
        'consola' => 'nes',
        'año' => 1988,
        'precio' => 40.00,
        'stock' => 9,
        'venta' => true
    ],
    'Contra' => [
        'consola' => 'nes',
        'año' => 1987,
        'precio' => 38.00,
        'stock' => 6,
        'venta' => true
    ],
    'chrono trigger' => [
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
    ],
    'Final Fantasy VII' => [
        'consola' => 'ps1',
        'año' => 1997,
        'precio' => 70.00,
        'stock' => 12,
        'venta' => true
    ],
    'Sonic the Hedgehog' => [
        'consola' => 'sega genesis',
        'año' => 1991,
        'precio' => 55.00,
        'stock' => 8,
        'venta' => true
    ],
    'Metroid Prime' => [
        'consola' => 'gamecube',
        'año' => 2002,
        'precio' => 50.00,
        'stock' => 6,
        'venta' => true
    ],
    'Halo: Combat Evolved' => [
        'consola' => 'xbox',
        'año' => 2001,
        'precio' => 65.00,
        'stock' => 4,
        'venta' => true
    ],
    'God of War' => [
        'consola' => 'ps2',
        'año' => 2005,
        'precio' => 30.00,
        'stock' => 20,
        'venta' => true
    ],
    'The Elder Scrolls V: Skyrim' => [
        'consola' => 'pc',
        'año' => 2011,
        'precio' => 50.00,
        'stock' => 10,
        'venta' => true
    ],
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
$busqueda = 'chrono trigger';
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
$nuevo_juego = [
    'consola' => 'Sega Genesis',
    'año' => 1991,
    'precio' => 55.00,
    'stock' => 8,
    'venta' => true
];
$total_antes = count($inventario);
$inventario['Sonic the Hedgehog'] = $nuevo_juego;
$total_despues = count($inventario);
echo "--------------------<br>";
echo "Nuevo juego añadido: Sonic the Hedgehog<br>";
foreach ($nuevo_juego as $key => $value) {
    echo $key . ": " . $value . "<br>";
}
echo "--------------------<br>";
echo "Total de juegos antes de añadir: $total_antes<br>";
echo "Total de juegos después de añadir: $total_despues<br>";
echo "--------------------<br>";
foreach ($inventario as $titulo => $detalles) {
    if (stripos($titulo, 'zelda') !== false) {
        unset($inventario[$titulo]);
        break;
}
}
echo "Inventario después de eliminar 'The Legend of Zelda':<br>";
echo "--------------------<br>";
foreach ($inventario as $key => $Value) {
    echo "juego:" . $key . "<br>";
    foreach ($Value as $key2 => $Value2) {
        echo $key2 . ": " . $Value2 . "<br>";
    }
    echo "--------------------<br>";
}
echo "Total de juegos en inventario después de la eliminacion: " . count($inventario) . "<br>";
echo "---------------------<br>";
ksort($inventario, SORT_NATURAL | SORT_FLAG_CASE);
echo "Inventario ordenado alfabéticamente:<br>";
echo "--------------------<br>";
foreach ($inventario as $key => $Value) {
    echo "juego:" . $key . "<br>";
    foreach ($Value as $key2 => $Value2) {
        echo $key2 . ": " . $Value2 . "<br>";
    }
    echo "--------------------<br>";
}
?>
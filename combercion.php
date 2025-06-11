<?php
$tasas= [
    'USD' => 40.
    'EUR' => 43.
    'BRL' => 8
];
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $suma = floatval($_POST['suma'] ?? 0);
    $moneda_inicial = $_POST['moneda_inicial'] ?? '';
    $moneda_final = $_POST['moneda_final'] ?? '';

    if ($suma <= 0){
        $error = "El monto ingresado debe ser superior a cero para realizar la operacion";
    }elseif (!array_key_exists($moneda_inicial, $tasas) || !array_key_exists($moneda_final, $tasas)){
        $error = "seleccione una moneda valida";
    }else{
        $valorPesos = $suma * $tasas[$moneda_inicial];
        $valorcomvertido = $valorPesos / $tasas[$moneda_final];
        $resultado = number_format($valorcomvertido);
    }
}
?>
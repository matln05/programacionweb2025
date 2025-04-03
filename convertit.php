<?php
if ($_server["REQUEST_METHOD"] == "POST"){
    $CantidadDePesos = floatval(value: $_POST["pesos"]);
    $ValorDolar = 40;
    $CantidadTotalDolares = = $CantidadDePesos / $ValorDolar;
    echo "<h2> resultado de la combercion </h2>";
    echo "<p>$CantidadDePesos pesos uruguayos equivalen a <strong>" . numfmt_format(num: $ca) 
} else {
    echo "error en la solicitud.";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de Conversión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .result-container {
            max-width: 500px;
            margin: 50px auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            background-color: white;
        }
        .result-title {
            color: #0d6efd;
            margin-bottom: 30px;
            text-align: center;
        }
        .conversion-result {
            background-color: #e7f1ff;
            border-left: 5px solidrgb(21, 253, 13);
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 5px;
        }
        .rate-info {
            font-size: 0.9rem;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="result-container">
            <h1 class="result-title mb-4">Resultado de Conversión</h1>
            
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $cantidadDePesos = floatval(value: $_POST["pesos"])
            $moneda =($_POST["moneda"]);
            $ValorDolar = 40;
            $ValorEuro = 43;
            $ValorReal = 8;
            switch ($moneda) {
                case 'Dolares':
                    $cantidadDeDolares = $cantidadDePesos / $ValorDolar;
                echo "resultado de la convercion: $cantidadDePesos Pesos Uruguayos equivalentes a" $cantidadDeDolares . " dolares";
                    break;
                case 'Euros':
                    $cantidadDeEuros = $cantidadDePesos / $ValorEuros;
                echo "resultado de la convercion: $cantidadDePesos Pesos Uruguayos equivalentes a" $cantidadDeeuros . " euros";
                    break;
                case 'Reales':
                    $cantidadDeReales = $cantidadDePesos / $ValorReales;
                echo "resultado de la convercion: $cantidadDePesos pesos Uruguayos quivalentes a" $cantidadDeReales . " reales";
                    break;
            }
            }else{
                echo "error de solicitud, intente nuevamtnte."
            }
            ?>
            
            <div class="d-grid">
                <a href="index.html" class="btn btn-outline-primary">
                    <i class="bi bi-arrow-left"></i> Volver al conversor
                </a>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
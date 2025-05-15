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
            border-left: 5px solid #0d6efd;
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
            $valores = [
                'USD' => 40,
                'EUR' => 43,
                'BRL' => 8
            ];

            
            $cantidad = $_POST['cantidad'] ?? 0;
            $moneda = $_POST['moneda'] ?? '';
            
            if (!is_numeric($cantidad) || $cantidad <= 0 || !array_key_exists($moneda, $valores)) {
                echo '<div class="alert alert-danger" role="alert">';
                echo 'Error: Datos de entrada no válidos. Por favor, intente nuevamente.';
                echo '</div>';
            } else {
                $valor = $valores[$moneda];
                $convertido = $cantidad / $valor;
                
                echo '<div class="conversion-result">';
                echo '<h3 class="text-center mb-3">';
                echo number_format($cantidad, 2, ',', '.') . ' UYU = ';
                echo '<strong>' . number_format($convertido, 2, ',', '.') . ' ' . $moneda . '</strong>';
                echo '</h3>';
                echo '<p class="rate-info text-center mb-0">';
                echo 'Tasa de cambio: 1 ' . $moneda . ' = ' . $valor . ' UYU';
                echo '</p>';
                echo '</div>';
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
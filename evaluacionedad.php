<?php
fincion evaluarEdad($fechaDenacimiento){
$nacimiento= new Datetime($fechaDenacimiento);
$ohy = Datetime();

$diferencia = $hoy->diff($nacimiento);
$edad = $diferencia->y;

if ($edad < 0) {
    echo "Fecha de nacimiento inválida (futuro)";

}else{($edad >= 11 && $edad <= 19){
    echo "Menor de edad ($edad años)";
    
} else {
    echo "Mayor de edad ($edad años)";
        }
    }
}
?>
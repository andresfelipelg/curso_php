<?php

$nombre = "andres";

echo " hola $nombre <br>";

$variable1 = "casa";
$variable2 = "CASA";

//$resultado = strcasecmp ($variable1,$variable2); //devuelve 1 si es igual o 0 si no es igual
$resultado = strcasecmp ($variable1,$variable2); //devuelve 1 si es igual o 0 si no es igual
//echo "El resultado es $resultado";

if (!$resultado) {
    
    echo 'Coincide';
    
}else{
    
    echo 'no Coincide';
}

?>
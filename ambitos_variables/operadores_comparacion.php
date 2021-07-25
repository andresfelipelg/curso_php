<?php

$variable1 = 8;
$variable2 = '8';
$variable3 = 'Juan';

if ($variable1 == $variable2) {
    echo "Son iguales <br>";
}else{
    echo "no Son iguales <br>";
}

if ($variable1 == $variable3) {
    echo "Son iguales <br>";
}else{
    echo "no Son iguales <br>";
}

if ($variable1 === $variable2) {
    echo "Son iguales <br>";
}else{
    echo "no son iguales <br>";
}

if ($variable1 !== $variable3) {
    echo "Son diferentes <br>";
}else{
    echo "no son diferentes <br>";
}

?>
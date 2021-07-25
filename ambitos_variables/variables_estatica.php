<?php

function incrementaVariable(){
   static $contador = 0;

    $contador ++;

    echo $contador . "<br>";
};

incrementaVariable();
incrementaVariable();
incrementaVariable();
incrementaVariable();
incrementaVariable();



?>
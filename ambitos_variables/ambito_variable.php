<?php

$nombre = "Andres";


function dameNombre (){
    //$nombre = "maria";

    global $nombre;

    $nombre = "El nombre es " . $nombre;
}

dameNombre();

echo $nombre;

?>
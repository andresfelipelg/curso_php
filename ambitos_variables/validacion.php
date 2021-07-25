<style>

    .autorizado{
        color: green;
    }

    .noAutorizado{
        color: red;
    }
    
</style>

<?php



if (isset($_POST['enviando'])) {
    
    $usuario = $_POST['nombre_usuario'];
    $edad = $_POST['edad_usuario'];

    if ($usuario == 'Andres' && $edad>=18) {
        echo ' <p class="autorizado">'.'puedes entrar' . '</p>' ;
        
    }else{
        echo ' <p class="noAutorizado">'.'No puedes entrar' . '</p>';

    }
}


?>
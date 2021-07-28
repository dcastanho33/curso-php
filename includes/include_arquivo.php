<?php
echo 'Carregando: include_arquivo<br>';

$variavel = 'Estou definida';

if(!function_exists('soma')){                  //só cria a função se ela não existir, isso pode evitar problemas com includes multiplos.
    function soma($a, $b){
        return $a + $b;
    }
}
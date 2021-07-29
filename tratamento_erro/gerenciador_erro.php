<div class="titulo">Error Handler</div>

<?php

ini_set('display_errors', 1); //mostra os erros no browser
//echo 4 / 0 . '<br>';

error_reporting(E_ERROR);
//echo 4 / 0 . '<br>';

error_reporting(E_ALL);
//echo 4 / 0 . '<br>';

error_reporting(~E_ALL);
echo 4 / 0 . '<br>';

echo '<hr>';

error_reporting(E_ALL);
echo 4/0 . '<br>';
include 'arquivo_inexistente.php';

function filtrarMensagem($errno, $errstring) {
    $texto = 'include';
    return !!stripos(" $errstring", $texto); //filtrará o erro do include
}

set_error_handler('filtrarMensagem', E_WARNING); //com o filtrarMensagem mostrará apenas os warnings

echo '<hr>';
echo 4 / 0 . '<br>';
include 'arquivo_inexistente.php';

restore_error_handler(); //volta o error handler ao seu estado normal
<?php namespace Desafio;

use DivisionByZeroError;?>

<div class="titulo">Desafio Intdiv</div>

<?php

class NaoInteiroException extends \Exception {        //o namespace está diferente, então precisa do \ para acessar o namespace onde a função exception está

}

function intdiv($a, $b){
    if ($b === 0) {
        throw new DivisionByZeroError('Dividiu por zero');
    }
    
    $resultado = $a/$b;
    
    if (is_int($resultado) !== true) {
        throw new NaoInteiroException('O resultado não é inteiro');
        return $resultado;
    }
    
    return $resultado;
}

try {
    echo intdiv(8, 3) . '<br>';
} catch (NaoInteiroException $e) {
    echo 'Houve um problema: ' . $e->getMessage();
} catch (DivisionByZeroError $e) {
    echo 'Houve um problema: ' . $e->getMessage();
}
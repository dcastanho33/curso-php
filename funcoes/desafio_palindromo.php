<div class="titulo">Desafio Palindromo</div>

<?php

function palindromo($palavra){
    $ultimo = strlen($palavra) - 1;
    for ($cont = 0; $cont <= $ultimo; $cont++){
        if ($palavra[$cont] !== $palavra[$ultimo]){
            return "não é palindromo";
            break;
        } else {
            $ultimo--;
        }
        return "é palíndromo";
    }
}

echo palindromo ('daniel leinad') , '<br>';
echo palindromo ('ana') . '<br>';
echo palindromo ('bola') , '<br>';
echo '<br><br>';

function palindromoSimples($palavra){
    return $palavra === strrev($palavra) ? 'Palindromo' : "Não é Palindromo";     //função palindromo já dentro do api do php
}

echo palindromoSimples ('daniel leinad') , '<br>';
echo palindromoSimples ('ana') . '<br>';
echo palindromoSimples ('bola') , '<br>';
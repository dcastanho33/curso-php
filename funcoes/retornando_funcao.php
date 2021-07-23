<div class="titulo">Retornando Função</div>

<?php
function soma($a){
    return function ($b) use ($a) {   //dentro da função precisa ter explicito o use $a
        return $a + $b;
    };
}

echo soma(4)(3);

//outro exemplo
$doisMais = soma(2);        
echo '<br>', $doisMais(10);
echo '<br>', $doisMais(18);

//se você tem um algoritmo e você quer quebrar o algoritmo ou quer chamar o algoritmo de uma vez só.
//Só quando você tiver todos os parâmetros e você quer armazenar a função com parte dos parâmetros já informados,
//uma estratégia interessante que é você usar uma função dentro da outra
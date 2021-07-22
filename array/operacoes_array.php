<div class="titulo">Operações</div>

<?php

$dados1 = [           /*forma diferente de usar array*/
    "nome" => "Jose",
    "idade" => 28
];

$dados2 = [
    //"nome" => "Maria",     //haverá um conflito de chaves pois a chave nome tem nos dois arrays, o que continuará será o array que está escrito à esquerda na hora do merge
    "naturalidade" => "Fortaleza"
];

$dados2 = [
    "endereco" => "Rua A"
];

$dadosCompletos = $dados1 + $dados2;         /*junta os dois arrays em um só*/
print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos); //verifica se a variável é um array
echo '<br>' . count($dadosCompletos); //faz a contagem dos elementos do array

echo '<br>';
$indice = array_rand($dadosCompletos); //cada vez que executar essa função ele dará um indice randômico
echo "$indice = $dadosCompletos[$indice]";
echo '<br>';

//echo "$dadosCompletos['idade']"; //cuidado com a interpolação!
echo "{$dadosCompletos['idade']}"; //usar chaves
echo " ${dadosCompletos['idade']}"; 

unset($dadosCompletos["nome"]); //remove o elemento 'nome' do array
echo '<br>';
print_r($dadosCompletos);

unset($dadosCompletos); //libera o array da memória completamente
echo '<br>';
var_dump($dadosCompletos);

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$decimais = $pares + $impares;     
echo '<br>';
print_r($decimais);       /*imprimirá apenas os pares pois vem a esquerda no merge, os indices são iguais, não haverá união*/

$decimais = array_merge($pares, $impares);     //recomendado para fundir arrays
echo '<br>';
print_r($decimais); 
sort($decimais);   //ordenará os elementos na ordem correta, modificando a ordem dos indices do array
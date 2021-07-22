<div class="titulo">Mapa</div>

<?php
$dados = array(
    "idade" => 25, 
    "cor" => "verde",
    "peso" => 121.8
);

print_r($dados);
//echo $dados[0]; //não existe, o array não é indexado
echo '<br>' . $dados["idade"];  //tem que buscar pela chave
echo '<br>' . $dados["cor"];  
echo '<br>' . $dados["peso"]; 
echo '<br>' . $dados["outra_informacao"]; //nada acontecerá, pois essa chave não existe

$lista = array(              //não vale a pena misturar array de index com chaves
    "a",
    "cinco" => "b",
    "c", 
    8 => "d",
    "e",
    6 => "f",
    "g",
    8 => "h"
);

echo '<br>';
print_r($lista);

$lista[] = 'i';    //adicionando um elemento dentro da lista
echo '<br>';
print_r($lista);

$lista['vinte'] = 'j';    //adicionando um elemento com chave dentro da lista
echo '<br>';
print_r($lista);

$lista[false] = 'tentei indexar com false!';    //o false nesse contexto virará 0
echo '<br>';
print_r($lista);

$lista[true] = 'tentei indexar com true!';    //o true nesse contexto virará 1
echo '<br>';
print_r($lista);
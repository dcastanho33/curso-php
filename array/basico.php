<div class="titulo">Array</div>

<?php
$lista = array(1, 2, 3.4, "texto");
echo $lista . '<br>';  //só vai imprimir "array"
var_dump($lista);
echo '<br>';
print_r($lista);      //separa os elementos do array na hora de imprimir

$lista[0] = 1234;     //faz uma atribuição e substitui o indice 0 do array

echo '<br>' . $lista[0];    //acessa o índice 0 do array
echo '<br>' . $lista[1];    
echo '<br>' . $lista[2];    
echo '<br>' . $lista[3];    
//echo '<br>' . $lista[3000]; // não dá erro, mas elemento não existe então não será impresso

$texto = 'Esse é um texto de teste';
echo '<br>' . $texto[0];   //imprime a letra E, mas não é interessante pois o acentos ou caracteres especiais ocupam dois índices
echo '<br>' . mb_substr($texto, 10, 1); //melhor forma é usar essa função
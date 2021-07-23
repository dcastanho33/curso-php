<div class="titulo">Função e Escopo</div>

<?php
function imprimirMensagens() {     //função basicamente é dar um nome pra um conjunto de passos
    echo "Olá ! ";
    echo "Até a próxima!<br>";
}

imprimirMensagens();
imprimirMensagens();

$variavel = 1;

function trocaValor() {
    $variavel = 2;
    echo "Durante a função valor da variável é : $variavel<br>";
}

echo "Antes da função valor da variável é: $variavel<br>";
trocaValor(); 
echo "Depois da função valor da variável é: $variavel<br>";

//definir variável dentro da função funciona apenas dentro do escopo da função

function trocaValorDeVerdade() {
    global $variavel;     //acessa a variável fora do escopo da função
    $variavel = 3;
    echo "Durante a função o valor da variável global é: $variavel";
}
echo '<hr>';
echo "Antes da função valor da variável global é: $variavel<br>";
trocaValorDeVerdade();
echo '<br>';
echo "Depois da função valor da variável é global: $variavel<br>";
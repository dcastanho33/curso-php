<div class="titulo">Argumentos e Retorno</div>
<!-- argumento = parâmetro -->

<?php
function obterMensagem(){              //sem parâmetro de entrada
    return 'Seja bem vindo(a)!';       //return não é echo
}

obterMensagem();
var_dump(obterMensagem());
echo '<br>';
$msg = obterMensagem();
echo '<br>' . obterMensagem() . '<br>';
var_dump($msg);

function obterMensagemComNome($nome){     //parâmetro de entrada
    return "Bem vindo, {$nome}!";
}

echo '<br>'. obterMensagemComNome('Wagner');
echo '<br>', obterMensagemComNome('Tiago');
echo '<hr>';

function soma($a, $b){
    return $a + $b;
}

$x = 4;
$y = 5;

echo '<br>'. soma (45, 78);
echo '<br>', soma ($x, $y);

function trocarValor($a, $novoValor){        //passando uma cópia do valor -> não gerará impacto na variável dentro do escopo da função
    $a = $novoValor;
}

$variavel = 1;
trocarValor($variavel, 3);
echo '<br>valor da variável sem passar o endereço de memória: ', $variavel;

function trocarValorDeVerdade(&$a, $novoValor){         //passando a referência do valor na memória -> vai gerar impacto na variável mesmo dentro da função
    $a = $novoValor;
}

trocarValorDeVerdade($variavel, 5);
echo '<br>valor da variável passando o endereço da memória: ', $variavel;
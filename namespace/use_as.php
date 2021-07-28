<?php namespace Outro\Nome; ?>
<div class="titulo">Use/As</div>

<?php 
echo __NAMESPACE__ . '<br>';

include ('use_as_arquivo.php'); //com esse include feito, o namespace foi mudado

function soma($a, $b){
    return $a . $b; //eu sei que tá errado
}

class Classe {
    public $var;

    function func(){
        echo __NAMESPACE__ . '->' . __CLASS__ . '->' . __METHOD__ . '<br>';
    }
}

echo \Nome\Bem\Grande\constante . '<br>';    //usa o caminho raíz '\'

use const \Nome\Bem\Grande\constante;   //usando a constante       
echo constante . '<br>';

use \Nome\Bem\Grande as ctx; //simplifica o caminho para ctx

echo soma (1,2) . '<br>';
echo ctx\soma(1, 2) . '<br>'; 

//use function Nome\Bem\Grande\soma; conflito
use function Nome\Bem\Grande\soma as somaReal;
echo somaReal(100,212) . '<br>';            //soma certa

//acessando a classe deste namespace
$a = new Classe(); 
$a -> func();

//acessando a classe do namespace do outro arquivo
$b = new \Nome\Bem\Grande\Classe();
$b -> func();

$c = new ctx\Classe();
$c -> func();

use \Nome\Bem\Grande\Classe as D; //simplificando o caminho para apenas D
$d = new D();
$d -> func();
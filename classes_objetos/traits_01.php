<div class="titulo">Traits #01</div>

<?php
trait validacao {
    public $a = 'valor A';
    public function validarString($str){
        return isset($str) && $str != '';
    }
}

trait validacaoMelhor {
    public $b = 'valor B';
    private $c = 'valor C (privado)';
    public function validarStringMelhor($str){
        return isset($str) && trim($str);
    }
}

class User {
    use validacao, validacaoMelhor;

    public function imprimirValorC(){
        echo '<br>', $this->c;
    }
}

//var_dump(validacao->validarString('')); errado
$usuario = new User();
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validarStringMelhor(' '));
echo '<br>';
echo $usuario->a, '<br>', $usuario->b, '<br>';
echo $usuario->imprimirValorC();
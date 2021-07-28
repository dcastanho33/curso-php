<div class="titulo">Traits #02</div>

<?php
trait validacao {
    public function validarString($str){
        return isset($str) && $str != '';   
    }
}

trait validacaoMelhor {
    public function validarString($str){
        return isset($str) && trim($str);   
    }
}

class Usuario1 {
    use validacao, validacaoMelhor {
        validacaoMelhor::validarString insteadOf validacao;

        validacao::validarString as validacaoSimples;
    }
}

$usuario = new Usuario1();
//var_dump($usuario->validarString(' '));
var_dump($usuario->validacaoSimples(' '));
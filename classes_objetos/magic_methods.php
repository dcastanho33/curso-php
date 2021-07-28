<div class="titulo">Métodos Mágicos</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade){
        echo 'Construtor invocado!<br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct(){
        echo '<br>E morreu!';
    }

    public function __toString(){
        return "{$this->nome} tem {$this->idade} anos.<br>";
    }

    public function apresentar(){
        echo $this . "<br>";
    }

    public function __get($atrib){
        echo "Lendo um atributo não-declarado: {$atrib}<br>";
    }

    public function __set($atrib, $valor){
        echo "Alterando atributo não-declarado: {$atrib}/{$valor}<br>";
    }

    public function __call($metodo, $params){
        echo "Tentando executar o método ${metodo}.";
        echo "<br>, com os parâmetros: ";
        print_r($params);
    }
}

$pessoa = new Pessoa('Ricardo', 40); //__construct
$pessoa->apresentar(); //chamando o __toString
echo $pessoa, '<br>'; //chamando o __toString
$pessoa->nome = 'Reinaldo';
$pessoa->apresentar(); //chamando o método diretamente sem o __call (esse método existe)

$pessoa->nomeCompleto = 'Muito Legal'; //chamando o __set (o atributo NomeCompleto não existe e está sendo atribuido um valor)

$pessoa->nomeCompleto; //chamando o __get (o atributo nomeCompleto não existe)

echo $pessoa->nome, '<br>'; //acessa o atributo diretamente sem o __get (o atributo existe)

$pessoa->exec(1, 'teste', true, [1, 2, 3]); //chamando o __call (o método exec não existe)

$pessoa = null; //destrói a instancia __destruct
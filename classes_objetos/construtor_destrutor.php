<div class="titulo">Construtor e Destrutor</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($novoNome, $idade){        //define os parâmetros para o construtor
        echo 'Construtor invocado! <br>';
        $this->nome = $novoNome;
        $this->idade = $idade;
    }
    
    function __destruct(){                          //define o destrutor
        echo '...E morreu!<br>';
    }

    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
        
}

$pessoaA = new Pessoa('Rebecca Maria', 40);    //precisa passar os parâmetros no parenteses quando houver construtor
$pessoaB = new Pessoa('João Pedro', 13);    //precisa passar os parâmetros no parenteses quando houver construtor

$pessoaA->apresentar();
unset($pessoaA); //libera da memória, invocando o destrutor

$pessoaB->apresentar();
$pessoaB = null; 

//$pessoa = new Pessoa();  problema pois precisa de parametros


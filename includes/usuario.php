<?php
include_once ('pessoa.php');
class Usuario extends Pessoa {
    public $login;

    function __construct($nome, $idade, $login){
  //    $this->nome = $nome;
  //    $this->idade = $idade;
        parent:: __construct($nome, $idade);          //passa o construtor da classe pai
        $this->login = $login;
        echo 'Usuário criado!<br>';
    }

    function __destruct(){
        echo 'Usuário diz: Tchau! (destruct)<br>';
        parent:: __destruct();
    }

    public function apresentar(){
        echo "@{$this->login} :"; 
        parent:: apresentar();           //chama o método da classe pai
    }
}
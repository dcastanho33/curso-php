<div class="titulo">Primeira Classe</div>

<?php
class Cliente {
    //atributos
    public $nome = 'Anônimo';
    public $idade = 18;
    //métodos
    public function apresentar(){
        return "Nome: {$this->nome}, Idade: {$this->idade}";           //this = aponta para o objeto/instância atual
    }
}

$c1 = new Cliente();
echo $c1->nome, '<br>';
$c1->nome = 'Ana Silva';
echo $c1->nome, '<br>';
$c1->idade = 27;

$c2 = new Cliente();
$c2->nome = 'Gabriel';
$c2->idade = 43;

echo $c1->apresentar(). '<br>';
echo $c2->apresentar(), '<br>';
<div class="titulo">Desafio Classe Data</div>

<?php

class Data {
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar(){
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$c1 = new Data();
echo $c1->apresentar().'<br>';

$c2 = new Data();
$c2->dia = 10;
$c2->mes = 8;
$c2->ano = 2021;
echo $c2->apresentar().'<br>';
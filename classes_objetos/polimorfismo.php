<div class="titulo">Polimorfismo</div>

<?php

abstract class Comida {
    public $peso;
}

class Arroz extends Comida {
    
}

class Feijao extends Comida {

}

class Sorvete extends Comida {

}

class Pessoa {
    public $peso;

    function __construct($peso){
        $this->peso = $peso;
    }

    function comer(Comida $comida){
        $this->peso += $comida->peso;
    }
}

$c1 = new Arroz();
$c1->peso = 0.65;

$c2 = new Sorvete();
$c2->peso = 0.65;

$c3 = new Feijao();
$c3->peso = 0.70;

$p = new Pessoa(83.45);
echo "O peso da Pessoa antes era: $p->peso kgs.<br>";
$p->comer($c1);
$p->comer($c2);
$p->comer($c3);
echo "Depois de comer, o peso ficou: $p->peso kgs.";
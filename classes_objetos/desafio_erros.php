<div class="titulo">Desafio Erros</div>

<?php
interface Template {
    public function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template {
    public function metodo3(){
        echo "Estou funcionando - método 3<br>";
    }
}

class Classe extends ClasseAbstrata{
    public function __construct($parametro){
        echo "construtor<br>";
    }

    public function metodo1(){
        echo "Estou funcionando - método 1<br>";
    }

    public function metodo2($parametro){
        echo "Estou funcionando - método 2<br>";
    }

}

$exemplo = new Classe('...');
$exemplo->metodo3();
$exemplo->metodo2($parametro);
$exemplo->metodo1();
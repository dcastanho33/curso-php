<div class="titulo">Interface</div>

<?php
interface Animal {
    function respirar();
}

interface Mamifero {
    function mamar();
}

interface Canino extends Animal, Mamifero {      //somente as interfaces podem herdar de multiplas classes, classes concretas não podem herdar de multiplas classes
    function latir(): string;
    function correr();
}

interface Felino {
    function correr();
}

class Cachorro implements Canino {              //obrigatoriedade de implementar funções das interfaces
    function respirar(){
        return "Irei usar oxigênio!";
    }

    function latir(): string{
        return 'Au Au!';
    }
    
    function mamar(){
        return 'Irei beber leite';
    }

    function correr(){
        return 'vrummm';
    }
}

$animal1 = new Cachorro();
echo $animal1->respirar(), '<br>';
echo $animal1->latir(), '<br>';
echo $animal1->mamar(), '<br>';
echo $animal1->correr(), '<br>';

echo '<br>';
var_dump($animal1);

echo '<br>';
var_dump($animal1 instanceof Cachorro); //true
var_dump($animal1 instanceof Canino); //true
var_dump($animal1 instanceof Mamifero); //true
var_dump($animal1 instanceof Animal); //true
var_dump($animal1 instanceof Felino); //false
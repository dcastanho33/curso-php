<div class="titulo">Membros Estáticos</div>

<?php
class A {
    public $naoStatic = 'Variável de instância';
    public static $static = 'Variável de classe (estática)';

    public function mostrarA(){
        echo "Não estática = {$this->naoStatic}<br>";
        //tentativa 1
        //echo "Estática = {$this->static}<br>";
        //tentativa 2
        //echo "Estática = {self::$static}<br>";
        echo "Estática = " . self::$static . "<br>";     //cuidado com a interpolação no self
    }
    
    public static function mostrarStaticA(){
        //echo "Não estático = {$this->naoStatic}<br>";  a partir de uma função estática você não consegue acessar o this
        //echo "Estática = {$static}"
        echo "Estática = " . self::$static . "<br>";   
    }

}

$objeto = new A();
$objetoA->mostrarA();              
$objetoA->mostrarStaticA();       //não precisa criar uma instancia para acessar a variável estática pertencente a classe, mas você pode acessar pelo objeto também

echo '<br>';
echo A::$static;                    //forma ideal: acessa diretamente pela classe
A::mostrarStaticA();                //forma ideal: acessa diretamente pela classe

A::$static = 'Alterado membro de classe';
echo A:: $static, '<br>'; //pode-se alterar o membro de classe
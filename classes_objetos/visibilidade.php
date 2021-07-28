<div class="titulo">Visibilidade</div>

<?php
class A {
    public $publico = 'Público';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA(){
        $this->naoMostrar();
        echo "a) Publico = {$this->publico}<br>";
        echo "a) Protegido = {$this->protegido}<br>";
        echo "a) Privado = {$this->privado}<br>";
    }

    protected function vaiPorHeranca(){
        echo "Função protegida: Serei transmitido por herança<br>"; 
    }
    
    private function naoMostrar(){
        echo "Função privada: Só vou imprimir se eu tiver dentro da classe<br>"; 
    }
}

$a = new A();
$a -> mostrarA();
//$a -> naoMostrar(); aqui não vai funcionar

class B extends A {
    public function mostrarB(){
        echo "Class B) Publico = {$this->publico}<br>";
        echo "Class B) Protegido = {$this->protegido}<br>";
        echo "Class B) Privado = {$this->privado}<br>";     //não estará disponivel na herança

        parent::vaiPorHeranca();
    }
}

echo '<br>';
$b = new B();
$b->mostrarB();
$b->mostrarA();
//$b->vaiPorHeranca(); essa função só pode ser acessada dentro da classe ou por herança
//$b->naoMostrar(); essa função só pode ser acessada dentro da propria classe
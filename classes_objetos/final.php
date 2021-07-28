<div class="titulo">Modificador Final</div>

<?php
abstract class Abstrata {
    public abstract function metodo1();

    final public function metodo2(){
        echo 'Não vou mudar! <br>';
    }
}

class Classe extends Abstrata {
    public function metodo1(){
        echo 'Executando método 1<br>';
    }

 #   public function metodo2(){
  #      echo 'Estendendo método 2';           não pode fazer override em método com MODIFICADOR FINAL
   # }
}

$classe = new Classe('...');
$classe -> metodo1();
$classe -> metodo2();

final class Unica {
    public $att = 'valor único';
}

$unica = new Unica();
echo $unica->att;

#class Duplicata extends Unica{
#    public $att2;                               classe final não gera herança
# }
<div class="titulo">Desafio Meses</div>

<?php
$meses = array(
   1 => "Janeiro",
   2 => "Fevereiro",
   3 => "Março",
   4 => "Abril",
   5 => "Maio",
   6 => "Junho",
   7 => "Julho",
   8 => "Agosto",
   9 => "Setembro",
   10 => "Outubro",
   11 => "Novembro",
   12 => "Dezembro"
);

print_r($meses);
echo '<br>' . $meses[5];
echo '<br>' . $meses[12];
echo '<br><br>';

//ou simplesmente só alterar o primeiro indice
$months = array(
    1 => "Janeiro",
     "Fevereiro",
     "Março",
     "Abril",
     "Maio",
     "Junho",
     "Julho",
     "Agosto",
     "Setembro",
     "Outubro",
     "Novembro",
     "Dezembro"
 );
 
 print_r($months);
 echo '<br>' . $months[5];
 echo '<br>' . $months[12];
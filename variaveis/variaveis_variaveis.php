<div class="titulo">Variáveis Variáveis</div>

<?php
$a = 'valorA';
$$a = 'valorAA';
echo "$a {$$a} ${$a} $valorA";    //interpolação: o ${$a} é como se fosse $$a

echo '<br>';
$epa = 'opa';
$opa = 'vish';
$vish = 'eita!';
echo "$epa {$$epa} {$$$epa}";   /* o $$epa vai ser $opa e o resultado será vish e o $$$epa será eita! */
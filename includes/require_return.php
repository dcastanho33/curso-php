<div class="titulo">Require e Return</div>

<?php
$valorRetorno = require('return_usado.php');
echo "$valorRetorno<br>";      //via return
echo "$variavelRetornada<br>";     //ou diretamente, já que variável é global

echo __DIR__ . '<br>';

$valorRetorno2 = require(__DIR__ . '/return_nao_usado.php'); //usando o diretório e o arquivo
//var_dump($valorRetorno2);
echo "$valorRetorno2<br>";
echo"$variavelDeclarada";
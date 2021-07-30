<div class="titulo">Escrever Arquivo</div>

<?php
$arquivo = fopen('teste.txt', 'w');      //abrindo arquivo no modo de escrita então ele sempre vai sobreescrever    
fwrite($arquivo, "Valor Inicial\n");
$str = "Segunda linha\n";
fwrite($arquivo, $str);
fclose($arquivo);

$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Novo conteúdo");
fclose($arquivo);

$arquivo = fopen('teste.txt', 'a');   //abrindo arquivo no modo append
fwrite($arquivo, " com novos valores\n");
fwrite($arquivo, "Adicionados em um segundo momento");
fclose($arquivo);

ini_set('display_errors', 1);
$arquivo = fopen('teste.txt', 'x'); //o X é uma forma de gravação que não faz a sobrescrita, ou seja, se o arquivo já existe ele dará um erro
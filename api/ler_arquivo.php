<div class="titulo">Ler Arquivo</div>

<?php

$arquivo = fopen('teste.txt', 'r'); //abrindo o arquivo em modo de leitura
echo fread($arquivo, 10); //lendo apenas 10 bytes do arquivo
echo '<br>';
echo fread($arquivo, 10); //lendo mais 10 bytes
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
$tamanho = filesize('teste.txt');
echo $tamanho, '<br>';
echo fread($arquivo, $tamanho);
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
echo fgets($arquivo), '<br>';     //fgets vai ler apenas uma linha do arquivo
echo fgets($arquivo), '<br>';     //fgets vai ler mais uma linha do arquivo
var_dump (fgets($arquivo));     //será falso pois não tem mais linhas
echo '<br>';
fclose($arquivo);

echo '<hr>';

//lendo o arquivo linha por linha
$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)) { //enquanto não for END OF FILE execute o bloco
    echo fgets($arquivo), '<br>';
}
fclose($arquivo);

echo '<hr>';
//lendo o arquivo caractere por caractere
$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)) { //enquanto não for END OF FILE execute o bloco
    echo fgetc($arquivo);
}
echo '<br>';
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r+');     //abrindo arquivo como leitura e escrita
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
fwrite($arquivo, "\nAdicionado durante a leitura");
fclose($arquivo);
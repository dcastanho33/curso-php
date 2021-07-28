<div class="titulo">Include Função</div>

<?php
echo 'Carregando: include_funcao<br>';

function carregarArquivo(){
    include ('include_arquivo.php');              //só funciona se o método for invocado

    echo $variavel . '<br>';
    echo soma(2, 5). '!<br>';
}

echo 'Novamente no arquivo include_funcao<br>';
//echo soma(1,8) . '<br>!';
carregarArquivo();

echo "Variável = '{$variavel}'.";
var_dump($variavel);        //será nulo pois a função foi invocada dentro do include, portanto a variável só vai funcionar dentro do escopo
echo '<br>' . soma(3,8);    //a soma sai do escopo depois que a função foi invocada
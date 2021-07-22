<div class="titulo">Desafio Operadores Lógicos</div>

<!--
    Dois trabalhos -> terça e quinta
    - Se os dois forem executados -> TV 50' e Sorvete
    - Se apenas um for executado -> TV 32' e Sorvete
    - Se nenhum for executado -> Fica em casa mais saudável
-->

<form action="#" method="post">           <!-- action # significa ação na própria página -->
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select {
        font-size: 1.8rem;
    }
</style>


<?php
/*echo $_POST['t1'];
echo $_POST['t2'];
echo '<br>';*/


/* minha resolução

if ($_POST['t1'] && $_POST['t2'] == true){
    echo "TV 50' e Sorvete";
} else if ($_POST['t1'] xor $_POST['t2'] == true) {
    echo "TV 32' e Sorvete";
} else {
    echo "Não serão comprados TV e Sorvete";
}
*/

//resolução

if (isset($_POST['t1']) && isset($_POST['t2'])) {      //só mostra o resultado quando o t1 e o t2 do formulário estiverem setados
    $t1 = $_POST['t1'];
    $t2 = $_POST['t2'];
    $tv = '';
    $sorvete = false;

    if ($t1 && $t2 == true){
        $tv = "50'";
    } else if ($t1 xor $t2 == true) {
        $tv = "32'";
    } 

    if($t1 or $t2){
        $sorvete = true;
    }

    if($tv == true) {
        $resultado = "Vamos comprar uma TV de $tv";
    } else {
        $resultado = "Sem TV";
    }

    $saudavel = !$sorvete;

    if($saudavel){
        $resultado .= '<br>Estamos mais saudáveis';
    } else {
        $resultado .= '<br>Sorvete liberado \o/';
    }

    echo "<p>$resultado</p>";
}
?>

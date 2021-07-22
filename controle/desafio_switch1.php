<div class="titulo">Desafio Switch #1</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">KM -> Milha</option>
        <option value="milha-km">Milha -> KM</option>
        <option value="metro-km">Metro -> KM</option>
        <option value="km-metro">KM -> Metro</option>
        <option value="celsius-fahrenheit">Celsius -> Fahrenheit</option>
        <option value="fahrenheit-celsius">Fahrenheit -> Celsius</option>
    </select>
    <button>Calcular</button>                 <!-- dentro do formulario por padrão será submit-->
</form>

<style>
    form > * {                             /*qualquer elemento dentro de form recebe esse style*/
        font-size: 1.8rem;
    }
</style>


<?php
$param = $_POST['param'] ?? 0; //se ninguem setar o parametro ele será zero
$option = $_POST['conversao'];
$resultado = 0;
if (isset($_POST['conversao'])){
    switch ($option){
        case 'km-milha':
            $resultado = $param / 1.609;
            $mensagem = "$param Km(s) = $resultado Milha(s)";
            break;
        case 'milha-km':
            $resultado = $param * 1.609;
            $mensagem = "$param Milha(s) = $resultado Km(s)";
            break;
        case 'metro-km':
            $resultado = $param / 1000;
            $mensagem = "$param Metro(s) = $resultado Km(s)";
            break;
        case 'km-metro' :
            $resultado = $param * 1000;
            $mensagem = "$param Km(s) = $resultado Metro(s)";
            break;
        case 'celsius-fahrenheit' :
            $resultado = $param * 1.8 + 32;
            $mensagem = "$param °C = $resultado °F";
            break;
        case 'fahrenheit-celsius' :
            $resultado = ($param - 32) / 1.8 ;
            $mensagem = "$param °F = $resultado °C";
            break;
    }
    echo "<p>$mensagem</p>";
}
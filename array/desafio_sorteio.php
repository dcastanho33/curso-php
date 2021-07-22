<div class="titulo">Desafio Sorteio</div>

<?php
$nomes = ["Elsa", "Rapunzel", "Branca de Neve", "Cinderela"];

$indice = array_rand($nomes);        /*indice será de 0 a 3*/
echo "<div centraliza><h1>$nomes[$indice]</h1></div>";

?>

<style>
    [centraliza] {
        display: flex;
        justify-content: center;
    }
</style>
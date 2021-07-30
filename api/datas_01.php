<div class="titulo">Datas #01</div>

<?php
echo time() . '<br>';    //quantidade de segundos de 1/1/1970 até hoje
echo date('D, d \d\e M \d\e Y H:i A') . '<br>';

echo strftime('%A, %d de %B de %Y', time()) . '<br>'; //outra forma
setlocale(LC_TIME, 'pt-BR.utf-8', 'pt-BR.utf-8', 'portuguese'); 
echo strftime('%A, %d de %B de %Y', time()) . '<br>';

$amanha = time() + (24 * 60 * 60);
echo strftime('%A, %d de %B de %Y', $amanha) . '<br>';

$proximaSemana = strtotime('+1 week');
echo strftime('%A, %d de %B de %Y', $proximaSemana) . '<br>';

$dataFixa = mktime(15, 30, 50, 1, 25, 1975);
echo strftime('%A, %d de %B de %Y - %H:%M:%S', $dataFixa) . '<br>';
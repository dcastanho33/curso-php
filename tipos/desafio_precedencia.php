<div class="titulo">Desafio Precedência</div>

<?php

echo '<p>1. Qual valor será impresso?</p>';
echo 2 + 5 * 3 + (12 / 6) / (-8 + 2 ** 3); //resultado vai dar infinito pois terá divisão por zero

echo '<p>2. Qual expressão imprime o valor 100?</p>';
echo 'a) ', (1 + 2) * 20 - 15;
echo '<br> b) ', 4 * 5 ** 2;
echo '<br> c) ', 2 ** 3 ** 4 / 1e25;
echo '<br> d) ', 3 + (3 * 8) / 2 - 3;
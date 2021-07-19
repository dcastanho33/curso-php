<div class="titulo">Operações Aritméticas</div>

<?php
echo 1 + 1, '<br>';
var_dump(1 + 1.1);
echo '<br>';
echo 1 + 2.5, '<br>';
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
echo 7 / 4, '<br>';          /*o php divide os numeros inteiros quebrados para float*/
echo intdiv(7, 4), '<br>';   /*nesse caso ele divide dois numeros inteiros e o resultado será inteiro*/
echo round(7 / 4), '<br>';   /*aqui ele divide e arredonda para cima*/
echo 7 % 4, '<br>';          /*aqui ele pega o resto da divisão*/
//echo intdiv(7,0); #erro
echo 4 ** 2, '<br>';         /*4 elevado a 2*/

/* Precedência de operadores:
() => ** => / * % => + -         parênteses -> exponenciação -> divisão, multiplicação e módulo -> adição e subtração */

echo '<p>Precedência: </p>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2 + 3) * 4) ** 2;

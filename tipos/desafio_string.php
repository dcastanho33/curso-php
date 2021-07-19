<div class="titulo">Desafio String</div>

<?php

/* Enunciado: 
Avaliando os métodos da documentação da string, qual o método que a posição do texto 'abc' na string '!AbcaBcabc' retorne 1? */

echo strpos('!AbcaBcabc', 'abc') . '<br>';      //acha a posição da substring pedida dentro da string
echo stripos('!AbcaBcabc', 'abc') . '<br>';     //acha a posição da substring pedida dentro da string mas sendo case-insensitive

echo strpos(strtolower('!AbcaBcabc'), strtolower('ABC'));   //poderia ser assim também
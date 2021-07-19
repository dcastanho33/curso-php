<div class="titulo">Tipo String</div>

<?php
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também");     /*o resultado é 10 por causa do acento, o strlen não se dá bem com acento*/
echo '<br>';

// Concatenação
echo "Nós também" . ' somos' . '<br>';
echo "Número é " . 123;
echo '<br>', "Também aceito", " vírgulas";     /*no contexto do echo a virgula pode ser usada para concatenar*/ 

echo '<br>';
echo "'Teste' " . '"Teste"' . ' \'Teste\'' . " \"Teste\"" . "\\";

print("<br>Também existe a função print");
print "<br>Também existe a função print";

// Algumas funções

echo '<br><br>== ALGUMAS FUNÇÕES ==<br>';
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra maiuscula');
echo '<br>' . ucwords("todas as primeiras letras maiusculas");
echo '<br>' . strlen('Quantos caracteres?');
echo '<br>' . mb_strlen("Eu também", "utf-8");           /*mb_strlen conta corretamente os caracteres especiais*/
echo '<br>' . substr("Só uma parte da string", 7, 6);   /*a partir do sétimo caractere, ler mais 6 caracteres*/
echo '<br>' . substr("Só uma parte da string", 7);   /*lê tudo a partir do sétimo caractere*/
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso'); /*troca um termo da string por outro, no caso: "isso" por "aquilo" */
<?php namespace App; ?>
<div class="titulo">Sub-Namespaces</div>

<?php
echo __NAMESPACE__ . '<br>';
const constante = 123;

namespace App\Principal; //sub-namespace
echo __NAMESPACE__ . '<br>';
const constante = 234;

namespace App\Principal\Especifico;
echo __NAMESPACE__ . '<br>';
const constante = 345;

echo constante . '<br>'; //acessará a constante do atual sub-namespace (345)
echo constant('\\' . __NAMESPACE__ . '\constante') . '<br>';      //mesma coisa (345)
echo \App\constante . '<br>'; // (123)
echo \App\Principal\constante . '<br>'; //234
echo \App\Principal\Especifico\constante . '<br>'; //345
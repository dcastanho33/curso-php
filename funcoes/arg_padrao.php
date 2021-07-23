<div class="titulo">Argumento Padrão</div>

<?php
function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente'){     //caso um parametro não seja passado, a função declarará esses argumentos
    return "Bem vindo, $nome $sobrenome!<br>";
}

echo saudacao();
echo saudacao(NULL);
echo saudacao(NULL, null);
echo saudacao("Mestre", "Supremo");
echo '<hr>';

function anotarPedido($comida, $bebida = 'Água') {
    echo "Para comer: $comida<br>";
    echo "Para beber: $bebida<br>";
}

anotarPedido ('Hamburguer');
anotarPedido ('Pizza', 'Refrigerante');
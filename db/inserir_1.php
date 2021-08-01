<div class="titulo">Inserir Registro #01</div>

<?php

require_once "conexao.php";

$sql = "INSERT INTO cadastro
    (nome, nascimento, email, site, filhos, salario) VALUES (
        'João Cardoso',
        '1993-01-23',
        'jcardoso@gmail.com',
        'https://jcardosito.com.br',
        1,
        9143.87
    )";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado){
    echo "Sucesso :)";
} else {
    "Erro: " . $conexao->error;
}

$conexao->close();
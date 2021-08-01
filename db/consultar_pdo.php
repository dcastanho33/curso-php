<div class="titulo">PDO: Consultar</div>

<?php
require_once "conexao_pdo.php";

$conexao = novaConexao();
$sql = "SELECT * from cadastro";
//PDO: FETCH_NUM
//PDO: FETCH_ASSOC
//PDO: FETCH_CLASS
//PDO: FETCH_BOTH
$resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);

print_r($resultado);

echo '<hr>';

$sql = "SELECT * FROM cadastro LIMIT :qtde OFFSET :inicio";      //offset é o onde começa, limit é a quantidade de linhas desejadas a partir do inicio

$stmt = $conexao->prepare($sql);
$stmt->bindValue(':qtde', 2, PDO:: PARAM_INT);
$stmt->bindValue(':inicio', 3, PDO:: PARAM_INT);

//print_r(get_class_methods($stmt));


if($stmt->execute()) {
    $resultado = $stmt->fetchAll();
    print_r($resultado);
} else {
    echo "Código: " . $stmt->errorCode() . '<br>';
    print_r($stmt->errorInfo());
}

echo '<hr>';

$sql = "SELECT * FROM cadastro WHERE id = :id";
$stmt = $conexao->prepare($sql);
$stmt->bindValue(':id', 10, PDO:: PARAM_INT);
//if ($stmt->execute([14])) {         //pode fazer o bind direto do execute
if ($stmt->execute()) {         //pode fazer o bind direto do execute
    $resultado = $stmt->fetchAll();
    print_r($resultado);
} else {
    echo "Código: " . $stmt->errorCode() . '<br>';
    print_r($stmt->errorInfo());
}

$conexao->close();
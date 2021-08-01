<div class="titulo">PDO: Alterar</div>

<?php
require_once 'conexao_pdo.php';
$sql = "UPDATE cadastro 
    SET nome = ?, nascimento = ?, email = ?, site = ?, filhos = ?, salario = ?
    WHERE id = ?";

$conexao=novaConexao();
$stmt = $conexao->prepare($sql);

$resultado = $stmt->execute([
    'Gui',
    '1980-12-10',
    'guibd@ut.com',
    'http://guibd.com.br',
    2,
    1000.0,
    12
]);

if($resultado) {
    echo "Sucesso";
} else {
    print_r($stmt->errorInfo());
}
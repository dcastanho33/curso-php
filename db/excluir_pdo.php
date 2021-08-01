<div class="titulo">PDO: Excluir</div>

<?php
require_once 'conexao_pdo.php';
$sql = "DELETE FROM cadastro WHERE id = :id";

$conexao = novaConexao();
$stmt = $conexao->prepare($sql);
$stmt->bindValue(':id', 10, PDO:: PARAM_INT);
//if ($stmt->execute([14])) {         //pode fazer o bind direto do execute
if ($stmt->execute()) {         
    echo "Registro excluído";
} else {
    echo "Código: " . $stmt->errorCode() . '<br>';
    print_r($stmt->errorInfo());
}

$conexao->close();
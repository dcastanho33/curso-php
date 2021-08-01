<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Excluir #02</div>

<?php
require_once 'conexao.php';

$sql = "SELECT id, nome, email, nascimento FROM cadastro";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($_GET['excluir']) {                       //se tiver o excluir no get
    $excluirSQL = "DELETE FROM cadastro WHERE id = ?";
    $stmt = $conexao->prepare($excluirSQL);         //prepare statement é uma forma de segurança pra entrada/saida de dados no banco
    $stmt->bind_param("i", $_GET['excluir']);       //parametro do statement é apenas um numero inteiro
    $stmt->execute();                               //aqui ele realiza com segurança
}

$registros = [];

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {           //array associativo, para cada linha
        $registros[] = $row;
    }
} elseif ($conexao->error) {
    echo "Erro: " . $conexao->error;
}


$conexao->close();
?>

<table class="table table-hover table-bordered">
    <thead>
        <th>Código</th>
        <th>Nome</th>
        <th>E-Mail</th>
        <th>Nascimento</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach ($registros as $registro) : ?>
            <tr>
                <td><?= $registro['id'] ?></td>
                <td><?= $registro['nome'] ?></td>
                <td><?= $registro['email'] ?></td>
                <td><?= date('d/m/Y', strtotime($registro['nascimento'])) ?></td>
                <td>
                    <a href="/exercicio.php?dir=db&file=excluir_2&excluir=<?=$registro['id']?>" class="btn btn-danger">    <!-- cria uma url pra usar o GET e pegar o id -->
                        Excluir
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<style>
    table > * {
        font-size: 1.2rem;
    }
</style>
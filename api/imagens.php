<div class="titulo">Imagens</div>

<?php
session_start();

$arquivos = $_SESSION['arquivos'] ?? []; //se não tiver arquivos na sessão, cria um array vazio

$pastaUpload = __DIR__ . '/../files/';
$nomeArquivo = $_FILES['arquivo']['name']; //nome arquivo acessando o array dentro do array de $_FILES
$arquivo = $pastaUpload . $nomeArquivo;
$tmp = $_FILES['arquivo']['tmp_name'];
if (move_uploaded_file($tmp, $arquivo)) {
    echo "<br>Arquivo válido e enviado com sucesso";
    $arquivos[] = $nomeArquivo; //coloca dentro do array de arquivos o nome do arquivo que foi feito upload
    $_SESSION['arquivos'] = $arquivos;
} else {
    echo "<br>Erro no upload de arquivo!";
}
?>

<form action="#" method="post" enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>

<ul>
    <?php foreach($arquivos as $arquivo): ?>
        <?php if(stripos($arquivo, '.jpg') > 0): ?>  <!-- só deixa passar se for .jpg -->
            <li>
                <img src="../files/<?=$arquivo?>"height="120"/>
            </li>
        <?php endif ?>
    <?php endforeach ?>
</ul>

<style>
    input, button {
        font-size: 1.2rem;
    }
</style>
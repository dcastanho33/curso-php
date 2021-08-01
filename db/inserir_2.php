<div class="titulo">Inserir Registro #02</div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<?php
if (count($_POST) > 0) {
    $dados = $_POST;
    $erros = [];


    if (trim($dados['nome']) === "") {      //se o nome for vazio então...
        $erros['nome'] = "Nome é obrigatório";
    }

    if (isset($dados["nascimento"])) {      //se tiver input nascimento no post então
        $data = DateTime::createFromFormat('d/m/Y', $dados['nascimento']);
        if (!$data) {
            $erros['nascimento'] = "Data deve estar no padrão dd/mm/aaaa";
        }
    }

    if (!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) { //se a variável do filtro não for válida
        $erros['email'] = 'Email inválido';                       //então
    }

    if (!filter_var($dados['site'], FILTER_VALIDATE_URL)) {
        $erros['site'] = 'Site inválido';
    }

    $filhosConfig = ["options" => ["min_range" => 0, "max_range" => 20]];
    if (!filter_var($dados['filhos'], FILTER_VALIDATE_INT, $filhosConfig && $dados['filhos'] != 0)) {
        $erros['filhos'] = 'Quantidade de filhos inválida (0-20)';
    }

    $salarioConfig = ['options' => ['decimal' => ',']];
    if (!filter_var($dados['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig)) {
        $erros['salario'] = 'Salário inválido (informar com ",")';
    }

    if(!count($erros)) {  //se o count for 0, ou seja, se NÃO tiver ERROS, então...
        require_once "conexao.php";

        $sql = "INSERT INTO cadastro (nome, nascimento, email, site, filhos, salario) 
        VALUES (?, ?, ?, ?, ?, ?)";

        $conexao=novaConexao();
        $stmt = $conexao->prepare($sql);

        $params = [
            $dados['nome'],
            $data ? $data->format('Y-m-d') : null,  //precisa modificar o formato da data pro formato aceitável no sql
            $dados['email'],
            $dados['site'],
            $dados['filhos'],
            $dados['salario']
        ];

        $stmt->bind_param("ssssid", ...$params); #4 strings, 1 inteiro e 1 decimal e os parametros passados

        if($stmt->execute()){        //se executar corretamente, então limpa os dados
            unset($dados);
        }
    }


}
?>

<?php foreach($erros as $erro): ?>    
  <!--  <div class="alert alert-danger" role="alert">       USANDO ALERT
        <?php //$erro ?>
    </div> -->
<?php endforeach ?>

<form action="#" method="post">
    <div class="form-row">
        <!--bootstrap // LINHA DE FORMULARIO -->
        <div class="form-group col-md-9">
            <!-- ocupará 9 espaços -->
            <label for="nome">Nome</label>
            <input type="text" class="form-control <?= $erros['nome'] ? 'is-invalid' : ''?>" id="nome" name="nome" placeholder="Nome" value="<?= $dados['nome'] ?>">
            <div class="invalid-feedback"><?= $erros['nome'] ?></div>
        </div>
        <div class="form-group col-md-3">
            <!-- ocupará 3 espaços -->
            <label for="nascimento">Nascimento</label>
            <input type="text" class="form-control" id="nascimento" name="nascimento" placeholder="Nascimento" value="<?= $dados['nascimento'] ?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text" class="form-control <?= $erros['email'] ? 'is-invalid' : ''?>" id="email" name="email" placeholder="E-mail" value="<?= $dados['email'] ?>">
            <div class="invalid-feedback"><?= $erros['email'] ?></div>
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control <?= $erros['site'] ? 'is-invalid' : ''?>" id="site" name="site" placeholder="Site" value="<?= $dados['site'] ?>">
            <div class="invalid-feedback"><?= $erros['site'] ?></div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Quantidade de Filhos</label>
            <input type="number" class="form-control <?= $erros['filhos'] ? 'is-invalid' : ''?>" id="filhos" name="filhos" placeholder="Quantidade de Filhos" value="<?= $dados['filhos'] ?>">
            <div class="invalid-feedback"><?= $erros['filhos'] ?></div>
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text" class="form-control <?= $erros['salario'] ? 'is-invalid' : ''?>" id="salario" name="salario" placeholder="Salário" value="<?= $dados['salario'] ?>">
            <div class="invalid-feedback"><?= $erros['salario'] ?></div>
        </div>
    </div>
    <button class="btn btn-primary btn-lg">Enviar</button>
</form>
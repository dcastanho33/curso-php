<div class="titulo">Include vs Require</div>

<?php
ini_set('display_errors', 1);

echo 'Usando include com arquivo inexistente...<br>';
include('arquivo_inexistente.php');                //include de arquivo inexistente dará apenas um warning

echo 'Usando require com arquivo inexistente...<br>';
require('arquivo_inexistente.php');                //require de arquivo inexistente dará fatal error

echo 'Não achou mesmo...<br>';
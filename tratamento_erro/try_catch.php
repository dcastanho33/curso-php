<div class="titulo">Try/Catch</div>

<?php
//echo 7/0 assim não gera erro
//echo intdiv(7,0); gerará erro

try {                           //bloco com código que pode conter erros, ele TENTARÁ
    echo intdiv(7,0);
} catch (Error $e) {           //caso ocorra um erro no try, o catch tratará o erro e o programa executa normalmente
    echo 'Teve um erro aqui<br>';
} 

try {
    throw new Exception('Um erro muito estranho aconteceu');    //criando uma exceção
    echo intdiv(7,0);
} catch (DivisionByZeroError $e) {
    echo 'Divisão por zero<br>';
} catch (Throwable $e){ //bloco mais genérico, será chamado por causa do throw
    echo 'Erro encontrado: ' . $e->getMessage() . '<br>'; //pega a mensagem do throw new exception
} finally {
    echo 'O finally sempre é executado!<br>';
}

echo 'Execução continua, pois os erros são tratados para a aplicação continuar funcionando...<br>';
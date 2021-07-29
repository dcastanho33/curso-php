<?php
session_start();                        //precisa startar a sessão para depois destruir ela
session_destroy();
header('Location: basico_sessao.php'); //quando ele encontrar essa linha ele altera o header, ou seja, vai navegar de volta para o 'basico_sessao'
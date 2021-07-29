<?php
session_start();
session_destroy();
unset($_COOKIE['usuario']);
setcookie('usuario', '');            //libera os cookies
header('Location: login.php');
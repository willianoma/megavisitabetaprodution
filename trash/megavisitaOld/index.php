<?php
//include 'view/layout/adm/menu.php';

if (empty($_GET['controller'])) {
    $controller = 'VisitaController';
//    $controller .= 'Controller';
} else {
    $controller = $_GET ['controller'];
    $controller .= 'Controller';
}

$arquivo = 'controller/' . $controller . '.php';
require_once $arquivo;

if (empty($_GET['acao'])) {
    $acao = "formHome";
} else {
    $acao = $_GET['acao'];
}
?>

<?php

$obj = new $controller(); //Cria o objeto do controller
$obj->$acao(); //executa a a��o
?>


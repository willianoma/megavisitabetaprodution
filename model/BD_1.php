<?php

$banco = "mempr419_megavisita";
$usuario = "mempr419_mega";
$senha = "1475963";
$hostname = "localhost";
$conn = mysql_connect($hostname, $usuario, $senha);
mysql_select_db($banco) ;
if (!$conn) {
    echo "Não foi possível conectar ao banco MySQL.
";
    exit;
} else {
//    echo "Parabéns!! A conexão ao banco de dados ocorreu normalmente!.";
}
?>

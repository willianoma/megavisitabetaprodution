<meta  http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="componentes/bootstrap.min.css">


<?php
include_once 'model/verificaBrowser.php';
include_once 'model/Usuario.php';
//if (!isset($_SESSION)) {
session_start();
//}
//echo '<meta charset=utf-8" />';
//session_cache_limiter('private');
//session_cache_expire(1); //Arrumar isso ai...
//session_destroy();
//var_dump($_SESSION);

if (empty($_SESSION['user'])) {
    $user = NULL;
} else {
    $user = $_SESSION['user'];
}


if ($user == NULL) {

    $controller = 'Login';
    $controller .= 'Controller';

    $arquivo = 'controller/' . $controller . '.php';
    require_once $arquivo;

    if (empty($_GET['acao'])) {
        if ($browser == 'mobile') {
            $acao = "formLoginMobile";
        } else {
            $acao = "formLogin";
        }
    } else {
        $acao = "autenticar";
    }
}


//Login realizado com sucesso.
else if ($user != NULL) {

    if (empty($_GET['controller'])) {
        $controller = 'Home';
        $controller .= 'Controller';
    } else {
        $controller = $_GET ['controller'];
        $controller .= 'Controller';
    }

    $arquivo = 'controller/' . $controller . '.php';
    require_once $arquivo;


    $permicao = $user->getPermicao();

    if ($permicao == 'admin') {
        if ($browser == 'web') {
            include_once 'view/web/adm/menu.php';
            if (empty($_GET['acao'])) {
                $acao = "homeAdmin";
            } else {
                $acao = $_GET['acao'];
            }
        } else if ($browser == 'mobile') {
            include_once 'view/mobile/adm/menu.php';
            if (empty($_GET['acao'])) {
                $acao = "homeAdminMobile";
            } else {
                $acao = $_GET['acao'];
            }
        }
    }

    if ($permicao == 'user') {
        if ($browser == 'web') {
            include_once 'view/web/user/menu.php';
            if (empty($_GET['acao'])) {
                $acao = "homeUsuario";
            } else {
                $acao = $_GET['acao'];
            }
        } else if ($browser == 'mobile') {
            include_once 'view/mobile/user/menu.php';
            if (empty($_GET['acao'])) {
                $acao = "homeUsuarioMobile";
            } else {
                $acao = $_GET['acao'];
            }
        }
    }
}
?>

<?php
$obj = new $controller(); //Cria o objeto do controller
$obj->$acao(); //executa a a��o
?>



<meta  http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="componentes/bootstrap.min.css">

<?php
include 'view/footer.php';
?>
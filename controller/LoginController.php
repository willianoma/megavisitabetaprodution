<?php

include_once 'dao/UsuarioDao.php';
include_once 'model/Usuario.php';

class LoginController {

    private $usuarioDao;

    function LoginController() {
        $this->usuarioDao = new UsuarioDao;
    }

    function formLogin() {
        include 'view/web/login/autenticacao.php';
    }

    function formLoginMobile() {
        include 'view/mobile/login/autenticacao.php';
    }

    function autenticar() {

        $email = $_POST['email'];
        $senha = $_POST['senha'];


//        if ($email == "admin" && $senha == "12310") {
//            $usuarioadmin = new Usuario("9999", "administrador", "12310", "000", "admin", "000", "admin");
////            $user = "admin";
//            $_SESSION['user'] = $usuarioadmin;
////            $this->logonAdmin();
//            echo '<meta http-equiv="refresh" content="0;url=http://mempreendimentos.com.br/megavisitawebok">';
////            header('location: http://mempreendimentos.com.br/megavisitaweb');
//        } else {
//            echo 'usuario ou senha incorreto ';
//        }

        $user = $this->usuarioDao->getUsuarioLogin($email);

        echo 'Autenticando... ';


        if ($user->getEmail() == $email && $user->getSenha() == $senha) {
//DAO TA TRANTANDO USUARIO INEXISTENTE

            $_SESSION['user'] = $user;

            header('location:index.php');
//            echo '<meta http-equiv="refresh" content="0; url=http://mempreendimentos.com.br/megavisitawebok">';
        } else
            echo 'usuario ou senha incorreto, Aguarde...';
        
      echo '<meta http-equiv="refresh" content="2; url=http://mempreendimentos.com.br/megavisita">';
    }

    function logonAdmin() {
//        $_SESSION['user'] = $user;
//        include 'view/web/adm/home.php';
    }

    function logonUser() {
//        $_SESSION['user'] = $user;
//        include 'view/web/user/home.php';
    }

    function logout() {
        include 'view/web/logout.php';
//        echo '<meta http-equiv="refresh" content="0;url=http://mempreendimentos.com.br/megavisitawebok">';
        header('location:index.php');
    }

}

<?php

include_once 'dao/EmpresaDao.php';
include_once 'dao/UsuarioDao.php';

class OutrosController {

    private $empresaDao;
    private $usuarioDao;

    function OutrosController(){
            $this->empresaDao = new EmpresaDao;
            $this->usuarioDao = new UsuarioDao;
    }
    
            
    function formReciboFuncionario() {
        $_REQUEST['listaUsuario'] = $this->usuarioDao->listar();
        include_once 'view/web/outros/formReciboFuncionario.php';
    }

    function gerarReciboFuncionario() {
        include_once 'view/web/outros/gerarReciboFuncionario.php';
    }
    
    function formReciboEmpresa() {
        $_REQUEST['listaEmpresa'] = $this->empresaDao->listar();
        include_once 'view/web/outros/formReciboEmpresa.php';
    }

    function gerarReciboEmpresa() {
        include_once 'view/web/outros/gerarReciboEmpresa.php';
    }

    //put your code here
}

?>
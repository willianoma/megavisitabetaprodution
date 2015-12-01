<?php

include_once 'dao/EmpresaDao.php';

class EmpresaController {

    private $empresaDao;

    function EmpresaController() {
        $this->empresaDao = new EmpresaDao;
    }

    function listar() {
        $_REQUEST['listaEmpresa'] = $this->empresaDao->listar();
        include 'view/web/empresa/ListarEmpresa.php';
    }

    function formAdd() {
        include_once 'view/web/empresa/CadastroEmpresa.php';
    }

    public function formDelete() {
        $id = $_POST['id'];
        $_REQUEST['empresa'] = $this->empresaDao->getEmpresa($id);
        include_once 'view/web/empresa/DeletarEmpresa.php';
    }

    public function formEdit() {
        $id = $_POST['id'];
        $_REQUEST['empresa'] = $this->empresaDao->getEmpresa($id);
        include_once 'view/web/empresa/EditarEmpresa.php';
    }

    function cadastrarEmpresa() {

        $razaoSocial = $_POST['razaoEmpresa'];
        $cnpj = $_POST['cnpjEmpresa'];
        $email = $_POST['emailEmpresa'];
        $id = '';
        $empresa = new Empresa($id, $razaoSocial, $cnpj, $email);
        $this->empresaDao->cadastrar($empresa);
    }

    function editarEmpresa() {
        $id = $_POST['id'];
        $razaoSocial = $_POST['razaoEmpresa'];
        $cnpj = $_POST['cnpjEmpresa'];
        $email = $_POST['emailEmpresa'];
        $empresa = new Empresa($id, $razaoSocial, $cnpj, $email);
        $this->empresaDao->editar($empresa);

//        $this->index();
    }

    function deletarEmpresa() {

        $id = $_POST['id'];
        $razaoSocial = $_POST['razaoEmpresa'];
        $cnpj = $_POST['cnpjEmpresa'];
        $email = $_POST['emailEmpresa'];
        $empresa = new Empresa($id, $razaoSocial, $cnpj, $email);
        $empresa->setId($id);
        $this->empresaDao->deletar($empresa);
        $this->listar();
    }

}

?>

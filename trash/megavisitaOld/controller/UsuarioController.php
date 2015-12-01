<?php

include_once 'dao/UsuarioDao.php';

class UsuarioController {

    private $usuarioDao;

    function UsuarioController() {
        $this->usuarioDao = new UsuarioDao;
    }

    function listar() {
        $_REQUEST['listaFuncinario'] = $this->usuarioDao->listar();
        include 'view/usuario/ListarUsuario.php';
    }

    function formAdd() {
        include_once 'view/usuario/CadastroUsuario.php';
    }

    public function formDelete() {
        $id = $_POST['id'];
        $_REQUEST['usuario'] = $this->usuarioDao->getUsuario($id);
        include_once 'view/usuario/DeletarUsuario.php';
    }

    public function formEdit() {
        $id = $_POST['id'];
        $_REQUEST['usuario'] = $this->usuarioDao->getUsuario($id);
        include_once 'view/usuario/EditarUsuario.php';
    }

    function cadastrarUsuario() {

        $nome = $_POST['nomeUsuario'];
        $senha = $_POST['senhaUsuario'];
        $cpf = $_POST['cpfUsuario'];
        $email = $_POST['emailUsuario'];
        $funcao = $_POST['funcaoUsuario'];
        $id = '';
        $usuario = new Usuario($id, $nome, $senha, $cpf, $email, $funcao);
        $this->usuarioDao->cadastrar($usuario);
    }

    function editarUsuario() {
        $id = $_POST['id'];
        $nome = $_POST['nomeUsuario'];
        $senha = $_POST['senhaUsuario'];
        $cpf = $_POST['cpfUsuario'];
        $email = $_POST['emailUsuario'];
        $funcao = $_POST['funcaoUsuario'];
        $usuario = new Usuario($id, $nome, $senha, $cpf, $email, $funcao);
//        $usuario->setId($id);
        $this->usuarioDao->editar($usuario);


//        $this->index();
    }

    function deletarUsuario() {

        $id = $_POST['id'];
        $nome = $_POST['nomeUsuario'];
        $senha = $_POST['senhaUsuario'];
        $cpf = $_POST['cpfUsuario'];
        $email = $_POST['emailUsuario'];
        $funcao = $_POST['funcaoUsuario'];
        $usuario = new Usuario($id, $nome, $senha, $cpf, $email, $funcao);
        $usuario->setId($id);

        $this->usuarioDao->deletar($usuario);

        $this->listar();
    }

}

?>

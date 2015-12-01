<?php

include_once 'dao/UsuarioDao.php';

class UsuarioController {

    private $usuarioDao;

    function UsuarioController() {
        $this->usuarioDao = new UsuarioDao;
    }

    function listar() {
        $_REQUEST['listaFuncinario'] = $this->usuarioDao->listar();
        include 'view/web/usuario/ListarUsuario.php';
    }

    function formAdd() {
        include_once 'view/web/usuario/CadastroUsuario.php';
    }

    public function formDelete() {
        $id = $_POST['id'];
        $_REQUEST['usuario'] = $this->usuarioDao->getUsuario($id);
        include_once 'view/web/usuario/DeletarUsuario.php';
    }

    public function formEdit() {
        $id = $_POST['id'];
        $_REQUEST['usuario'] = $this->usuarioDao->getUsuario($id);
        include_once 'view/web/usuario/EditarUsuario.php';
    }

    function cadastrarUsuario() {

        $nome = $_POST['nomeUsuario'];
        $senha = ($_POST['senhaUsuario']);
        $cpf = $_POST['cpfUsuario'];
        $email = $_POST['emailUsuario'];
        $funcao = $_POST['funcaoUsuario'];
        $permicao = $_POST['permicaoUsuario'];
        $id = '';
        $usuario = new Usuario($id, $nome, $senha, $cpf, $email, $funcao, $permicao);
        $this->usuarioDao->cadastrar($usuario);
    }

    function editarUsuario() {
        $id = $_POST['id'];
        $nome = $_POST['nomeUsuario'];
        $senha = $_POST['senhaUsuario'];
        $cpf = $_POST['cpfUsuario'];
        $email = $_POST['emailUsuario'];
        $funcao = $_POST['funcaoUsuario'];
        $permicao = $_POST['permicaoUsuario'];
        $usuario = new Usuario($id, $nome, $senha, $cpf, $email, $funcao, $permicao);
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
        $permicao = $_POST['permicaoUsuario'];
        $usuario = new Usuario($id, $nome, $senha, $cpf, $email, $funcao, $permicao);
        $usuario->setId($id);

        $this->usuarioDao->deletar($usuario);

        $this->listar();
    }

}

?>

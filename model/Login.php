<?php
//não usado
class Login {

    private $usuario;
    private $senha;
    private $permicao;

    function __construct($usuario, $senha, $permicao) {
        $this->usuario = $usuario;
        $this->senha = $senha;
        $this->permicao = $permicao;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getPermicao() {
        return $this->permicao;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function setPermicao($permicao) {
        $this->permicao = $permicao;
    }

}

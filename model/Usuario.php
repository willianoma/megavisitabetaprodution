<?php

class Usuario {

    private $id;
    private $nome;
    private $senha;
    private $cpf;
    private $email;
    private $funcao;
    private $permicao;

    function __construct($id, $nome, $senha, $cpf, $email, $funcao, $permicao) {
        $this->id = $id;
        $this->nome = $nome;
        $this->senha = $senha;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->funcao = $funcao;
        $this->permicao = $permicao;
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getFuncao() {
        return $this->funcao;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setFuncao($funcao) {
        $this->funcao = $funcao;
    }

    public function getPermicao() {
        return $this->permicao;
    }

    public function setPermicao($permicao) {
        $this->permicao = $permicao;
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


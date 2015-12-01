<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Empresa
 *
 * @author Willian
 */
class Empresa {

    private $id;
    private $razaoSocial;
    private $cnpj;
    private $email;

    function __construct($id, $razaoSocial, $cnpj, $email) {
        $this->id = $id;
        $this->razaoSocial = $razaoSocial;
        $this->cnpj = $cnpj;
        $this->email = $email;
    }

    public function getId() {
        return $this->id;
    }

    public function getRazaoSocial() {
        return $this->razaoSocial;
    }

    public function getCnpj() {
        return $this->cnpj;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setRazaoSocial($razaoSocial) {
        $this->razaoSocial = $razaoSocial;
    }

    public function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

}

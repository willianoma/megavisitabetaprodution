<?php

class Visita {

    private $id;
    private $empresa;
    private $usuario;
    private $descricao;
    private $pendencias;
    private $corretiva;
    private $horaDeInicio;
    private $horaDeTermino;
    private $localization;

    function __construct($id, $empresa, $usuario, $descricao, $pendencias, $corretiva, $horaDeInicio, $horaDeTermino, $localization) {
        $this->id = $id;
        $this->empresa = $empresa;
        $this->usuario = $usuario;
        $this->descricao = $descricao;
        $this->pendencias = $pendencias;
        $this->corretiva = $corretiva;
        $this->horaDeInicio = $horaDeInicio;
        $this->horaDeTermino = $horaDeTermino;
        $this->localization = $localization;
    }

    public function getId() {
        return $this->id;
    }

    public function getEmpresa() {
        return $this->empresa;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getPendencias() {
        return $this->pendencias;
    }

    public function getHoraDeInicio() {
        return $this->horaDeInicio;
    }

    public function getHoraDeTermino() {
        return $this->horaDeTermino;
    }

    public function getLocalizacao() {
        return $this->localizacao;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setEmpresa($empresa) {
        $this->empresa = $empresa;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setPendencias($pendencias) {
        $this->pendencias = $pendencias;
    }

    public function getCorretiva() {
        return $this->corretiva;
    }

    public function setCorretiva($corretiva) {
        $this->corretiva = $corretiva;
    }

    public function setHoraDeInicio($horaDeInicio) {
        $this->horaDeInicio = $horaDeInicio;
    }

    public function getLocalization() {
        return $this->localization;
    }

    public function setLocalization($localization) {
        $this->localization = $localization;
    }

}

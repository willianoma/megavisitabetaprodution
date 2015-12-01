<?php

include_once 'dao/EmpresaDao.php';
include_once 'dao/UsuarioDao.php';
include_once 'dao/VisitaDao.php';
include_once 'model/Ipdetails.php';

class VisitaController {

    private $empresaDao;
    private $usuarioDao;
    private $visitaDao;

    function VisitaController() {
        $this->empresaDao = new EmpresaDao;
        $this->usuarioDao = new UsuarioDao;
        $this->visitaDao = new VisitaDao;
    }

    function formHome() {
        $_REQUEST['listaEmpresa'] = $this->empresaDao->listar();
        $_REQUEST['listaUsuario'] = $this->usuarioDao->listar();
        include_once 'view/visita/home.php';
    }

    function getPosition() {

        $ip = $_SERVER['REMOTE_ADDR'];
//        $ip = "187.65.19.208";
        $ipdetails = new ipdetails($ip);
        $ipdetails->scan();
        echo "<b>IP:</b>        " . $ip . "<br />";
        echo "<b>País:</b>      " . $ipdetails->get_country() . "<br />";
        echo "<b>Estado:</b>    " . $ipdetails->get_region() . "<br />";
        echo "<b>Cidade:</b>    " . $ipdetails->get_city() . "<br />";
        echo "<b>Latitude:</b>  " . $ipdetails->get_latitude() . "<br />";
        echo "<b>Longitude:</b> " . $ipdetails->get_longitude() . "<br />";
        echo "<b>Código país:</b> " . $ipdetails->get_countrycode() . "<br />";
        echo "<b>Código continente:</b> " . $ipdetails->get_continentcode() . "<br />";
        echo "<b>Código moeda:</b> " . $ipdetails->get_currencycode() . "<br />";
        echo "<b>Símbolo moeda:</b> " . htmlspecialchars_decode($ipdetails->get_currencysymbol()) . "<br />";
        echo "<b>Cotação moeda (dólar):</b> " . $ipdetails->get_currencyconverter() . "<br />";
        die();
    }

    function cadastrarVisita() {

        $empresa = $_POST['empresaVisita'];
        $usuario = $_POST['usuarioVisita'];
        $descricao = $_POST['descricaoVisita'];
        $pendencias = $_POST['pendenciasVisita'];
        $corretiva = $_POST['corretivaVisita'];
        $horaDeInicio = $_POST['horaDeInicioVisita'];
        $horaDeTermino = $_POST['horaDeTerminoVisita'];
        $localization = $_POST['var_escondida'];
        

        $id = "";
        
        $visita = new Visita($id, $empresa, $usuario, $descricao, $pendencias, $corretiva, $horaDeInicio, $horaDeTermino, $localization);
        $this->visitaDao->cadastrar($visita);
    }

}

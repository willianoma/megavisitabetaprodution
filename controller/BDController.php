<?php

//$banco = "bancohora";
//$usuario = "root";
//$senha = "";
//$hostname = "localhost";
//$conn = mysql_connect($hostname, $usuario, $senha);
//mysql_select_db($banco);
//if (!$conn) {
//    echo "Não foi possível conectar ao banco MySQL.
//";
//    exit;
//} else {
//    echo "Parabéns!! A conexão ao banco de dados ocorreu normalmente!.";
//}
include 'model/BD.php';
class BDController {

    protected $database = "megavisita";

    function configForm() {
        include 'view/ConfigBD.php';
    }

    function criarDataBase() {
        $sql = "CREATE DATABASE $this->database ;";

        mysql_query($sql) or die(mysql_error());
        echo "Database Criada";
    }

    function deletarDataBase() {
        $sql = "DROP DATABASE $this->database ;";

        mysql_query($sql) or die(mysql_error());
        echo "Database Deletada";
    }

    //ARRUMAR ISSO
    function criarTabelas() {
        $sql = '
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `funcao` varchar(255) NOT NULL,
  `permicao` varchar(255) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;';
        $result = mysql_query($sql) or die(mysql_error());
        Echo "Tabela usuarios Criada com sucesso";
        Echo "<br>";

        $sql = '
CREATE TABLE IF NOT EXISTS `empresa` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `razaoSocial` varchar(255) NOT NULL,
  `cnpj` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;';
        $result = mysql_query($sql) or die(mysql_error());
        Echo "Tabela empresa Criada com sucesso";
        Echo "<br>";

        $sql = '
CREATE TABLE IF NOT EXISTS `visita` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `empresa` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `pendencias` varchar(255) NOT NULL,
  `corretiva` varchar(255) NOT NULL,
  `horaDeInicio` varchar(255) NOT NULL,
  `horaDeTermino` varchar(255) NOT NULL,
  `localization` varchar(255) NOT NULL,
  `horaLocal` varchar(255) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;';
        $result = mysql_query($sql) or die(mysql_error());
        Echo "Tabela visita Criada com sucesso";
    }

}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    
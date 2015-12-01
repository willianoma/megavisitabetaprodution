<?php

include_once 'model/BD.php';
include 'model/Empresa.php';

class EmpresaDao {

    protected $tabela_bd = "empresa";

    public function listar() {
        $sql = "select * from $this->tabela_bd";
        $result = mysql_query($sql) or die(mysql_error());
        $lista = array();
        while ($dados = mysql_fetch_array($result)) {
            $empresa = new Empresa($dados['id'], $dados['razaoSocial'], $dados['cnpj'], $dados['email']);
            $empresa->setId($dados['id']);
            $lista[] = $empresa;
        }
        return $lista;
    }

    function cadastrar($empresa) {

        $sql = mysql_query("INSERT INTO $this->tabela_bd(razaoSocial,cnpj,email) VALUES('" . $empresa->getRazaoSocial() . "','" . $empresa->getCnpj() . "','" . $empresa->getEmail() . "')");
        if ($sql) {
            echo "Cadastrado com sucesso!!";
        } else {
            echo "Falha ao cadastrar." . mysql_error();
        }
        mysql_close();
    }

    function editar($empresa) {

        $sql = "UPDATE $this->tabela_bd SET ";
        $sql .= "razaoSocial='" . $empresa->getRazaoSocial() . "',cnpj='" . $empresa->getCnpj() . "',email='" . $empresa->getEmail() . "' ";
        $sql .= "where id=" . $empresa->getId();
        mysql_query($sql) or die($sql);
        echo 'Empresa editada com sucesso!';
    }

    function deletar($empresa) {

        $sql = "delete from $this->tabela_bd where id =" . $empresa->getId();
        mysql_query($sql) or die($sql);
        echo 'Empresa deletada com sucesso!';
    }

    public function getEmpresa($id) {
        $sql = "select * from $this->tabela_bd where id = $id";
        $result = mysql_query($sql) or die("Erro: " . mysql_error());
        //echo mysql_num_rows($result);
//        $objEmpresa = null;
        while ($item = mysql_fetch_array($result)) {
            $empresa = new Empresa($item['id'], $item['razaoSocial'], $item['cnpj'], $item['email']);
            $empresa->setId($item['id']);
        }
        return $empresa;
    }

}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


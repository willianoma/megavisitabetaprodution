<?php

include_once 'model/BD.php';
include 'model/Visita.php';

class VisitaDao {

    protected $tabela_bd = "visita";

    public function listar() {




        $sql = "select * from $this->tabela_bd";
        $result = mysql_query($sql) or die(mysql_error());
        $lista = array();
        while ($dados = mysql_fetch_array($result)) {
            $visita = new Visita($dados['id'], $dados['empresa'], $dados['usuario'], $dados['descricao'], $dados['pendencias'], $dados['corretiva'], $dados['horaDeInicio'], $dados['horaDeTermino'], $dados['localization'], $dados['horaLocal']);
            $visita->setId($dados['id']);
            $lista[] = $visita;
        }
        return $lista;
    }

    public function listarPorData($data) {

//           where horaLocal LIKE '%11-2014%'

        $sql = "select * from $this->tabela_bd where horaLocal LIKE '%$data%'";


        $result = mysql_query($sql) or die(mysql_error());
        $lista = array();
        while ($dados = mysql_fetch_array($result)) {
            $visita = new Visita($dados['id'], $dados['empresa'], $dados['usuario'], $dados['descricao'], $dados['pendencias'], $dados['corretiva'], $dados['horaDeInicio'], $dados['horaDeTermino'], $dados['localization'], $dados['horaLocal']);
            $visita->setId($dados['id']);
            $lista[] = $visita;
        }
        return $lista;
    }

    function cadastrar($visita) {
        $sql = mysql_query("INSERT INTO $this->tabela_bd(empresa,usuario,descricao,pendencias,corretiva,horaDeInicio,horaDeTermino,localization,horaLocal) VALUES('" . $visita->getEmpresa() . "','" . $visita->getUsuario() . "','" . $visita->getDescricao() . "','" . $visita->getPendencias() . "','" . $visita->getCorretiva() . "','" . $visita->getHoraDeInicio() . "','" . $visita->getHoraDeTermino() . "','" . $visita->getLocalization() . "','" . $visita->getHoraLocal() . "')");
        if ($sql) {
            echo "Cadastrado com sucesso!! Aguarde!";
        } else {
            echo "Falha ao cadastrar." .
            mysql_error();
        }
        mysql_close();
    }

    function editar($visita) {

        $sql = "UPDATE $this->tabela_bd SET ";
        $sql .= "empresa='" . $visita->getEmpresa() . "',usuario='" . $visita->getUsuario() . "',descricao='" . $visita->getDescricao() . "',pendencias='" . $visita->getPendencias() . "',corretiva='" . $visita->getCorretiva() . "',horaDeInicio='" . $visita->getHoraDeInicio() . "',horaDeTermino='" . $visita->getHoraDeTermino() . "',localization='" . $visita->getLocalization() . $visita->getHoraLocal() . "' ";
        $sql .= "where id=" . $visita->getId();
        mysql_query($sql) or die($sql)

        ;
        echo 'Usuário editado com sucesso!';
    }

    function deletar($id) {

        $sql = "delete from $this->tabela_bd where id =" . $id;
        mysql_query($sql) or die($sql);
        echo 'Visita deletado com sucesso!';
    }

    public function getVisita($id) {
        $sql = "select * from $this->tabela_bd where id = $id";
        $result = mysql_query($sql) or die("Erro: " . mysql_error());
        //echo mysql_num_rows($result);
//        $objEmpresa = null;
        while ($dados = mysql_fetch_array($result)) {
            $visita = new Visita($dados['id'], $dados['empresa'], $dados['usuario'], $dados['descricao'], $dados['pendencias'], $dados['corretiva'], $dados['horaDeInicio'], $dados['horaDeTermino'], $dados['localization'], $dados['horaLocal']);
//            $visita->setId($item['id']);
        }
        return $visita;
    }

}

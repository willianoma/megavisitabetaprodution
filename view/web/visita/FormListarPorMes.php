<form method="POST" action="?controller=Visita&acao=listarPorMes" style="margin: 20px; ">
    <div>
    <h4>Selecione um mês: </h4>
    <input type="Month" name="selectData"/>
    <input type="submit" value="Gerar Relatório" />
    </div>
</form>



<?php
if ($_POST != NULL) {
    $selectData = $_POST['selectData'];
    $tratarData = explode("-", $selectData);
    $ano = $tratarData[0];
    $mes = $tratarData[1];
    $dataTratada = $mes . "-" . $ano;
}
?>

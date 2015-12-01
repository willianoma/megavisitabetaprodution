<form method="POST" action="?controller=Visita&acao=gerarRelatorioPdf" style="margin: 20px; ">
    <div>
        <h3>Garador de visita mensais para impressão </h3>
        <h4>Selecione um mês: </h4>
        <input type="Month" name="selectData"/>
        <input type="submit" value="Gerar PDF" />
    </div>
</form>


<?php
//if ($_POST != NULL) {
//    $selectData = $_POST['selectData'];
//    $tratarData = explode("-", $selectData);
//    $ano = $tratarData[0];
//    $mes = $tratarData[1];
//    $dataTratada = $mes . "-" . $ano;
//}
//?>

<?php
$listaEmpresa = $_REQUEST['listaEmpresa'];
foreach ($listaEmpresa as $empresa) {
    $razao = $empresa->getRazaoSocial();
}

//$listaUsuario = $_REQUEST['listaUsuario'];
//foreach ($listaUsuario as $usuario) {
//    $nome = $usuario->getNome();
//}
//
//$usuarioLogado = $_REQUEST['usuarioLogado'];
?>


<form method="POST" action="?controller=Visita&acao=gerarRelatorioPdfEmpresa" style="margin: 20px; ">
    <div>
        <h3>Garador de visita mensais para impressão </h3>
        <h4>Selecione um mês: </h4>
        <input type="Month" name="selectData"/>
        <h4>Seleciona a empresa</h4>
      <select  name="empresa" required="">
                <option selected value="">Empresas</option>

                <?php
                foreach ($listaEmpresa as $empresa) {
                    $razao = $empresa->getRazaoSocial();
                    echo "<option value='$razao'>$razao</option>";
                }
                ?>
            </select>
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
//
?>

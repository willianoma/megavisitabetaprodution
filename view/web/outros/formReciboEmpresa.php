<?php
date_default_timezone_set('UTC');
$ano = date("Y");

$listaEmpresa = $_REQUEST['listaEmpresa'];
foreach ($listaEmpresa as $empresa) {
    $razao = $empresa->getRazaoSocial();
}
?>

<meta  http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form action="?controller=Outros&acao=gerarReciboEmpresa" method="POST">

    <table>

        <tr>
            <td colspan="2" style="text-align: center; font-size: 18px; font-weight: bold"><span>Emissor de Recibos Adenis </span></td>          
        </tr>
        <tr>
            <td><span>Empresa: </span></td>

            <td>
                <select  name="nomeEmpresa" required="">
                    <option selected value="">Empresas</option>

                    <?php
                    foreach ($listaEmpresa as $empresa) {
                        $razao = $empresa->getRazaoSocial();
                        echo "<option value='$razao'>$razao</option>";
                    }
                    ?>
                </select>           
            </td>
        </tr>
        <tr>
            <td><span>Valor: </span></td>
            <td>  <input type="number" name="valor" required=""></td>      
        </tr>
        <tr>
            <td><span>Descrição: </span></td>
            <td> 
                <select name="descricaoLista" style="width: 100%">
                    <?php
                    $lista = array(' ', 'Serviços de manutenção de computadores');

                    for ($i = 0; $i < count($lista); $i++) {
                        echo '<option>';
                        echo $lista[$i];
                        echo '</option>';
                    }
                    echo $ano
                    ?>
                </select>
            </td>  
        </tr>
        <tr>
            <td> <span>Descrição Editavel: </span></td>
            <td><input type="text" name="descricaoOutros" maxlength="35"></td>  
        </tr>
        <tr>
            <td><span>Data: </span></td>
            <td>
                <select name="data" required="" style="width: 100%">
                    <option>Janeiro <?php echo $ano ?></option>
                    <option>Fevereiro <?php echo $ano ?></option>
                    <option>Março <?php echo $ano ?></option>
                    <option>Abril <?php echo $ano ?></option>
                    <option>Maio <?php echo $ano ?></option>
                    <option>Junho <?php echo $ano ?></option>
                    <option>Julho <?php echo $ano ?></option>
                    <option>Agosto <?php echo $ano ?></option>
                    <option>Setembro <?php echo $ano ?></option>
                    <option>Outubro <?php echo $ano ?></option>
                    <option>Novembro <?php echo $ano ?></option>
                    <option>Dezembro <?php echo $ano ?></option>
                </select>
            </td> 
        </tr>
        <tr >
            <td colspan="2"> <input type="submit" value="Emitir Recibo" style="width: 100%">    </td> 
            <td >    </td> 
        </tr>
    </table>




</form>

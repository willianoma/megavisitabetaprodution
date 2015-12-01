<?php
date_default_timezone_set('UTC');
$ano = date("Y");

$listaUsuario = $_REQUEST['listaUsuario'];
foreach ($listaUsuario as $usuario) {
    $nome = $usuario->getNome();
}
?>

<meta  http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form action="?controller=Outros&acao=gerarReciboFuncionario" method="POST">

    <table>
        <tr>
            <td colspan="2" style="text-align: center; font-size: 18px; font-weight: bold"><span>Emissor de Recibos Funcionário </span></td>          
        </tr>
        <tr>
            <td><span>Funcionário: </span></td>
            <td>
                <select  name="nomeUsuario" required="" style="width: 100%">
                    <option selected value="">Usuários</option>

<?php
foreach ($listaUsuario as $usuario) {
    $nome = $usuario->getNome();
    echo "<option value='$nome'>$nome</option>";
}
?>
                </select>
            </td>
        </tr>
        <tr>
            <td><span>Valor: </span></td>
            <td>  <input type="text" name="valor" required=""></td>      
        </tr>
        <tr>
            <td><span>Descrição: </span></td>
            <td> 
                <select name="descricaoLista" style="width: 100%">
<?php
$lista = array(' ', 'Auxílio Transporte', 'Salário', 'Acordo');

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

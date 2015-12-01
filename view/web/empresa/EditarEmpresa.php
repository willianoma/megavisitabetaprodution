<?php
$empresa = $_REQUEST['empresa'];
$id = $empresa->getId();
$razao = $empresa->getRazaoSocial();
$cnpj = $empresa->getCnpj();
$email = $empresa->getEmail();
?>

<div style="
     margin: 20px">
    <form name='form1' method="post" action="?controller=Empresa&acao=editarEmpresa">
        <table>
            <tr>
                <td>
                    <label for="id">id:</label>
                </td>
                <td>
                    <input type="text" name="idEmpresa" required  value='<?php echo $id; ?>'>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Razão Social:</label>
                </td>
                <td>
                    <input type="text" name="razaoEmpresa" required value='<?php echo $razao; ?>'>
                </td>
            </tr>
            <tr>
                <td>
                    <label>CNPJ:</label>
                </td>
                <td>
                    <input type="text" name="cnpjEmpresa" required value='<?php echo $cnpj; ?>'>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">E-mail:</label>
                </td>
                <td>
                    <input type="text" name="emailEmpresa" required value='<?php echo $email; ?>'>
                </td>
            </tr>

        </table>
        <input type="hidden" name="id" value='<?php echo $id; ?>'>
        <br>
        <input type="submit" value="Editar" name="Editar">
    </form>

   
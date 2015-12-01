<?php
$empresa = $_REQUEST['empresa'];
$id = $empresa->getId();
$razao = $empresa->getRazaoSocial();
$cnpj = $empresa->getCnpj();
$email = $empresa->getEmail();

?>
<form name='form1' method="post" action="?controller=empresa&acao=deletarEmpresa">
    <label for="id">id:</label>
    <input type="text" name="idEmpresa" required  readonly="readonly" value='<?php echo $id; ?>'>
    <br>
    <label for="razao">Razão Social:</label>
    <input type="text" name="razaoEmpresa" required  readonly="readonly" value='<?php echo $razao; ?>'>
    <br>
    <label for="cnpj">CNJP:</label>
    <input type="text" name="cnpjEmpresa" required  readonly="readonly" value='<?php echo  $cnpj; ?>'>
    <br>
    <label for="email">E-mail:</label>
    <input type="text" name="emailEmpresa" required  readonly="readonly" value='<?php echo $email; ?>'>
    <br>
    <input type="hidden" name="id" value='<?php echo $id; ?>'>
    <br>
    <input type="submit" value="Deletar" name="Deletar">
</form>

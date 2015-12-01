<?php
$visita = $_REQUEST['visita'];

$id = $visita->getId();
$empresa = $visita->getEmpresa();
$horaDeInicio = $visita->getHoraDeInicio();
$horaDeTermino = $visita->getHotaDeTermino();
$descricao = $visita->getDescricao();
$pendencias = $visita->getPendencias();
$corretiva = $visita->getCorretiva();
$usuario = $visita->getUsuario();
$localization = $visita->getLocalizarion();
?>
<form name='form1' method="post" action="?controller=Usuario&acao=deletarUsuario">
    <label for="id">id:</label>
    <input type="text" name="idVisita" required  readonly="readonly" value='<?php echo $id; ?>'>
    <br>
    <label for="empresa">Empresa:</label>
    <input type="text" name="empresa" required  readonly="readonly" value='<?php echo $empresa; ?>'>
    <br>
    <label for="horaDeInicio">Hora De Inicio:</label>
    <input type="text" name="horadeinicio" required  readonly="readonly" value='<?php echo $horaDeInicio; ?>'>
    <!--PAREI AQUI-->
    <br>
    <label for="cpf">CPF:</label>
    <input type="text" name="cpfUsuario" required  readonly="readonly" value='<?php echo $cpf; ?>'>
    <br>
    <label for="email">E-Mail:</label>
    <input type="text" name="emailUsuario" required  readonly="readonly" value='<?php echo $email; ?>'>
    <br>
    <label for="funcao">Função:</label>
    <input type="text" name="funcaoUsuario" required  readonly="readonly" value='<?php echo $funcao; ?>'>
    <br>
    <label for="permicao">Permição:</label>
    <input type="text" name="permicaoUsuario" required  readonly="readonly" value='<?php echo $permicao; ?>'>
    <br>
    <input type="hidden" name="id" value='<?php echo $id; ?>'>
    <input type="hidden" name="horaLocal" value="teste hora local"/>
    <br>
    <input type="submit" value="Deletar" name="Deletar">
</form>

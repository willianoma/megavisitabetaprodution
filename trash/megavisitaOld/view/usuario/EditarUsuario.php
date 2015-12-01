<?php
$usuario = $_REQUEST['usuario'];

$id = $usuario->getId();
$nome = $usuario->getNome();
$senha = $usuario->getSenha();
$cpf = $usuario->getCpf();
$email = $usuario->getEmail();
$funcao = $usuario->getFuncao();
?>
<form name='form1' method="post" action="?controller=usuario&acao=editarUsuario">
    <label for="id">id:</label>
    <input type="text" name="idUsuario" required  value='<?php echo $id; ?>'>
    <br>
    <label for="nome">Nome:</label>
    <input type="text" name="nomeUsuario" required  value='<?php echo $nome; ?>'>
    <br>
    <label for="senha">Senha:</label>
    <input type="text" name="senhaUsuario" required  value='<?php echo $senha; ?>'>
    <br>
    <label for="cpf">CPF:</label>
    <input type="text" name="cpfUsuario" required  value='<?php echo $cpf; ?>'>
    <br>
    <label for="email">E-Mail:</label>
    <input type="text" name="emailUsuario" required  value='<?php echo $email; ?>'>
    <br>
    <label for="funcao">Função:</label>
    <input type="text" name="funcaoUsuario" required  value='<?php echo $funcao; ?>'>
    <br>
    <input type="hidden" name="id" value='<?php echo $id; ?>'>
    <br>
    <input type="submit" value="Editar" name="Editar">
</form>

<?php
$usuario = $_REQUEST['usuario'];

$id = $usuario->getId();
$nome = $usuario->getNome();
$senha = $usuario->getSenha();
$cpf = $usuario->getCpf();
$email = $usuario->getEmail();
$funcao = $usuario->getFuncao();
$permicao = $usuario->getPermicao();
?>
<div style="
     margin: 20px">
    <form name='form1' method="post" action="?controller=Usuario&acao=editarUsuario">

        <table>
            <tr>
                <td>
                    <label for="id">id:</label>
                </td>
                <td>
                    <input type="text" name="idUsuario" required  value='<?php echo $id; ?>'>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nome">Nome:</label>
                </td>
                <td>
                    <input type="text" name="nomeUsuario" required  value='<?php echo $nome; ?>'>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="senha">Senha:</label>
                </td>
                <td>
                    <input type="text" name="senhaUsuario" required  value='<?php echo $senha; ?>'>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="cpf">CPF:</label>
                </td>
                <td>
                    <input type="text" name="cpfUsuario" required  value='<?php echo $cpf; ?>'>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">E-Mail:</label>
                </td>
                <td>
                    <input type="text" name="emailUsuario" required  value='<?php echo $email; ?>'>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="funcao">Função:</label>
                </td>
                <td>
                    <input type="text" name="funcaoUsuario" required  value='<?php echo $funcao; ?>'>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="permicao">Permição:</label>
                </td>
                <td>
                    <input type="text" name="permicaoUsuario" required value='<?php echo $permicao; ?>'>
                </td>
            </tr>
        </table>
        <input type="hidden" name="id" value='<?php echo $id; ?>'>
        <br>
        <input type="submit" value="Editar" name="Editar">
    </form>
</div>


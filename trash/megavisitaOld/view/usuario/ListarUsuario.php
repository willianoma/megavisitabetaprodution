<h1>Usuários</h1>
<p><strong> <a href="?controller=Usuario&acao=formAdd">Cadastrar novo usuario</a>
    </strong>
</p>
<table border=2 cellspacing=0 >
    <tr><td>id</td><td>Nome</td><td>Senha</td><td>CPF</td><td>E-mail</td><td>Função</td><td colspan="2">Ações</td></tr>
    <?php
    $lista = $_REQUEST['listaFuncinario'];

    foreach ($lista as $usuario) {
        $id = $usuario->getId();
        $nome = $usuario->getNome();
        $senha = $usuario->getSenha();
        $cpf = $usuario->getCpf();
        $email = $usuario->getEmail();
        $funcao = $usuario->getFuncao();

        echo "<tr>
            <td>$id</td>
            <td>$nome</td>
            <td>$senha</td>
            <td>$cpf</td>
            <td>$email</td>
            <td>$funcao</td>
                
            <td>
		<form action='?controller=usuario&acao=formEdit' method='post'>
		<input type='hidden' value='$id' name='id'>
		<input type='submit' value='alterar'>	
		</form>
	    </td>
				
	   <td>
		<form action='?controller=usuario&acao=formDelete' method='post'>
		<input type='hidden' value='$id' name='id'>
		<input type='submit' value='excluir'>	
		</form>
           </td>
             ";
    }
    ?>
</table>
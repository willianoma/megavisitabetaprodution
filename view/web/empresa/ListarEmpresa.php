<!--<head>-->
    <style type="text/css">
        td {
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 5px;
            text-align: center;

        }
        tr {

        }
    </style>

<!--</head>-->
<div  style="margin: 20px;">
    <h1>Empresas</h1>
    <p><strong> <a href="?controller=Empresa&acao=formAdd">Cadastrar nova empresa</a>
        </strong>
    </p>
    <table border=2 >
        <tr><td>id</td><td>Razão Social</td><td>CNPJ</td><td>E-mail</td><td colspan="2">Ações</td></tr>
        <?php
        $lista = $_REQUEST['listaEmpresa'];

        foreach ($lista as $empresa) {

            $id = $empresa->getId();
            $razao = $empresa->getRazaoSocial();
            $cnpj = $empresa->getCnpj();
            $email = $empresa->getEmail();

            echo "<tr>
            <td>$id</td>
            <td>$razao</td>
            <td>$cnpj</td>
            <td>$email</td>
                
            <td>
		<form action='?controller=Empresa&acao=formEdit' method='post'>
		<input type='hidden' value='$id' name='id'>
		<input type='submit' value='alterar'>	
		</form>
	    </td>
				
	   <td>
		<form action='?controller=Empresa&acao=formDelete' method='post'>
		<input type='hidden' value='$id' name='id'>
		<input type='submit' value='excluir'>	
		</form>
           </td>
             ";
        }
        ?>
    </table>
</div>
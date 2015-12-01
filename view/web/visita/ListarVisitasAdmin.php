<!--<head>-->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="script.js"></script>   
<style type="text/css">
    /*        #linhaDetalhe{
                border: 1px solid;
                padding: 10px;
                width: 1200px;
           
    
            }       
             
              
    */                
    td{
        height: 50px;
    }

    #tabela{
        border: 1px solid;
        padding: 10px;

        width: 1200px;
        min-width: 1200px;
        max-width: 1400px;
        border-collapse: collapse;
        text-align: center;


    }



</style>

<!--</head>-->

<div style="margin: 20px;">
    <h1>Visitas</h1>
    <!--<p><strong> <a href="?controller=Visita&acao=formCadastrarVisita">Cadastrar novo usuario</a>-->
</strong>
</p>

<script>
    $(function () {
        $("#tabela input").keyup(function () {
            var index = $(this).parent().index();
            var nth = "#tabela td:nth-child(" + (index + 1).toString() + ")";
            var valor = $(this).val().toUpperCase();
            $("#tabela tbody tr").show();
            $(nth).each(function () {
                if ($(this).text().toUpperCase().indexOf(valor) < 0) {
                    $(this).parent().hide();
                }
            });
        });

        $("#tabela input").blur(function () {
            $(this).val("");
        });
    });
</script>

<!--<table id="tabela" >

    <th><input type="text" id="txtColuna1" hidden="" style="width: 50px;"/></th>
    <th><input type="text" id="txtColuna2"/></th>
    <th><input type="text" id="txtColuna3"/></th>
    <th><input type="text" id="txtColuna4"/></th>
    <th><input type="text" id="txtColuna5"/></th>
    <th><input type="text" id="txtColuna6"/></th>
    <th><input type="text" id="txtColuna7" hidden=""/></th>
    <th><input type="text" id="txtColuna8" hidden=""/></th>
    <th><input type="text" id="txtColuna9"/></th>
    <th><input type="text" id="txtColuna10"/></th>
    <th><input type="text" id="txtColuna11"/></th>
   
</table>-->
<!--<table border="1" id="tabela" >

    <tr>
        <td style="width: 70px;">id</td>
        <td style="width: 150px;">Empresa</td>
        <td style="width: 130px;">Hora Entrada</td>
        <td style="width: 130px;">Hora Saída</td>
        <td style="width: 130px;">Descrição</td>
        <td style="width: 130px;">Pendencias</td>
        <td style="width: 130px;">Corretiva</td>
        <td style="width: 130px;">Usuário</td>
        <td style="width: 130px;">Localização</td>
        <td style="width: 130px;">Hora do Cadastro</td>
        <td style="width: 130px;" colspan="2">Ações</td></tr>

</table>-->

<br>



<table border="1" id="tabela" >

    <!--<tr><td>id</td><td>Empresa</td><td>Hora Entrada</td><td>Hora Saída</td><td>Descrição</td><td>Pendencias</td><td>Corretiva</td><td>Usuário</td><td>Localização</td><td>Hora do Cadastro</td><td colspan="2">Ações</td></tr>-->

    <tr>
        <td style="font-weight: bold;">id</td>
        <td style="font-weight: bold;">Empresa</td>
        <td style="font-weight: bold;">Hora Entrada</td>
        <td style="font-weight: bold;">Hora Saída</td>
        <td style="font-weight: bold;">Descrição</td>
        <td style="font-weight: bold;">Pendencias</td>
        <td style="font-weight: bold;">Corretiva</td>
        <td style="font-weight: bold;">Usuário</td>
        <td style="font-weight: bold;">Localização</td>
        <td style="font-weight: bold;">Hora do Cadastro</td>
        <td style="font-weight: bold;" colspan="3">Ações</td>
    </tr>


    <th><input type="text" id="txtColuna1" style="width: 60px;"/></th>
    <th><input type="text" id="txtColuna2" style="width: 130px;" /></th>
    <th><input type="text" id="txtColuna3" style="width: 110px;" /></th>
    <th><input type="text" id="txtColuna4" style="width: 110px;" /></th>
    <th><input type="text" id="txtColuna5" style="width: 130px;" /></th>
    <th><input type="text" id="txtColuna6" style="width: 130px;" /></th>
    <th><input type="text" id="txtColuna7" style="width: 70px;" ></th>
    <th><input type="text" id="txtColuna8" style="width: 120px;" ></th>
    <th><input type="text" id="txtColuna9" style="width: 130px;" /></th>
    <th><input type="text" id="txtColuna10" style="width: 130px;" /></th>
    <th><input type="text" id="txtColuna11" readonly=""  style="width: 110px;" /></th>
    <th><input type="text" id="txtColuna12" readonly=""  style="width: 155px;" /></th>
    <th><input type="text" id="txtColuna13" readonly=""  style="width: 110px;" /></th>

    <?php
    $listaVisitas = $_REQUEST['listaVisita'];
 
    foreach ($listaVisitas as $visita) {
        $id = $visita->getId();
        $empresa = $visita->getEmpresa();
        $horaDeInicio = $visita->getHoraDeInicio();
        $horaDeTermino = $visita->getHoraDeTermino();
        $descricao = $visita->getDescricao();
        $pendencias = $visita->getPendencias();
        $corretiva = $visita->getCorretiva();
        $usuario = $visita->getUsuario();
        $localization = $visita->getLocalization();
        $horaLocal = $visita->getHoraLocal();





        echo "<tr>
            <td>$id</td>
            <td>$empresa</td>
            <td>$horaDeInicio</td>
            <td>$horaDeTermino</td>
            <td>$descricao</td>
            <td>$pendencias</td>
            <td>$corretiva</td>
            <td>$usuario</td>
            <td>$localization</td>
            <td>$horaLocal</td>
     
                
            <td>
		<form action='?controller=Visita&acao=verNoMapa' method='post'>
		<input type='hidden' value='$localization' name='localization'>
		<input type='hidden' value='$empresa' name='empresa'>
		<input type='hidden' value='$usuario' name='usuario'>
		<input type='submit' value='Ver no mapa'>	
		</form>
	    </td>
            
            <td>
		<form action='?controller=Visita&acao=comprovanteVisita' method='post'>
		<input type='hidden' value='$id' name='id'>
		
		<input type='submit' value='Comprovante Visita'>	
		</form>
	    </td>
            
            <td>
		<form action='?controller=Visita&acao=deletarVisita' method='post'>
		<input type='hidden' value='$id' name='id'>
		
		<input type='submit' value='Excluir Visita'>	
		</form>
	    </td>
				
	 
             ";
    }
    ?>
</table>
</div>
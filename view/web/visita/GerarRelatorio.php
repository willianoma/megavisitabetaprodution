<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="script.js"></script>  
<style type="text/css"> 
    td{
        /*height: 40px;*/
    }

    #tabela{
        /*border: 1px solid;*/
        padding: 10px;

        /*        width: 1000px;
                min-width: 1200px;
                max-width: 1400px;*/
        border-collapse: collapse;
        text-align: center;
        font-size: 12px
    }
</style>

<div style="margin: 20px;">
    <h1>Relatório Mensal:    <?php echo $dataTratada; ?> </h1>
</div>


<div style="margin: 20px">

    <table border="1" id="tabela"  class="table table-striped" >
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
        </tr>





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
            <td>$empresa
               
             <form action='?controller=Visita&acao=comprovanteVisita' method='post'>
                <input type='hidden' value='$id' name='id'>
                <input type='submit' value='Comprovante' name='$id'>
                </form>    
       </td>
           
            <td>$horaDeInicio</td>
            <td>$horaDeTermino</td>
            <td>$descricao</td>
            <td>$pendencias</td>
            <td>$corretiva</td>
            <td>$usuario</td>
            <td>                
             <form action='?controller=Visita&acao=verNoMapa' method='post'>
                <input type='hidden' value='$id' name='id'>
                <input type='hidden' value='$localization' name='localization'>
		<input type='hidden' value='$empresa' name='empresa'>
		<input type='hidden' value='$usuario' name='usuario'>
                <input type='submit' value='Ver No Mapa' name='$id'>
                </form>               

            </td>
            <td>$horaLocal</td>                  
             ";
        }
        ?>
    </table>



    <BR>
    <BR>
    <BR>


    <!--    <div style="text-align: center; font-size: 14px; font-weight: bold">
    
    
            <span>Declaro que o todas as visitas acima foram realizadas pelo técnico (Usuário) citado. </span>
            <BR>
            <BR>
            <BR>
            <BR>
            <BR>
            <BR>
            <span >Adenis Duarte</span>
            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <span >Mega Empreendimentos</span>
        </div>
        <BR>
        <BR>
        <BR>-->
</div>
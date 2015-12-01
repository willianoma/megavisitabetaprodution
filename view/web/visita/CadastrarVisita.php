<!--<head>-->
<div class="divtop">
    <p id="demo" >Clique para localizar</p>
    <button class="Buttons" onclick="getLocation()">Localizar</button>
</div>
<script type='text/javascript'>

    var x = document.getElementById("demo");

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        x.innerHTML = "Latitude: " + position.coords.latitude +
                "<br>Longitude: " + position.coords.longitude;
        var lat = position.coords.latitude;
        var long = position.coords.longitude;
        envia_form(lat, long);

    }

    function envia_form(lat, long) {
        var strEscondida = lat + " , " + long;
        document.getElementById('var_escondida').value = strEscondida;
    }
</script>  

<style type="text/css">
    select {
        height: 40px;
        width: 200px;
        font-size: 16px;
        font-weight: bold;
    }
    textarea{
        height: 100px;
        min-width: 100%;
    }


    .divPrincipal {
        margin-left: 20px;
        max-width: 1013px;
    }
    .forms {
        margin-top: 20px;
        margin-bottom: 20px;
        width: auto;
    }

    .reponsive{
        width: auto;

    }
    .divtop{
        margin-left: 20px;
        margin-top: 15px;
    }
    .Buttons{
        margin-top: 10px;
        height: 60px;
        width: 200px
    }



</style>

<!--</head>-->

<?php
$listaEmpresa = $_REQUEST['listaEmpresa'];
foreach ($listaEmpresa as $empresa) {
    $razao = $empresa->getRazaoSocial();
}

$listaUsuario = $_REQUEST['listaUsuario'];
foreach ($listaUsuario as $usuario) {
    $nome = $usuario->getNome();
}

$usuarioLogado = $_REQUEST['usuarioLogado'];
?>



<br>

<div class="divPrincipal">
    <div class="reponsive">
        <form method="POST" action="?controller=Visita&acao=cadastrarVisita">

            <!--<label>Usuário: </label>-->
            <select name="usuarioVisita" required="">
                <option selected value="<?php echo $usuarioLogado; ?>"><?php echo $usuarioLogado; ?></option>
            </select>

            <select  name="empresaVisita" required="">
                <option selected value="">Empresas</option>

                <?php
                foreach ($listaEmpresa as $empresa) {
                    $razao = $empresa->getRazaoSocial();
                    echo "<option value='$razao'>$razao</option>";
                }
                ?>
            </select>



<!--            <select name="usuarioVisita" required="">
    <option selected value="">Usuários</option>

                //<?php
//                foreach ($listaUsuario as $usuario) {
//                    $nome = $usuario->getNome();
//                    echo "<option value='$nome'>$nome</option>";
//                }
//                
            ?>

</select>-->

            <label>Hora de Entrada</label>
            <input type="datetime-local" name="horaDeInicioVisita" required=""/>
            <label>Hora de Saída</label>
            <input type="datetime-local" name="horaDeTerminoVisita" required=""/>

            <input type='hidden' name='var_escondida' value='' id='var_escondida'  />

            <div class="forms">
                <label>Descrição</label>  

                <textarea name="descricaoVisita"  required=""></textarea>
            </div>
            <div class="forms">
                <label>Pendencias</label>

                <textarea name="pendenciasVisita"  required=""></textarea>
            </div>
            <div>
                <label>Visita Corretiva?</label>
                <input type="radio" name="corretivaVisita" Value="YES"/>Sim
                <input type="radio" name="corretivaVisita" Value="NO" checked=""/>Não
            </div>



            <input class="Buttons" type="submit" name="cadastrarVisita" value="Cadastrar Visita"/>

        </form>
    </div>
</div>
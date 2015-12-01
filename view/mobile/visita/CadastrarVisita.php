<meta name="viewport" content="width=320" charset="utf-8">

<div class="divtop">
    <p id="demo" >Clique em Localizar</p>
    <button  class="btn btn-default" 
             style="margin-top: 5px;
             margin-bottom: 10px;
             height: 60px;
             width: 100%" 
             onclick="getLocation()">Localizar</button>


    <script type='text/javascript'>

        var x = document.getElementById("demo");

        function getLocation() {
            x.innerHTML = "Aguarde, Localizando...";
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
</div>
</head>

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

    .divtop{
        text-align: center;
        margin-left: 5px;
        margin-right: 5px;
        margin-top: 15px;
    }

    .divPrincipal {
        text-align: center;
        margin-left: 5px;
        margin-right: 5px;

    }
    .forms {
        margin-top: 20px;
        margin-bottom: 20px;
        width: auto;
    }

    .reponsive{
        width: auto;

    }

    .Buttons{
        margin-top: 5px;
        margin-bottom: 10px;
        height: 60px;
        width: 100%
    }



</style>



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

<div class="divPrincipal">
    <div class="reponsive">
        <form method="POST" action="?controller=Visita&acao=cadastrarVisita">
            <input type="text" name="var_escondida" hidden="" required id="var_escondida" style="width: 100%;" />
            <div style="width: auto;">


                <select size="1" name="empresaVisita" required=""  style="width: 100%; height: 40">
                    <option selected value="">Empresas</option>

                    <?php
                    foreach ($listaEmpresa as $empresa) {
                        $razao = $empresa->getRazaoSocial();
                        echo "<option value='$razao'>$razao</option>";
                    }
                    ?>

                </select>
                <BR>
                <BR>

                <select name="usuarioVisita" required="" style="width: 100%; height: 40">
                    <option selected value="<?php echo $usuarioLogado; ?>"><?php echo $usuarioLogado; ?></option>
                </select>

                <div>

                    <label>Hora de Entrada</label>
                    <BR>
                    <input type="datetime-local" name="horaDeInicioVisita" required="" style="width: 100%; height: 40"/>
                    <BR>
                    <label>Hora de Saída</label>
                    <BR>
                    <input type="datetime-local" name="horaDeTerminoVisita" required="" style="width: 100%; height: 40"/>
                </div>


            </div>

            <br>

            <div style="width: auto;">
                <label>Descrição</label>  
                <br>
                <textarea name="descricaoVisita"  required=""></textarea>
            </div>
            <div style="width: auto;">
                <br>
                <label>Pendencias</label>
                <br>
                <textarea name="pendenciasVisita" ></textarea>
                <br>
                <br>

                <label>Visita Corretiva?</label>
                <input type="radio" name="corretivaVisita" Value="YES"/>Sim
                <input type="radio" name="corretivaVisita" Value="NO" checked=""/>Não

            </div>
            <div style="width: auto;">
                <br>


                <input class="Buttons" type="submit" name="cadastrarVisita" value="Cadastrar Visita"  style="width: 100%; height: 50"/>
            </div>
        </form>
    </div>
</div>

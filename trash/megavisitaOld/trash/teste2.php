<html>
    <head>
        <title>Teste JS</title>
    <p id="demo">Click the button to get your coordinates:</p>
    <button onclick="getLocation()">Try It</button>
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
//            alert(lat + " / " + long);
//            var strEscondida = lat + " / " + long;
//            document.getElementById('var_escondida').value = strEscondida;

        }



        function envia_form(lat, long) {
            var strEscondida = lat + " / " + long;
            document.getElementById('var_escondida').value = strEscondida;
        }
    </script>
</head>
<body>

    <form action='teste3.php' method='POST' name='form_teste' id='form_teste' >
        <input type='hidden' name='var_escondida' value='' id='var_escondida' />
        <input type='submit' value='Enviar!' onclick="getLocation()"/>
    </form>
    //<?php
//    
// echo  $_REQUEST['var_escondida'];
//    ?>
</body>
</html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="jquery.jd"></script>

<div style=" text-align: center;">
    <Form action="" method="POST">
        Origem:
        <input type="text" name="latitude" id="latitude" list="listCidades"/>
        Destino:
        <input type="text" name="longitude"/>
        <input type="submit"/>

        <label id="info"/>

    </form>

</div>
<?php

class index {

    function calculcarRota() {

        $latitude = $_POST["latitude"];
        $longitude = $_POST["longitude"];

//      $l = "http://maps.googleapis.com/maps/api/directions/json?origin=$origem&destination=$destino&sensor=false";
        $l = "http://maps.google.com/maps/api/geocode/json?address=$latitude,$longitude&sensor=false";
        $json = file_get_contents($l);

        $objJson = json_decode($json);


        foreach ($objJson->routes as $route) {
            foreach ($route->legs as $leg) {
                $distancia = $leg->distance->text;
                $tempo = $leg->duration->text;
                echo "<div style=' text-align: center;'>";
                echo "Ultima pesquisa: $origem - $destino";
                echo "<br>";
                echo "Distancia: ", $distancia, " - ", "Duração da viagem: ", $tempo;
                echo "</div>";
            }
        }
    }

}

$index = new index();
$index->calculcarRota();
?>
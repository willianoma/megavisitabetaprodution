<script language="JavaScript">

    function showtime()
    {
        setTimeout("showtime();", 1000);
        var hh = String(callerdate.getHours());
        var mm = String(callerdate.getMinutes());
        var ss = String(callerdate.getSeconds());
        callerdate.setTime(callerdate.getTime() + 1000);

        document.clock.face.value =
                ((hh < 10) ? " " : "") + hh +
                ((mm < 10) ? ":0" : ":") + mm +
                ((ss < 10) ? ":0" : ":") + ss;

    }
    callerdate = new Date(<?php echo date("Y,m,d,H,i,s"); ?>);

</script>
<body onLoad="showtime()">
    <div style="text-align: center">
        <form name="clock" action="../controller/RelogioController.php" method="GET">
            <input type="text" name="face" value="" size=10>
            <input type="submit" name="botao" value="entrada"/>
            <input type="submit" name="botao" value="saida"/>
        </form>
    </div>

 


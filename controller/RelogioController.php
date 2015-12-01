    <?php
  
//    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    $hora = $_GET['face'];
    $acao = $_GET['botao'];


    if ($acao == 'entrada') {
        entrada($hora, $acao);
    }
    if ($acao == 'saida') {
        saida($hora, $acao);
    }

    function entrada($hora, $acao) {
        echo $hora;
        echo $acao;
    }

    function saida($hora, $acao) {
        echo $hora;
        echo $acao;
    }
    ?>
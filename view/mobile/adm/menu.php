<!--<meta name="viewport" content="width=320" charset="utf-8">-->
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </head>
    <body>
    </body>


<ul class="nav nav-pills">
    <li class="dropdown nav-pills active">
        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Menu <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li class="active"><a href="index.php"> Home</a></li>
            <li class="active"><a href="?controller=Empresa&acao=listar">Empresas</a></li>
            <li class="active"><a href="?controller=Usuario&acao=listar">Usuários</a></li>

            <li class="active"><a href="?controller=BD&acao=configForm">Configurar Banco</a></li>
            <li class="active"><a href="index.php?controller=Login&acao=logout">Logout</a> </li>
        </ul>
    </li>
    <li class="dropdown nav-pills active">
        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Visitas <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li class="active"><a href="?controller=Visita&acao=formCadastrarVisitaMobile">Cadastrar Visita</a></li>
             <li class="active"><a href="?controller=Visita&acao=listarPorMes">Relatório</a></li>
            <li class="active"><a href="?controller=Visita&acao=listarAdmin">Listar Visita</a></li>
        </ul>
</ul>

<!--<li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Messages <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Inbox</a></li>
                            <li><a href="#">Drafts</a></li>
                            <li><a href="#">Sent Items</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Trash</a></li>
                        </ul>
                    </li>-->
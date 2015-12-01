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
                <li class="active"><a href="?controller=BD&acao=configForm">Configurar Banco</a></li>
                <li class="active"><a href="index.php?controller=Login&acao=logout">Logout</a> </li>
            </ul>

        <li class="dropdown nav-pills active">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Usuários <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li class="active"> <a href="?controller=Usuario&acao=formAdd">Cadastrar Usuário</a></li>
                <li class="active"><a href="?controller=Usuario&acao=listar">Listar</a></li>
            </ul>
        </li>

        <li class="dropdown nav-pills active">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Empresas <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li class="active"> <a href="?controller=Empresa&acao=formAdd">Cadastrar Empresa</a></li>
                <li class="active"><a href="?controller=Empresa&acao=listar">Listar</a></li>
            </ul>
        </li>

        <li class="dropdown nav-pills active">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Visitas <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li class="active"><a href="?controller=Visita&acao=formCadastrarVisita">Cadastrar Visita</a></li>
                <li class="active"><a href="?controller=Visita&acao=listarPorMes">Gerar Relatório</a></li>
                <li class="active"><a href="?controller=Visita&acao=formRelatorioEmpresa">Gerar Relatório Empresa PDF</a></li>
                <li class="active"><a href="?controller=Visita&acao=formRelatorio">Gerar Relatório PDF</a></li>
                <li class="active"><a href="?controller=Visita&acao=listarAdmin">Listar Todas</a></li>
            </ul>
            
        <li class="dropdown nav-pills active">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Outros<span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li class="active"><a href="?controller=Outros&acao=formReciboFuncionario">Recibo Funcionário</a></li>         
                <li class="active"><a href="?controller=Outros&acao=formReciboEmpresa">Recibo Empresa</a></li>         
            </ul>

    </ul>







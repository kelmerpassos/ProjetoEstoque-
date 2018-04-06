<html>
<head>
    <link rel="stylesheet" href="<?php echo asset('/css/app.css')?>" type="text/css">
    <link href="<?php echo asset('/css/custom.css')?>" rel="stylesheet">
    <title>Controle de estoque</title>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand">
                    Estoque
                </a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/">Listagem</a></li>
                <li><a href="/produtos/novo">Novo</a></li>
            </ul>
        </div>
    </nav>
    @yield('conteudo')
    <footer class="footer">
        <p>© Desenvolvido por Kelmer Passos.</p>
    </footer>
</div>
</body>
</html>
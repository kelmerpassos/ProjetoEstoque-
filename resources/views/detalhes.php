<html>
    <head>
        <link rel="stylesheet" href="<?php echo asset('/css/app.css')?>" type="text/css">
        <title>Detalhes do produto</title>
    </head>
    <body>
        <div class="container">
            <h1>Detalhes do produto</h1>
            <table>
                <tr><td>Nome</td><td><?= $p[0]->nome ?></td></tr>
                <tr><td>Valor</td><td<?= $p[0]->valor ?></td></tr>
                <tr><td>Descrição</td><td><?= $p[0]->descricao ?></td></tr>
                <tr><td>Quantidade</td><td><?= $p[0]->quantidade ?></td></tr>
            </table>
        </div>
    </body>
</html>
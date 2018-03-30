<html>
    <head>
        <link rel="stylesheet" href="<?php echo asset('/css/app.css')?>" type="text/css">
        <title>Controle de estoque</title>
    </head>
    <body>
        <h1 style="text-align: center">Listagem de Produtos</h1>
        <div class="container">
            <table class="table table-bordered table-responsive">
                <?php foreach ($produtos as $p): ?>
                <tr>
                    <td> <?= $p->nome ?></td>
                    <td> <?= $p->valor ?></td>
                    <td> <?= $p->descricao ?></td>
                    <td> <?= $p->quantidade ?></td>
                    <td> <a href="/produtos/mostra?id=<?=$p->id?>">
                            Visualizar
                        </a>
                    </td>
                </tr>
                <?php endforeach ?>
            </table>
        </div>
    </body>
</html>
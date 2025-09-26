<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3">Produtos</h1>
            <a href="/produtos/create" class="btn btn-primary">Novo Produto</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover bg-white">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Categoria</th>
                        <th>Preço</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($produtos as $produto): ?>
                    <tr>
                        <td><?= esc($produto['id']) ?></td>
                        <td><?= esc($produto['nome']) ?></td>
                        <td><?= esc($produto['categoria']) ?></td>
                        <td>R$ <?= number_format($produto['preco'], 2, ',', '.') ?></td>
                        <td class="d-flex gap-2">
                            <a href="/produtos/edit/<?= esc($produto['id']) ?>" class="btn btn-warning btn-sm text-white">Editar</a>
                            <form action="/produtos/delete/<?= esc($produto['id']) ?>" method="post" onsubmit="return confirm('Tem certeza que deseja excluir?');">
                                <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

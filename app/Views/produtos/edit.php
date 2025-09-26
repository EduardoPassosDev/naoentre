<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M8ZR2ZQ945"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-M8ZR2ZQ945');
    </script>



</head>

<body class="bg-light">
    <div class="container py-5">
        <h1 class="h3 mb-4">Editar Produto</h1>
        <form action="/produtos/update/<?= esc($produto['id']) ?>" method="post"
            class="bg-white p-4 rounded shadow-sm mx-auto" style="max-width: 500px;">
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" name="nome" value="<?= esc($produto['nome']) ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Categoria</label>
                <input type="text" name="categoria" value="<?= esc($produto['categoria']) ?>" class="form-control"
                    required>
            </div>
            <div class="mb-4">
                <label class="form-label">Preço</label>
                <input type="number" step="0.01" name="preco" value="<?= esc($produto['preco']) ?>" class="form-control"
                    required>
            </div>
            <div class="d-flex justify-content-between">
                <a href="/produtos" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
    </div>
</body>

</html>
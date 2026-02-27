<?php
require __DIR__ . '/../backend/listar_fornecedores.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fornecedores Cadastrados</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="mb-0">Fornecedores</h2>

            <a href="index.php" class="btn btn-primary">
                + Novo Fornecedor
            </a>
        </div>
        <div class="card shadow-sm">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-hover mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th>CNPJ</th>
                                <th>Razão Social</th>
                                <th>Nome Fantasia</th>
                                <th>Email</th>
                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php if (!empty($fornecedores)): ?>
                                <?php foreach ($fornecedores as $fornecedor): ?>
                                    <tr>
                                        <td><?= htmlspecialchars($fornecedor['cnpj']) ?></td>
                                        <td><?= htmlspecialchars($fornecedor['razao_social']) ?></td>
                                        <td><?= htmlspecialchars($fornecedor['nome_fantasia']) ?></td>
                                        <td><?= htmlspecialchars($fornecedor['email']) ?></td>
                                        <td class="text-center">
                                            <a href="atualizar_fornecedor.php?id=<?= $fornecedor['id'] ?>" class="btn btn-sm btn-warning">Editar</a>
                                            <a href="#" class="btn btn-sm btn-danger">Excluir</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="5" class="text-center py-4">
                                        Nenhum fornecedor cadastrado.
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php
require '../backend/listar_fornecedores.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Fornecedores</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Lista de Fornecedores</h1>
    <table class="table table-bordered mt-4">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>CNPJ</th>
                <th>Razão Social</th>
                <th>Nome Fantasia</th>
                <th>Email</th>
                <th>Criado em</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fornecedores as $f): ?>
                <tr id="fornecedor-<?= $f['id'] ?>">
                    <td><?= $f['id'] ?></td>
                    <td><?= $f['cnpj'] ?></td>
                    <td><?= $f['razao_social'] ?></td>
                    <td><?= $f['nome_fantasia'] ?></td>
                    <td><?= $f['email'] ?></td>
                    <td><?= $f['created_at'] ?></td>
                    <td>
                        <a href="editar_fornecedor.php?id=<?= $f['id'] ?>" class="btn btn-primary btn-sm">Editar</a>
                        <button class="btn btn-danger btn-sm btn-delete" data-id="<?= $f['id'] ?>">Excluir</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="../assets/js/fornecedores.js"></script>
</body>
</html>
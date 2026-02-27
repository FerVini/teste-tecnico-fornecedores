<?php
// 1️⃣ Receber id do fornecedor
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die('ID inválido');
}

$id = (int) $_GET['id'];

// 2️⃣ Buscar dados do fornecedor
require '../backend/buscar_fornecedor.php'; // $fornecedor já disponível

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Fornecedor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Editar Fornecedor</h2>
    <form action="../backend/atualizar_fornecedor.php" method="POST">
        <input type="hidden" name="id" value="<?= $fornecedor['id'] ?>">

        <div class="mb-3">
            <label>CNPJ</label>
            <input type="text" name="cnpj" class="form-control" value="<?= htmlspecialchars($fornecedor['cnpj']) ?>" required>
        </div>

        <div class="mb-3">
            <label>Razão Social</label>
            <input type="text" name="razao_social" class="form-control" value="<?= htmlspecialchars($fornecedor['razao_social']) ?>" required>
        </div>

        <div class="mb-3">
            <label>Nome Fantasia</label>
            <input type="text" name="nome_fantasia" class="form-control" value="<?= htmlspecialchars($fornecedor['nome_fantasia']) ?>" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($fornecedor['email']) ?>" required>
        </div>

        <div class="mb-3">
            <label>Telefone</label>
            <input type="text" name="telefone" class="form-control" value="<?= htmlspecialchars($fornecedor['telefone']) ?>">
        </div>

        <div class="mb-3">
            <label>Endereço</label>
            <input type="text" name="endereco" class="form-control" value="<?= htmlspecialchars($fornecedor['endereco']) ?>">
        </div>

        <div class="mb-3">
            <label>Estado</label>
            <input type="text" name="estado" class="form-control" value="<?= htmlspecialchars($fornecedor['estado']) ?>">
        </div>

        <div class="mb-3">
            <label>Município</label>
            <input type="text" name="municipio" class="form-control" value="<?= htmlspecialchars($fornecedor['municipio']) ?>">
        </div>

        <button type="submit" class="btn btn-success">Atualizar</button>
        <a href="fornecedores.php" class="btn btn-secondary">Voltar</a>
    </form>
</div>
</body>
</html>
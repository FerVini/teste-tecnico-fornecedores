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
    <form id="update-form" action="../backend/atualizar_fornecedor.php" method="POST">
        <input type="hidden" name="id" value="<?= $fornecedor['id'] ?>">

        <?php
        $fields = [
            'cnpj' => 'CNPJ',
            'razao_social' => 'Razão Social',
            'nome_fantasia' => 'Nome Fantasia',
            'email' => 'Email',
            'telefone' => 'Telefone',
            'endereco' => 'Endereço',
            'estado' => 'Estado',
            'municipio' => 'Município'
        ];
        foreach ($fields as $name => $label): ?>
            <div class="mb-3">
                <label><?= $label ?></label>
                <input type="<?= $name === 'email' ? 'email' : 'text' ?>"
                       name="<?= $name ?>"
                       id="<?= $name ?>"
                       class="form-control"
                       value="<?= htmlspecialchars($fornecedor[$name]) ?>"
                       <?= in_array($name, ['cnpj','razao_social','nome_fantasia','email']) ? 'required' : '' ?>>
                <div class="invalid-feedback"></div>
            </div>
        <?php endforeach; ?>

        <button type="submit" class="btn btn-success">Atualizar</button>
        <a href="fornecedores.php" class="btn btn-secondary">Voltar</a>
    </form>
</div>

<script src="assets/js/form.js"></script>
</body>
</html>
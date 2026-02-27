<?php
require 'config.php';

// Verifica se o ID foi enviado
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die('ID inválido');
}

$id = (int) $_GET['id'];

$sql = "DELETE FROM fornecedores WHERE id = :id";
$stmt = $pdo->prepare($sql);

try {
    $stmt->execute([':id' => $id]);
    // Redireciona de volta para a lista de fornecedores
    header('Location: ../public/fornecedores.php?msg=excluido');
    exit;
} catch (PDOException $e) {
    die('Erro ao excluir fornecedor: ' . $e->getMessage());
}
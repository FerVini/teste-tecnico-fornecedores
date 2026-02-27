<?php
require 'config.php';
header('Content-Type: application/json');

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo json_encode(['error' => 'ID inválido']);
    exit;
}

$id = (int) $_GET['id'];

$sql = "DELETE FROM fornecedores WHERE id = :id";
$stmt = $pdo->prepare($sql);

try {
    $stmt->execute([':id' => $id]);
    echo json_encode(['success' => 'Fornecedor excluído com sucesso']);
} catch (PDOException $e) {
    echo json_encode(['error' => 'Erro ao excluir fornecedor']);
}
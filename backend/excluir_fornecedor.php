<?php
require 'config.php';

// Define o header para JSON
header('Content-Type: application/json');

// Verifica se o ID foi enviado
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo json_encode(['success' => false, 'message' => 'ID inválido']);
    exit;
}

$id = (int) $_GET['id'];

$sql = "DELETE FROM fornecedores WHERE id = :id";
$stmt = $pdo->prepare($sql);

try {
    $stmt->execute([':id' => $id]);

    if ($stmt->rowCount() > 0) {
        echo json_encode(['success' => true, 'message' => 'Fornecedor excluído com sucesso', 'id' => $id]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Fornecedor não encontrado']);
    }
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Erro ao excluir fornecedor: ' . $e->getMessage()]);
}
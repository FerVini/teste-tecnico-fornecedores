<?php
require 'config.php';

// Verifica se o ID foi enviado
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo json_encode(['success' => false, 'msg' => 'ID inválido']);
    exit;
}

$id = (int) $_GET['id'];

$sql = "DELETE FROM fornecedores WHERE id = :id";
$stmt = $pdo->prepare($sql);

try {
    $stmt->execute([':id' => $id]);
    echo json_encode(['success' => true, 'msg' => 'Fornecedor excluído com sucesso']);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'msg' => 'Erro ao excluir fornecedor: ' . $e->getMessage()]);
}
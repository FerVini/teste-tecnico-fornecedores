<?php
require 'config.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die('ID inválido');
}

$id = (int) $_GET['id'];

$sql = "SELECT * FROM fornecedores WHERE id = :id LIMIT 1";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->execute();

$fornecedor = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$fornecedor) {
    die('Fornecedor não encontrado');
}

// Este arquivo NÃO imprime HTML
// Ele apenas disponibiliza a variável $fornecedor
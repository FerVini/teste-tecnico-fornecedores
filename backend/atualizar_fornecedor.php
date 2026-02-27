<?php
require 'config.php';
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['error' => 'Acesso inválido']);
    exit;
}

$id             = $_POST['id'] ?? null;
$cnpj           = $_POST['cnpj'] ?? null;
$razao_social   = $_POST['razao_social'] ?? null;
$nome_fantasia  = $_POST['nome_fantasia'] ?? null;
$email          = $_POST['email'] ?? null;
$telefone       = $_POST['telefone'] ?? null;
$endereco       = $_POST['endereco'] ?? null;
$estado         = $_POST['estado'] ?? null;
$municipio      = $_POST['municipio'] ?? null;

if (!$id || !$cnpj || !$razao_social || !$nome_fantasia || !$email) {
    echo json_encode(['error' => 'Campos obrigatórios não preenchidos']);
    exit;
}

$sql = "
    UPDATE fornecedores SET
        cnpj = :cnpj,
        razao_social = :razao_social,
        nome_fantasia = :nome_fantasia,
        email = :email,
        telefone = :telefone,
        endereco = :endereco,
        estado = :estado,
        municipio = :municipio
    WHERE id = :id
";

$stmt = $pdo->prepare($sql);

try {
    $stmt->execute([
        ':cnpj'          => $cnpj,
        ':razao_social'  => $razao_social,
        ':nome_fantasia' => $nome_fantasia,
        ':email'         => $email,
        ':telefone'      => $telefone,
        ':endereco'      => $endereco,
        ':estado'        => $estado,
        ':municipio'     => $municipio,
        ':id'            => $id
    ]);

    echo json_encode(['success' => 'Fornecedor atualizado com sucesso']);
} catch (PDOException $e) {
    if ($e->getCode() === '23000') {
        echo json_encode(['error' => 'Este CNPJ já está cadastrado']);
    } else {
        echo json_encode(['error' => 'Erro ao atualizar fornecedor']);
    }
}
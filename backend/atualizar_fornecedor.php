<?php
require 'config.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Método não permitido']);
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

// Validação de campos obrigatórios
if (!$id || !$cnpj || !$razao_social || !$nome_fantasia || !$email) {
    http_response_code(422);
    echo json_encode(['error' => 'Campos obrigatórios não preenchidos']);
    exit;
}

// Validação de CNPJ
if (!preg_match('/^\d{2}\.\d{3}\.\d{3}\/\d{4}-\d{2}$/', $cnpj)) {
    http_response_code(422);
    echo json_encode(['error' => 'CNPJ inválido']);
    exit;
}

// Validação de e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    echo json_encode(['error' => 'E-mail inválido']);
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
        http_response_code(409);
        echo json_encode(['error' => 'Este CNPJ já está cadastrado']);
    } else {
        http_response_code(500);
        echo json_encode(['error' => 'Erro ao atualizar fornecedor']);
    }
}
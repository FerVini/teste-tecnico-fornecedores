<?php
require 'config.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['error' => 'Acesso inválido']);
    exit;
}

$cnpj           = $_POST['cnpj'] ?? null;
$razao_social   = $_POST['razao_social'] ?? null;
$nome_fantasia  = $_POST['nome_fantasia'] ?? null;
$email          = $_POST['email'] ?? null;
$senha          = $_POST['register_password'] ?? null;
$senha_confirmacao = $_POST['register_password_verify'] ?? null;

if ($senha !== $senha_confirmacao) {
    echo json_encode(['error' => 'As senhas não conferem']);
    exit;
}

if (!$cnpj || !$razao_social || !$nome_fantasia || !$email || !$senha) {
    echo json_encode(['error' => 'Campos obrigatórios não preenchidos']);
    exit;
}

$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

$sql = "
    INSERT INTO fornecedores 
    (cnpj, razao_social, nome_fantasia, email, senha_hash)
    VALUES 
    (:cnpj, :razao_social, :nome_fantasia, :email, :senha_hash)
";

$stmt = $pdo->prepare($sql);

try {
    $stmt->execute([
        ':cnpj'          => $cnpj,
        ':razao_social'  => $razao_social,
        ':nome_fantasia' => $nome_fantasia,
        ':email'         => $email,
        ':senha_hash'    => $senha_hash
    ]);

    echo json_encode(['success' => 'Fornecedor cadastrado com sucesso']);
} catch (PDOException $e) {
    if ($e->getCode() === '23000') {
        echo json_encode(['error' => 'Este CNPJ já está cadastrado']);
    } else {
        echo json_encode(['error' => 'Erro ao cadastrar fornecedor']);
    }
}
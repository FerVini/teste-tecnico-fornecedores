<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die('Acesso inválido');
}

$cnpj           = $_POST['cnpj'] ?? null;
$razao_social   = $_POST['razao_social'] ?? null;
$nome_fantasia  = $_POST['nome_fantasia'] ?? null;
$email          = $_POST['email'] ?? null;
$senha          = $_POST['register_password'] ?? null;
$senha_confirmacao = $_POST['register_password_verify'] ?? null;

if ($senha !== $senha_confirmacao) {
    die('As senhas não conferem');
}

if (!$cnpj || !$razao_social || !$nome_fantasia || !$email || !$senha) {
    die('Campos obrigatórios não preenchidos');
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

    echo 'Fornecedor cadastrado com sucesso';
} catch (PDOException $e) {

    // erro de duplicidade (cnpj unique)
    if ($e->getCode() === '23000') {
        echo 'Este CNPJ já está cadastrado';
    } else {
        echo 'Erro ao cadastrar fornecedor';
    }
}

<?php
require 'config.php';

// Apenas POST é permitido
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Acesso inválido']);
    exit;
}

// Recebe dados
$cnpj           = $_POST['cnpj'] ?? null;
$razao_social   = $_POST['razao_social'] ?? null;
$nome_fantasia  = $_POST['nome_fantasia'] ?? null;
$email          = $_POST['email'] ?? null;
$senha          = $_POST['register_password'] ?? null;
$senha_confirmacao = $_POST['register_password_verify'] ?? null;

// Função para validar CNPJ
function validarCNPJ($cnpj) {
    $cnpj = preg_replace('/\D/', '', $cnpj);
    if (strlen($cnpj) != 14 || preg_match('/^(\d)\1+$/', $cnpj)) return false;

    $tamanho = 12;
    $numeros = substr($cnpj, 0, $tamanho);
    $digitos = substr($cnpj, $tamanho);
    $soma = 0;
    $pos = 5;

    for ($i = 0; $i < $tamanho; $i++) {
        $soma += $numeros[$i] * $pos;
        $pos = ($pos == 2) ? 9 : $pos - 1;
    }

    $resultado = ($soma % 11 < 2) ? 0 : 11 - ($soma % 11);
    if ($resultado != $digitos[0]) return false;

    $tamanho = 13;
    $numeros = substr($cnpj, 0, $tamanho);
    $soma = 0;
    $pos = 6;

    for ($i = 0; $i < $tamanho; $i++) {
        $soma += $numeros[$i] * $pos;
        $pos = ($pos == 2) ? 9 : $pos - 1;
    }

    $resultado = ($soma % 11 < 2) ? 0 : 11 - ($soma % 11);
    return $resultado == $digitos[1];
}

// Valida campos obrigatórios
if (!$cnpj || !$razao_social || !$nome_fantasia || !$email || !$senha || !$senha_confirmacao) {
    echo json_encode(['success' => false, 'message' => 'Todos os campos obrigatórios devem ser preenchidos']);
    exit;
}

// Valida senha
if ($senha !== $senha_confirmacao) {
    echo json_encode(['success' => false, 'message' => 'As senhas não conferem']);
    exit;
}

// Valida email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'E-mail inválido']);
    exit;
}

// Valida CNPJ
if (!validarCNPJ($cnpj)) {
    echo json_encode(['success' => false, 'message' => 'CNPJ inválido']);
    exit;
}

// Hash da senha
$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

// Inserção no banco
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

    echo json_encode(['success' => true, 'message' => 'Fornecedor cadastrado com sucesso']);
} catch (PDOException $e) {
    if ($e->getCode() === '23000') { // duplicidade CNPJ
        echo json_encode(['success' => false, 'message' => 'Este CNPJ já está cadastrado']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Erro ao cadastrar fornecedor']);
    }
}
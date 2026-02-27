<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die('Acesso inválido');
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
    die('Campos obrigatórios não preenchidos');
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

    echo 'Fornecedor atualizado com sucesso';
    echo '<br><a href="../public/fornecedores.php">Voltar para lista</a>';
} catch (PDOException $e) {
    if ($e->getCode() === '23000') {
        echo 'Este CNPJ já está cadastrado';
    } else {
        echo 'Erro ao atualizar fornecedor';
    }
}
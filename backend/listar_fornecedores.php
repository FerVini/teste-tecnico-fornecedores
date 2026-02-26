<?php
require 'config.php';

$sql = "
    SELECT 
        id,
        cnpj,
        razao_social,
        nome_fantasia,
        email,
        created_at
    FROM fornecedores
    ORDER BY created_at DESC
";

$stmt = $pdo->prepare($sql);
$stmt->execute();

$fornecedores = $stmt->fetchAll(PDO::FETCH_ASSOC);

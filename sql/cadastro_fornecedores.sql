-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gerado em: 27/02/2026
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro_fornecedores`
--

-- --------------------------------------------------------

-- Estrutura da tabela `fornecedores`
CREATE TABLE `fornecedores` (
  `id` int(11) NOT NULL,
  `cnpj` varchar(18) NOT NULL,
  `razao_social` varchar(255) NOT NULL,
  `nome_fantasia` varchar(255) NOT NULL,
  `inscricao_estadual` varchar(50) DEFAULT NULL,
  `icms` varchar(30) DEFAULT NULL,
  `situacao` varchar(30) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `numero` varchar(20) DEFAULT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `pais` varchar(50) DEFAULT 'Brasil',
  `estado` varchar(2) DEFAULT NULL,
  `municipio` varchar(100) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `fornecedor_tipos` varchar(100) DEFAULT NULL,
  `ramos_atuacao` text DEFAULT NULL,
  `nome_responsavel` varchar(150) DEFAULT NULL,
  `senha_hash` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Índices
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cnpj` (`cnpj`);

-- AUTO_INCREMENT
ALTER TABLE `fornecedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

-- --------------------------------------------------------
-- Dados de teste
INSERT INTO `fornecedores` 
(cnpj, razao_social, nome_fantasia, inscricao_estadual, icms, situacao, telefone, email, endereco, numero, complemento, bairro, pais, estado, municipio, cep, fornecedor_tipos, ramos_atuacao, nome_responsavel, senha_hash)
VALUES
('12.345.678/0001-90', 'Empresa Teste 1 LTDA', 'Empresa Teste 1', '123456789', 'Contribuinte', 'Ativa', '(11) 99999-1111', 'teste1@teste.com', 'Rua A', '100', 'Sala 1', 'Centro', 'Brasil', 'SP', 'São Paulo', '01000-000', 'Tipo 1', 'Ramo 1', 'João Silva', '$2y$10$e0NRrflSXJ8Pk4N0mYvRLe1GQXo13E7j/9t/3Gq1lk.b4T6f7Z2vi'),
('98.765.432/0001-10', 'Empresa Teste 2 LTDA', 'Empresa Teste 2', '987654321', 'Isento', 'Ativa', '(21) 98888-2222', 'teste2@teste.com', 'Rua B', '200', '', 'Bairro B', 'Brasil', 'RJ', 'Rio de Janeiro', '20000-000', 'Tipo 2', 'Ramo 2', 'Maria Souza', '$2y$10$e0NRrflSXJ8Pk4N0mYvRLe1GQXo13E7j/9t/3Gq1lk.b4T6f7Z2vi'),
('11.222.333/0001-44', 'Empresa Teste 3 LTDA', 'Empresa Teste 3', '112233445', 'Contribuinte', 'Ativa', '(31) 97777-3333', 'teste3@teste.com', 'Avenida C', '300', 'Sala 2', 'Bairro C', 'Brasil', 'MG', 'Belo Horizonte', '30000-000', 'Tipo 3', 'Ramo 3', 'Carlos Lima', '$2y$10$e0NRrflSXJ8Pk4N0mYvRLe1GQXo13E7j/9t/3Gq1lk.b4T6f7Z2vi'),
('22.333.444/0001-55', 'Empresa Teste 4 LTDA', 'Empresa Teste 4', '223344556', 'Isento', 'Ativa', '(41) 96666-4444', 'teste4@teste.com', 'Rua D', '400', '', 'Bairro D', 'Brasil', 'PR', 'Curitiba', '40000-000', 'Tipo 4', 'Ramo 4', 'Ana Pereira', '$2y$10$e0NRrflSXJ8Pk4N0mYvRLe1GQXo13E7j/9t/3Gq1lk.b4T6f7Z2vi'),
('33.444.555/0001-66', 'Empresa Teste 5 LTDA', 'Empresa Teste 5', '334455667', 'Contribuinte', 'Ativa', '(51) 95555-5555', 'teste5@teste.com', 'Avenida E', '500', 'Sala 3', 'Bairro E', 'Brasil', 'RS', 'Porto Alegre', '50000-000', 'Tipo 5', 'Ramo 5', 'Paulo Santos', '$2y$10$e0NRrflSXJ8Pk4N0mYvRLe1GQXo13E7j/9t/3Gq1lk.b4T6f7Z2vi');

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
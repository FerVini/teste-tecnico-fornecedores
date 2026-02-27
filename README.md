# 🏢 Sistema de Cadastro de Fornecedores

## 📄 Descrição do Projeto

O **Sistema de Cadastro de Fornecedores** é uma aplicação web full-stack desenvolvida para gerenciar fornecedores de forma **simples e eficiente**.  
O sistema permite **cadastrar, atualizar, listar e excluir fornecedores**, garantindo validação de dados, controle de acesso e integração com banco de dados.

Este projeto demonstra habilidades em **desenvolvimento front-end e back-end**, incluindo boas práticas de validação, manipulação de formulários, consumo de APIs e interação com **MySQL/MariaDB**.

---

## ⚙️ Funcionalidades

- Cadastro de fornecedores com validação completa (**CNPJ, e-mail, senhas**)
- Atualização de informações de fornecedores
- Exclusão segura de fornecedores
- Listagem de fornecedores com ordenação por data de criação
- Máscaras e validações de campos via JavaScript
- Layout responsivo e intuitivo com **Bootstrap 5**
- Formulários com feedback de erros para melhor experiência do usuário

---

## 🛠️ Tecnologias Utilizadas

### Front-end
- HTML5, CSS3
- JavaScript (Vanilla JS / jQuery)
- Bootstrap 5

### Back-end
- PHP 8
- PDO para comunicação segura com MySQL/MariaDB

### Banco de Dados
- MySQL / MariaDB
- Estrutura com tabela de fornecedores completa
- Validação e restrição de dados (chaves primárias, únicas e tipos)

---

## 🏗️ Estrutura do Projeto

- /assets/css → Estilos customizados e tema do projeto  
- /assets/js → Scripts para validação de formulários, CNPJ e manipulação de fornecedores  
- /backend → Arquivos PHP responsáveis pelo CRUD e conexão com banco de dados  
- /index.html → Página inicial  
- /fornecedores.php → Página principal de gerenciamento de fornecedores  
- /config.php → Configuração de conexão com banco de dados  

---

## 🚀 Como Executar o Projeto

1. Instale um servidor local com PHP e MySQL/MariaDB (ex: XAMPP, Laragon)  
2. Importe o banco de dados fornecido (`cadastro_fornecedores.sql`) no phpMyAdmin  
3. Configure as credenciais de banco de dados em `config.php`  
4. Coloque os arquivos do projeto na pasta do servidor local (ex: `htdocs` ou `www`)  
5. Acesse `http://localhost/seu-projeto` no navegador  

---

## 🎯 Exemplo de Uso

### Cadastro de fornecedor
- Validação automática do **CNPJ**  
- Campos obrigatórios verificados antes do envio do formulário  
- Alertas claros em caso de erro  

### Atualização de fornecedor
- Alteração de informações de contato, endereço e situação do fornecedor  

### Exclusão de fornecedor
- Confirmação antes da exclusão  
- Remoção imediata da tabela na interface  

---

## 💡 Diferenciais e Boas Práticas

- Uso de **Prepared Statements com PDO** para prevenir SQL Injection  
- Validação de dados no **front-end e back-end**  
- Mensagens de erro claras e feedback visual em formulários  
- Máscaras dinâmicas em campos sensíveis (CNPJ, telefone)  
- Estrutura modular de arquivos JS e PHP para manutenção fácil  
- Preparado para integração com **APIs externas** (ex: consulta de CNPJs)  

---

## 📈 Possíveis Evoluções

- Implementação de login e controle de acesso completo  
- Filtros avançados na listagem de fornecedores  
- Exportação de dados em **CSV ou PDF**  
- Integração com APIs de validação de CNPJs em tempo real  
- Adição de testes automatizados (unitários e de integração)  

---

## 👤 Autor

**Fernando Vinicius**  
- GitHub: [https://github.com/FerVini](https://github.com/FerVini)  
- LinkedIn: [https://www.linkedin.com/in/fervini/](https://www.linkedin.com/in/fervini/)
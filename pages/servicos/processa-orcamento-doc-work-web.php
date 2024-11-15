<?php
// Inclui o arquivo de conexão com o banco de dados
require '../shortener/doc-work-web-db-connection.php';

// Verifica se o formulário foi enviado com o método POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Sanitização e validação dos dados do formulário
    $cnpj_cpf = filter_var($_POST['id-empresa'], FILTER_SANITIZE_SPECIAL_CHARS); // CNPJ/CPF deve ser verificado por formato (número ou máscara)
    $nome_fantasia = filter_var($_POST['nome-empresa'],FILTER_SANITIZE_SPECIAL_CHARS);
    $segmento = filter_var($_POST['segmento'], FILTER_SANITIZE_SPECIAL_CHARS);
    $endereco = filter_var($_POST['endereco'], FILTER_SANITIZE_SPECIAL_CHARS);
    $estado = filter_var($_POST['estado'], FILTER_SANITIZE_SPECIAL_CHARS);
    $cidade = filter_var($_POST['cidade'], FILTER_SANITIZE_SPECIAL_CHARS);
    $telefone1 = filter_var($_POST['telefone1'], FILTER_SANITIZE_SPECIAL_CHARS);
    $telefone2 = !empty($_POST['telefone2']) ? filter_var($_POST['telefone2'], FILTER_SANITIZE_SPECIAL_CHARS) : null;
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL); // Validação de formato de e-mail
    $rede_social = !empty($_POST['rede-social']) ? filter_var($_POST['rede-social'], FILTER_SANITIZE_URL) : null; // Valida como URL se fornecido
    $detalhes_projeto = htmlspecialchars($_POST['detalhes-projeto'], ENT_QUOTES, 'UTF-8'); // Previne XSS com htmlspecialchars

    // Verifica campos obrigatórios
    if (!$cnpj_cpf || !$nome_fantasia || !$segmento || !$endereco || !$estado || !$cidade || !$telefone1 || !$email || !$detalhes_projeto) {
        die("Por favor, preencha todos os campos obrigatórios corretamente.");
    }

    // Opcional: Regex para validar CPF/CNPJ, telefones e campos específicos
    if (!preg_match('/^[0-9]{11}$|^[0-9]{14}$/', $cnpj_cpf)) { // Exemplo de validação básica de CPF/CNPJ
        die("CPF/CNPJ inválido. Por favor, use somente números (11 para CPF, 14 para CNPJ).");
    }
    if (!preg_match('/^\+?[0-9\s\-\(\)]{10,20}$/', $telefone1) || ($telefone2 && !preg_match('/^\+?[0-9\s\-\(\)]{10,20}$/', $telefone2))) {
        die("Formato de telefone inválido.");
    }

    // Prepara a consulta SQL para inserir os dados no banco de dados
    $sql = "INSERT INTO solicitacoes_orcamento (cnpj_cpf, nome_fantasia, segmento, endereco, estado, cidade, telefone1, telefone2, email, rede_social, detalhes_projeto)
            VALUES (:cnpj_cpf, :nome_fantasia, :segmento, :endereco, :estado, :cidade, :telefone1, :telefone2, :email, :rede_social, :detalhes_projeto)";

    $stmt = $pdo->prepare($sql);

    // Vincula os parâmetros à consulta para evitar injeção de SQL
    $stmt->bindParam(':cnpj_cpf', $cnpj_cpf);
    $stmt->bindParam(':nome_fantasia', $nome_fantasia);
    $stmt->bindParam(':segmento', $segmento);
    $stmt->bindParam(':endereco', $endereco);
    $stmt->bindParam(':estado', $estado);
    $stmt->bindParam(':cidade', $cidade);
    $stmt->bindParam(':telefone1', $telefone1);
    $stmt->bindParam(':telefone2', $telefone2, $telefone2 ? PDO::PARAM_STR : PDO::PARAM_NULL);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':rede_social', $rede_social, $rede_social ? PDO::PARAM_STR : PDO::PARAM_NULL);
    $stmt->bindParam(':detalhes_projeto', $detalhes_projeto);

    // Executa a consulta e verifica se a inserção foi bem-sucedida
    if ($stmt->execute()) {
        echo "Solicitação de orçamento enviada com sucesso!";
    } else {
        echo "Erro ao enviar a solicitação de orçamento. Tente novamente.";
    }
} else {
    // Redireciona para o formulário se o acesso ao arquivo for direto
    header("Location: form-solicitacao.html", true, 302);
    exit;
}
?>

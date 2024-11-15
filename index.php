<?php
require './pages/shortener/doc-work-web-db-connection.php'; // Inclui o arquivo de conexão com o banco de dados

// Verifica se o parâmetro 'code' foi passado na URL
if (isset($_GET['code']) && !empty($_GET['code'])) {
    $code = $_GET['code'];

    // Consulta o banco de dados para buscar a URL original associada ao código
    $stmt = $pdo->prepare("SELECT original_url FROM short_urls WHERE code = :code LIMIT 1");
    $stmt->execute(['code' => $code]);
    $url = $stmt->fetchColumn();

    if ($url) {
        // Redireciona para a URL original
        header("Location: $url");
        exit;
    } else {
        // Código não encontrado; exibe uma mensagem de erro
        echo "URL curta não encontrada!";
        exit;
    }
} else {
    // Inclui o conteúdo da página de home se nenhum código foi passado
    include './home-page.php';
}
?>
s
<?php
require '../shortener/doc-work-web-db-connection.php'; // Inclui a conexão com o banco de dados

/**
 * Função para gerar um código curto único
 */
function generateCode($length = 6) {
    return substr(bin2hex(random_bytes($length)), 0, $length);
}

/**
 * Função para criar ou recuperar uma URL curta
 */
function getOrCreateShortUrl($originalUrl) {
    global $pdo;

    // Verifica se a URL original já existe no banco de dados
    $stmt = $pdo->prepare("SELECT code FROM short_urls WHERE original_url = :original_url LIMIT 1");
    $stmt->execute(['original_url' => $originalUrl]);
    $code = $stmt->fetchColumn();

    // Se a URL já existe, retorna o código
    if ($code) {
        return $code;
    }

    // Caso contrário, cria um novo código único
    $code = generateCode();

    // Garante que o código é único
    $stmt = $pdo->prepare("SELECT id FROM short_urls WHERE code = :code");
    while ($stmt->execute(['code' => $code]) && $stmt->rowCount() > 0) {
        $code = generateCode();
    }

    // Insere o novo código e a URL original no banco de dados
    $stmt = $pdo->prepare("INSERT INTO short_urls (code, original_url) VALUES (:code, :original_url)");
    $stmt->execute(['code' => $code, 'original_url' => $originalUrl]);

    return $code;
}

// Captura a URL original enviada via POST (automatização)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['url'])) {
    $originalUrl = $_POST['url'];
    $code = getOrCreateShortUrl($originalUrl);
    
    // URL curta gerada com o domínio correto
    $shortUrl = "http://matheusdiamantino.com/$code";
    echo "URL curta gerada: <a href='$shortUrl'>$shortUrl</a>";
}
?>

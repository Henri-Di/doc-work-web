<?php
// Configurações do banco de dados
$host = '127.0.0.1';           // Nome do host do banco de dados
$dbname = 'portfolio';         // Nome do banco de dados
$user = 'root';         // Usuário do banco de dados
$pass = '';           // Senha do banco de dados

try {
    // Cria uma nova instância de PDO para a conexão com o MySQL
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
    
    // Configura o modo de erro do PDO para lançar exceções em caso de erro
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Configura o modo de busca padrão como associativo para facilitar a leitura dos dados
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Exibe uma mensagem de sucesso caso a conexão seja estabelecida (opcional)
    // echo "Conexão com o banco de dados estabelecida com sucesso!";
} catch (PDOException $e) {
    // Em caso de erro, exibe a mensagem e termina o script
    die("Erro de conexão com o banco de dados: " . $e->getMessage());
}
?>

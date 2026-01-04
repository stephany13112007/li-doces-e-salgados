<?php
// 1. Definir os detalhes da conexão
$host = 'localhost'; // ou o endereço do seu servidor
$port = '5432'; // porta padrão do PostgreSQL
$dbname = 'li_doces_e_salgados'; // nome do seu base de dados
$user = 'postgres'; // nome do seu utilizador
$password = '1311'; // password do seu utilizador 

// 2. Construir a string de conexão
$connectionString = "host=$host port=$port dbname=$dbname user=$user password=$password";

// 3. Tentar conectar a base de dados
$pgConnection = pg_connect($connectionString);

// 4. Verificar se a conexão foi bem-sucedida
if (!$pgConnection) {
    // Se não conseguir conectar, exibe uma mensagem de erro e encerra o script
    die("Não foi possível se conectar a base de dados.");
} else {
    // Se conectar com sucesso, exibe uma mensagem (opcional)
    echo "Conectado com sucesso!";
    
    // A variável $pgConnection pode ser usada agora para executar queries
    // Exemplo: $result = pg_query($pgConnection, "SELECT * FROM sua_tabela");
    
    // 5. (Opcional) Fechar a conexão ao final do script
    // pg_close($pgConnection); 
}
?>

<?php
$servername = "banco";
$username = "root";
$password = "senha_da_nasa";
$dbname = "lamp";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenção dos dados do formulário
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    // Inserção dos dados na tabela
    $sql = "INSERT INTO usuarios (login, senha) VALUES ('$login', '$senha')";
    if ($conn->query($sql) === TRUE) {
        echo "Usuário criado com sucesso.";
    } else {
        echo "Erro ao criar usuário: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Criar Usuário</title>
</head>

<body>
    <h2>Criar Usuário</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="login">Login:</label>
        <input type="text" name="login" required><br><br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br><br>
        <input type="submit" value="Criar">
    </form>
    <h2><a href="create.php"> Cadastrar </a></h2>
    <h2><a href="read.php">Listar</a></h2>
    <h2><a href="update.php">Atualizar</a></h2>
    <h2><a href="delete.php">Apagar</a></h2>
</body>

</html>
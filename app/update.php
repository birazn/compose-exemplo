<?php
$servername = "banco";
$username = "user_lamp";
$password = "lamp_pass";
$dbname = "lamp";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenção dos dados do formulário
    $id = $_POST["id"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    // Atualização dos dados na tabela
    $sql = "UPDATE usuarios SET login='$login', senha='$senha' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Usuário atualizado com sucesso.";
    } else {
        echo "Erro ao atualizar usuário: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Atualizar Usuário</title>
</head>

<body>
    <h2>Atualizar Usuário</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="id">ID do Usuário:</label>
        <input type="text" name="id" required><br><br>
        <label for="login">Novo Login:</label>
        <input type="text" name="login" required><br><br>
        <label for="senha">Nova Senha:</label>
        <input type="password" name="senha" required><br><br>
        <input type="submit" value="Atualizar">
    </form>
    <h2><a href="create.php"> Cadastrar </a></h2>
    <h2><a href="read.php">Listar</a></h2>
    <h2><a href="update.php">Atualizar</a></h2>
    <h2><a href="delete.php">Apagar</a></h2>
</body>

</html>
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
    // Obtenção do ID do usuário a ser excluído
    $id = $_POST["id"];

    // Exclusão do usuário
    $sql = "DELETE FROM usuarios WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Usuário excluído com sucesso.";
    } else {
        echo "Erro ao excluir usuário: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Excluir Usuário</title>
</head>

<body>
    <h2>Excluir Usuário</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="id">ID do Usuário:</label>
        <input type="text" name="id" required><br><br>
        <input type="submit" value="Excluir">
    </form>
    <h2><a href="create.php"> Cadastrar </a></h2>
    <h2><a href="read.php">Listar</a></h2>
    <h2><a href="update.php">Atualizar</a></h2>
    <h2><a href="delete.php">Apagar</a></h2>
</body>

</html>
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

// Seleção de todos os usuários
$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Login: " . $row["login"] . "<br>";
        echo "Senha: " . $row["senha"] . "<br><br>";
    }
} else {
    echo "Nenhum usuário encontrado.";
}

$conn->close();
?>

<h2><a href="create.php"> Cadastrar </a></h2>
<h2><a href="read.php">Listar</a></h2>
<h2><a href="update.php">Atualizar</a></h2>
<h2><a href="delete.php">Apagar</a></h2>
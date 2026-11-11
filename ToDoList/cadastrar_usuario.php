<?php
require 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome  = $_POST['nome'];
    $email = $_POST['email'];
    $hash  = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $adm = isset($_POST['adm']) ? 1 : 0;

    $stmt = $conn->prepare(
        "INSERT INTO usuarios (nome, email, senha, adm) VALUES (?, ?, ?, ?)"
    );
    $stmt->execute([$nome, $email, $hash, $adm]);

    header("Location: login.php");
    exit;
}
?>
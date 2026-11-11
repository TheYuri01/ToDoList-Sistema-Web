<?php
include "conexao.php";

// Pega os dados enviados pelo formulário (POST)
$titulo  = $_POST['titulo'];
$favorito = $_POST['favorito'] ?? 0; // Se não estiver marcado, será 0
$cor = $_POST['cor'] ?? '#ffffff';

// Prepared Statement: o ? é um placeholder seguro
$sql  = "INSERT INTO quadros (titulo, favorito, cor_quadro) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->execute([$titulo, $favorito, $cor]);

// Redireciona para a listagem
header("Location: index.php");
exit;
?>
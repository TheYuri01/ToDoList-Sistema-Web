<?php
include "conexao.php"; // traz a variável $conn

// Faz o SELECT e já transforma em array
$sql    = "SELECT * FROM quadros ORDER BY id DESC";
$quadros = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CRUD - Quadros</title>
</head>
<body>

<h1>Cadastro de Quadros</h1>
<a href="novo.php">Cadastrar novo quadro</a>
<hr>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Titulo</th>
        <th>Favorito</th>
    </tr>

    <?php foreach ($quadros as $quadro): ?>
    <tr>
        <td><?= $quadro['id'] ?></td>
        <td><?= htmlspecialchars($quadro['titulo'])  ?></td>
        <td><?= htmlspecialchars($quadro['favorito']) ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
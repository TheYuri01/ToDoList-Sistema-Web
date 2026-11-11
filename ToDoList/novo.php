<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Novo Quadro</title>
</head>
<body>

<h1>Novo Quadro</h1>

<!-- action = para onde o formulário envia os dados -->
<!-- method = POST é mais seguro que GET para dados -->
<form action="salvar.php" method="POST">

    <label>Título:</label><br>
    <input type="text" name="titulo" required>

    <br><br>

    <label>Favorito:</label><br>
    <input type="checkbox" name="favorito" value="1">

    <label>Cor do Quadro:</label><br>
    <input type="color" name="cor" value="#ffffff">

    <br><br>

    <button type="submit">Salvar</button>
    <a href="index.php">Voltar</a>

</form>
</body>
</html>
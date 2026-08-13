<?php
// Você pode inserir lógica PHP aqui se necessário
?>
<!DOCTYPEdoctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- <script src="sketch.js"></script> -->
    <title>Gerar TXT com PHP</title>
</head>
<body>
    <h1>Conteúdo do Arquivo:</h1>

    <form action="cria_usuario.php" method="POST">

        <label for="nome">Nome Completo:</label><br>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
        <br><br>

        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" placeholder="seuemail@exemplo.com" required>
        <br><br>

        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha" minlength="6" required>
        <br><br>

        <label for="nascimento">Data de Nascimento:</label><br>
        <input type="date" id="nascimento" name="nascimento">
        <br><br>

        <label>Gênero:</label>
        <br>
        <input type="radio" id="masc" name="genero" value="masculino">
        <label for="masc">Masculino</label>
        <br>

        <input type="radio" id="fem" name="genero" value="feminino">
        <label for="fem">Feminino</label>
        <br><br>

        <label for="observacao">Observação:</label><br>
        <textarea id="observacao" name="observacao" rows="4" cols="30">Digite um Texto de exemplo e salve ...</textarea>
        <br><br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
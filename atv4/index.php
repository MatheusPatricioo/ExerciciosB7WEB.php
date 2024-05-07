<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio Formulario</title>
</head>
<body>
    <?php
    session_start();
    require('header.php'); // Inclui o arquivo 'header.php', que pode conter configurações ou outros códigos necessários
    ?>
    
    <div>
        <h2>Qual seu nome?</h2>

        <form method="post" action="recebedor.php"></form>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <input type="submit" value="Enviar">

    </div>
</body>
</html>
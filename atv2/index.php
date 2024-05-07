<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio Formulario</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

    <?php
    session_start();
    require('header.php'); // Inclui o arquivo 'header.php', que pode conter configurações ou outros códigos necessários

    if(isset($_SESSION['aviso'])) {
        echo $_SESSION['aviso'];
        $_SESSION['aviso'] = '';
    }
    ?>
    
    <div class="container">
        <h2>formulario</h2>

        <form method="POST" action="recebedor.php">
        <label for="nome">Qual seu nome?</label>
        <input type="text" id="nome" name="nome" required>

        <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>
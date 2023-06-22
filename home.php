<?php 
    session_start();
    if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)) {
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('Location: formulario.php');
    }
    $logado = $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleteste2.css">
    <title>YourFilmList</title>
</head>
<body>
    <header>
        <a href= 'home.php'>
            <h1>YourFilmList</h1>
        </a>
    <div class="Nlogado">
    <?php 
        echo "<h2>Olá, <u>$logado</u></h2>";
    ?>
    </div>
        <form class="pesquisa1" id="form">
            <input type="text" name="pesquisa" id="barra" placeholder="Procure o filme aqui" class="barra">
        </form>
        <nav class="navegacao">
            <button class="btnLogin-popup" onclick="window.location.href = 'sair.php';">Logout</button>
        </nav>
    </header>

    <main id="main"></main>

    <script src="script.js"></script>
</body>
</html>
<?php 

    if(isset($_POST['submit'])) {

        include_once('config.php');

        $nome = $_POST['nome'];
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,usuario,senha)
        VALUES ('$nome','$usuario','$senha')");

    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleteste3.css">
    <title>YourFilmList</title>
</head>
<body>
    <header>
        <h1>YourFilmList</h1>
        <nav class="navegacao">
            <button class="btnLogin-popup">Login</button>
        </nav>
    </header>
    <div class="wrapper">
        <span class="icon-close">
            <ion-icon name="close"></ion-icon>
        </span>

        <div class="form-box login">
            <h2>Login</h2>
            <form action="testLogin.php" method="POST">
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person-sharp"></ion-icon>
                    </span>
                    <input type="text" name="usuario" required>
                    <label>Usuario</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" name="senha" required>
                    <label>Senha</label>
                </div>
                <button type="submit" class="btn" name="submit">Login</button>
                <div class="login-register">
                    <p>Não tem uma conta? <a href="#" class="register-link">Cadastre aqui!</a></p>
                </div>
            </form>
        </div>
        <div class="form-box register">
            <h2>Cadastro</h2>
            <form action="formulario.php" method="POST">
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person-sharp"></ion-icon>
                    </span>
                    <input type="text" name="nome" required>
                    <label>Nome</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person-sharp"></ion-icon>
                    </span>
                    <input type="text" name="usuario" required>
                    <label>Usuario</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" name="senha" required>
                    <label>Senha</label>
                </div>
            
                <button type="submit" class="btn btnCadastro" name="submit">Cadastre-se</button>
                <div class="login-register">
                    <p>já tem uma conta? <a href="#" class="login-link">Faça o login!</a></p>
                </div>
            </form>
        </div>
    </div>
    <script src="script2.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
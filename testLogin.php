<?php 
session_start();

    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha'])) {
        include_once('config.php');
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        /*print_r('Usuario ' . $usuario);
        print_r('<br>');
        print_r('senha ' . $senha);*/

        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' and senha = '$senha'";
        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1) {
            unset($_SESSION['usuario']);
            unset($_SESSION['senha']);
            header('Location: formulario.php');
        } else {
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;
            header('Location: home.php');
        }

    } else {
        header('Location: formulario.php');
    }


?>
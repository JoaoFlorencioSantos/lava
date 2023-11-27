<?php
session_start();

// print_r($_REQUEST);

if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha'])) 
{
    include_once('config.php');
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // print_r('Cpf: ' . $cpf);
    // print_r('<br>');
    // print_r('Senha: ' . $senha);

    $sql = "SELECT * FROM cliente WHERE usuario = '$usuario' and senha = '$senha'";

    $result = $connect->query($sql);

    // print_r($sql);
    // print_r($result);

    if(mysqli_num_rows($result) < 1)
    {
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('Location: index.php');
    }
    else
    {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;
        header('Location: agenda.php');
    }

}
else 
{
    header('Location: index.php');
}

?>
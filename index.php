<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
    <link rel="stylesheet" href="css/estilo3.css">
</head>

<body>
    <div id="intro">
        <h1>Posto de Lavagem 3 Irmãos</h1>
        <h2>Escolha Uma de Nossas Lavagens Especiais</h2>
        <h3>Prata</h3>
        <h3>Gold</h3>
        <h3>Platinum</h3>
    </div>

    <div id="login">
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
            <input type="text" name="usuario" placeholder="Usuário">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Acessar">
        </form>
    </div>

    <div id="box">
        <a href="cadastro.php">Cadastre-se</a>
        <a href="agenda.php">Agendamento</a>
    </div>

</body>

</html>
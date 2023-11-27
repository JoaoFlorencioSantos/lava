<?php
session_start();
// print_r($_SESSION);
include_once('config.php');
if ((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('Location: index.php');
}
$logado = $_SESSION['usuario'];

$sql = "SELECT * FROM cliente ORDER BY id DESC";

$result = $connect->query($sql);

// print_r($result);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo4.css">
    <title>Área Agendamento</title>
</head>

<body>
    <br>

    <?php
    echo "<h1>Bem Vindo $logado</h1>"
        ?>

    <div id="sair">
        <a href="sair.php" class="btn btn-danger">Sair</a>
    </div>

    <div id="tabela">
        <table>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Senha</th>
                    <th scope="col">Usuário</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Placa</th>
                    <th scope="col">Tipo Lavagem</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>

                <?php
                while ($user_data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $user_data['id'] . "</td>";
                    echo "<td>" . $user_data['nome'] . "</td>";
                    echo "<td>" . $user_data['senha'] . "</td>";
                    echo "<td>" . $user_data['usuario'] . "</td>";
                    echo "<td>" . $user_data['modelo'] . "</td>";
                    echo "<td>" . $user_data['placa'] . "</td>";
                    echo "<td>" . $user_data['tipolavagem'] . "</td>";
                    echo "<td>Editar</td>";
                }

                ?>

            </tbody>
        </table>
    </div>
</body>

</html>
<?php

if (isset($_POST['submit'])) 
{
	include_once('config.php');

	$nome = $_POST['nome'];
	$senha = $_POST['senha'];
	$usuario = $_POST['usuario'];
	$modelo = $_POST['modelo'];
	$placa = $_POST['placa'];
	$tipolavagem = $_POST['tipolavagem'];

	$result = mysqli_query($connect, "INSERT INTO cliente(nome,senha,usuario,modelo,placa,tipolavagem) 
		VALUES ('$nome','$senha','$usuario','$modelo','$placa','$tipolavagem')");

	header('Location: agenda.php');
}

?>

<!DOCTYPE html>
<html>

<head>
	<title>FASTWASH - SEU LAVA RÁPIDO, REALMENTE RÁPIDO</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo1.css">
</head>

<body>

	<div id="area-cabecalho">

		<div id="area-logo">
			<h1>FAST<span class="branco">WASH</span></h1>
		</div>
		<div id="area-menu">
			<a href="index.php">Início</a>
			<a href="contato.html">Contato</a>
		</div>

	</div>

	<div id="area-principal">

		<div id="area-postagens">

			<!-- abertura postagem -->
			<div class="postagem">
				<h2>Como Trabalhamos</h2>
				<span class="data-postagem">Postado 03 de março 2023</span>
				<img width="600px" src="imagens/lavalava.jpg">
				<p>
					Crie seu cadastro, possibilitando o agendamento na melhor e mais antiga empresa de lavajato da
					região.
					Há mais de 8 anos fazendo historia, contruindo um bom relacionamento com o cliente, então o que está
					faltando pra ser um dos nossos clientes?
					Não perca tempo, nem tenha constrangimento na concorrencia, venha pra melhor empresa do ramo ao
					atendimento veicular FASTWASH.
				</p>
				<a href="">Leia mais</a>
			</div>


	<div id="box1">
		<form action="cadastro.php" method="POST">
			<fieldset>
				<legend><b>Cadastre-se Aqui</b></legend>
				<br>
				<div class="inputBox">
					<input type="text" name="nome" id="nome" class="inputUser" required>
					<label for="nome" class="labelInput">Nome Completo</label>
				</div>
				<br><br>
				<div class="inputBox">
					<input type="password" name="senha" id="senha" class="inputUser" required>
					<label for="senha" class="labelInput">Senha</label>
				</div>
				<br><br>
				<div class="inputBox">
					<input type="text" name="usuario" id="usuario" class="inputUser" required>
					<label for="usuario" class="labelInput">Usuário</label>
				</div>
				<br><br>
				<div class="inputBox">
					<input type="text" name="modelo" id="modelo" class="inputUser" required>
					<label for="modelo" class="labelInput">Modelo/Marca</label>
				</div>
				<br><br>
				<div class="inputBox">
					<input type="text" name="placa" id="placa" class="inputUser" required>
					<label for="placa" class="labelInput">Placa Atual</label>
				</div>
				<br><br>
				<p>Tipo de lavagem</p>
				<div class="inputBox">
					<input type="radio" id="prata" name="tipolavagem" value="prata" required>
					<label for="prata">Prata</label>
					<input type="radio" id="gold" name="tipolavagem" value="gold" required>
					<label for="gold">Gold</label>
					<input type="radio" id="platinum" name="tipolavagem" value="platinum" required>
					<label for="platinum">Platinum</label>
				</div>
				<br><br>
				<input type="submit" name="submit" id="submit">
			</fieldset>
		</form>
	</div>




	<div id="rodape">
		Todos os direitos reservados
	</div>



</body>

</html>
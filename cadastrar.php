<?php 
if(isset($_POST['nome'])){
	require "func.php";
	gravar_tarefa($conexao, $_POST);
	header("Location: index.php"); //redireciona para index.php
} ?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de tarefa</title>
</head>
<body>
	<h1>Cadastrar nova tarefa</h1>
	<form action="cadastrar.php" method="post">
		<label>
			Nome:
			<input type="text" name="nome">
		</label>
		<label>
			Descrição:
			<textarea name="descricao"></textarea>
		</label>
		<label>
			Prazo:
			<input type="date" name="prazo">
		</label>
		<label>
			<br>Prioridade:<br>
			<input type="radio" name="prioridade" value="1" checked>Baixa <br>
			<input type="radio" name="prioridade" value="2">Média <br>
			<input type="radio" name="prioridade" value="3">Alta <br>
		</label>
		<input type="checkbox" name="concluida" value=1>Concluída
		<input type="submit" name="Enviar">
	</form>
</body>
</html>
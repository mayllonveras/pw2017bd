<?php
	require('func.php');
	if(isset($_POST['nome'])){
		atualizar_tarefa($conexao, $_POST);
		header("Location: index.php");
	}
	$t = buscar_tarefa($conexao, $_GET['id']);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Atualizar </title>
</head>
<body>
<h1>Atualizar tarefa</h1>
	<form action="atualizar.php" method="post">
		<input type="hidden" name="id" value="<?= $t['id']?>">
		<label>
			Nome:
			<input type="text" name="nome" value="<?= $t['nome']?>">
		</label>
		<label>
			Descrição:
			<textarea name="descricao"> <?= $t['descricao']?></textarea>
		</label>
		<label>
			Prazo:
			<input type="date" name="prazo" value="<?= $t['prazo']?>">
		</label>
		<label>
			<br>Prioridade:<br>
			<input type="radio" name="prioridade" value="1" <?= $t['prioridade'] == 1 ? "checked" : "" ?>>Baixa <br>
			<input type="radio" name="prioridade" value="2" <?= $t['prioridade'] == 2 ? "checked" : "" ?>>Média <br>
			<input type="radio" name="prioridade" value="3" <?= $t['prioridade'] == 3 ? "checked" : "" ?>>Alta <br>
		</label>
		<input type="checkbox" name="concluida" value=1 <?= $t['concluida'] == 1 ? "checked" : "" ?>>Concluída
		<input type="submit" name="Enviar">
	</form>
</body>
</html>
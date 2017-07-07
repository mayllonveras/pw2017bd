<?php 
require "func.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Tarefas</title>
</head>
<body>
	<h1>Gerenciamento de Tarefas</h1>
	<h3>Menu</h3>
	<ul>
		<li><a href="cadastrar.php">Cadastrar Tarefa</a></li>
	</ul>
	<h2>Tarefas cadastradas</h2>
	<?php include "tabelaTarefas.php"; ?>
</body>
</html>
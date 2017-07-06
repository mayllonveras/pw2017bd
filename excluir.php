<?php
require "func.php";
if(isset($_GET['id'])){
	excluir_tarefa($conexao, $_GET['id']);
	header("Location: index.php");
}
else
	echo "Erro ao excluir a tarefa."

?>
<?php
require "conn.php";
function buscar_tarefas($conexao){
	$sqlBusca = 'SELECT * FROM tarefas';
	$resultado = mysqli_query($conexao, $sqlBusca);
 	
 	$tarefas = [];

	while ($tarefa = mysqli_fetch_assoc($resultado)) {
 		$tarefas[] = $tarefa;
 	}
 	return $tarefas;
 }

function gravar_tarefa($conexao, $t){
	if(!isset($t['concluida'])) $t['concluida'] = 0;
	$sqlGravar = "INSERT INTO tarefas 
					( nome, descricao, prazo, prioridade, concluida)
				VALUES (
				'$t[nome]', 
				'$t[descricao]', 
				'$t[prazo]', 
				'$t[prioridade]', 
				'$t[concluida]')";

	mysqli_query($conexao, $sqlGravar) 
		or die(mysqli_error($conexao));
}

function excluir_tarefa($conexao, $id){
	$sqlExcluir = "	DELETE FROM tarefas 
					WHERE id = '$id'";

	mysqli_query($conexao, $sqlExcluir) 
		or die(mysqli_error($conexao));
}
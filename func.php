<?php
require "conn.php";
function listar_tarefas($conexao){
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

function buscar_tarefa($conexao, $id){
	$sqlBusca = "SELECT * FROM tarefas WHERE id = '$id'";
	$resultado = mysqli_query($conexao, $sqlBusca);
 	
 	$tarefa = mysqli_fetch_assoc($resultado);
 	
 	return $tarefa;
}

function atualizar_tarefa($conexao, $t){
	$sqlAtualizar = "UPDATE tarefas SET
						nome = '$t[nome]',
						descricao = '$t[descricao]',
						prazo = '$t[prazo]',
						prioridade = '$t[prioridade]',
						concluida = '$t[concluida]'
					WHERE id = '$t[id]'";
	mysqli_query($conexao, $sqlAtualizar) 
		or die(mysqli_error($conexao));
}
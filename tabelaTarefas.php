<?php 
$tarefas = listar_tarefas($conexao);
if ($tarefas) { ?>
	<table border=1>
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Descrição</th>
			<th>Prazo</th>
			<th>Prioridade</th>
			<th>Concluída</th>
			<th>Ações</th>
		</tr>
		<?php foreach ($tarefas as $t): ?>
			<tr>
				<td><?= $t['id'] ?></td>
				<td><?= $t['nome'] ?></td>
				<td><?= $t['descricao'] ?></td>
				<td><?= $t['prazo'] ?></td>
				<td><?= $t['prioridade'] ?></td>
				<td><?= $t['concluida'] ?></td>
				<td><a href="excluir.php?id=<?= $t['id'] ?>">Excluir</a> | <a href="atualizar.php?id=<?= $t['id'] ?>">Atualizar</a></td>
			</tr>
		<?php endforeach ?>
	</table>
<?php } else {
	echo "Nenhuma tarefa cadastrada.";
}
?>
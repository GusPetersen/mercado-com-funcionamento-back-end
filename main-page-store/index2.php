
<?php

	include_once("templates/header.php");

?>
<?php $tipo = 'clientes'; ?>
	<div class='container'>
		
		<?php if(isset($printMsg) && $printMsg != ''): ?>
			<p id='msg'><?= $printMsg ?></p>
		<?php endif; ?>

		<h1 id='main-title'> clientes</h1>
		

		<?php if(count($produtos) > 0): ?>
			<table class='table' id='contacts-table'>
				<thead>
					<tr>
						<th scope='col'>#</th>
						<th scope='col'>Nome</th>
						<th scope='col'>Telefone</th>
						<th scope='col'></th>
					</tr>
				</thead>
				<tbody>
					
				<?php foreach ($produtos as $padaria):?>
 					<?php if ($padaria['prodtyp'] == 1): ?>
						<tr>
						
						<td scope="row" class="col-id"><?= $padaria["id"] ?></td>
						<td scope="row"><?= $padaria["name"] ?></td>
						<td scope="row"><?= $padaria["price"] ?></td>

							<td class="actions">
								<a href="<?= $BASE_URL ?>show.php?id=<?= $padaria["id"] ?>"><i class="fas fa-eye check-icon"></i></a>
								<a href="<?= $BASE_URL ?>edit.php?id=<?= $padaria["id"] ?>"><i class="fas fa-edit edit-icon"></i></a>
								
							<form class="delete-form" action="<?= $BASE_URL ?>/config/process.php" method="POST">
								<input type="hidden" name="type" value="delete">
								<input type="hidden" name="id" value="<?= $padaria["id"] ?>">
								<button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"> </i></button>
							</form>

							</td>

					</tr>
					<?php endif;?>		
					<?php endforeach;?>
				</tbody>
			</table>

		<?php else: ?>
			<p id='empty-list-text'> Ainda não há contatos cadastrados na sua Agenda, <a href='<?= $BASE_URL ?>create.php'> Clique aqui para adicionar</a></p>
		<?php endif; ?>
	</div>

<?php

	include_once("templates/footer.php");
?>





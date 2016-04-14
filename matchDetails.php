<!DOCTYPE html>
<html lang="en">

    <?php include 'fragment/header.php'; ?>
	<body>
		<?php include 'fragment/menu.php'; ?>
		<div class="container row">
			<h3>Islande VS Belgique</h3>

			<table>
				<thead>
					<th data-field="id">Islande</th>
					<th data-field="id"></th>
					<th data-field="id">Belgique</th>
				</thead>
				<tbody>
					<tr>
						<td><input class="with-gap" name="group1" type="radio" id="test3"></td>
						<td><input type="radio" value="Match Nul"></td>
						<td><input type="radio" value="Belgique"></td>
					</tr>
					<tr>
						<td><input type="text" id="score1"></td>
						<td>-</td>
						<td><input type="text" id="score2"></td>
					</tr>
				</tbody>
			</table>
		</div>
	</body>
	<?php include 'fragment/footer.php'; ?>
</html>
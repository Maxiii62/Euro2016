<!DOCTYPE html>
<html lang="en">

    <?php include 'fragment/header.php'; ?>
	<body>
		<?php include 'fragment/menu.php'; ?>
		<div class="row container">
			<h3>Islande VS Belgique</h3>

			<table>
				<thead>
					<th data-field="id">Islande</th>
					<th data-field="id"></th>
					<th data-field="id">Belgique</th>
				</thead>
				<tbody>
					<tr>
						<td>
							<input name="grp1" type="radio" id="r1">
  							<label for="r1">Gagnant</label>
  						</td>
  						<td>
							<input name="grp1" type="radio" id="r2">
  							<label for="r2">Match Nul</label>
  						</td>
						<td>
							<input name="grp1" type="radio" id="r3">
  							<label for="r3">Gagnant</label>
  						</td>						
					</tr>
					<tr>
						<td><input type="text" id="score1"></td>
						<td style="text-align:center;">-</td>
						<td><input type="text" id="score2"></td>
					</tr>
				</tbody>
			</table>
			<input class="waves-effect waves-light btn" type="button" value="PARIER">
		</div>
	</body>
	<?php include 'fragment/footer.php'; ?>
</html>
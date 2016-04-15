<!DOCTYPE html>
<html lang="en">

    <?php include 'fragment/header.php'; ?>
	<body>
		<?php include 'fragment/menu.php'; ?>
		<div class="row container">
			<h3><?php echo $_POST['equipe1'].' VS ' .$_POST['equipe2']; ?></h3>

			<table>
				<thead>
					<th data-field="id"><?php echo $_POST['equipe1']; ?></th>
					<th data-field="id"></th>
					<th data-field="id"><?php echo $_POST['equipe2']; ?></th>
				</thead>
				<tbody>
					<tr>
						<td>
              <input type="hidden" id="idRenc" value="<?php echo $_POST['id'];?>"/>
							<input name="grp1" type="radio" id="r1" value="<?php echo $_POST['equipe1']; ?>">
  							<label for="r1">Gagnant</label>
  						</td>
  						<td>
							<input name="grp1" type="radio" id="r2" value="NULL">
  							<label for="r2">Match Nul</label>
  						</td>
						<td>
							<input name="grp1" type="radio" id="r3" <?php echo $_POST['equipe2']; ?>>
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
			<input class="waves-effect waves-light btn finaliseParier" onclick="finaliserParier()" type="button" value="PARIER">
		</div>
	</body>
	<?php include 'fragment/footer.php'; ?>
</html>

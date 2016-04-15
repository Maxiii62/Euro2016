<!DOCTYPE html>
<html lang="en">

  <?php include 'fragment/header.php'; ?>

<body>

  <?php include 'fragment/menu.php'; ?>

    <div class="row">

      <div class="input-field col s3">
        <select class="filterMatch">
          <option value="getByUser" selected>Tous</option>
          <option value="getInProgressByUser">En cours</option>
          <option value="getWonByUser">Gagnés</option>
          <option value="getLooseByUser">Perdus</option>
        </select>
        <label>Je filtre mes paris sur :</label>
      </div>

      <table class="reponsive-table m8 paris">
            <thead>
              <tr>
                  <th data-field="id">Match</th>
                  <th data-field="name">Votre pronostic</th>
                  <th data-field="price">Resultat</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
      </table>
    </div>
  </body>

  <?php include 'fragment/footer.php'; ?>

<script>
 $('select').material_select();
 $(".filterMatch").change();
</script>
</html>

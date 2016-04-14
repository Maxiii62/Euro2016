<!DOCTYPE html>
<html lang="en">

  <?php include 'fragment/header.php'; ?>

<body>

  <?php include 'fragment/menu.php'; ?>

    <div class="row">
      <table class="reponsive-table m8">
            <thead>
              <tr>
                  <th data-field="id">Match</th>
                  <th data-field="name">Votre pronostic</th>
                  <th data-field="price">Resultat</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><a href="pariDetails.php">Allemagne vs Italie</a></td>
                <td>V</td>
                <td class="gain">V</td>
              </tr>
              <tr>
                <td><a href="pariDetails.php">Espagne vs France</a></td>
                <td>D</td>
                <td class="loose">D</td>
              </tr>
            </tbody>
      </table>
    </div>
  </body>

  <?php include 'fragment/footer.php'; ?>

</html>

<!DOCTYPE html>
<html lang="en">

    <?php include 'fragment/header.php'; ?>

    <body>
        <?php include 'fragment/menu.php'; ?>


<!--        <div class="row">

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
    </body>-->
    <h3>Statistique Paris (victoire/égalité/defaite)</h3>
         <script type="text/javascript">
             window.onload = function () {
                 var chart = new CanvasJS.Chart("chartContainer",
                         {
                             title: {
                                 text: "Match France Inde, Victoire de la France "
                             },
                             legend: {
                                 maxWidth: 350,
                                 itemWidth: 120
                             },
                             data: [
                                 {
                                     type: "pie",
                                     showInLegend: true,
                                     legendText: "{indexLabel}",
                                     dataPoints: [
                                         {y: 25, indexLabel: "Victoire"},
                                         {y: 2, indexLabel: "Egalité"},
                                         {y: 10, indexLabel: "Défaite"},
                                     ]
                                 }
                             ]
                         });
                 chart.render();
             }
         </script>
         <div id="chartContainer" style="height: 300px; width: 100%;"></div>
         <p></p>
    <?php include 'fragment/footer.php'; ?>
</body>
<script>
    $('select').material_select();
    $(".filterMatch").change();
</script>
</html>
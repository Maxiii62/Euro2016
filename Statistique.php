<!DOCTYPE html>
<html lang="en">

    <?php include 'fragment/header.php'; ?>

    <body>

        <?php include 'fragment/menu.php'; ?>
    </body>
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
</html>
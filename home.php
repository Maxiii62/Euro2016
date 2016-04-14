<!DOCTYPE html>
<html lang="en">

    <?php include 'fragment/header.php'; ?>

    <body>

        <?php include 'fragment/menu.php'; ?>

        <div class="row">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a href="home.php">POULE A</a></li>
                    <!--        <li class="tab col s3"><a class="active" href="home.php">POULE B</a></li>
                            <li class="tab col s3"><a href="home.php">POULE C</a></li>
                            <li class="tab col s3"><a href="home.php">Test 4</a></li>-->
                </ul>
            </div>
            <!--<div id="test1" class="col s12">Test 1</div>
            <div id="test2" class="col s12">Test 2</div>
            <div id="test3" class="col s12">Test 3</div>
            <div id="test4" class="col s12">Test 4</div>-->
        </div>
        <h3>Match du 14/04/2016 - POULE A </h3>
        <table>
            <thead>
                <tr>
                    <th data-field="id">Match</th>
                    <th data-field="name">Résultat</th>
                    <th data-field="price">Parie Fait</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>France - Allemagne</td>
                    <td>0 - 1</td>
                    <td><i class="material-icons">done</i></td>
                </tr>
                <tr>
                    <td>Italie - Autriche</td>
                    <td>  -  </td>
                    <td><i class="material-icons">done</i></td>
                </tr>
                <tr>
                    <td>Roumanie - Espagne</td>
                    <td>  -  </td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <?php
        // for($x = 0 ; $x < rand ( 0 , 4);$x++){
//              echo '<div class="row">';
//                for($i = 0;$i < rand ( 0 , 3 );$i++){ include 'fragment/pari.php'; }
//              echo '</div>';
//            }
        ?>



    </body>

    <?php include 'fragment/footer.php'; ?>

</html>

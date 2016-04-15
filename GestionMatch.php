<!DOCTYPE html>
<html lang="en">

    <?php include 'fragment/header.php'; ?>

    <body>

        <?php include 'fragment/menu.php'; ?>

        <h3>Gestion Match</h3>

        <a class="btn-floating btn-large waves-effect waves-light red" href="CreatMatch.php"><i class="material-icons">add</i></a>
        <table class="listMatch">
            <thead>
                <tr>
                    <th data-field="id">Name</th>
                    <th data-field="name">Résultat</th>
                    <th data-field="price">Equipe Gagnante</th>
                    <th data-field="name"></th>

                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>France - Inde/td>
                    <td>25 - 0</td>
                    <td>France</td>
                    <td><button class="waves-effect waves-teal btn-flat"><i class="large material-icons">mode_edit</i></button><button class="waves-effect waves-teal btn-flat"><i class="material-icons">delete_forever</i></button></td>
                </tr>
            </tbody>
        </table>
        <p></p>
        <?php include 'fragment/footer.php'; ?>
    </body>

<script>
  chargerListeMatch();
</script>
</html>

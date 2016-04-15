<!DOCTYPE html>
<html lang="en">

    <?php include 'fragment/header.php'; ?>

    <body>
        <?php include 'fragment/menu.php'; ?>
        <h3>Classement des Utilisateurs par résultat de vote</h3>
        <table class="classmentUtilisateur">
            <thead>
                <tr>
                    <th data-field="id">Nom de l'Utilisateur</th>
                    <th data-field="name">Score de l'utilisateur</th>
                </tr>
            </thead>

            <tbody>

            </tbody>
        </table>
        <?php include 'fragment/footer.php'; ?>
    </body>
    <script>
        $('select').material_select();
        classmentUtilisateur();
    </script>
</html>

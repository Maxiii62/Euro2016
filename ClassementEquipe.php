<!DOCTYPE html>
<html lang="en">

    <?php include 'fragment/header.php'; ?>

    <body>
        <?php include 'fragment/menu.php'; ?>
        <h3>Classement Equipe par nombre de but total</h3>
        <table class="classmentEquipes">
            <thead>
                <tr>
                    <th data-field="id">Nom de l'Equipe</th>
                    <th data-field="name">Nombre de but depuis le début du tournois</th>
                </tr>
            </thead>

            <tbody>

            </tbody>
        </table>
        <?php include 'fragment/footer.php'; ?>
    </body>
    <script>
        $('select').material_select();
        classmentEquipes();
    </script>
</html>

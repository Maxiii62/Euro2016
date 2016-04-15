<!DOCTYPE html>
<html lang="en">

    <?php include 'fragment/header.php'; ?>

    <body>

        <?php include 'fragment/menu.php'; ?>
        <h3>Gestion Utilisateur</h3>

        <a class="btn-floating btn-large waves-effect waves-light red" href="CreatUser.php"><i class="material-icons">add</i></a>
        <table class="users">
            <thead>
                <tr>
                    <th data-field="id">Name</th>
                    <th data-field="name">Mail</th>
                    <th data-field="price">Pseudo</th>
                    <th data-field="name">admin</th>
                    <th data-field="name"></th>

                </tr>
            </thead>

            <tbody>
              </tbody>
        </table>
        <p></p>
        <?php include 'fragment/footer.php'; ?>
    </body>

    <script>
      chargerUser();
    </script>
</html>

<!DOCTYPE html>
<html lang="en">

    <?php include 'fragment/header.php'; ?>

    <body>

        <?php include 'fragment/menu.php'; ?>
        <h3>Gestion Utilisateur</h3>

        <a class="btn-floating btn-large waves-effect waves-light red" href="CreatUser.php"><i class="material-icons">add</i></a>
        <table>
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
                <tr>
                    <td>Beatrix</td>
                    <td>Beatrixdu93@gmail.com</td>
                    <td>Beatrixdu93</td>
                    <td>non</td>
                    <td><button class="waves-effect waves-teal btn-flat"><i class="large material-icons">mode_edit</i></button><button class="waves-effect waves-teal btn-flat"><i class="material-icons">delete_forever</i></button></td>
                </tr>
                <tr>
                    <td>Maxou</td>
                    <td>Maxoudu62@gmail.com</td>
                    <td>Maxoudu62</td>
                    <td>non</td>
                    <td><button class="waves-effect waves-teal btn-flat"><i class="large material-icons">mode_edit</i></button><button class="waves-effect waves-teal btn-flat"><i class="material-icons">delete_forever</i></button></td>
                </tr>
                <tr>
                    <td>Gerard</td>
                    <td>Gerard@testeur.com</td>
                    <td>GerardLeBoss</td>
                    <td>oui</td>
                    <td><button class="waves-effect waves-teal btn-flat"><i class="large material-icons">mode_edit</i></button><button class="waves-effect waves-teal btn-flat"><i class="material-icons">delete_forever</i></button></td>
                </tr>
            </tbody>
        </table>
        <p></p>
        <?php include 'fragment/footer.php'; ?>
    </body>
</html>
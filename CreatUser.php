<!DOCTYPE html>
<html lang="en">

    <?php include 'fragment/header.php'; ?>

    <body>

        <?php include 'fragment/menu.php'; ?>
        <h3>Création d'un utilisateur</h3>


        <form class="col s12">
            <div class="row">
                <div class="modal-content">
                    <div class="input-field col s6">
                        <input id="first_name" type="text" class="validate">
                        <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Last Name</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input id="pseudo" type="text" class="validate">
                    <label for="pseudo">Pseudo</label>
                </div>
                <div class="input-field col s6">
                    <input id="password" type="password" class="validate">
                    <label for="password">Password</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
                <div class="input-field col s6">
                    <input  value="" id="date" type="date" class="datepicker">
                </div>
            </div>
            <p>
                <input type="checkbox" id="admin" />
                <label for="admin">Admin</label>
            </p>
            <button class="btn waves-effect waves-light" type="submit" name="action">Sauvegarder
                <i class="material-icons right">send</i>
            </button>
        </form>
        <p></p>
        <?php include 'fragment/footer.php'; ?>
    </body>
</html>
<script>
    $('select').material_select();
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
    });
</script>
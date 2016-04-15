<!DOCTYPE html>
<html lang="en">

    <?php include 'fragment/header.php'; ?>

    <body>

        <?php include 'fragment/menu.php'; ?>
        <h3>Création d'un nouveau Match</h3>
        <div class="row">
            <div class="input-field col s6 team">
                <select>
                    <option value="" disabled selected>Choissez votre equipe</option>
                </select>
                <label>Equipe A</label>
            </div>
            <div class="input-field col s6 team">
                <select>
                  <option value="" disabled selected>Choissez votre equipe</option>
                </select>
                <label>Equipe B</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <select>
                    <option value="" disabled selected>Phase du tournoi</option>

                </select>
                <label>Poule</label>
            </div>
            <div class="input-field col s6">
                <input  value="" id="date" type="date" class="datepicker">
            </div>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="action">Sauvegarder
            <i class="material-icons right">send</i>
        </button>
        <p></p>
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

    loadTeam();

</script>

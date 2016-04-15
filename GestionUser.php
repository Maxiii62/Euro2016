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

        <div id="modifUser" class="modal">
          <div class="row">
           <div class="modal-content">
            <h4>Modification d'un User</h4><hr>
              <div class="row">
                <div class="input-field col s10">
                  <i class="material-icons prefix">account_circle</i>
                  <input id="login" type="text" class="validate">
                  <label for="icon_prefix">Login</label>
                </div>
                <div class="input-field col s10">
                  <i class="material-icons prefix">vpn_key</i>
                  <input id="password" type="password" class="validate">
                  <label for="icon_prefix">Password</label>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <a class="modal-action modal-close waves-effect waves-green btn-flat" id="sbmtCnx" >Connexion</a>
              <a class="modal-action modal-close waves-effect waves-green btn-flat closeModal">Fermer</a>
            </div>

       </div>


    </body>

    <script>
      chargerUser();
    </script>
</html>

    <!DOCTYPE html>
    <html lang="en">

        <?php include 'fragment/header.php'; ?>

        <body>

            <?php include 'fragment/menu.php'; ?>
        </body>
        <h3>Création d'un utilisateur</h3>
        <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
          <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Pseudo</label>
        </div>
        <div class="input-field col s6">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
        
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
         <button class="btn waves-effect waves-light" type="submit" name="action">Sauvegarder
    <i class="material-icons right">send</i>
  </button>
    </form>
  </div>
    </html>
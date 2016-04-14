
  <nav class="white" role="navigation";>
    <div class="nav-wrapper container">
        <div class="user">
            <?php echo '<a class="left userInfos">'.$_SESSION['monUserCo']['nom'].' '. $_SESSION['monUserCo']['prenom'].' - 0 point<a>'; ?>

                <img class="right" src="materialize/img/UEFA_Euro_2016_logo.png" alt="Logo Euro 2016 - FRANCE">
            </div>


      <ul class="right hide-on-med-and-down">
          <?php //echo '<li class="userInfos">'.$_SESSION['monUserCo']['nom'].' '. $_SESSION['monUserCo']['prenom'].' - 0 point<li>'; ?>

        <li><a href="home.php">Accueil</a></li>
        <li><a href="mesParis.php">Mes paris</a></li>

        <ul id="dropdown" class="dropdown-content">
            <li><a href="GestionUser.php">Gestion Utilisateur</a></li>
            <li><a href="GestionMatch.php">Gestion Match</a></li>
            <li><a href="Statistique.php">Statistique</a></li>
        </ul>
      <?php  if ($_SESSION['monUserCo']['estAdmin'] == true){
         echo  '<li><a class="dropdown-button" href="#!" data-activates="dropdown">Panel Admin<i class="material-icons right">arrow_drop_down</i></a></li>';
      } ?>

        <li><a href="logout.php">Déconnexion</a></li>
      </ul>


    </div>
    <?php echo '<input type="hidden" id="idUser" value='.$_SESSION['monUserCo']['id'].'>'; ?>
  </nav>

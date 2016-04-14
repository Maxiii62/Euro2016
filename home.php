<!DOCTYPE html>
<html lang="en">

  <?php
    include 'fragment/header.php';

    //if (!isset($_SESSION['monUserCo'])){
      //    header('Location: /Euro2016/index.php');
    //}
  ?>

<body>

  <?php include 'fragment/menu.php'; ?>

  <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a href="#test1">POULE A</a></li>
        <li class="tab col s3"><a class="active" href="#test2">POULE B</a></li>
        <li class="tab col s3"><a href="#test3">POULE C</a></li>
        <li class="tab col s3"><a href="#test4">POULE D</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12">
      <h3>Match du 14/04/2016 - POULE A </h3>
      <?php for($x = 0 ; $x < rand ( 0 , 4);$x++){
                echo '<div class="row">';
                  for($i = 0;$i < rand ( 0 , 3 );$i++){ include 'fragment/pari.php'; }
                echo '</div>';
              }
      ?>
    </div>

    <div id="test2" class="col s12">
      <h3>Match du 14/04/2016 - POULE B </h3>
      <?php for($x = 0 ; $x < rand ( 0 , 4);$x++){
                echo '<div class="row">';
                  for($i = 0;$i < rand ( 0 , 3 );$i++){ include 'fragment/pari.php'; }
                echo '</div>';
              }
      ?>
    </div>
    <div id="test3" class="col s12">
      <h3>Match du 14/04/2016 - POULE C </h3>
      <?php for($x = 0 ; $x < rand ( 0 , 4);$x++){
                echo '<div class="row">';
                  for($i = 0;$i < rand ( 0 , 3 );$i++){ include 'fragment/pari.php'; }
                echo '</div>';
              }
      ?>
    </div>
    <div id="test4" class="col s12">
      <h3>Match du 14/04/2016 - POULE D </h3>
      <?php for($x = 0 ; $x < rand ( 0 , 4);$x++){
                echo '<div class="row">';
                  for($i = 0;$i < rand ( 0 , 3 );$i++){ include 'fragment/pari.php'; }
                echo '</div>';
              }
      ?>
    </div>
  </div>




  </body>

  <?php include 'fragment/footer.php'; ?>

</html>

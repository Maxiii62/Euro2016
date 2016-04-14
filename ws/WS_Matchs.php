<?php

require_once '../ws/require.php';

const GET_ALL_MATCH_PER_PHASE = 'getMatchTour';
const GET_TOUR = 'getTour';


class WS_Matchs implements IWebServiciable {

    function __construct() {

    }

    public function doPost() {

      if (!isset($_POST['action']))
        Helper::ThrowAccessDenied();

        switch ($_POST['action']){
              case GET_ALL_MATCH_PER_PHASE:

                  $sql = "SELECT id,equipe1,equipe2,dateMatch FROM rencontre
                          WHERE id NOT IN (SELECT idrencontre FROM pari WHERE idUser = ". $_POST['idUser'] ." AND idrencontre IS NOT NULL)
                          AND idTour =" . $_POST['idTour'];

                  return returnOneArray($sql);

              case GET_TOUR :
                  $sql = "SELECT idTour,nomTour FROM tour WHERE idTour IN (SELECT DISTINCT idTour FROM rencontre)";
                  return returnOneArray($sql);

              default:
                Helper::ThrowAccessDenied();
              break;
        }
   }
}

?>

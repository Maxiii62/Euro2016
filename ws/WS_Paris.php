<?php

require_once '../ws/require.php';

const GET_ALL_BET_USER = 'getByUser';
const GET_ALL_WON_BET_USER = 'getWonByUser';
const GET_ALL_LOOSE_BET_USER = 'getLooseByUser';
const GET_IN_PROGRESS_BET_USER = 'getInProgressByUser';
const ADD_BET ='add';


class WS_Paris implements IWebServiciable {

    function __construct() {

    }

    public function doPost() {

      if (!isset($_POST['action']))
        Helper::ThrowAccessDenied();

        switch ($_POST['action']){
              case GET_ALL_BET_USER:
                    $sql = "SELECT Equipe1, Equipe2,Score1, Score2,Nom, IDGagnant,Pari.ID as IDPari, IFNULL(Points,'Match en cours..') as Points, Equipe.ID as EquipeID
                            FROM Equipe, Pari,Rencontre WHERE IDGagnant = Equipe.ID AND IDRencontre = Rencontre.ID AND IdUser=".$_POST['idUser'];
                    return returnOneArray($sql);
              case GET_ALL_WON_BET_USER:
                    $sql = "SELECT Equipe1, Equipe2,Score1, Score2,Nom, IDGagnant,Pari.ID as IDPari, IFNULL(Points,'Match en cours..') as Points, Equipe.ID as EquipeID
                            FROM Equipe, Pari,Rencontre WHERE Points != 0 AND Points != 'NULL' AND IDGagnant = Equipe.ID AND IDRencontre = Rencontre.ID AND IdUser=".$_POST['idUser'];
                    return returnOneArray($sql);
              case GET_ALL_LOOSE_BET_USER:
                    $sql = "SELECT Equipe1, Equipe2,Score1, Score2,Nom, IDGagnant, Pari.ID as IDPari, IFNULL(Points,'Match en cours..') as Points, Equipe.ID as EquipeID
                           FROM Equipe, Pari,Rencontre WHERE Points = 0 AND IDGagnant = Equipe.ID AND IDRencontre = Rencontre.ID AND iduser = ".$_POST['idUser'];
                    return returnOneArray($sql);
              case GET_IN_PROGRESS_BET_USER:
                    $sql = "SELECT Equipe1, Equipe2,Score1, Score2,Nom, IDGagnant,Pari.ID as IDPari, IFNULL(Points,'Match en cours..') as Points, Equipe.ID as EquipeID
                           FROM Equipe, Pari,Rencontre WHERE Points IS NULL AND IDGagnant = Equipe.ID AND IDRencontre = Rencontre.ID AND iduser = ".$_POST['idUser'];
                    return returnOneArray($sql);
              case ADD_BET :
                    $sql = "SELECT id FROM equipe WHERE nom='".$_POST['nomEquipe']."'";

                    $id = returnOneLine($sql)['id'];

                    $sql = "INSERT INTO pari (IDRencontre, IDUser, IDGagnant, Score1, Score2, DatePari) VALUES(".$_POST['idRenc'].",".$_POST['idUser'].",".$id.",".$_POST['Score1'].",".$_POST['Score2'].",CURDATE())";
                    return execReqWithoutResult($sql);
              default:
                Helper::ThrowAccessDenied();
              break;
        }
   }
}

?>

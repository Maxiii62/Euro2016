<?php

require_once '../ws/require.php';

const GET_CONNEXION_USER = 'connect';
const BE_SUBSCRIBED = 'subscribe';
const getDetailsUser = 'getDetailsUser';
const updateUser = 'updateUser';
const GET_ALL_USER = 'list';
const REMOVE_USER = 'removeUser';

class WS_Users implements IWebServiciable {

    function __construct() {

    }

    public function doPost() {

      if (!isset($_POST['action']))
        Helper::ThrowAccessDenied();

        switch ($_POST['action']){
              case GET_CONNEXION_USER:

                    $array = [
                        "login" => $_POST['login'],
                        "password" => $_POST['password']
                    ];

                    $sql = "SELECT id,nom,prenom,mail,DateNaissance,Pseudo,estAdmin FROM User WHERE mail = '".$array['login']."' AND MotDePasse ='".$array['password']."'";

                    return returnOneLine($sql);
              case BE_SUBSCRIBED :

                  $sql = "INSERT INTO user(Nom, Prenom, MotDePasse, Mail, DateNaissance, Pseudo, EstAdmin)
                         VALUES ('".$_POST['Nom']."','".$_POST['Prenom']."','".$_POST['MotDePasse']."','".$_POST['Mail']."','".$_POST['DateNaissance']."','".$_POST['Pseudo']."',".$_POST["estAdmin"].")";
                  execReqWithoutResult($sql);

              case GET_ALL_USER :
                  $sql = "SELECT id,nom,prenom,estAdmin,mail,pseudo FROM user";
                  return returnOneArray($sql);
              case REMOVE_USER :
                  $sql = "DELETE FROM pari WHERE idUser=".$_POST["idUser"];
                  execReqWithoutResult($sql);

                  $sql = "DELETE FROM user WHERE id=".$_POST["idUser"];
                  return execReqWithoutResult($sql);
              default:
                Helper::ThrowAccessDenied();
              break;
        }
   }
}

?>

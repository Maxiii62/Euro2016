<?php

require_once '../ws/require.php';

const GET_CONNEXION_USER = 'connect';
const BE_SUBSCRIBED = 'subscribe';
const getDetailsUser = 'getDetailsUser';
const updateUser = 'updateUser';

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
                         VALUES ('".$_POST['Nom']."',.'".$_POST['Prenom']."','".$_POST['MotDePasse']."','".$_POST['Mail']."',".$_POST['DateNaissance']."','".$_POST['Pseudo']."',".$_POST["estAdmin"].")";

                  return execReqWithoutResult($sql);
              default:
                Helper::ThrowAccessDenied();
              break;
        }
   }
}

?>

<?php

require_once '../ws/require.php';

const GET_ALL_BET_USER = 'getByUser';


class WS_Paris implements IWebServiciable {

    function __construct() {

    }

    public function doPost() {

      if (!isset($_POST['action']))
        Helper::ThrowAccessDenied();

        switch ($_POST['action']){
              case GET_ALL_BET_USER:
                    $sql = "SELECT * FROM pari";
                    return returnOneArray($sql);


              default:
                Helper::ThrowAccessDenied();
              break;
        }
   }
}

?>

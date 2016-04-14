<?php
        session_start();
        session_unset();
        session_destroy();
        header('Location: /Euro2016/index.php');
 ?>

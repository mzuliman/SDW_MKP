<?php

if (!session_id()) {
    session_start();
    $_SESSION['status'] = "";
}

require_once '../app/init.php';


$new = new App;
$new = new Controller;

?>
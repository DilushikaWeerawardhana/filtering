<?php
    require_once('controllers/index.php');

    $class = null;
    $action = null;

    if (isset($_GET['ctrl']) && isset($_GET['action'])) {
        $class = $_GET['ctrl'];
        $action = $_GET['action'];
    }

    $controller =  new $class;
    $controller->{ $action }();

?>

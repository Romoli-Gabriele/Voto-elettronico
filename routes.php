<?php 

$router->get("","controllers/index.php");
$router->get("makeDB","controllers/makeDB.php");
$router->get("selezioneLista","controllers/selezioneLista.php");
$router->get("contacts","controllers/contacts.php");
$router->get("done","controllers/index.php");

$router->post("add-new", "controllers/add-new.php");

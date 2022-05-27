<?php 

$router->get("","controllers/index.php");
$router->get("makeDB","controllers/makeDB.php");
$router->get("selezioneLista","controllers/selezioneLista.php");
$router->get("selezioneCandidato","controllers/selezioneCandidato.php");
$router->get("riepilogo","controllers/riepilogo.php");
$router->post("store", "controllers/store.php");

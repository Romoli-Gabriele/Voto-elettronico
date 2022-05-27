<?php 
$lista = $_SESSION['lista'];
$candidato = $query->getCandidato($_REQUEST['id_candidato']);
require "views/riepilogo.views.php";
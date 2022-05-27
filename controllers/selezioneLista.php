<?php 
session_start();
$liste = $query->selectAll("liste", lista::class);
$_SESSION['lista'] = $lista;
require "views/selezioneLista.view.php";
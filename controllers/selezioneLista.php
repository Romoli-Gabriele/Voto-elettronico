<?php 
require "./core/lista.php";
$liste = $query->selectAll("liste", lista::class);
require "views/selezioneLista.view.php";
<?php
$candidati = $query->getCandidatiDaLista($_SESSION['lista']->id);
$_SESSION['candidati'] = $candidati;
require "views/selezioneCandidato.view.php";
<?php

require_once __DIR__ . '/database/DatabaseConnection.php';
require_once __DIR__ . '/controller/GrilleEvalController.php';

$grilleEvalController = new GrilleEvalController();

//SUPPR : FAIRE UN CASE
$grilleEvalController->show();

?>
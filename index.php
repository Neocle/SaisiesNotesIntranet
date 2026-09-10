<?php

require_once __DIR__ . '/database/DatabaseConnection.php';
require_once 'controller/PlanningController.php';

$planningController = new planningController();

$action = $_GET['action'] ?? 'planning';

switch($action) {
    case 'planning':
        $planningController->getPlanningEnseignants();
        break;    
    default: 
}

require_once __DIR__ . '/controller/GrilleEvalController.php';

$grilleEvalController = new GrilleEvalController();

//SUPPR : FAIRE UN CASE
$grilleEvalController->show();

?>


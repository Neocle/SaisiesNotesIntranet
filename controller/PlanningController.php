<?php

require_once '/../model/PlanningM.php';

class PlanningController {
    
private $PlanningModel;

    public function __construct() {
        global $pdo;
        $this->PlanningModel = new planning($pdo);
    }

    public function Planning() {
        $plannings = $this->PlanningModel->getPlanningEnseignants($idEnseignant);
       
        include 'view/layout/header.php';
        include 'view/planning/PlanningView.php';
    }
}
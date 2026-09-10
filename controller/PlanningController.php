<?php

require_once 'model/PlanningM.php';

class PlanningController {
    
private $PlanningModel;

    public function __construct() {
        global $pdo;
        $this->PlanningModel = new PlanningModel($pdo);
    }

    public function Planning() {
        $PlanningModel = $this->PlanningModel->getPlanningEnseignants($idEnseignant);
       
        include 'vue/Planning/PlanningView.php';
    }
}
?>
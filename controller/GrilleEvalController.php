<?php
require_once __DIR__ . '/../model/GrilleEval.php';

class GrilleEvalController {
    private $grilleEvalModel;
    
    public function __construct(){
        global $pdo;
        $this->grilleEvalModel = new GrilleEval($pdo);
    }

    public function show() {
        $critereseval = $this->grilleEvalModel->getAll();
        include 'view/grilleEval/show.php';
    }
}

?>
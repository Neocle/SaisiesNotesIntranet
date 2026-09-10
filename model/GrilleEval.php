<?php

//CLASSE CULTURE QUI PERMET DE MANIPULER LA GRILLE D'EVAL. AVEC DES METHODES QUI UTILISENT DES REQUETES SQL
class GrilleEval {
    private $pdo;

    //CONSTRUCTEUR QUI INITIALISE LA DONNEE MEMBRE PDO AU PDO DE LA BDD
    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    //METHODE QUI PERMET D'OBTENIR UN TABLEAU DES CRITERES D'EVALUATION SUPPR : VOIR SI POUR LES 3 FAIRE BY ID
    public function getAll(){
        return $this->pdo->query("SELECT * FROM critereseval")->fetchAll();
    }
}

?>  
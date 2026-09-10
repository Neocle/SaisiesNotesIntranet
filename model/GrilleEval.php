<?php

//CLASSE CULTURE QUI PERMET DE MANIPULER LA GRILLE D'EVAL. AVEC DES METHODES QUI UTILISENT DES REQUETES SQL
class GrilleEval {
    private $pdo;

    //CONSTRUCTEUR QUI INITIALISE LA DONNEE MEMBRE PDO AU PDO DE LA BDD
    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    

}

?>  
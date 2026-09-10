<?php
//require_once '..\model\mdl_Eleve_Selectionne.php';
//require_once '..\vue\view_Eleve_Selectionne.php';
require_once 'model\mdl_Eleve_Selctionne.php';
require_once 'vue\view_Eleve_Selectionne.php';

function afficherPageEtudiant($idUser, $idEtudiant) {
    $isTutor = getIsTutor($idUser, $idEtudiant);
    $isSecondary = getIsSecondary($idUser, $idEtudiant);
    $isEnglishEvaluator = getIsEnglishEvaluator($idUser, $idEtudiant);
    if($isTutor) {
    $etudiant = getInfosEtudiant($idEtudiant, $idUser);
    }
    else if($isSecondary) {
    $etudiant = getInfosEtudiant($idEtudiant, $idUser);
    }
    else if($isEnglishEvaluator) {
    $etudiant = getInfosEtudiant($idEtudiant, $idUser);
    }
    //$role     = getRoleUtilisateur($idUser, $idEtudiant);

    afficherEtudiantAvecLiens($etudiant, $idUser, $isTutor, $isSecondary, $isEnglishEvaluator);
}
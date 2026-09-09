<?php
//require_once '..\model\mdl_Eleve_Selectionne.php';
//require_once '..\vue\view_Eleve_Selectionne.php';
require_once 'model\mdl_Eleve_Selctionne.php';
require_once 'vue\view_Eleve_Selectionne.php';

function afficherPageEtudiant($idUser, $idEtudiant) {
    $etudiant = getInfosEtudiant($idEtudiant);
    $role     = getRoleUtilisateur($idUser, $idEtudiant);

    afficherEtudiantAvecLiens($etudiant, $idUser, $role);
}
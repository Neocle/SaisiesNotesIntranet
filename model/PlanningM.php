<?php

public function getPlanningEnseignants($idEnseignant){
    $sql = "SELECT *
            FROM livres
            WHERE titre  LIKE :recherche
               OR auteur LIKE :recherche
               OR resumer LIKE :recherche
               OR genre LIKE :recherche";

    $stmt = $pdo->prepare($sql);

    $search = "%" . $recherche . "%";

    $stmt->execute([
        ':recherche' => $search
    ]);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

<?php
function afficherEtudiantAvecLiens($etudiant, $idUser, $role) {
	echo $etudiant[0]['IdEtudiant'];
	echo "<h2>Informations sur l'étudiant</h2>";
	foreach ($etudiant as $etu) {
			echo "Nom : {$etu['nom']}";
			echo "Prénom : {$etu['prenom']}";
			echo "Eval Stage:<br>";
			echo "<table border='1'>";
			echo "<tr><th>Entreprise</th><td>{$etu['entreprise']}</td></tr>";
			echo "<tr><th>Sujet</th><td>{$etu['sujet']}</td></tr>";
			echo "<tr><th>Date soutenance</th><td>{$etu['date_h']}</td></tr>";
			echo "<tr><th>Salle</th><td>{$etu['salle']}</td></tr>";
			echo "</table>";
			echo "<br>Eval Soutenance:<br>";
			echo "<br><table border = 1>";
			echo "<tr><th>Note</th><td>{$etu['es2note']}</td></tr>";
			echo "<tr><th>Commentaire</th><td>{$etu['es2comm']}</td></tr>";
			echo "<tr><th>Annee</th><td>{$etu['es2yr']}</td></tr>";
			echo "<tr><th>Statue</th><td>{$etu['es2stat']}</td></tr>";
			echo "</table>";
			echo "<br>Eval Rapport:<br>";
			echo "<br><table border = 1>";
			echo "<tr><th>Note</th><td>{$etu['ernote']}</td></tr>";
			echo "<tr><th>Commentaire</th><td>{$etu['ercomm']}</td></tr>";
			echo "<tr><th>Annee</th><td>{$etu['eryr']}</td></tr>";
			echo "<tr><th>Statue</th><td>{$etu['erstat']}</td></tr>";
			echo "</table>";
			echo "<br>Eval Portfolio:<br>";
			echo "<br><table border = 1>";
			echo "<tr><th>Note</th><td>{$etu['epnote']}</td></tr>";
			echo "<tr><th>Commentaire</th><td>{$etu['epcomm']}</td></tr>";
			echo "<tr><th>Annee</th><td>{$etu['epyr']}</td></tr>";
			echo "<tr><th>Statue</th><td>{$etu['epstat']}</td></tr>";
			echo "</table>";
			echo "<br>Eval Anglais:<br>";
			echo "<table border='1'>";
			echo "<tr><th>Note</th><td>{$etu['eanote']}</td></tr>";
			echo "<tr><th>Note</th><td>{$etu['eacomm']}</td></tr>";
			echo "<tr><th>Note</th><td>{$etu['easalle']}</td></tr>";
			echo "<tr><th>Date soutenance</th><td>{$etu['eadate']}</td></tr>";
			echo "<tr><th>Note</th><td>{$etu['eastat']}</td></tr>";
			echo "</table>";

	}

    echo "<h3>Actions disponibles pour $role</h3>";
    echo "<ul>";
    echo "<li><a href='pageSuivante.php?action=portfolio&idUser=$idUser&idEtudiant={$etudiant[0]['IdEtudiant']}'>Saisir/Consulter les grilles</a></li>";
    echo "</ul>";
}
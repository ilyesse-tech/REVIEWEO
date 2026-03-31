<?php
//on tente de relier  la base de donnée avec se fichier fichier qui sera dailleur reutiliser bcp de fois apres
	try {
		$db_connection = new PDO(
			"mysql:host=localhost;dbname=projetweb;charset=utf8",
			"root","" // on a pas de mot de passe sur xamp

		);
	} catch (Exception $e) {
		echo $e->getMessage();
	}
?>
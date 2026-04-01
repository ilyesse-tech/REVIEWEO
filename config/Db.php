<?php
	try {
		$db_connection = new PDO(
			"mysql:host=localhost;dbname=reviewo;charset=utf8",
			"root","" // on a pas de mot de passe sur xamp

		);

	} catch (Exception $e) {
		echo $e->getMessage();
	}
?>
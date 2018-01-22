<?php

	$con = new PDO("mysql:dbname=curso_php; host=localhost", "root", "nunca mais10");

	 $stmt = $con->prepare("SELECT * FROM usuario ORDER BY id");

	 $stmt->execute();

	 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

	 foreach ($result as $row) {
	 	foreach ($row as $key => $value) {
	 		echo "<strong>".$key.":</strong>".$value."<br>";
	 	}

	 	echo "=================================================";
	 }

	 
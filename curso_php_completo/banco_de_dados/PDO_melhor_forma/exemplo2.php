<?php

	$con = new PDO("sqlsrv:Database=dbphp7; server=localhost\SQLEXPRESS;ConnectionPooling=1", "sa", "nunca mais10");

	 $stmt = $con->prepare("SELECT * FROM TB_USUARIOS ORDER BY DESLOGIN");

	 $stmt->execute();

	 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

	 foreach ($result as $row) {
	 	foreach ($row as $key => $value) {
	 		echo "<strong>".$key.":</strong>".$value."<br>";
	 	}

	 	echo "=================================================";
	 }

	 
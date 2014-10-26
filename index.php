<?php 

	echo "Executando servidor interno do PHP!"; 

	$db = new \PDO('mysql:host=localhost;dbname=information_schema', 'root', 'asus2011');

	$query = $db->query("SHOW TABLES;");
	while($row = $query->fetch(PDO::FETCH_OBJ)) {
		$array[] = $row;
	} 

	echo "<pre>";
	var_dump($array);
	echo "</pre>";

?>

<?php
	if (!(isset($_ENV['DB_HOST']) && isset($_ENV['DB_USER']) && isset($_ENV['DB_PASS']) && isset($_ENV['DB_DATA'])) {
		die("Variables de entorno no configuradas.");						      
	}
					      
	$m = new mysqli($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASS'], $_ENV['DB_DATA'];
	$r = $m->query("SELECT * FROM acceso_nginx");

	echo "<table border='1'>";
	echo "<tr><th>ID</th><th>Dato</th></tr>";
	while($f = $r->fetch_array()) {
		echo "<tr><th>".$f['id'].'</th><th>'.$f['dato'].'</th></tr>';
	}

	echo "</table>";
?>

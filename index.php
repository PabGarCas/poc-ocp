<?php	
	$host = getenv('DB_HOST');
	$user = getenv('DB_USER');
	$pass = getenv('DB_PASS');
	$data = getenv('DB_DATA');

	if ($host == false || $user == false || $pass == false || $data == false) {
		die("Variables de entorno no configuradas.");						      
	}
					      
	$m = new mysqli($host, $user, $pass, $data);
	$r = $m->query("SELECT * FROM acceso_nginx");

	echo "<table border='1'>";
	echo "<tr><th>ID</th><th>Dato</th></tr>";
	while($f = $r->fetch_array()) {
		echo "<tr><th>".$f['id'].'</th><th>'.$f['dato'].'</th></tr>';
	}

	echo "</table>";
?>

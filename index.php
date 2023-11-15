	<?php
		$m = new mysqli('mariadb', 'conexion', 'QAtqSBvNefXNO1FX', 'test');
		$r = $m->query("SELECT * FROM acceso_nginx");

		echo "<table>";
		echo "<tr><th>ID</th><th>Dato</th></tr>";
		while($f = $r->fetch_array()) {
			echo "<tr><th>".$f['id'].'</th><th>'.$f['dato'].'</th></tr>';
		}

		echo "</table>";
	?>

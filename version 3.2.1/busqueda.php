<?php
	session_start();	
	require_once('config.php');
	$busqueda = $_POST['search'];

	//consulta
	$sql = "SELECT * FROM tabla WHERE nombre = ? LIMIT 1";
	$stmtselect = $db->prepare($sql);
	$result = $stmtselect->execute([$busqueda]);

	if ($result) {
		$user = $stmtselect -> fetch(PDO::FETCH_ASSOC);
		if ($stmtselect->rowCount() > 0) {
			echo "1";
		}else{
			echo "No hay registros bajo ese nombre";
		}
	}else{
		echo "Error con la conexion a la base de datos";
	}
?>
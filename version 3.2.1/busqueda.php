<?php
	session_start();	
	require_once('config.php');
	$busqueda = $_POST['search'];

	//consulta
	$sql = "SELECT * FROM document where sustancia like '%?%'";
	$stmtselect = $db->prepare($sql);
	$result = $stmtselect->execute([$busqueda]);

	if ($result) {
		$user = $stmtselect -> fetch(PDO::FETCH_ASSOC);
		if ($stmtselect->rowCount() > 0) {
			$temp = $stmtselect->rowCount();
			while ($temp == 0) {
				echo $user["url"];
				$temp-=1;
			}
			
		}else{
			echo "No hay registros bajo ese nombre";
		}
	}else{
		echo "Error con la conexion a la base de datos";
	}
?>
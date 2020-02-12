<?php
	require_once 'conn.php';
	
	header('Content-Type: text/csv; charset=UTF-8');
	header('Content-Disposition: attachment; filename=data.csv');
	
	$output = fopen("php://output", "w");
	
	fputcsv($output, array(`id`,`me1`,`id1`,`intara`,`akarere`,`umurenge`,`akagari`,`umudugudu`,`telefoni`,`upi`,`ibisobanuro`));
	$query = $conn->query("SELECT * FROM `form1` ORDER BY `me1` ASC");
	while($fetch = $query->fetch_assoc()){
		fputcsv($output, $fetch);
	}
	
	fclose($output);
?>
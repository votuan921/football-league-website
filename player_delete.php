<?php 
	include('config.php');
	$id = $_GET['id'];
	//print_r($id);
	$sql_delete = "DELETE FROM cauthu WHERE \"MSCAUTHU\" = '$id'";
	//print_r($sql_delete);.
	//$query_delete = mysql_query($sql_delete);
	$sth=$db->prepare($sql_delete);
	$sth->execute();
	header("Location: player_edit.php");
?>
<?php 
	include('config.php');
	$id = $_GET['id'];
	//print_r($id);
	$sql_delete = "DELETE FROM bhl WHERE MSHL = '$id'";
	//print_r($sql_delete);.
	$query_delete = mysql_query($sql_delete);
	header("Location: all_manager_edit.php");
?>
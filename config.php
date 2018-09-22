<?php
   	$host="localhost";
	$db="bongda3";
	$username="postgres";
	$password="quan12113"; 
	$dsn = "pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password";	 
	try {
	    // tạo kết nối cơ sở dữ liệu
	    $db = new PDO($dsn);
	 
	    // chế độ báo lỗi: cho phép bạn xử lý lỗi và dừng các đoạn code quan trọng lại
	 
	    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	 
	} 
	catch(PDOException $errMsg) 
	{
	     echo 'Lỗi: ' . $errMsg->getMessage();
	}
	$sql_position = "SELECT DISTINCT \"VITRI\" FROM cauthu ORDER BY \"VITRI\"";
	//$query_position = mysql_query($sql_position);
	$list_position = array();
	$sth=$db->prepare($sql_position);
    $sth->setFetchMode(PDO::FETCH_ASSOC);
    $sth->execute();
    $result=$sth->fetchAll();

	foreach($result as $value) {
		array_push($list_position, $value['VITRI']);
	};
	$sql_nationality = "SELECT DISTINCT \"QUOCTICH\" FROM quoctich ORDER BY \"QUOCTICH\"";
	//$query_nationality = mysql_query($sql_nationality);
	$sth=$db->prepare($sql_nationality);
    $sth->setFetchMode(PDO::FETCH_ASSOC);
    $sth->execute();
    $result=$sth->fetchAll();
	$list_nationality = array();
	foreach($result as $value) {
		array_push($list_nationality, $value['QUOCTICH']);
	};

	$sql_clb = "SELECT \"MSCLB\" FROM clb ORDER BY \"MSCLB\"";
	//$query_clb = mysql_query($sql_clb);
	$sth=$db->prepare($sql_clb);
    $sth->setFetchMode(PDO::FETCH_ASSOC);
    $sth->execute();
    $result=$sth->fetchAll();
	$list_clb = array();
	foreach($result as $value) {
		array_push($list_clb, $value['MSCLB']);
	};

	$sql_player = "SELECT \"TENCAUTHU\" FROM cauthu ORDER BY \"TENCAUTHU\"";
	//$query_player = mysql_query($sql_player);
	$sth=$db->prepare($sql_player);
    $sth->setFetchMode(PDO::FETCH_ASSOC);
    $sth->execute();
    $result=$sth->fetchAll();
	$list_player = array();
	foreach($result as $value) {
		array_push($list_player, $value['TENCAUTHU']);
	};
	$player_number = count($list_player);

    $sql_role = "SELECT DISTINCT \"VAITRO\" FROM bhl ORDER BY \"VAITRO\"";
    //$query_role = mysql_query($sql_role);
    $sth=$db->prepare($sql_role);
    $sth->setFetchMode(PDO::FETCH_ASSOC);
    $sth->execute();
    $result=$sth->fetchAll();
    $list_role = array();
    foreach($result as $value) {
        array_push($list_role, $value['VAITRO']);
    };

    $sql_manager = "SELECT \"TENHL\" FROM bhl ORDER BY \"TENHL\"";
    //$query_manager = mysql_query($sql_manager);
    $sth=$db->prepare($sql_manager);
    $sth->setFetchMode(PDO::FETCH_ASSOC);
    $sth->execute();
    $result=$sth->fetchAll();
    $list_manager = array();
    foreach($result as $value) {
    	array_push($list_manager, $value['TENHL']);
    };
    $manager_number = count($list_manager);

    $sql_referee = "SELECT \"TENTRONGTAI\" FROM trongtai ORDER BY \"TENTRONGTAI\"";
    //$query_referee = mysql_query($sql_referee);
    $sth=$db->prepare($sql_referee);
    $sth->setFetchMode(PDO::FETCH_ASSOC);
    $sth->execute();
    $result=$sth->fetchAll();
    $list_referee = array();
    foreach($result as $value) {
    	array_push($list_referee, $value['TENTRONGTAI']);
    };
    $referee_number = count($list_referee);
?>
<?php 
	$sql_svd = "SELECT svd.\"TENSVD\", svd.\"MSSVD\" FROM svd";
	$sth=$db->prepare($sql_svd);
    $sth->setFetchMode(PDO::FETCH_ASSOC);
    $sth->execute();
    $list_svd=$sth->fetchAll();


 	$sql_rank = "SELECT xephang.* FROM xephang";
 	$sth=$db->prepare($sql_rank);
    $sth->setFetchMode(PDO::FETCH_ASSOC);
    $sth->execute();
    $list_rank=$sth->fetchAll();
    //print_r($list_rank);


    $sql_player = "SELECT cauthu.\"TENCAUTHU\", cauthu.\"MSCLB\", cauthu.\"MSCAUTHU\" FROM cauthu";
    $sth=$db->prepare($sql_player);
    $sth->setFetchMode(PDO::FETCH_ASSOC);
    $sth->execute();
    $list_player2=$sth->fetchAll();

    $sql_referee = "SELECT trongtai.\"TENTRONGTAI\", trongtai.\"MSTRONGTAI\" FROM trongtai";
    $sth=$db->prepare($sql_referee);
    $sth->setFetchMode(PDO::FETCH_ASSOC);
    $sth->execute();
    $list_referee2=$sth->fetchAll();

    $sql_clb = "SELECT clb.\"MSCLB\", clb.\"LOGO\" FROm clb";
    $sth=$db->prepare($sql_clb);
    $sth->setFetchMode(PDO::FETCH_ASSOC);
    $sth->execute();
    $list_clb2=$sth->fetchAll();

?>

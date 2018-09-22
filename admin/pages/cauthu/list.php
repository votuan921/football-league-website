<?php
    include('config.php');
?>
<?php
	$sql_player = "SELECT *
	    FROM cauthu, quoctich, clb
	    WHERE cauthu.QUOCTICH = quoctich.QUOCTICH 
	    AND cauthu.MSCLB = clb.MSCLB
	    ORDER BY TENCAUTHU ASC";
	$query = mysql_query($sql_player);
	print_r($query);
?>
<?php
    while($cauthu = mysql_fetch_array($query)) {
    	print_r($cauthu);
    }
?>

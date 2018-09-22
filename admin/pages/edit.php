<?php
	$sql_clb = "SELECT *
        FROM clb,svd,aodau
        WHERE  clb.MSCLB = '$_GET[id]' 
        AND svd.MSSVD = clb.MSSVD
        AND aodau.MSCLB = clb.MSCLB";
    $query = mysql_query($sql_clb);
    
?>
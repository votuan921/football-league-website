<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>TVQ League</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS
================================================== -->
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<link rel="stylesheet" href="css/prettyPhoto.css" />
<link rel="stylesheet" href="css/custom-styles.css">

<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/style-ie.css"/>
<![endif]--> 

<!-- Favicons
================================================== -->

<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- JS
================================================== -->
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/jquery.custom.js"></script>


</head>
<style>
    tab1 { padding-left: 4em; }
    tab2 { padding-left: 8em; }
    tab3 { padding-left: 12em; }
    tab4 { padding-left: 16em; }
    tab5 { padding-left: 20em; }
    tab6 { padding-left: 24em; }
    tab7 { padding-left: 28em; }
    tab8 { padding-left: 32em; }
    tab9 { padding-left: 36em; }
    tab10 { padding-left: 40em; }
    tab11 { padding-left: 44em; }
    tab12 { padding-left: 48em; }
    tab13 { padding-left: 52em; }
    tab14 { padding-left: 56em; }
    tab15 { padding-left: 60em; }
    tab16 { padding-left: 64em; }
</style>

<body>
<?php
    include('config.php');
?>
    <!-- Color Bars (above header)-->
    <div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>
    
    <div class="container main-container">
    
      <div class="row header"><!-- Begin Header -->
      
        <!-- Logo
        ================================================== -->
        <div class="span4 logo">
            <a href="index.php"><h1>TVQ League</h1></a>
            
        </div>
        
        <!-- Main Navigation
        ================================================== -->
        <div class="span8 navigation">
            <div class="navbar hidden-phone">
            
            <ul class="nav">
            <li>
                <a href="index.php">Home</a>
            </li>
            <li class="dropdown active">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Results <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="results.php">Match results</a></li>
                    <li><a href="top_scorers.php">Top scorers</a></li>
                </ul>
            </li>
           <li><a href="fixture.php">Fixtures</a></li>
           <li><a href="table.php">Table</a></li>
            <li><a href="club.php">Clubs</a></li>
            <li><a href="player.php">Players</a></li>
            <li><a href="all_manager.php">Managers</a></li>
            <li><a href="referee.php">Referees</a></li>
             <li><a href="contact.php">Contact</a></li>


            <li><button class="btn" type="button">Sign in</button></li>
            </ul>

           
            </div>

            <!-- Mobile Nav
            ================================================== -->
            <form action="#" id="mobile-nav" class="visible-phone">
                <div class="mobile-nav-select">
                <select onchange="window.open(this.options[this.selectedIndex].value,'_top')">
                    <option value="">Navigate...</option>
                    <option value="index.htm">Home</option>
                        <option value="index.htm">- Full Page</option>
                        <option value="index-gallery.htm">- Gallery Only</option>
                        <option value="index-slider.htm">- Slider Only</option>
                    <option value="features.htm">Features</option>
                    <option value="page-full-width.htm">Pages</option>
                        <option value="page-full-width.htm">- Full Width</option>
                        <option value="page-right-sidebar.htm">- Right Sidebar</option>
                        <option value="page-left-sidebar.htm">- Left Sidebar</option>
                        <option value="page-double-sidebar.htm">- Double Sidebar</option>
                    <option value="gallery-4col.htm">Gallery</option>
                        <option value="gallery-3col.htm">- 3 Column</option>
                        <option value="gallery-4col.htm">- 4 Column</option>
                        <option value="gallery-6col.htm">- 6 Column</option>
                        <option value="gallery-4col-circle.htm">- Gallery 4 Col Round</option>
                        <option value="gallery-single.htm">- Gallery Single</option>
                    <option value="blog-style1.htm">Blog</option>
                        <option value="blog-style1.htm">- Blog Style 1</option>
                        <option value="blog-style2.htm">- Blog Style 2</option>
                        <option value="blog-style3.htm">- Blog Style 3</option>
                        <option value="blog-style4.htm">- Blog Style 4</option>
                        <option value="blog-single.htm">- Blog Single</option>
                    <option value="page-contact.htm">Contact</option>
                </select>
                </div>
                </form>

        </div>
            <div class="span8">
            </div>
                <div class="span4">
            <form class="form-search" action="search.php">
            <div class="input-append">
                <input type="text" class="span3 search-query" name="searchtext" placeholder="Search for clubs or players">
                <button type="submit" name="ok" class="btn"><i class="icon-search"></i></button>
            </form>

        </div>
        </div>
        
      </div><!-- End Header -->


    <!-- Page Content
    ================================================== --> 
    <div class="row">
        <?php
        $sql_date = "SELECT DISTINCT \"NGAYDAU\", DATE_PART('day',lichthidau.\"NGAYDAU\") AS day, DATE_PART('month',lichthidau.\"NGAYDAU\") AS month, DATE_PART('year',lichthidau.\"NGAYDAU\") AS year
            FROM lichthidau, trandau
            WHERE lichthidau.\"MSTRANDAU\" = trandau.\"MSTRANDAU\"
            ORDER BY \"NGAYDAU\" DESC";
            $sth=$db->prepare($sql_date);
            $sth->setFetchMode(PDO::FETCH_ASSOC);
            $sth->execute();
            $result=$sth->fetchAll();
        ?>


        <!-- Gallery Items
        ================================================== --> 
        <div class="span12">
            <h3 class="title-bg">Results</h3>
            <form method="POST">
            <div class="span11">
                <h5><input name="giodau" type="date" value="<?php echo date("Y-m-d")?>"></h5>
            </div>
            
            <div class="span11 row">
                <h4 class="title-bg"><tab3></tab3>
                    
                    <select id="mschu" name="mschu" style="width: 80px; height: 30px">
                        <?php
                            foreach($list_clb2 as $key => $value) {
                                echo "<option>".$value['MSCLB']."</option>";
                            }
                        ?>
                    </select>
                     &nbsp;&nbsp;&nbsp;&nbsp;<input style="width: 25px; height: 20px" type="number" name="banthangchu" id="banthangchu" min="0">-<input style="width: 25px; height: 20px" type="number" name="banthangkhach" id="banthangkhach" min="0">&nbsp;&nbsp;&nbsp;&nbsp;
                   
                    <select id="mskhach" name="mskhach" style="width: 80px; height: 30px">
                        <?php
                            foreach($list_clb2 as $key => $value){
                                echo "<option>".$value['MSCLB']."</option>";
                            }
                        ?>
                    </select>
                    <tab3></tab3>
                    <input style="float: right;" type="submit" name="submit" value="Add">
                </h4>
                <div style="float: right;">
                <div style="display: block;">
                        Stadium
                        <select name="mssvd" >
                            <?php
                                foreach ($list_svd as $key => $value) {
                                    echo "<option>".$value['TENSVD']."</option>";
                                }
                            ?>
                        </select>
                    </div>
                        <div style="display: block">
                            Referee
                        <select name="trongtaichinh" >
                            <?php
                                foreach ($list_referee as $key => $value) {
                                    echo "<option>".$value['TENTRONGTAI']."</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div style="display:  block;">
                        Linesman
                        <select name="trongtaiphu" ">
                            <?php
                                foreach ($list_referee as $key => $value) {
                                    echo "<option>".$value['TENTRONGTAI']."</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                    
            </div>
                <?php
                    for($i = 1; $i <= 50; $i++){
                ?>
                <div>
                <span id="chu<?php echo $i?>" style="display: none;float: left;">
                    <select name="dsghibanchu<?php echo $i?>">
                        <?php
                            foreach ($list_player2 as $key => $value) {
                            echo "<option class='".$value['MSCLB']."'>".$value['TENCAUTHU']."</option>";
                            }
                        ?>
                    </select>
                    <input type="number" name="thoidiem" min="0" max="90" style="width: 35px; height: 20px">
                </span>
                <span id="khach<?php echo $i?>" style="display: none;float: right">
                    <select name="dsghibankhach<?php echo $i?>">
                        <?php
                            foreach ($list_player2 as $key => $value) {
                            echo "<option class='".$value['MSCLB']."'>".$value['TENCAUTHU']."</option>";
                            }
                        ?>
                    </select>
                    <input type="number" name="thoidiem" min="0" max="90" style="width: 35px; height: 20px">
                </span>
                </div>
                <?php
                    }
                ?>
            </form>
            
        </div>
    </div><!-- End container row -->
    
    </div> <!-- End Container -->



    <!-- Footer Area
        ================================================== -->

    <div class="footer-container"><!-- Begin Footer -->
        <div class="container">
            
            <div class="row"><!-- Begin Sub Footer -->
                <div class="span12 footer-col footer-sub">
                    <div class="row no-margin">
                        <div class="span6"><span class="left">Copyright 2012 Piccolo Theme. All rights reserved.</span></div>
                        <div class="span6">
                            <span class="right">
                            <a href="#">Home</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Contact</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div><!-- End Sub Footer -->

        </div>
    </div><!-- End Footer --> 
    
    <!-- Scroll to Top -->  
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>
    
</body>
</html>


<?php
    if(isset($_POST['submit'])){
        $data = $_POST;
        $mstd = $data["mschu"].$data["mskhach"];
        $sql_add = "INSERT INTO trandau(\"MSTRANDAU\", \"BANTHANGCHU\", \"BANTHANGKHACH\") 
        VALUES ('$mstd', '$data[banthangchu]', '$data[banthangkhach]')";
        $sth = $db->prepare($sql_add);
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $sth->execute();
        
        foreach ($list_rank as $key => $value) {
            if($value['MSCLB'] == $data['mschu']) {
                $data_chu = $value;
            }
            if($value['MSCLB'] == $data['mskhach']) {
                $data_khach = $value;
            }
        }
        $data_chu['BANTHANG'] += $data['banthangchu'];
        $data_chu['BANTHUA'] += $data['banthangkhach'];
        $data_khach['BANTHANG'] += $data['banthangkhach'];
        $data_khach['BANTHUA'] += $data['banthangchu'];
        $data_chu['HIEUSO'] = $data_chu['BANTHANG'] - $data_chu['BANTHUA'];
        $data_khach['HIEUSO'] = $data_khach['BANTHANG'] - $data_khach['BANTHUA'];
        $data_chu['SOTRAN']++;
        $data_khach['SOTRAN']++;

        if($data["banthangchu"] > $data["banthangkhach"]) {
            $data_chu['THANG']++;
            $data_chu['DIEMSO'] += 3;
            $data_khach['THUA']++;
        }
        else if($data["banthangkhach"] > $data["banthangchu"]) {
            $data_khach['THANG']++;
            $data_khach['DIEMSO'] += 3;
            $data_chu['THUA']++;
        }
        else {
            $data_chu['HOA']++;
            $data_khach['HOA']++;
            $data_chu['DIEMSO']++;
            $data_khach['DIEMSO']++;
        }

        $sql_update = "UPDATE xephang
        SET \"SOTRAN\" = '$data_chu[SOTRAN]', \"THANG\" = '$data_chu[THANG]', \"HOA\" = '$data_chu[HOA]', \"THUA\" = '$data_chu[THUA]', \"BANTHANG\" = '$data_chu[BANTHANG]', \"BANTHUA\" = '$data_chu[BANTHUA]', \"HIEUSO\" = '$data_chu[HIEUSO]', \"DIEMSO\" = '$data_chu[DIEMSO]'
        WHERE \"MSCLB\" = '$data_chu[MSCLB]'";
        $sth = $db->prepare($sql_update);
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $sth->execute();

        $sql_update = "UPDATE xephang
        SET \"SOTRAN\" = '$data_khach[SOTRAN]', \"THANG\" = '$data_khach[THANG]', \"HOA\" = '$data_khach[HOA]', \"THUA\" = '$data_khach[THUA]', \"BANTHANG\" = '$data_khach[BANTHANG]', \"BANTHUA\" = '$data_khach[BANTHUA]', \"HIEUSO\" = '$data_khach[HIEUSO]', \"DIEMSO\" = '$data_khach[DIEMSO]'
        WHERE \"MSCLB\" = '$data_khach[MSCLB]'";
        $sth = $db->prepare($sql_update);
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $sth->execute();


        $sql_update = "UPDATE lichthidau
        SET \"GHICHU\" = 'FT'
        WHERE \"MSTRANDAU\" = '$mstd'";
        $sth = $db->prepare($sql_update);
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $sth->execute();

        foreach ($list_referee as $key => $value) {
            if($value['TENTRONGTAI'] == $data['trongtaichinh']) {
                $msrefchinh = $value['MSTRONGTAI']; 
            }
            if($value['TENTRONGTAI'] == $data['trongtaiphu']) {
                $msrefphu = $value['MSTRONGTAI'];
            }
        }

        $msdkchinh = $mstd."_Li";
        $sql_insert = "INSERT INTO dieukhien(\"MSDIEUKHIEN\", \"MSTRANDAU\", \"MSTRONGTAI\", \"VAITRO\")
        VALUES('$msdkchinh', '$mstd', '$msrefchinh', 'Linesman')";
        $sth = $db->prepare($sql_insert);
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $sth->execute();

        $msdkphu = $mstd."_Re";
        $sql_insert = "INSERT INTO dieukhien(\"MSDIEUKHIEN\", \"MSTRANDAU\", \"MSTRONGTAI\", \"VAITRO\")
        VALUES('$msdkphu', '$mstd', '$msrefphu', 'Referee')";
        $sth = $db->prepare($sql_insert);
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $sth->execute();

        for($i=1;$i<=$data['banthangchu'];$i++) {
            $dschinh = "dsghibanchu".$i;    
            foreach ($list_player as $key => $value) {
                if($data[$dschinh] == $value['TENCAUTHU']) {
                    $mschinh = $value['MSCAUTHU'];
                }
            }
            $sql_view = "SELECT dsghiban.\"MSCAUTHU\", dsghiban.\"SOBANTHANG\" FROM dsghiban WHERE \"MSCAUTHU\" = '$mschinh'";
            $sth=$db->prepare($sql_view);
            $sth->setFetchMode(PDO::FETCH_ASSOC);
            $sth->execute();
            $list_view=$sth->fetchAll();
            print_r($list_view);
            if($list_view == NULL) {
                $sql_insert = "INSERT INTO dsghiban(\"MSCAUTHU\", \"SOBANTHANG\")
                VALUES('$mschinh', '1')";
                $sth = $db->prepare($sql_insert);
                $sth->setFetchMode(PDO::FETCH_ASSOC);
                $sth->execute();
            } else {
                $sc = $list_view[0]['SOBANTHANG']++;
                $sql_update = "UPDATE dsghiban SET \"SOBANTHANG\" = '$sc' WHERE \"MSCAUTHU\" = '$mschinh'";
                $sth = $db->prepare($sql_update);
                $sth->setFetchMode(PDO::FETCH_ASSOC);
                $sth->execute();
            }
        }
        for($i=1;$i<=$data['banthangkhach'];$i++) {
            $dschinh = "dsghibankhach".$i;  
            foreach ($list_player as $key => $value) {
                if($data[$dschinh] == $value['TENCAUTHU']) {
                    $mschinh = $value['MSCAUTHU'];
                }
            }
            $sql_view = "SELECT dsghiban.\"MSCAUTHU\", dsghiban.\"SOBANTHANG\" FROM dsghiban WHERE \"MSCAUTHU\" = '$mschinh'";
            $sth=$db->prepare($sql_view);
            $sth->setFetchMode(PDO::FETCH_ASSOC);
            $sth->execute();
            $list_view=$sth->fetchAll();
            print_r($list_view);
            if($list_view == NULL) {
                $sql_insert = "INSERT INTO dsghiban(\"MSCAUTHU\", \"SOBANTHANG\")
                VALUES('$mschinh', '1')";
                $sth = $db->prepare($sql_insert);
                $sth->setFetchMode(PDO::FETCH_ASSOC);
                $sth->execute();
            } else {
                $sc = $list_view[0]['SOBANTHANG'] + 1;
                $sql_update = "UPDATE dsghiban SET \"SOBANTHANG\" = '$sc' WHERE \"MSCAUTHU\" = '$mschinh'";
                $sth = $db->prepare($sql_update);
                $sth->setFetchMode(PDO::FETCH_ASSOC);
                $sth->execute();
            }
        }

    }
?>

<script type="text/javascript">
    function update_score() {
        var num1 = 0;
        var num2 = 0;
        num1 += Number($("#banthangchu").val());
        num2 += Number($("  #banthangkhach").val());
        for(var i=1;i<=Math.max(num1,num2);++i) {
            var str = "#chu" + i.toString();
            $(str).attr("style", "visibility:hidden");
            var str = "#khach" + i.toString();
            $(str).attr("style", "visibility:hidden");
        }
        console.log(num1);
        console.log(num2);
        for(var i=1;i<=num1;i++) {
            var str = "#chu" + i.toString();
            $(str).attr("style", "display: inline-block");
        }
        for(var i=1;i<=num2;i++) {
            var str = "#khach" + i.toString();
            $(str).attr("style", "display: inline-block");
        }
        for(var i=Math.max(num1,num2)+1;i<=50;i++) {
            var str = "#chu" + i.toString();
            $(str).attr("style", "display: none");
            var str = "#khach" + i.toString();
            $(str).attr("style", "display: none");
        }

    }
    $("#banthangchu").on("change keyup paste", update_score);
    $("#banthangkhach").on("change keyup paste", update_score)
</script>
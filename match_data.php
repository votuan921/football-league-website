<?php
    $ok=0;
    session_start();
    if($_SESSION != NULL) {
        if($_SESSION['user'] == "votuan921@gmail.com") {
            $ok = 1;
        }
    }
?>
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

            <?php if($ok) {
                echo "<li style='margin-left: 3px;'><button class='btn btn-small' type='button'>Admin</button></li>";
                echo "<li style='margin-left: 3px;'><button class='btn btn-warning btn-small' id='logout' type='button'>Log out</button></li>";
            } else {
                echo "<li style='margin-left: 3px;'><button class='btn' type='button' id='login'>Sign in</button></li>";
            }
            ?>
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

    <div class="row">
        <?php
        $sql_match = "SELECT *,  DATE_PART('day',lichthidau.\"NGAYDAU\") AS day, DATE_PART('month',lichthidau.\"NGAYDAU\") AS month, chu.\"TRUSO\" AS city, chu.\"LOGO\" AS \"chuLogo\", khach.\"LOGO\" AS \"khachLogo\", chu.\"TENCLB\" AS chu, khach.\"TENCLB\" AS khach,DATE_PART('year',lichthidau.\"NGAYDAU\") AS year
            FROM lichthidau,trandau,trd_banthang,clb AS chu, clb AS khach, dieukhien, trongtai,svd, cauthu
            WHERE trandau.\"MSTRANDAU\" = '$_GET[id]' 
            AND trandau.\"MSTRANDAU\" = trd_banthang.\"MSTRANDAU\"
            AND lichthidau.\"MSTRANDAU\" = trandau.\"MSTRANDAU\"
            AND chu.\"MSCLB\" = lichthidau.\"MSCHU\"
            AND khach.\"MSCLB\" = lichthidau.\"MSKHACH\"
            AND dieukhien.\"MSTRANDAU\" = trandau.\"MSTRANDAU\"
            AND dieukhien.\"MSTRONGTAI\" = trongtai.\"MSTRONGTAI\"
            AND dieukhien.\"VAITRO\" = 'Referee'
            AND chu.\"MSSVD\" = svd.\"MSSVD\"
            AND trd_banthang.\"MSCAUTHU\" = cauthu.\"MSCAUTHU\"";
            $sth=$db->prepare($sql_match);
            $sth->execute();
            $match=$sth->fetch(PDO::FETCH_ASSOC);
        ?>
        <div class="span12">
            <?php
            $mschu = $match['MSCHU'];
            $mskhach = $match['MSKHACH']
            ?>
            <h3 class="title-bg">Match
            </h3>
            <h5><?php echo $match['day']." - ".$match['month']." - ".$match['year'] ?>&emsp;<i class="icon-user"></i><a href="referee_profile.php?&id=<?php echo $match['MSTRONGTAI'] ?>"><?php echo $match['TENTRONGTAI'] ?></a> &emsp;<i class="icon-map-marker"></i><?php echo $match['TENSVD'] ?>, <?php echo $match['city'] ?></h5>
        <div class="span4">
            <h2 class="title-bg" align="left"> <img src="img/clubLogo/<?php echo $match['chuLogo'] ?>" height="90px" width="90px"> <?php echo $match['chu'] ?> </h2>
        </div>
        <div class="span3">
            <h1 align="center"><b><?php echo $match['BANTHANGCHU'] ?>&ensp;-&ensp;<?php echo $match['BANTHANGKHACH'] ?></b></h1>
        </div>
        <div class="span4">
            <h2 class="title-bg" align="right"> <?php echo $match['khach'] ?> <img src="img/clubLogo/<?php echo $match['khachLogo'] ?>" height="90px" width="90px"></h2>
        </div>

        <?php
        $sql_score = "SELECT *
        FROM trd_banthang, cauthu, lichthidau
        WHERE trd_banthang.\"MSTRANDAU\" = '$_GET[id]'
        AND trd_banthang.\"MSTRANDAU\" = lichthidau.\"MSTRANDAU\"
        AND trd_banthang.\"MSCAUTHU\" = cauthu.\"MSCAUTHU\"
        AND trd_banthang.\"MSBANTHANG\" LIKE '$mschu%'
        ORDER BY trd_banthang.\"THOIDIEM\" ASC";
        $sth1=$db->prepare($sql_score);
        $sth1->setFetchMode(PDO::FETCH_ASSOC);
        $sth1->execute();
        $result1=$sth1->fetchAll();
        ?>

        <div class="span4">
            <?php
            foreach($result1 as $score){
            ?>
            <h6 align="right"><a href="player_detail.php?&id=<?php echo $score['MSCAUTHU'] ?>"><?php echo $score['TENCAUTHU'] ?> </a><small><?php echo $score['THOIDIEM'] ?>' </small><i class="icon-star"></i></h6>
            <?php
            }
            ?>
        </div>

        <?php
        $sql_score = "SELECT *, extract(hour from lichthidau.\"GIODAU\") as hour,extract(minute from lichthidau.\"GIODAU\") as minute
        FROM lichthidau
        WHERE lichthidau.\"MSTRANDAU\" = '$_GET[id]'";
        $sth2=$db->prepare($sql_score);
        $sth2->execute();
        $score=$sth2->fetch(PDO::FETCH_ASSOC);

        ?>
        <div class="span3">
            <h6 align="center">Kick off: <b> <?php echo $score['hour']." : "; if ($score['minute']==0) {
                echo "00";
            }else {
                echo $score['minute'];
            } ?></b> </h6>
        </div>

        <?php
        $sql_score = "SELECT *
        FROM trd_banthang, cauthu, lichthidau
        WHERE trd_banthang.\"MSTRANDAU\" = '$_GET[id]'
        AND trd_banthang.\"MSTRANDAU\" = lichthidau.\"MSTRANDAU\"
        AND trd_banthang.\"MSCAUTHU\" = cauthu.\"MSCAUTHU\"
        AND trd_banthang.\"MSBANTHANG\" LIKE '$mskhach%'
        ORDER BY trd_banthang.\"THOIDIEM\" ASC";
        $sth3=$db->prepare($sql_score);
        $sth3->setFetchMode(PDO::FETCH_ASSOC);
        $sth3->execute();
        $result3=$sth3->fetchAll();
        ?>

        <div class="span4">
            <?php
            foreach($result3 as $score){
            ?>
            <h6 align="left"><i class="icon-star"></i><small> <?php echo $score['THOIDIEM'] ?>'</small><a href="player_detail.php?&id=<?php echo $score['MSCAUTHU'] ?>"> <?php echo $score['TENCAUTHU'] ?> </a></h6>
            <?php
            }
            ?>
        </div>
    </div>
        
    </div>

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
<script>
    $('#login').click(function() {
        location.href = "admin/pages/login.php";
    });
    $('#logout').click(function() {
        location.href = "admin/pages/logout.php";
    });
    

</script>
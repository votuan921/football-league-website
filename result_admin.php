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
             <?php if($ok) {
                echo "<li><button class='btn btn-small' type='button'>Admin</button></li>";
                echo "<li style='margin-left: 3px;'><button class='btn btn-warning btn-small' id='logout' type='button'>Log out</button></li>";
            } else {
                echo "<li><button class='btn' type='button' id='login'>Sign in</button></li>";
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


    <!-- Page Content
    ================================================== --> 
    <div class="row">
        <?php
        $sql_date = "SELECT DISTINCT \"NGAYDAU\", DATE_PART('day',lichthidau.\"NGAYDAU\") AS day, DATE_PART('month',lichthidau.\"NGAYDAU\") AS month, DATE_PART('year',lichthidau.\"NGAYDAU\") AS year
            FROM lichthidau, trandau
            WHERE lichthidau.\"MSTRANDAU\" = trandau.\"MSTRANDAU\"
            ORDER BY \"NGAYDAU\" DESC
            LIMIT 10";
            $sth=$db->prepare($sql_date);
            $sth->setFetchMode(PDO::FETCH_ASSOC);
            $sth->execute();
            $result=$sth->fetchAll();
        ?>


        <!-- Gallery Items
        ================================================== --> 
        <div class="span12">
            <h3 class="title-bg">Results<a href="results_add.php" style="float: right;">Add</a></h3>
            <?php
                foreach($result as $date) {
            ?>
            <div class="span11">
                <h5><?php echo $date['day']." - ".$date['month']." - ".$date['year']?></h5>
            </div>
            <?php
                $ngay = $date['NGAYDAU'];
                $sql_result = "SELECT *, chu.\"LOGO\" logochu, khach.\"LOGO\" logokhach, chu.\"TRUSO\" AS city
                FROM trandau,lichthidau,clb AS chu, clb AS khach, svd
                WHERE  trandau.\"MSTRANDAU\" = lichthidau.\"MSTRANDAU\" 
                AND lichthidau.\"MSCHU\" = chu.\"MSCLB\"
                AND lichthidau.\"MSKHACH\" = khach.\"MSCLB\"
                AND lichthidau.\"MSSVD\" = svd.\"MSSVD\"
                AND lichthidau.\"NGAYDAU\" = '$ngay' ";
                //$result_query = mysql_query($sql_result);
                $sth=$db->prepare($sql_result);
                $sth->setFetchMode(PDO::FETCH_ASSOC);
                $sth->execute();
                $result1=$sth->fetchAll();
            ?>
            <?php
                foreach($result1 as $result) {
            ?>
            <div class="span11">
                <h4 class="title-bg"><tab3></tab3> <?php echo $result['MSCHU'] ?> 
                    <img src="img/bigLogo/<?php echo $result['logochu'] ?>" width="30px" height="30px"> 
                        &nbsp;&nbsp;&nbsp;&nbsp;<a href="match_data.php?&id=<?php echo $result['MSTRANDAU'] ?>"> <?php echo $result['BANTHANGCHU'] ?>-<?php echo $result['BANTHANGKHACH'] ?> </a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="img/bigLogo/<?php echo $result['logokhach'] ?>" width="30px" height="30px"> <?php echo $result['MSKHACH'] ?> <tab3></tab3>
                    <small><i class="icon-map-marker"></i>
                        <i><?php echo $result['TENSVD'] ?>, <?php echo $result['city'] ?></i>
                    </small>
     
                </h4>
            </div>
            <?php
            }
            ?>
            <?php
            }
            ?>
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
<script>
    $('#login').click(function() {
        location.href = "admin/pages/login.php";
    });
    $('#logout').click(function() {
        location.href = "admin/pages/logout.php";
    });
    

</script>

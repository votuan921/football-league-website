<?php
    $ok = 0;
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
<link rel="stylesheet" href="css/flexslider.css" />
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
<script src="js/bootstrap.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/jquery.custom.js"></script>
<script type="text/javascript">
$(document).ready(function () {

    $("#btn-blog-next").click(function () {
      $('#blogCarousel').carousel('next')
    });
     $("#btn-blog-prev").click(function () {
      $('#blogCarousel').carousel('prev')
    });

     $("#btn-client-next").click(function () {
      $('#clientCarousel').carousel('next')
    });
     $("#btn-client-prev").click(function () {
      $('#clientCarousel').carousel('prev')
    });
    
});

 $(window).load(function(){

    $('.flexslider').flexslider({
        animation: "slide",
        slideshow: true,
        start: function(slider){
          $('body').removeClass('loading');
        }
    });  
});

</script>

</head>

<body class="home">
<?php
    include('config.php');
?>
    <!-- Color Bars (above header)-->
	<div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>
    
    <div class="container">
    
      <div class="row header"><!-- Begin Header -->
      
        <!-- Logo
        ================================================== -->
        <div class="span3 logo">
        	<a href="index.php"><h1>TVQ League</h1></a>
            
        </div>
        
        <!-- Main Navigation
        ================================================== -->
        <div class="span9 navigation">
            <div class="navbar hidden-phone">
            
            <ul class="nav">
            <li class="active">
                <a href="index.php">Home</a>
            </li>
            <li class="dropdown">
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
     
    <div class="row headline"><!-- Begin Headline -->
    
     	<!-- Slider Carousel
        ================================================== -->
        <div class="span8">
            <div class="flexslider">
              <ul class="slides">
                <li><a href=""><img src="img/gallery/slider-3.jpg" alt="slider" /></a></li>
                <li><a href=""><img src="img/gallery/slider-2.jpg" alt="slider" /></a></li>
                <li><a href=""><img src="img/gallery/slider-4.jpg" alt="slider" /></a></li>
                <li><a href=""><img src="img/gallery/slider-5.jpg" alt="slider" /></a></li>
              </ul>
            </div>
        </div>
        
        <!-- Headline Text
        ================================================== -->
        <div class="span4">
        	<h3>Welcome to TVQ League. <br /></h3>
            <p class="lead">You can see latest match's result or our clubs and players's details.</p>
            <p>The game of life is a lot like football. You have to tackle your problems, block your fears and score your points when you get the opportunity.</p>
            <a href="#"><i class="icon-plus-sign"></i>Read More</a> 
        </div>
    </div><!-- End Headline -->

    <div class="row gallery-row"><!-- Begin Gallery Row --> 
      <?php

        $sql_clb = "SELECT *
            FROM svd, clb
            WHERE  svd.\"MSSVD\" = clb.\"MSSVD\" ";
            $sth=$db->prepare($sql_clb);
            $sth->setFetchMode(PDO::FETCH_ASSOC);
            $sth->execute();
            $result=$sth->fetchAll();

    ?>
    	<div class="span12">
            <h3 class="title-bg">All Clubs 
            </h3>
    	
        <!-- Gallery Thumbnails
        ================================================== -->

            <div class="row clearfix no-margin">
            <ul class="gallery-post-grid holder">
                <?php
                foreach($result as $clb) {   
                ?>
                    <!-- Gallery Item 1 -->
                    <li  class="span3 gallery-item" data-id="id-1" data-type="illustration">
                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="club_info.php?&id=<?php echo $clb['MSCLB'] ?>" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="club_info.php?&id=<?php echo $clb['MSCLB'] ?>"><img src="img/clubLogo/<?php echo $clb['LOGO'] ?>" alt="Club"></a>
                        <span class="project-details"><a href="club_info.php?&id=<?php echo $clb['MSCLB'] ?>"><?php echo $clb['TENCLB'] ?></a>Stadium: <?php echo $clb['TENSVD']?></span>
                    </li>
                  <?php
                    }
                    ?>
                </ul>
                </div>
            </div>
 
    </div><!-- End Gallery Row -->
    
    <div class="row"><!-- Begin Bottom Section -->
    <?php

        $sql_result = "SELECT *, chu.\"MSCLB\" AS masochu, khach.\"MSCLB\" AS masokhach, trandau.\"BANTHANGCHU\" AS banthangchu, trandau.\"BANTHANGKHACH\" banthangkhach, chu.\"LOGO\" logochu, khach.\"LOGO\" logokhach, lichthidau.\"NGAYDAU\" ngaydau
            FROM trandau,lichthidau,clb AS chu, clb AS khach
            WHERE  trandau.\"MSTRANDAU\" = lichthidau.\"MSTRANDAU\" 
            AND lichthidau.\"MSCHU\" = chu.\"MSCLB\"
            AND lichthidau.\"MSKHACH\" = khach.\"MSCLB\"";
            //$query = mysql_query($sql_result);
            $sth=$db->prepare($sql_result);
            $sth->setFetchMode(PDO::FETCH_ASSOC);
            $sth->execute();
            $result1=$sth->fetchAll();
    ?>
    	<!-- Blog Preview
        ================================================== -->
    	<div class="span5">

            <h3 class="title-bg">Results 
            </h3>

        <div id="blogCarousel" class="carousel slide ">
        <div class="span3">

            <h5>Sunday 5 November</h5>

        </div>
            <div class="span4">
                <?php
                foreach($result1 as $result ) {   
                ?>
            <h4 class="title-bg">&emsp;&emsp;&emsp;&emsp; <?php echo $result['masochu'] ?>
                <img src="img/bigLogo/<?php echo $result['logochu'] ?>" width="30px" height="30px"> 
                &nbsp;&nbsp;&nbsp;&nbsp; <a href="match_data.php?&id=<?php echo $result['MSTRANDAU'] ?>"><?php echo $result['banthangchu'] ?>-<?php echo $result['banthangkhach'] ?></a> &nbsp;&nbsp;&nbsp;&nbsp;
                <img src="img/bigLogo/<?php echo $result['logokhach'] ?>" width="30px" height="30px"> <?php echo $result['masokhach'] ?> 
            </h4>
            <?php
            }
            ?>
        </div>
            </div> 	
        </div>
        
        <!-- Client Area
        ================================================== -->
        <div class="span7">

            <h3 class="title-bg">TABLE 
            </h3>
        <?php

        $sql_table = "SELECT *
            FROM clb,xephang
            WHERE xephang.\"MSCLB\" = clb.\"MSCLB\"
            ORDER BY xephang.\"DIEMSO\" DESC, xephang.\"HIEUSO\" DESC";
            //$table_query = mysql_query($sql_table);
            $sth=$db->prepare($sql_table);
            $sth->setFetchMode(PDO::FETCH_ASSOC);
            $sth->execute();
            $result=$sth->fetchAll();
            $n = 0
        ?>
            <!-- Client Testimonial Slider-->
            <div id="clientCarousel" class="carousel slide no-margin">
                <div class="span1"><h5>Pos</h5></div>
                <div class="span2"><h5>Club</h5></div>
                <div class="span1"><h5>PI</h5></div>
                <div class="span1"><h5>GD</h5></div>
                <div class="span1"><h5>Pts</h5></div>       


            <?php
                foreach($result as $table){   
                ?>

                <div class="span1"><h4><?php $n = $n + 1; echo($n) ?></h4></div>
                <div class="span2"><h4><img src="img/bigLogo/<?php echo $table['LOGO'] ?>" width="15px" height="15px"> <?php echo $table['MSCLB'] ?> </h4></div>
                <div class="span1"><h4><?php echo $table['SOTRAN'] ?></h4></div>
                <div class="span1"><h4><?php echo $table['HIEUSO'] ?></h4></div>
                <div class="span1"><h4><?php echo $table['DIEMSO'] ?></h4></div>       

            <?php
            }
            ?>
            </div>

        </div>
        
    </div><!-- End Bottom Section -->
    
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

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

    <div class="row">
        <div class="span12">
            <h3 class="title-bg">Club
            </h3>
        <?php
        if(isset($_GET['searchtext'])){
        $searchtext = $_GET['searchtext'];
        $sql_clb = "SELECT *
            FROM svd, clb
            WHERE  svd.\"MSSVD\" = clb.\"MSSVD\" 
            AND lower(clb.\"TENCLB\") LIKE '%$searchtext%' ";
            $query = $db->query($sql_clb);
            $num = $query->rowCount($query);
            $sth=$db->prepare($sql_clb);
            $sth->setFetchMode(PDO::FETCH_ASSOC);
            $sth->execute();
            $result1=$sth->fetchAll();
        if($searchtext == '')
            {
        ?>
        <h5>You have not entered search data yet</h5>

        <?php
        }else{
         if($num == 0){
        ?>
        <h5>No results have matched your search</h5>
        <?php
        }else{
        ?>
        <!-- Gallery Items
        ================================================== -->
            <div class="row clearfix no-margin">
            <ul class="gallery-post-grid holder">
                <?php
                foreach($result1 as $clb) {   
                ?>
                    <!-- Gallery Item 1 -->
                    <li  class="span3 gallery-item" data-id="id-1" data-type="illustration">
                        <!--<span class="gallery-hover-4col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="club_info.php?&id=<?php echo $clb['MSCLB']?>" class="item-details-link"></a>
                            </span>
                        </span>-->
                        <a href="club_info.php?&id=<?php echo $clb['MSCLB']?>"><img src="img/clubLogo/<?php echo $clb['LOGO'] ?>" alt="Club"></a>
                        <span class="project-details"><a href="club_info.php?&id=<?php echo $clb['MSCLB']?>"><?php echo $clb['TENCLB'] ?></a>Stadium: <?php echo $clb['TENSVD']?></span>
                    </li>
                  <?php
                    }
                    ?>
                </ul>
                </div>
                <?php
                }
                }
                }
                ?>
            </div>
        </div>
    <!-- Page Content
    ================================================== --> 
    <div class="row">
        <div class="span12">
            <h3 class="title-bg">Players
            </h3>
        <?php
		if(isset($_GET['searchtext'])){
		$searchtext = $_GET['searchtext'];
        $sql_player="SELECT * 
                FROM cauthu,quoctich,clb
                WHERE lower(cauthu.\"TENCAUTHU\") LIKE '%$searchtext%' 
                AND cauthu.\"MSCLB\" = clb.\"MSCLB\"
                AND cauthu.\"QUOCTICH\" = quoctich.\"QUOCTICH\"";
                $query1 = $db->query($sql_player);
                $num1= $query1->rowCount($query1);
                $sth1=$db->prepare($sql_player);
                $sth1->setFetchMode(PDO::FETCH_ASSOC);
                $sth1->execute();
                $result2=$sth1->fetchAll();
        if($searchtext == '')
            {
        ?>
        <h5>You have not entered search data yet</h5>

        <?php
        }else{
         if($num1 == 0){
		?>
        <h5>No results have matched your search</h5>
        <?php
        }else{
        ?>
        <!-- Gallery Items
        ================================================== -->

            <div class="row clearfix">
                <ul class="gallery-post-grid holder">
                <?php
                    foreach($result2 as $search) {
                ?>

                    <!-- Gallery Item 1 -->
                    <li  class="span2 gallery-item" data-id="id-1" data-type="illustration">
                        <a href="player_detail.php?&id=<?php echo $search['MSCAUTHU'] ?>"><img src="img/player/<?php echo $search['HINHANH'] ?>" alt="Player"></a>
                        <span class="project-details"><a href="player_detail.php?&id=<?php echo $search['MSCAUTHU'] ?>"><?php echo $search['TENCAUTHU'] ?></a>Club: &ensp;<img src="img/bigLogo/<?php echo $search['LOGO'] ?>" width="20px" height="20px"><br>Nationality: &ensp;<img src="img/nationality/<?php echo $search['FLAG'] ?>" width="18px" height="12px"></span>
                    </li>
                    

                <?php
                }
                ?>

                </ul>
            </div>
            <?php
            }
            }
            }
            ?>

        </div><!-- End gallery list-->
    </div>


        <div class="row">
        <div class="span12">
            <h3 class="title-bg">Managers
            </h3>
        <?php
        if(isset($_GET['searchtext'])){
        $searchtext = $_GET['searchtext'];
        $sql_manage="SELECT *
            FROM bhl, quoctich, clb
            WHERE bhl.\"QUOCTICH\" = quoctich.\"QUOCTICH\" 
            AND bhl.\"VAITRO\" = 'Manager' 
            AND bhl.\"MSCLB\" = clb.\"MSCLB\"
            AND lower(bhl.\"TENHL\") LIKE '%$searchtext%'";
                $query2 = $db->query($sql_manage);
                $num2= $query2->rowCount($query2);
                $sth2=$db->prepare($sql_manage);
                $sth2->setFetchMode(PDO::FETCH_ASSOC);
                $sth2->execute();
                $result3=$sth2->fetchAll();
        if($searchtext == '')
            {
        ?>
        <h5>You have not entered search data yet</h5>

        <?php
        }else{
         if($num2 == 0){
        ?>
        <h5>No results have matched your search</h5>
        <?php
        }else{
        ?>
        <!-- Gallery Items
        ================================================== -->

            <div class="row clearfix">
                <ul class="gallery-post-grid holder">
                <?php
                    foreach($result3 as $hlv) {
                ?>

                    <!-- Gallery Item 1 -->
                    <li  class="span2 gallery-item" data-id="id-1" data-type="illustration">
                        <a href="manager_profile.php?&id=<?php echo $hlv['MSHL'] ?>"><img src="img/manager/<?php echo $hlv['HINHANH'] ?>" alt="Manager"></a>
                        <span class="project-details"><a href="manager_profile.php?&id=<?php echo $hlv['MSHL'] ?>"><?php echo $hlv['TENHL'] ?></a>Club: &ensp;<img src="img/bigLogo/<?php echo $hlv['LOGO'] ?>" width="20px" height="20px"><br>Nationality: &ensp;<img src="img/nationality/<?php echo $hlv['FLAG'] ?>" width="27px" height="18px"></span>
                    </li>
                    

                <?php
                }
                ?>

                </ul>
            </div>
            <?php
            }
            }
            }
            ?>
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
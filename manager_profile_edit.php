<?php
    $ok=0;
    session_start();
    if($_SESSION == NULL) {        
        header('Location: manager_profile.php?&id='.$_GET['id']);
    }
    if($_SESSION != NULL) {
        if($_SESSION['user'] == "votuan921@gmail.com") {
            $ok=1;
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
            <li class="active"><a href="all_manager.php">Managers</a></li>
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
            <?php
            	$id = $_GET['id'];
                $sql_manager = "SELECT bhl.*, quoctich.*, clb.* , extract(year from current_date)-extract(year from bhl.\"NGAYSINH\") AS tuoi,
                extract(year from bhl.\"NGAYSINH\") as year,extract(month from \"NGAYSINH\") as month, extract(day from \"NGAYSINH\") as day  
                FROM bhl, quoctich, clb
                WHERE bhl.\"MSHL\" = '$_GET[id]'
                AND bhl.\"QUOCTICH\" = quoctich.\"QUOCTICH\"  
                AND bhl.\"MSCLB\" = clb.\"MSCLB\"";
                //$query = mysql_query($sql_manager);
                $sth=$db->prepare($sql_manager);
                $sth->execute();
                $hlv=$sth->fetch(PDO::FETCH_ASSOC);
                if(0<$hlv['day'] && $hlv['day']<10){
                    $hlv['day']="0".$hlv['day'];
                }
                if(0<$hlv['month'] && $hlv['month']<10){
                    $hlv['month']="0".$hlv['month'];
                }
            ?>

        <!-- Manager
        ================================================== --> 
        <div class="span12 gallery-single">

            <div class="row">
                <form id="manager_form" method="POST" enctype="multipart/form-data">
                <div class="span5">
                    <img src="img/manager/<?php echo $hlv['HINHANH'] ?>"  alt="Manager" width="350px" height="350px">
                </div>
                <div class="span7">
                    <h6><i>Manager Profile</i></h6>
                    <h2><input name="tenhl" type="text" value="<?php echo $hlv['TENHL'] ?>"></h2>
                    <ul class="project-info">
                        <li><h6>Nationality:</h6> <img src="img/nationality/<?php echo $hlv['FLAG'] ?>" width="30px" height="20px">&ensp; 
                        	<select name="quoctich">
                        		<?php
                        			foreach($list_nationality as $value){
                        				echo "<option ";
                        				if($value == $hlv['QUOCTICH']) {
                        					echo "selected";
                        				}
                        				echo ">".$value."</option>";  
                        			}
                        		?>
                        	</select>
                        </li>
                        <li><h6>Club:</h6> <img src="img/bigLogo/<?php echo $hlv['LOGO'] ?>" width="25px" height="25px" > &ensp;
                        	<select name="msclb">
                                <?php
                                    foreach($list_clb as $value){
                                        if($value == $hlv['MSCLB']) {
                                            echo "<option selected>".$value."</option>";
                                        }
                                        else echo "<option>".$value."</option>";
                                    }
                                ?>
                            </select>
                        </li>
                        <li><h6>Role:</h6>
                        	<select name="vaitro">
                        		<?php 
                        			foreach($list_role as $value){
                        				echo "<option ";
                        				if($value == $hlv['VAITRO']) {
                        					echo "selected";
                        				}
                        				echo ">".$value."</option>";  
                        			}
                        		?>
                        	</select>
                        </li>
                        <li><h6>Sex:</h6>
                        	<select name="gioitinh">
                        		<option <?php if($hlv['GIOITINH'] == "Male") echo "selected" ?>>Male</option>
                        		<option <?php if($hlv['GIOITINH'] == "Female") echo "selected" ?>>Female</option>
                        	</select>
                        </li>

                        <li><h6>Date of birth:</h6> 
                            <input name="ngaysinh" type="date" value="<?php echo $hlv['year']."-".$hlv['month']."-".$hlv['day'] ?>">
                        </li>
                    </ul>

                    <input name="submit" type="submit" class="btn btn-inverse pull-left" type="button" value="Edit">
                    <a href="all_manager.php" class="pull-right"><i class="icon-arrow-left"></i>Back to Managers</a>
                </div>
            	</form>
                <button id="delete" class="btn btn-inverse pull-left" mshl="<?php echo $id?>">Delete</button>
            </div>

        </div><!-- End gallery-single-->

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
	if(isset($_POST['submit'])) {
		$data = $_POST;
		$sql_update = "UPDATE bhl 
            SET \"HINHANH\" = '$hlv[HINHANH]', \"TENHL\" = '$data[tenhl]', \"QUOCTICH\" = '$data[quoctich]', \"MSCLB\" = '$data[msclb]', \"VAITRO\" = '$data[vaitro]', \"NGAYSINH\" = '$data[ngaysinh]', \"GIOITINH\" = '$data[gioitinh]'
            WHERE \"MSHL\" = '$id'";
        $sth=$db->prepare($sql_update);
        $sth->execute();
        
	}
?>
<script>
    $('#delete').click(function() {
        location.href = "manager_profile_delete.php?&id=" + $(this).attr('mshl'); 
    });
    $('#login').click(function() {
        location.href = "admin/pages/login.php";
    });
    $('#logout').click(function() {
        location.href = "admin/pages/logout.php";
    });
    
</script>


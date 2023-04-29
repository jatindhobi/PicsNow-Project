<html>
    <head>
        <title>View Services - Picsnow Photography</title>
    </head>
</html>
<?php
include ("dbconnect.php");
include("add_service.php");
?>  
<style>

    /*!
 * Start Bootstrap - Simple Sidebar (https://startbootstrap.com/)
 * Copyright 2013-2016 Start Bootstrap
 * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap/blob/gh-pages/LICENSE)
 */

 body {
    overflow-x: hidden;
 }

/* Toggle Styles */

#wrapper {
    padding-left: 0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled {
    padding-left: 250px;
}

#sidebar-wrapper {
/*     
  position: absolute; */
    left: 250px;
    width: 0;
    height: 100%;
    margin-left: -250px;
    /*overflow-y: auto;*/
    background: #000;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled #sidebar-wrapper {
    width: 250px;
}

#page-content-wrapper {
    width: 100%;
    position: absolute;
    padding: 15px;
}

#wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-right: -250px;
}

/* Sidebar Styles */

.sidebar-nav {
    /* position: absolute; */
    top: 0;
    width: 250px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.sidebar-nav li {
    text-indent: 20px;
    line-height: 40px;
}

.sidebar-nav li a {
    display: block;
    text-decoration: none;
    color: #999999;
}

.sidebar-nav li a:hover {
    text-decoration: none;
    color: #fff;
    background: rgba(255,255,255,0.2);
}

.sidebar-nav li a:active,
.sidebar-nav li a:focus {
    text-decoration: none;
}

.sidebar-nav > .sidebar-brand {
    height: 65px;
    font-size: 18px;
    line-height: 60px;
}

.sidebar-nav > .sidebar-brand a {
    color: #999999;
}

.sidebar-nav > .sidebar-brand a:hover {
    color: #fff;
    background: none;
}

@media(min-width:768px) {
    #wrapper {
        padding-left: 250px;
    }

    #wrapper.toggled {
        padding-left: 0;
    }

    #sidebar-wrapper {
        width: 250px;
    }

    #wrapper.toggled #sidebar-wrapper {
        width: 0;
    }

    #page-content-wrapper {
        padding: 20px;
        position: relative;
    }

    #wrapper.toggled #page-content-wrapper {
        position: relative;
        margin-right: 0;
    }

    .dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
}

</style>
<?php include("header.php") ?>

<section class="cid-ryfUPSJvYV mbr-parallax-background" id="header03-1f">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);"></div>

    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10 col-lg-12">
                <h1 class="mbr-section-title mbr-semibold pb-3 mbr-fonts-style display-1">Services</h1>            
            </div>
        </div>
    </div>
    
</section>
<section class="cid-ryh8XVUoGh" id="content04-3a">

<?php 
if(isset($_SESSION['user'])){
?>
<div id="wrapperr">
    <div class="row">
    <div class="col-md-2">

<!-- Sidebar -->

<?php

include("admin-sidebar.php");

?> 
<!-- End Sidebar -->
</div>
    <div class="col-md-10">


        <!-- /#sidebar-wrapper --> 
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>View Services</h1>
                    </div>

                    <div class="col-lg-12">
                    <?php if(isset($del_success)){?>
                    <div class="alert alert-success" role="alert">
                       <?php echo $del_success; ?>
                    </div>
                    <?php } ?>
					<table class="table">
						<thead>
						<tr>
							<th>Service Name</th>
							<th>Service Image</th>
							<th>Action</th>
							
						</tr>
						</thead>
						<tbody>
							<?php 
							$img = mysqli_query($conn, "SELECT * FROM services_tb");
							while ($row = mysqli_fetch_array($img)) {     
							?>
						<tr>
							<td><?php echo $row['service_name'];  ?></td>
							<td><img class="service_img" src="service_image/<?php echo $row['service_img'];  ?>" alt="Girl in a jacket" width="500" height="600"></td>
							<td><a href="admin-view-service.php?image_id=<?php echo $row['image_id']; ?>">Delete</a> | <a href="admin-edit-service.php?sid=<?php echo $row['image_id']; ?>">Edit</a></td>
						</tr>
						<?php } ?>                                                                      
						
						</tbody>    
					</table>
                    </div>

                </div>
            </div>
        </div>


    </div>
</div>
<!-- /#page-content-wrapper -->

</div>
<?php }else{
    header("location: /picsnow");

 } ?>
<!-- /#wrapper -->
</section>


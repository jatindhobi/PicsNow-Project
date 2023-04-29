
<?php 
ob_start();

session_start();




/*s
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
else{
  $loggedin = false;
}
*/
?>

<!DOCTYPE html>
<html  >
 
<!-- Mirrored from mobirise.com/extensions/photom4/photoshopdemo/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Mar 2023 15:54:46 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <!-- Site made with Mobirise Website Builder v4.11.0, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.11.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta name="description" content="New PhotoM4 HTML Template - Download Now!">
  
  <link rel="stylesheet" href="./assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="./assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="./assets/tether/tether.min.css">
  <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="./assets/dropdown/css/style.css">
  <link rel="stylesheet" href="./assets/socicon/css/styles.css">
<?php /*poortfolio*/?>
  <link rel="stylesheet" href="./assets/as-pie-progress/css/progress.min.css">
  <?php /*end poortfolio*/?>
  <link rel="stylesheet" href="./assets/formstyler/jquery.formstyler.css">
  <link rel="stylesheet" href="./assets/formstyler/jquery.formstyler.theme.css">
  <link rel="stylesheet" href="./assets/datepicker/jquery.datetimepicker.min.css">
  <link rel="stylesheet" href="./assets/theme/css/style.css">
  <link rel="stylesheet" href="./assets/gallery/style.css">
  <link rel="preload" as="style" href="./assets/mobirise/css/mbr-additional.css">
  <link rel="stylesheet" href="./assets/mobirise/css/mbr-additional.css" type="text/css">

</head>
<body>
<?php /*
<!-- Analytics -->
<!-- Google Analytics -->
<!-- Google Tag Manager -->
<noscript><iframe src="http://www.googletagmanager.com/ns.html?id=GTM-PFK425"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PFK425');</script>
<!-- End Google Tag Manager -->
<!-- /Google Analytics -->
<!-- /Analytics -->

*/?>
  <section class="menu cid-ryfQpXufii" once="menu" id="menu01-21">

    


    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">


        <div class="icon-wrap align-right">
            
            
        </div>

        <div class="menu-wrap">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="menu-logo">
                <div class="navbar-brand">
                    
                    <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-2" href="index.html">
                        <a><img src="./assets/images/pnlogo2.png" alt="" height="70" width="70"/></a></span>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                

                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                        <a class="nav-link link text-white display-4" href="index.php">
                            HOME
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="about_us.php">
                            ABOUT US
                        </a>                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="services.php">
                            SERVICES
                        </a>                       
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="portfolio.php">
                            PORTFOLIO
                        </a>                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="pricing.php">
                            PRICING PACKAGES
                        </a>                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="contact_us.php">
                            CONTACT US
                        </a>                        
                    </li>

                    <?php $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
                   //echo $_SESSION['user'];

                   if(isset($_SESSION['user'])){
                    

                    ?>
                    <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="/picsnow/login.php?logout=1">
                            LOGOUT
                        </a>
                    </li>
                    <?php } ?>
</ul>

            </div>
        </div>
    </nav>
</section>
<?php 

if(isset($_GET['logout'])) {
    
    session_destroy();
    unset($_SESSION['loggedin']);
    unset($_SESSION['username']);
    unset($_SESSION['user']);
    header("location: /picsnow");
   }
?>
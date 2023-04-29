<html>
    <head>
        <title>Services - Picsnow Photography</title>
    </head>
</html>

<?php 
include("header.php");
include ("dbconnect.php");
?>

<section class="cid-ryfUfp4k9Q mbr-parallax-background" id="header03-1b">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);"></div>

    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10 col-lg-12">
                <h1 class="mbr-section-title mbr-semibold pb-3 mbr-fonts-style display-1">Our Services</h1>       
            </div>
        </div>
    </div>
    
</section>

<section class="features6 popup-btn-cards cid-rEuPsOKUMN" id="features09-43">

    <div class="container">
        <div class="row main justify-content-center">

        <?php 
            $img = mysqli_query($conn, "SELECT * FROM services_tb");
            while ($row = mysqli_fetch_array($img)) {     
        ?>
            <div class="col-lg-6 p-4">
                <div class="image-element card-wrapper">
                    <img class="service_img" src="service_image/<?php echo $row['service_img'];  ?>">
                    <div class="mbr-overlay card-overlay"></div>
                    <div class="wrapper">
                        <h3 class="card-title mbr-fonts-style align-left mbr-white display-2">
                            <?php echo $row['service_name'];  ?>
                        </h3>
                        <div class="collapsed-content">
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include("footer.php") ?>
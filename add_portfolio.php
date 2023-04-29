<?php
include ("dbconnect.php");

if(isset($_POST["portfolio_submit"])){ 
   
  // Content
if( isset($_POST['portfolio_name']) && !empty($_POST['portfolio_name']) ){
    $portfolio_name=$_POST['portfolio_name'];
}else{
    $portfolio_name="";
}

// Image
if ( isset($_FILES['portfolio_img']['tmp_name']) && !empty($_FILES['portfolio_img']['tmp_name']) ) {
    $random=rand(10,100);
    $file=$_FILES['portfolio_img']['tmp_name'];
    $portfolio_img = $_FILES["portfolio_img"] ["name"];
    $image_name= addslashes($_FILES['portfolio_img']['name']);
    $size = $_FILES["portfolio_img"] ["size"];
    $error = $_FILES["portfolio_img"] ["error"];

    if ($error > 0){
        die("Error uploading file! Code $error.");
    }
    if($size > 10000000){ //conditions for the file
        die("Format is not allowed or file size is too big!");
    }

    move_uploaded_file($_FILES["portfolio_img"]["tmp_name"],"portfolio_image/" . $_FILES["portfolio_img"]["name"]);          
    $location="portfolio_image/" . $_FILES["portfolio_img"]["name"];
}else{
    $location="";
}

if( !empty($portfolio_name) || !empty($location) ){

     $sql = "INSERT INTO `portfolio_tb`(`portfolio_name`,`portfolio_img`)VALUES ('$portfolio_name','$location')";
    if (mysqli_query($conn, $sql)) {
        echo "successfully !";
    }
    else {
    echo "Error: " . $sql . "" . mysqli_error($cn);
 }

}
    
}
?>  
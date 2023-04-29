
<?php

include ("dbconnect.php");


if(isset($_POST["service_submit"])){ 
   
    // Content
    if( isset($_POST['service_name']) && !empty($_POST['service_name']) ){
        $service_name=$_POST['service_name'];
    }else{
        $service_name="";
    }

    $ppic=$_FILES["service_img"]["name"];
    // get the image extension
    $extension = substr($ppic,strlen($ppic)-4,strlen($ppic));
    // allowed extensions
    $allowed_extensions = array(".jpg","jpeg",".png",".gif");
    // Validation for allowed extensions .in_array() function searches an array for a specific value.
    if(!in_array($extension,$allowed_extensions))
    {
        $error= "Invalid format. Only jpg / jpeg/ png /gif format allowed";
        //echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
    }
    else
    {
        //rename the image file
        $imgnewfile=md5($ppic).time().$extension;
        // Code for move image into directory
        move_uploaded_file($_FILES["service_img"]["tmp_name"],"service_image/".$imgnewfile);
        // Query for data insertion
        $query=mysqli_query($conn, "insert into services_tb(service_name,service_img) value('$service_name','$imgnewfile' )");
        if ($query) {
            //echo "<script>alert('You have successfully inserted the data');</script>";
            $succes= "You have successfully inserted the data";
        } else{
            $error= "Something Went Wrong. Please try again";
            //echo "<script>alert('Something Went Wrong. Please try again');</script>";
        }
    }
}


if (isset($_GET['image_id'])) {
    $id = $_GET['image_id'];
    $sql_delete = "DELETE FROM `services_tb` WHERE `image_id`='". $_GET["image_id"] ."'";
    if (mysqli_query($conn, $sql_delete)) {
        $del_success="Delete Service Successfully !";
    }
} 



if(isset($_POST['service_edit_submit']))
  {

        $edit_id=$_GET['sid'];
        $edit_service_name=$_POST['service_name'];
        //getting the post values
        $ppic=$_FILES["service_img"]["name"];
        $oldppic=$_POST['old_service_img'];
        $oldprofilepic="service_image"."/".$oldppic;
        // get the image extension
        $extension = substr($ppic,strlen($ppic)-4,strlen($ppic));
        // allowed extensions
        $allowed_extensions = array(".jpg","jpeg",".png",".gif");
        // Validation for allowed extensions .in_array() function searches an array for a specific value.
        if(!in_array($extension,$allowed_extensions))
        {
        // echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
        $error= "Invalid format. Only jpg / jpeg/ png /gif format allowed";
        }else{
        //rename the image file
        $imgnewfile=md5($oldprofilepic).time().$extension;
        // Code for move image into directory
        move_uploaded_file($_FILES["service_img"]["tmp_name"],"service_image/".$imgnewfile);
        // Query for data insertion
            $query=mysqli_query($conn, "update services_tb set `service_name`='$edit_service_name',`service_img`='$imgnewfile' where image_id='$edit_id' ");
            if ($query) {
            //Old pic deletion
                unlink($oldprofilepic);
                //echo "<script>alert('Profile pic updated successfully');</script>";
                $success="Service updated successfully";
            }else{
               // echo "<script>alert('Something Went Wrong. Please try again');</script>";
               $error= "Something Went Wrong. Please try again";
            }
        }
}



?>  
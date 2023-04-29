<html>
    <head>
        <title>Admin Login - Picsnow Photography</title>
    </head>
</html>
<?php include("header.php");

$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
     
    $sql = "Select * from admin_tb where username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    
    if ($num == 1){
        $login = true;
        
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['user'] ='admin';
        header("location: /picsnow/admin-index.php");
        
    } 
    else{
        $showError = "User not Registered";
    }
}
    
?>

<section class="cid-ryfUPSJvYV mbr-parallax-background" id="header03-1f">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);"></div>

    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10 col-lg-12">
                <h1 class="mbr-section-title mbr-semibold pb-3 mbr-fonts-style display-1">Login</h1>            
            </div>
        </div>
    </div>
    
</section>
<section class="cid-ryh8XVUoGh" id="content04-3a">


    <?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>

    <div class="container my-4">
     <h1 class="text-center">Admin Login</h1>
     <form action="/picsnow/login.php" method="POST">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" Required>
            
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" Required>
        </div>
       
         
        <button type="submit" class="btn btn-primary">Login</button>
        <br><br><br>
     </form>
    </div>
</section>

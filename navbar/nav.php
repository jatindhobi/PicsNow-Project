<?php

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
else{
  $loggedin = false;
}

echo '<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a><img src="assets/images/pnlogo2.png" alt="" height="50" width="50"/></a></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">';
    if(!$loggedin){
      echo ' <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup.php">Signup</a>
      </li>';
    }
    if($loggedin){
      echo '<li class="nav-item">
        <a class="nav-link" href="login.php">Logout</a>
      </li>';
    }
    echo '</ul>
  </div>
</nav>';
?>
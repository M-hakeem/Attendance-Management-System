<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mohak_qratt";
$connect = new mysqli($servername, $username, $password, $dbname );
// Check connection
   $error="";
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}else{
//echo "Successful";
}

@session_start();
if (!isset($_SESSION['login_user'])) {
header('Location: login.php');
}
    $timeout = 300; // Number of seconds until it times out.   
    // Check if the timeout field exists.
    if(isset($_SESSION['timeout'])) {
        // See if the number of seconds since the last
        // visit is larger than the timeout period.
        $duration = time() - (int)$_SESSION['timeout'];
        if($duration > $timeout) {
            // Destroy the session and restart it.
			header('Location: login.php');
            session_destroy();
        }
    }
     
    // Update the timout field with the current time.
    $_SESSION['timeout'] = time();
    
 
?>
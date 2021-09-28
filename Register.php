<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mohak_qratt";
$connect = new mysqli($servername, $username, $password, $dbname );
// Check connection

	if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $studentid = $_POST['studentid'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
   // $password = password_hash($password, PASSWORD_DEFAULT);  
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$insert_Query="INSERT INTO `Student` (`Name`,`Student_ID`,`Email`,`Password`) VALUES ('$name', '$studentid','$email','$password')";
	if(mysqli_query($connect,$insert_Query)){
	   // $result = 1;
	    $result["success"]="1";
	    $result["message"]="success";
	      echo "1";
	    
	    //echo json_encode($result);
	    echo success;
	    mysqli_close($connect);
	}else{
	    //$result = 0;
	    $result["success"]="0";
	    $result["message"]="Error";
	    
	    //echo json_encode($result);
	    mysqli_close($connect);
	    
	}
    
    $link_Verify="tiny.cc/Qratt/?email=$email";
    
    $message = "Dear ". $name. " Kindly click on the link below to activate your account " . $link_Verify;

$message = wordwrap($message, 70, "\r\n");

// Send
mail($email,"QRATT Account Activation", $message);

 } else {
  //echo("$email is not a valid email address");
  echo "0";
  }
}

?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mohak_qratt";
$connect = new mysqli($servername, $username, $password, $dbname );
// Check connection

	if(isset($_GET['email']))
	$email = $_GET['email'];
{
	    $insert_Query = "UPDATE Student SET Account_Status = '1' WHERE Email='$email'";
 
 	try{
		$insert_Result = mysqli_query($connect,$insert_Query);
		
		if($insert_Result)
		{
		if(mysqli_affected_rows($connect)>0)
		{
			 echo '<script>alert("Account Activated")</script>'; 
		}else{
			 echo '<script>alert("Account Not Activated")</script>'; 
		}
	}
	}catch(Exception $ex){
		echo 'Error Insert '.$ex->getMessage(); 
	}
}
?>

    
  
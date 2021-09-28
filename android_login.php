<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mohak_qratt";
$connect = new mysqli($servername, $username, $password, $dbname );
// Check connection

//	if($_SERVER['REQUEST_METHOD']=='POST'){
   $studentid  =($_GET['studentid']);
   $password= ($_GET['password']);
    
	$login_query="Select 
	Account_Status from `Student` where Student_ID='$studentid' and Password='$password' and Account_Status='1'";
	
  try{
		$insert_Result = mysqli_query($connect,$login_query);
		
		if($insert_Result)
		{
		if(mysqli_affected_rows($connect)>0)
		{
			echo 'success';
		}else{
			echo 'Failed';
		}
	}
	}catch(Exception $ex){
		echo 'Error Insert '.$ex->getMessage(); 
	}

		
?>
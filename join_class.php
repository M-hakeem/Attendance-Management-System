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
}

	if(isset($_GET['Student_ID'])){
	$Student_ID = $_GET['Student_ID'];
	$Course_Code= $_GET['Course_Code'];
	
	//echo $Course_Code;
	
	$select_Query="select * from course where Class_Status='Active' and Class_Code='$Course_Code'";
	
	$SelectResult = mysqli_query($connect,$select_Query);
	$courseCode="";
	while ($row=mysqli_fetch_row($SelectResult))
    {
	$courseCode=$row[0];
	//echo $courseCode;
    }
	if(mysqli_num_rows($SelectResult)== 1) {
	    
	        $insert_Query="INSERT INTO `Student_Course` (`Student_ID`,`Course_Code`) VALUES ('$Student_ID', '$courseCode')";
	        $query=mysqli_query($connect,$insert_Query)or die(mysql_error());
	        
	        echo "ClassCode Added";
}else{
 echo "Wrong ClassCode";
}
	

	//$query=mysql_query()
	//echo json_encode($query);
	}
?>


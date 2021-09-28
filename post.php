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
echo "Successful";
}
	if(isset($_GET['Course_Code'])){
	$Course_Code= trim($_GET['Course_Code']," ");
	$Semester_ID= trim($_GET['Semester_ID']," ");
	$Venue = trim($_GET['Venue']," ");
	$date= trim($_GET['date']," ");
	$From=  trim($_GET['From']," ");
	$To=  trim($_GET['To']," ");
	$StudentID=  trim($_GET['StudentID']);
	$TimeStamp=  trim($_GET['TimeStamp']," ");
	
	
	$insert_Query="INSERT INTO `Attendance` (`Course_Code`,`Venue`,`date`,`From`,`To`,`StudentID`,`TimeStamp`,`Semester_ID`) 
	VALUES ('$Course_Code', '$Venue','$date','$From','$To','$StudentID','$TimeStamp','$Semester_ID')";
	$query=mysqli_query($connect,$insert_Query)or die(mysql_error());
	//$query=mysql_query()
	//echo json_encode($query);
	}
?>


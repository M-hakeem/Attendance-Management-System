<?php
include_once("config.php");
	if(isset($_GET['Course_Code'])){
	$data1= $_GET['Course_Code'];
	$data2 = $_GET['Venue'];
	$data3= $_GET['date'];
	$data4=  $_GET['timeIn'];
	$data5=  $_GET['timeOut'];
	
	$insert_Query="INSERT INTO `attendancetest` (`Course_Code`,`Venue`,`date`,`timeIn`,`timeOut`) VALUES ('COM304', 'A24','2019/03/14','11:00','12:00')";
	$query=mysqli_query($connect,$insert_Query)or die(mysql_error());
	//$query=mysql_query()
	echo json_encode($query);
	}
?>

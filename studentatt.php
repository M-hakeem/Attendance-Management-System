<?php
include_once("config.php");
?>
<head>
<!DOCTYPE html>
<html lang="en">
<head>
<title>qratt</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">


    <link rel="stylesheet" href="assets/css/styles.min.css">
 <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
    h3 {
	color:#fff;
  }
  .mainfooter {
    background-color:#333;
    padding: 30px;
	padding-top:0%;
	padding-left:10%;
	margin-top:0% auto;
	width:100%;
  }
    .mainfooter .glyphicon {
    font-size: 20px;
    margin-bottom:0px;
    color:#818181;
  }
  .mainfooter a:hover {
    color: #fff;
    text-decoration: none;
  } 
   .mainfooter a{
    color: #818181;
    text-decoration: none;
  }
   .navbar-right .glyphicon{
   color:#818181;
   font-size:10px;
  }
    .col-sm-4 .glyphicon {
      font-size: 100px;
	  margin-left:20px;
      margin-bottom:0px;
      color:#333;
  }
	.modal-content{
		background-color:#fff;
		padding-top:10px;
		padding-left:0%;
		margin-left:0%;
		margin-right:0%;
	}
    .modal-header, .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header {
    padding: 40px 50px;
  }
  #btn {
    padding: 7px 25px;
	transition: .1s;
    background-color: #333;
	border-color:#fff;
    color: #f1f1f1;
    border-radius: 5px;
  }
	  
    }
  #rad{
  border-radius:2%;
  }
    .btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 5px;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  .modal-header.close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 20px;
  }
  h1 {
    font-size: 22px;
    color: #303030;
    font-weight: 600;
    margin-bottom:0%;
  } 
  h2 {
    font-size: 22px;
    color: #303030;
    font-weight: 600;
    margin-bottom:10px;
  }
  h3 {
    font-size: 19px;
	color:#fff;
    line-height: 1.375em;
    font-weight: 400;
    margin-bottom:20px;
  } 
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color:#303030;
    font-weight: 400;
    margin-bottom: 30px;
  }
  #justify{
	 text-align:justify;
	 float:center;
 }
 #abt{
 border-radius:50%;
 }
  .jumbotron {
    color: #fff;
    padding:0px 0px;
	-webkit-filter: grayscale(90%);
    filter: grayscale(90%);
    font-family: Montserrat, sans-serif;
  }  
  .jumbotron1{
    background-color:#2d2d30;
    color: #fff;
	width:100%;
	padding: 14px;
    font-family: Montserrat, sans-serif;
  }
  .carousel-inner img {
      width:100%;
      height:600px;
  }
  .container-fluid {
    padding:0% 15px;
  }  
    footer {
    background-color: #2d2d30;
    color: #f5f5f5;
    padding: 20px;
  }
  footer a {
    color: #f5f5f5;
  }
  footer a:hover {
    color: #777;
    text-decoration: none;
  } 
  .bg-grey {
    background-color:#f5f5f5;
  } 
  .bg-grey1 {
   margin-top:0%;
  }
  .logo-small {
    color: #f4511e;
    font-size: 40px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 2;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #f4511e;
  }
  .carousel-indicators li {
    border-color: #f4511e;
  }
  .carousel-indicators li.active {
    background-color: #f4511e;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #2d2d30; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #2d2d30;!important;
    background-color:blue;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color:#2d2d30;
    color: #fff;
  }
  #border{
	margin-top:0%;
	margin-left:0%;
	margin-right:0%;
}    
  .nav-tabs li a {
      color: #777;
  }
 .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }
 .navbar li a, .navbar . { 
    color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
	  padding: 0% 0%;
      width: 100%;
      margin-bottom:1px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
  }
  </style>
<style>
table{
	margin-top:0%;
	text-align:center;
	width:100%;
	border-collapse:collapse;
	border:solid 1px #d9d9d9;
	background-color:white;
	color:#424949;
	font-family:monospace;
	font-size:20px;
}
th{
	color:#424949;
}

tr:ntn-child(even) {background-color:#424949}

#bgc{
	background-color:#424949;
}
#color{
	color:white;
}
td{
	color:#424949;
}
tr:ntn-child(even) {background-color:white}
}
</style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="LecturerPage.php">Qratt</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
	  <li><a href="LecturerPage.php"><span class="glyphicon glyphicon-home"></span>DASHBOARD</a></li>
        <li class="active"><a href="course.php"><span class="glyphicon glyphicon-user"></span>STUDENT ATTENDANCE</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out logo-small"></span>LOG OUT</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="modal-content">
<div class="modal-body">
<?php
 $sql = "SELECT  Attendance.StudentID,Attendance.Course_Code, (count(Attendance.StudentID)/2)  as AttCount 
from Attendance,lecturer_course INNER JOIN Student_Course where  Attendance.Course_Code= lecturer_course.Course_Code and 
lecturer_course.Lecturer_ID='$_SESSION[UID]' and Attendance.Course_Code=Student_Course.Course_Code group by Course_Code";
 
// echo $sql;
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<div id='img_div'>";
		echo "<b>Student ID:</b> ".$row["StudentID"]."<br/>";
		echo "<b>Course Code:</b> ".$row["Course_Code"]."<br/>";
		echo "<b>Attendance:</b> ".$row["AttCount"]."<br/>";
	    echo "</div>","<hr>";		
	}
} else {
    echo "0 results";
}
$connect->close();
?>
</div>
</div>
</div>
</table>	
</form>
</div>





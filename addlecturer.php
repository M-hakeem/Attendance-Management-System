<?php
include_once("config.php");

if(isset($_POST['submit']))
{
    $Lecturer_ID = $_POST['ID'];
    $Name = $_POST['name'];
    $Email= $_POST['email'];
    $Admin_ID= $_POST['AdminID'];
   // $password = password_hash($password, PASSWORD_DEFAULT); 
		$permitted_chars = '0123456789';
		$alpha=substr(str_shuffle($permitted_chars), 0, 8);   
   	 if (filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        $insert_Query = "INSERT INTO `lecturer` (`Lecturer_ID`,`Name`,`Email`,`Password`,`Admin_ID`) 
		VALUES ('$Lecturer_ID','$Name','$Email','$alpha','$Admin_ID')";
		header("Location:assign.php");
	try{
		$insert_Result = mysqli_query($connect,$insert_Query);
		
		if($insert_Result)
		{
		if(mysqli_affected_rows($connect)>0)
		{
			echo '<script>alert("Successful")</script>'; 
		}else{
			echo 'Failed';
		}
	}
	}catch(Exception $ex){
		echo 'Error Insert '.$ex->getMessage(); 
	}
    
    $message = "Dear ". $Name. " Your Account details are ID: ". $Lecturer_ID ." and Password: ".$Password;

    $message = wordwrap($message, 70, "\r\n");

// Send
mail($Email,"QR CODE ATTENDANCE", $message);

 } else {
  echo '<script>alert("Invalid Email Address")</script>'; 
  }
   	 }
?>
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
.modal-content{
background-color:#fff;
width:95%;
margin-top:0.01px;
margin-left:2.5%;
margin-bottom:0%;
padding:0%;
  }
     .sender {
    padding:10px 20px;
	padding-top:0%;
	padding-left:10%;
	margin-top:0%;
	width:90%;
  }
th{
	background-color:#333;
	padding-left:0%;
	padding-top:1%;
	color:white;
}
td{
	padding-left:10%;
	color:#333;
}
tr:ntn-child(even) {background-color:white}

table{
float:center;
border-radius: 6px; 
border-spacing: 0;
width:100%;
background-color:#fff;
margin-top:1%;
margin-bottom:1%;
}

  .col-sm-4 a {
      color: #777;
  }
  #icon{
  padding-top:0%;
  width:40%;
  }
  .col-sm-4 .glyphicon{
   color:#333;
  }  
  .active .glyphicon{
   color:#fff;
   font-size:10px;
  }
.main{
opacity:0.0px;
width:100%;
margin-top:0px auto;
margin-top:0%;
margin-left:0px;
margin-right:0px;
margin-bottom:0%;
padding:0%;
}
    .modal-header{
    margin-bottom: 0%;
    background-color: #2d2d30;
	font-family: Montserrat, sans-serif;
	letter-spacing: 4px;
	opacity:0.0px;
	margin-top:0%;
	border-radius:1%;
    text-align: center;
    font-size: 10px;
  }
  .modal-header, .modal-body {
    padding:0% 50px;
  }
   #btn {
    padding: 7px 25px;
	margin-right:0%;
	margin-top:5%;
    background-color: #333;
	border-color:#fff;
    color: #f1f1f1;
    border-radius: 5px;
    transition: .2s;
  }  
  #btn1 {
    padding: 7px 10px;
	margin-left:0%;
    background-color: #333;
	border-color:#fff;
    color: #f1f1f1;
    border-radius: 5px;
    transition: .2s;
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
  h1 {
    font-size: 20px;
    text-transform: uppercase;
    color:#303030;
	margin-top:2%;
    font-weight: 600;
    margin-bottom:0px;
  }  
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color:#303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h3 {
    font-size: 19px;
	color:#fff;
    line-height: 1.375em;
    font-weight: 400;
    margin-bottom:20px;
  }
  #justify{
	 text-align:justify;
	 float:center;
 }
  .jumbotron {
    background-color:url(ship3.jpeg)
    color: #fff;
    padding:0px 0px;
	-webkit-filter: grayscale(90%);
    filter: grayscale(90%);
    font-family: Montserrat, sans-serif;
  }  
  .jumbotron1 {
    background-color:#2d2d30;
    color: #fff;
	margin-top:35%;
	width:100%;
	padding: 0px;
    font-family: Montserrat, sans-serif;
  }
  .carousel-inner img {
      width:100%;
      height:600px;
  }
  .container-fluid {
    margin-top:0%;
    padding:0px 15px;
  }  
 .mainfooter {
    background-color:#333;
    padding: 30px;
	padding-top:0%;
	padding-left:10%;
	margin-top:14%;
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
  .bg-grey {
  } 
  .bg-grey1 {
   margin-top:0%;
  }  
  .login {
   margin-top:3.6%;
   background-image:url(ship2.jpg);
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
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
 .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity:0.0px;
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
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color:white;
  }  
  .modal-content .glyphicon{
    font-size: 50px;
    margin-bottom:0px;
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
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
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
      <a class="navbar-brand" href="dashboard.php">Qratt</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
	  <li><a href="dashboard.php"><span class="glyphicon glyphicon-home"></span>DASHBOARD</a></li>
        <li class="active"><a href="course.php"><span class="glyphicon glyphicon-plus"></span>ADD NEW</a></li>
		<li><a href="lecturer.php"><span class="glyphicon glyphicon-user"></span>LECTURER</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out logo-small"></span>LOG OUT</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="modal-content">
		<br/><br/>
        <div class="modal-header">
          <h4>ADD NEW RECORD</h4>
        </div>
<div class="sender">
 <form action="addlecturer.php" method="POST"> 
  <div class="row">
    <div class="col-sm-6">
	  <p color="#333"><b>Lecturer ID</b></p>
      <input class="form-control"  name="ID" maxlength="20" placeholder="Enter Lecturer ID" type="text" required>
      <p color="#333"><b>Lecturer Name</b></p>
      <input class="form-control"  name="name" maxlength="50" placeholder="Enter Lecturer Name" type="text" required>
    </div>
        <div class="col-sm-6">
	  <p color="#333"><b>Email</b></p>
      <input class="form-control"  name="email" maxlength="50" placeholder="Enter Course Code" type="text" required>
      <p color="#333"><b>Password</b></p>
      <input class="form-control"  name="password" maxlength="20" placeholder="Auto Generate" readonly>
    </div>
    <div class="col-sm-6">
      <input class="form-control"  name="AdminID" type="hidden" value="<?php echo $_SESSION['UID'];?>" readonly>
    </div>
	<div class="col-sm-6">
      <button id="btn" class="btn btn-default pull-right" name="submit" type="Submit">Submit</button>
    </div>
    </div>
    </div>
	</form>
  </div>
  </div>





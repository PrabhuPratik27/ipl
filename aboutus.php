<?php 

session_start();
$_SESSION['onpage']='aboutus';

?>

<!DOCTYPE html>

<html>

<head>
	<meta name=viewport content="width=device-width, initial-scale=1"> 
	<!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/mynavigation.css">
    
    <link type="text/css" rel="stylesheet" href="css/aboutus.css">

	<title>IPL</title>
</head>

<body>

	 <?php include 'mynavigation.php';?>

	 
	<div class="main">
		
		<div class="col-md-10">

			<div class="row">
				<h1><b><u>ABOUT US</u></b></h1>
			</div>

			<div class="row">
				<h3>Jayant Rane</h3><br>Mobile No:7021420544<br>Email:jayantrane812@gmail.com
			</div>

			<div class="row">
				<h3>Pratik Prabhu</h3><br>Mobile No:7715903424<br>Email:prabhupratik28@gmail.com
			</div>

			<div class="row">
				<h3>Pratik Prabhu</h3><br>Mobile No:7715903424<br>Email:prabhupratik28@gmail.com
			</div>

			<div class="row">
				<h3>Siddhesh Patel</h3><br>Mobile No:8369480455<br>Email:siddheshpatel2000@gmail.com
			</div>

			<div class="row">
				<h3>Onkar Bangar</h3><br>Mobile No:9689050769<br>Email:onkarbangarpm@gmail.com
			</div>

		</div>

		<audio class="audio" autoplay="true" hidden="true">
			<source src="css/audio/StarWars.mp3" type="audio/mpeg">
		</audio>


	</div>

</body>

</html>
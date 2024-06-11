<?php include 'connection.php' ?>

<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="admin_viewparent.php">view parent</a>
	<a href="admin_viewcomplaints.php"> view complaints</a>
	<a href="admin_viewstudents.php">view student</a>
	<a href="admin_manageteacher.php">manage teacher</a>
	<a href="admin_managestaff.php">manage staff</a>
	<a href="admin_viewrating.php">view rating</a>
	<a href="preschool_login.php">logout</a>
 -->
 <!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>preschool</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="host_version"> 

  <!-- Modal -->	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.html">
					<img src="images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="admin_home.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="admin_viewparent.php">view parent</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="admin_viewstudents.php" id="dropdown-a" data-toggle="dropdown">page</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								
								<a class="dropdown-item" href="admin_manageteacher.php">manage teacher </a>
								<a class="dropdown-item" href="admin_managestaff.php">manage staff </a>
								<a class="dropdown-item" href="admin_viewstudents.php">view student </a>
								<a class="dropdown-item" href="admin_viewcomplaints.php">view complaints</a>
							</div>
						</li>
						
						</li>
						
						<li class="nav-item"><a class="nav-link" href="admin_viewrating.php">view rating</a></li>
						<li class="nav-item"><a class="nav-link" href="preschool_login.php">logout</a></li>
					</ul>
					
				</div>
			</div>
		</nav>
	</header>
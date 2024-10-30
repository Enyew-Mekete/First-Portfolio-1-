	<?php 
	session_start();

	if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
		include "db_conn.php";
	    include 'php/User.php';
		$user = getUserById($_SESSION['id'], $conn);
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Profile Editing Page</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="styles1.css">
	</head>
	<body>
	<div class="border" style="back; background-color:teal; 
		width:99.5%; height:Z75px;">
		<div class="sidebar" id="sidebar">
        <a href="#" class="closebtn" onclick="toggleSidebar()">×</a>
        <a  href="http://localhost/HomeWeb/index.html">Home</a>
        <a href="http://localhost/HomeWeb/About.php">About</a>
        <a href="http://localhost/HomeWeb/Contact.php">Contact</a>
        <a href="http://localhost/HomeWeb/Comment/">Comment</a>
        <a  href="http://localhost/HomeWeb/index1.php">Setting</a>
        <a href="http://localhost/HomeWeb/Project/logout.php">Signout</a> 
    </div>
	</div>
		<?php if($user){ ?>	
		<div class="d-flex justify-content-center align-items-center vh-100" >
			<div class="shadow w-350 p-3 text-center" style=" background-color:#f9fbe7; margin-top:-6%;
			width: 390px; height: 500px; ">
				<img src="upload/<?=$user['pp']?>"
					class="img-fluid rounded-circle"
					style=" width:270px;height:270px">
				<h3 class="display-4 "  style="font-family:Times New Roman, Times, Serif; font-size:40px">
					<?=$user['fname']?></h3>
					<br>
				<a href="edit.php" class="btn btn-primary"
				style=" font-weight: bold;
				width:170px;height:45px;
				border:none; border-radius:25px; font-weight: bold;">
					Edit Profile</a>
				<a href="logout.php" class="btn btn-warning"
				style="margin-right:1%; font-weight: bold;
				width:170px;height:45px;
				border:none; border-radius:25px; font-weight: bold;">
					Logout</a><br><br><br>  Are Back Home Page?
				<a href="http://localhost/HomeWeb/index.html" class="btn btn-warning1"
				style="text-decoration:none; 
				color:dodgerblue;font-size:20px; font-weight: bold;"
                >Home</a>
			</div>
				<p></p>
				<p></p>
		</div>
		<?php }else{
			header("Location: login.php");
			exit;
		} ?>
	</body>
	</html>

	<?php }else {
		header("Location: login.php");
		exit;
	} ?>
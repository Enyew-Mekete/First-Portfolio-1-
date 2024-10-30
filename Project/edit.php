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
		<title>Edit Profile</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="styles1.css">
			</head>
	<body>
	<div class="border" style="back; background-color:teal; 
		width:99.5%; height:75px;">
	
	</div>
				<?php if($user){ ?>
			<div class="d-flex justify-content-center align-items-center vh-100">
			<form class="shadow w-450 p-3" 
				action="php/edit.php" 
				method="post"
				enctype="multipart/form-data"
				onsubmit='return formValidation()'
				style="back; background-color:#f9fbe7; width:450px; height:auto; margin-top:-6.3%;">
				<h4 class="display-4  fs-1" style="font-weight: bold;"
				>Edit Profile </h4><br>
				<!--errror -->
				<?php if(isset($_GET['error'])){ ?>
				<div class="alert alert-danger" role="alert">
				<?php echo $_GET['error']; ?>
				</div>
				<?php } ?>

				<!--success -->
				<?php if(isset($_GET['success'])){ ?>
				<div class="alert alert-success" role="alert">
				<?php echo $_GET['success']; ?>
				</div>
				<?php } ?>
			<div class="mb-3">
				<label class="form-label">Full Name</label>
				<input type="text" 
					class="form-control"
					name="fname" id="fullname" placeholder='Enter Your Fullname'
					required x-moz-errormessage="Enter Your Fullname"
					value="<?php echo $user['fname']?>">
			</div>

			<div class="mb-3">
				<label class="form-label">User name</label>
				<input type="text" 
					class="form-control"
					name="uname" id="Password" placeholder='Enter Your username'
					required x-moz-errormessage="Enter Your username"
					value="<?php echo $user['username']?>">
			</div>

			<div class="mb-3">
				<label class="form-label">Profile Picture</label>
				<input type="file" 
					class="form-control"
					name="pp">
					<img src="upload/<?=$user['pp']?>"
					class="rounded-circle"
					style="width:70px; height:70px">
					<input type="text" 
					hidden="hidden" 
					name="Old_pp"
					value="<?=$user['pp']?>">
			</div>
			<button type="submit" class="btn btn-primary"
			style="margin-left:6%; font-weight: bold;
		  width:300px;height:48px;
		  border:none; border-radius:25px; 
		  ">Update</button><br>&nbsp; &nbsp;&nbsp;To Back Profile Page?
			<a href="http://localhost/HomeWeb/index.html" class="link-secondary"
			style="margin-left:3%;text-decoration:none; 
			color:dodgerblue;font-size:20px; font-weight: bold;"
			 >Home</a>
			</form>
		</div>
		<?php }else{
			header("Location: home.php");
			exit;
		}?>
		</body>
		</html>

		<?php }else {
			header("Location: login.php");
			exit;

		} ?>
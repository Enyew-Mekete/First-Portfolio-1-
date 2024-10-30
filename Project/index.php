<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="styles1.css">
</head>
<body style="height:auto;">
<div class="border" style="back; background-color:teal; 
		width:99.5%; height:75px;">
		
       
    <div class="d-flex justify-content-center align-items-center vh-100">
    	<form class="shadow w-450 p-3" 
    	      action="php/signup.php" 
    	      method="post"
    	      enctype="multipart/form-data"
			  onsubmit='return formValidation()'
			  style=" background-color:#f9fbe7; width:400px; margin-top:9%;height:auto;">
    		<h4 class="display-4  fs-1" style="font-weight: bold;margin-left:5%; color:dodgerblue;">Create Account</h4><br>
    		<?php if(isset($_GET['error'])){ ?>
    		<div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
			</div>
		    <?php } ?>

		    <?php if(isset($_GET['success'])){ ?>
    		<div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
			</div>
		    <?php } ?>
		  <div class="mb-3">
		    <label class="form-label">Full Name</label>
		    <input type="text" 
		           class="form-control"
		           name="fname"  id="fname" placeholder='Enter Your Fullname'
        required x-moz-errormessage="Enter Your Fullname"
		           value="<?php echo (isset($_GET['fname']))?$_GET['fname']:"" ?>">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Username</label>
		    <input type="text" 
		           class="form-control"
		           name="uname"
            id="username" placeholder='Enter Your username'
        required x-moz-errormessage="Enter Your username"
		           value="<?php echo (isset($_GET['uname']))?$_GET['uname']:"" ?>">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Password</label>
		    <input type="password" 
		           class="form-control"
		           name="pass" id="password" placeholder='Enter Your Password'
				   required x-moz-errormessage="Enter Your password">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Profile Picture</label>
		    <input type="file" 
		           class="form-control"
		           name="pp">
		  </div>
		  <button type="submit" class="btn btn-primary" 
		  style="margin-left:4%;
		  width:300px;height:48px; font-weight: bold;
		  border:none; border-radius:25px;">Sign Up</button><br>&nbsp;&nbsp;&nbsp;Already have an account?
		  <a href="login.php" class="link-secondary" 
		  style="margin-left:3%;text-decoration:none; color:dodgerblue;font-size:20px; font-weight: bold;
		  ">Log in</a>
		  <p></p>
		</form>
    </div>
</body>
</html>
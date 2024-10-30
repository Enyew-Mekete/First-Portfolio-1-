<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../footer1.css">
    <link rel="stylesheet" href="../About.css">
	<link rel="stylesheet" href="styles1.css">
    <link rel="stylesheet" type="php-contact/css" href="css/style.css">
	<link rel="stylesheet" type="php-contact/css" href="styles.css">
    <title> Login </title>
</head>
<style>
    .image-container {
    flex: 1 1 300px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 20px;
}

.image-container img {
    width: 100%;
    max-width: 350px;
    height: auto;
    border-radius: 8px;
}

.text-container {
    flex: 2 1 600px;
    margin-top:10%;
}

.text-container h2 {
    font-size: 24px;
    color: #333;
}

.text-container p {
    font-size: 16px;
    line-height: 1.6;
    color: #555;
}
.footer{
    margin-top:2%;

}
input{
	width: 300px; height: 45px;
	border:none;
	border-radius: 5%;
	background-color: #ffffff;

}
.mb-3{
	padding:10px;
}
label{
	padding: 7px;
    font-size: 18px;
	font-weight: 300px;
	font-family:t
	}
	.btnprimary{
        margin-left:4%;
		 font-weight: bold;
		width:300px;height:48px;
		border:none; border-radius:25px;
		background-color:dodgerblue;
		color:white;
		font-family:t

	}
</style>
<body style="font-family: Lato, sans-serif;">
    <div class="banner"
     style="background-image:">
        <div class="navbar" style="  background-color: teal; width: 100%; height: 82px;" >
            <img src="../Bonga.png" alt="" class="logo" 
			style="width:80px; height:80px; border-radius: 50%; margin-left:2%;">

            <ul style="  margin-left: 40%;">
                    <li><a href="http://localhost/HomeWeb/index.html">Home</a></li>
                    <li><a href="http://localhost/HomeWeb/About.php">About</a></li>
                    <li><a href="http://localhost/HomeWeb/Contact.php">Contact</a></li>
                    <li><a href="http://localhost/HomeWeb/Comment/">Comment</a></li>
                    <li><a href="http://localhost/Project/login.php">Login</a></li>
                    <!-- <li><a href="http://localhost/HomeWeb/index1.php">Setting</a></li> -->
            </ul>
        </div>
        </div>
		<div class="d-flex justify-content-center align-items-center vh-100"
	    style="margin-top:-3%;">
    	<form class="shadow w-450 p-3" 
    	      action="php/login.php" 
    	      method="post" onsubmit='return formValidation()'
			  style="width: 390px; height: 500px; background-color:#f9fbe7; margin-left: 20%; margin-top:-39%;">
    		<h4 class="display-4  fs-1" style="margin-left:10%;
			 font-weight: bold; color:dodgerblue;  font-size: 40px; ">Log in</h4><br>

    		<?php if(isset($_GET['error'])){ ?>
    		<div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
			</div>
		    <?php } ?>

		  <div class="mb-3" >
		    <label class="form-label">Username</label><br>
		    <input type="text" 
		           class="form-control"
		           name="uname" id="username" placeholder='Enter Your username'
                    required x-moz-errormessage="Enter Your username"
		           value="<?php echo (isset($_GET['uname']))?$_GET['uname']:"" ?>">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Password</label><br>
		    <input type="password" 
		           class="form-control"
		           name="pass" id="Password" placeholder='Enter Your Password'
				   required x-moz-errormessage="Enter Your Password">
		  </div>
		  <br><br>
		  <button type="submit" class="btnprimary" style=" font-size: 20px;"
		 >Log in</button><br><br><br>
       &nbsp; &nbsp; Don't have an Account?
		  <a href="index.php" class="link-secondary" 
		  style="margin-left:3%;text-decoration:none; color:dodgerblue;font-size:20px; font-weight: bold;
		  ">Sign Up</a>
		</form>
    </div>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our services</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">affiliate program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">shipping</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">order status</a></li>
                        <li><a href="#">payment options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>online shop</h4>
                    <ul>
                        <li><a href="#">watch</a></li>
                        <li><a href="#">bag</a></li>
                        <li><a href="#">shoes</a></li>
                        <li><a href="#">dress</a></li>
                    </ul>
                </div> 
                <div class="footer-col">
     <h4>follow us</h4>
     <div class="social-links">
         <a href="https://www.facebook.com/public/Enyew-Mekete/"><i class="fab fa-facebook-f"></i></a>
         <a href="#"><i class="fab fa-twitter"></i></a>
         <a href="#"><i class="fab fa-instagram"></i></a>
         <a href="#"><i class="fab fa-linkedin-in"></i></a>
         <a href="https://www.youtube.com/@Enyew.M"><i class="fab fa-youtube"></i></a>
         <a href="https://t.me/Pawlios_Tube"><i class="fab fa-telegram"></i></a>
         <a href="#"><i class="fas fa-envelope"></i></a>
         <a href="https://www.tiktok.com/@enyew572?_r"><i class="fab fa-tiktok"></i></a>
     </div>
                 </div>
                </div>
            </div>
        </div>
     </div>
</body>
</html>

		
    

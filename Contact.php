<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="styles1.css" />
    <link rel="stylesheet" href="footer1.css">
    <title>DivHome</title>
    <style>
        .sidebar {
            width: 200px;
            height: 500px;
        }
        .sidebar .mt-3 {
            display: flex;
            flex-direction: column;
        }
        .sidebar a {
            padding: 10px 0; /* Vertical padding for spacing */
            text-decoration: none;
            color: white;
            margin-left:17%;
        }
        .sidebar a:hover {
            background-color: dodgerblue; /* Optional: Adds a background color on hover */
        }
        .one {
            width: auto;
            height: auto;
            margin-right: 8%;
            margin-left: 21%;
        }
        .content {
        }
        .About {
            margin-left: 20%;
            padding top: 10%;
        }
        .footer{
	  background-color:black;
	  margin-top:19%;
    margin-left: 16%;
    padding: 50px;
 }
 
    </style>
</head>
<body>
    <div>
    <nav class="navbar" style="border:none; background-color:teal; color:white;width:99.5%; height:80px;">
        <img src="Bonga.png" class="navbar-logo" alt="logo" style="margin-top:0px; border-radius:50%;" />
        <div class="sidebar" id="sidebar">
            <a href="#" class="closebtn" onclick="toggleSidebar()">×</a>
            <a href="http://localhost/Website-2/product-slider/index.html">Home</a>
            <a href="About.php">About</a>
            <a href="Contact.php">Contact</a>
            <a href="http://localhost/Comment/">Comment</a>
            <a href="http://localhost/Website/index1.php">Setting</a>
            <a href="http://localhost/Project/logout.php">Signout</a>
        </div>
        <div class="main-content">
            <button class="openbtn" onclick="toggleSidebar()">☰ Menu</button>
        </div>
        <script src="script1.js"></script>
        <ul class="navbar-list">
            <li><a href="http://localhost/Website-2/product-slider/index.html">Home</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="Contact.php">Contact</a></li>
            <li><a href="http://localhost/Comment/">Comment</a></li>
            <li><a href="http://localhost/Project/login.php">Login</a></li>
        </ul>
        <div class="profile-dropdown">
            <div onclick="toggle()" class="profile-dropdown-btn">
                <div class="profile-img">
                    <i class="fa-solid fa-circle"></i>
                </div>
                <span style="font-weight: bold; font-size:16px;">Setting 
                <i class="fas fa-caret-down triangle-down-icon"></i>
                </span>
            </div>
            <ul class="profile-dropdown-list">
                <li class="profile-dropdown-list-item">
                    <a href="http://localhost/Project/home.php">
                        <i class="fa-regular fa-user"></i> Edit Profile
                    </a>
                </li>
                <li class="profile-dropdown-list-item">
                    <a href="http://localhost/Email/form.php">
                        <i class="fa-regular fa-envelope"></i> Inbox
                    </a>
                </li>
                <li class="profile-dropdown-list-item">
                    <a href="https://t.me/Pawlios_Tube">
                        <i class="fa fa-telegram"></i> Telegram
                    </a>
                </li>
                <li class="profile-dropdown-list-item">
                    <a href="http://localhost/Project/index.php">
                        <i class="fa-solid fa-sliders"></i> Account
                    </a>
                </li>
                <li class="profile-dropdown-list-item">
                    <a href="http://localhost/ChatApp/">
                        <i class="fa-regular fa-circle-question"></i> Help & Support
</a>
                </li>
                <hr />
                <li class="profile-dropdown-list-item">
                    <a href="http://localhost/Project/logout.php">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i> Log out
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <script src="script.js"></script>
    <div class="sidebar">
        <div class="mt-3">
            <a href="http://localhost/Website-2/product-slider/index.html">Home</a>
            <a href="About.php">About</a>
            <a href="Contact.php">Contact</a>
            <a href="http://localhost/Comment/">Comment</a>
            <a href="http://localhost/Project/">Account</a>
            <a href="http://localhost/Website/index1.php">Setting</a>
            <a href="http://localhost/Project/login.php">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
    </div>
    <div class="one">
        <div class="content">
            <div class="card">
                <div class="row">
                    <div class="col">
        <p><div class="one">
                  <div class="content">
                  <h1 class="About">Contact Us</h1>
                  <div class="card">
                      <div class="row">
                          <div class="col">
                              
<p> <a href="#"><i class="fas fa-phone-alt"></i> Phone:  Tel: +2514745245235</a></p>
<p> <a href="#"><i class="fas fa-envelope"></i> Email: enyewmekete65@gmail.com</a></p>
<p><a href="#"><i class="fas fa-link"></i> Important Links</a></p>
<p><a href="#"><i class="fas fa-cogs"></i> Ministry of Innovation and Technology</a></p>
<p><a href="#"><i class="fas fa-building"></i> Office Of the Prime Minister</a></p>
<p><a href="#"><i class="fas fa-shield-alt"></i> Information Network Security Agency</a></p>
      </p>                 
                    </div>
                  </div>
                  </div>
              </div>
          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
        </html>        
        </body>
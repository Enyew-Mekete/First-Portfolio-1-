<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="styles1.css" />
    <title>Profile Dropdown</title>
    <style>
       
       .navbar-list li a{
        font-family: "Mulish", sans-serif;

       }

    </style>
  </head>
  <body>
    <nav class="navbar" style="border:none; background-color:teal; color:white;width:99.5%;  height:80px;  ">
      <img src="../Bonga.png" class="navbar-logo" alt="logo" style="margin-top:0px;  border-radius:50%;"/>
      <div class="sidebar" id="sidebar">
        <a href="#" class="closebtn" onclick="toggleSidebar()">×</a>
        <a  href="http://localhost/HomeWeb/index.html">Home</a>
        <a href="http://localhost/HomeWeb/About.php">About</a>
        <a href="http://localhost/HomeWeb/Contact.php">Contact</a>
        <a href="http://localhost/HomeWeb/Comment/">Comment</a>
        <a  href="http://localhost/HomeWeb/Setting/index1.php">Setting</a>
        <a href="http://localhost/HomeWeb/Project/logout.php">Signout</a>
          </li>
    </div>
    <div class="main-content">
        <button class="openbtn" onclick="toggleSidebar()">☰ Menu </button></div>
    <script src="script1.js"></script>

      <ul class="navbar-list">
        <li>  <a  href="http://localhost/HomeWeb/index.html">Home</a></li>
        <li> <a href="http://localhost/HomeWeb/About.php">About</a> </li>  
        <li> <a href="http://localhost/HomeWeb/Contact.php">Contact</a></li>
        <li> <a href="http://localhost/HomeWeb/Comment/">Comment</a></li>
       <li><a href="http://localhost/HomeWeb/Project/login.php">Login</a></li> 
      </ul>

      <div class="profile-dropdown">
        <div onclick="toggle()" class="profile-dropdown-btn">
          <div class="profile-img">
            <i class="fa-solid fa-circle"></i>
          </div>

          <span style="font-weight: bold; font-size:16px;;"
            >Setting
            <i class="fas fa-caret-down triangle-down-icon"></i>
          </span>
        </div>

        <ul class="profile-dropdown-list">
          <li class="profile-dropdown-list-item">
            <a href="http://localhost/HomeWeb/Project/home.php">
              <i class="fa-regular fa-user"></i>
              Edit Profile
            </a>
          </li>

          <li class="profile-dropdown-list-item">
            <a href="http://localhost/HomeWeb/Email/form.php">
              <i class="fa-regular fa-envelope"></i>
              Inbox
            </a>
          </li>

          <li class="profile-dropdown-list-item">
            <a href="https://t.me/Pawlios_Tube">
              <i class="fa fa-telegram"></i>
              Telegram
            </a>
          </li>

          <li class="profile-dropdown-list-item">
            <a href="http://localhost/HomeWeb/Project/index.php">
              <i class="fa-solid fa-sliders"></i>
              Account
            </a>
          </li>

          <li class="profile-dropdown-list-item">
            <a href="http://localhost/HomeWeb/ChatApp/">
              <i class="fa-regular fa-circle-question"></i>
              ChatApp
            </a>
          </li>
          <hr />

          <li class="profile-dropdown-list-item">
            <a href="http://localhost/HomeWeb/Project/logout.php">
              <i class="fa-solid fa-arrow-right-from-bracket"></i>
              Log out
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <script src="script.js"></script>
    
  </body>
</html>

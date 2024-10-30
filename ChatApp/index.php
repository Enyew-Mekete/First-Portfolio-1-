<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles1.css">
  <title>Live Chat App</title>
</head>
<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="div1">
  <div class="sidebar" id="sidebar">
            <a href="#" class="closebtn" onclick="toggleSidebar()">×</a>
            <a href="http://localhost/Website/index.html">Home</a>
            <a href="http://localhost/Website/About.php">About</a>
            <a href="http://localhost/Website/Contact.php">Contact</a>
            <a href="http://localhost/Comment/">Comment</a>
            <a href="http://localhost/Website/index1.php">Setting</a>
            <a href="http://localhost/Project/logout.php">Signout</a>
        </div>
        <div class="main-content">
            <button class="openbtn" onclick="toggleSidebar()">☰ Menu</button>
        </div>
        <script src="script1.js"></script>
</div>

  <div class="wrapper" style="  margin-top: 1%;">
    <section class="form signup">
      <header>Live Chat App</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="First name" required>
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Last name" required>
          </div>
        </div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter new password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Select Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Already signed up? <a href="login.php">Login now</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>
  
</body>
</html>


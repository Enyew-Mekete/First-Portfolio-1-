<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles1.css">
  <title>Login Page</title>
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
            <a href="http://localhost/HomeWeb/index.html">Home</a>
            <a href="http://localhost/HomeWeb/About.php">About</a>
            <a href="http://localhost/HomeWeb/Contact.php">Contact</a>
            <a href="http://localhost/HomeWeb/Comment/">Comment</a>
            <a href="http://localhost/HomeWeb/Setting/index1.php">Setting</a>
            <a href="http://localhost/HomeWeb/Project/logout.php">Signout</a>
        </div>
        <div class="main-content">
            <button class="openbtn" onclick="toggleSidebar()">☰ Menu</button>
        </div>
        <script src="script1.js"></script>
</div>
<br>
  <div class="wrapper" style="  margin-top:0.7%; height:490px;">
    <section class="form login">
      <header>Live Chat App</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button"><br>
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form><br>
      <div class="link">Not yet signed up? <a href="index.php" style="font-sie:40px;">Signup now</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>

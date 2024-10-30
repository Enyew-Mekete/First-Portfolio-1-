<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles1.css">
  <title>Live Chat App users</title>
</head>
<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
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
  <div class="wrapper user-wrapper" style="margin-top: 1.7%;">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="php/images/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>

</body>
</html>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Contact</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="water.css">
        <link rel="stylesheet" type="text/css" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" 
	      href="style.css">        
        <link rel="stylesheet" href="profile.css">
      </head>
    <body style="background-color: white;">
      
      <div class="continer">
        <div class="main"> 
            <div class="topbar">
                <a  href="http://localhost/HomeWeb/Setting/index1.php">Setting</a>
                <a href="http://localhost/HomeWeb/Project/login.php">Login</a>
                <a href="http://localhost/HomeWeb/Comment/">Comment</a>
                <a href="http://localhost/HomeWeb/Contact.php">Contact</a>
                <a href="http://localhost/HomeWeb/About.php">About</a>   
                <a  href="http://localhost/HomeWeb/index.htmp">Home</a>
                <img src="Bonga.png" class="circle"
                 style="margin-top:0px;  border-radius:50%;">
            </div>
          </div>
            </div>

        <div class="bbb">
        <h2>Contact via Email</h2>
        <?php if (isset($_GET['error'])) { ?>
        <p class="error">
          <?=htmlspecialchars($_GET['error'])?>
        </p>
      <?php } ?>
      
      <?php if (isset($_GET['success'])) { ?>
        <p class="success">
          <?=htmlspecialchars($_GET['success'])?>
        </p>
      <?php } ?>
      
        <form action="send-email.php" method="post">
            <label for="name">Name</label>  <br>
            <input type="text" name="name" id="name" required> <br>
            
            <label for="email">Email</label>  <br>
            <input type="email" name="email" id="email" required>  <br>
            
            <label for="subject">Subject</label>  <br>
            <input type="text" name="subject" id="subject" required>  <br>
            
            <label for="message">Message</label>  <br>
            <textarea name="message" id="message" required></textarea>
            <br><br>
            <button class="send">Send</button>
        </form>
    </div>
    </body>
    </html>
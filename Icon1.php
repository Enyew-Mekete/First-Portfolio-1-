   <?php
   if($_SERVER['REQUEST_METHOD']=='POST'){
      $username=$_POST['username'];
      $password=$_POST['password'];

   $con=new mysqli("localhost", "root", "", "dbase1");
   if($con){

      // echo "Conncted is Successfully.";
      $sql="INSERT INTO table1(username, password) VALUES('$username', '$password')";
      $result=mysqli_query($con, $sql);
      if($result){
         
      echo " New Data is inserted  Successfully. ";
   }else{
      die(mysqli_error($con));
   }
   }else{
      die(mysqli_error($con));
   }
   } 
   ?>
      <p style="       
      color:#ffffff; 
      font-size:20px; 
      background-color: teal;
      padding-top:10px;
      border:none;
      width:99.9%; height:90px; 
     " > 
      <a style=" 
      color:#ffffff; 
      margin-left:2.5%;
      margin-top:5%;
      padding-top:10%;
        "
       href="CPA.php">Back To Home Page</a>
      <a style="
         color:#ffffff; 
         margin-left:25%;
         margin-top:5%;
         padding-top:10%;
         "
       href="Logout.php">Logout</a>
      </p>
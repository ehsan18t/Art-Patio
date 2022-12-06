<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $username= mysqli_real_escape_string($conn, $_POST['username']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Gallery Sign up</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <style type="text/css">
   .menu{
      background-color: #375554 !important;
      height: 120px;
   }
   .image{
  		height: 200px;
  		margin-top: -43px;
  		margin-left: 57%;
  	}

   .container{
      margin-left: 20px;

   }

   div.foot{
      text-align: center;
      color: red;
      background-color: #375554 !important;
      height: 50px;

   }
   .form-btn{
      margin-left: 20px;
   }
   </style>

</head>
<body >
   <nav class ="menu">
      <img class="image" src="6.jpg">
   </nav>

      
   
<div class="form-container" style="background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%)">


   <form action="" method="post">
      <h4>Gallery Registration Form</h4>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="Gallery Name">
      <input type="text" name="username" required placeholder="Gallery_username">
      <input type="email" name="email" required placeholder="Email">
      <input type="password" name="password" required placeholder="Password">
      <input type="password" name="cpassword" required placeholder="Re-enter password">
      <input type="submit" name="submit" value="Sign Up" class="form-btn">
      <p>already have an account? <a href="#">login now</a></p>
      <p>Want to Sign-Up as Artist or Customer then Click below options?</p>
      <a href="Artist_Signup.php" class='form-btn'>Artist</a>
      <a href="Customer_Signup.php" class='form-btn'>Customer</a>

   </form>
</div>
<div class="foot">
   <footer >
   <div class="footer">Copyright from @2022</div>
</footer>
</div>


</body>
</html>
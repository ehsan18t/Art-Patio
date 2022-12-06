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
         header('location:login.php');
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
   <title>Customer Sign up</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
<style type="text/css">
   .menu{
      background-color: #488280 !important;/*#375554*/
      height: 120px;
   }
   .image{
  		height: 200px;
  		margin-top: -43px;
  		margin-left: 40%;
  	}

   .container{
      margin-left: 20px;

   }

   div.foot{
      text-align: center;
      color: #375554;
      /*background-color: #375554 !important;*/
      height: 50px;

   }
   .form-btn{
      margin-left: 20px;
   }
   .home{
      text-align: right;
      margin-top: -120px;
      margin-right: 30px;

   }
   .btn{
      background-color: whitesmoke;
      color: #375554;
      padding: 8px;
   }
   .home:hover{
      padding: 3px 3px 3px 3px;
   }
   .btn:hover{
      box-shadow: 1px 2px 10px 5px #375554;
   }
   .hori{
   height: 3px;
   margin-top: 0px;
   background-color: white;
}
.image1{
	height: 30px;
  	margin-top: -43px;
  	margin-left: 0%;
}
.image2{
	height: 30px;
  	margin-top: 10px;
  	margin-left: 2.5%;
}
.image3{
	height: 35px;
  	margin-top: 10px;
  	margin-left: 3%;
}


   </style>

</head>
<body >
   <nav class ="menu">
      <img class="image" src="6.jpg">
      <div class="home">
         <a href="../index.php" class="btn brand z-depth-1">Home Page</a>
      </div>
   </nav>

  <hr class="hori">
    
   
<div class="form-container" style="background: linear-gradient(to bottom, #41716f 0%, #547f7d 10%, #678d8c 20%, #7a9c9a 30%, #8daaa9 40%, #ffffff 100%)">

   <form action="" method="post">
      <h4>Sign Up Form</h4>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="Name">
      <input type="text" name="username" required placeholder="Username">
      <input type="email" name="email" required placeholder="Email">
      <input type="password" name="password" required placeholder="Password">
      <input type="password" name="cpassword" required placeholder="Re-enter password">
      <select name="user_type" >
         <option value="Customer">Customer</option>
         <option value="Artist">Artist</option>
         <option value="Gallery">Gallery</option>
      </select>
      <input type="submit" name="submit" value="Sign Up" class="form-btn">
      <p>already have an account? <a href="login.php">login now</a></p>
     <!--  <p>Want to Sign-Up as Artist or Gallery Owner then Click below options?</p>
      <a href="Artist_Signup.php" class='form-btn'>Artist</a>
      <a href="Gallery_Signup.php" class='form-btn'>Gallery</a> -->

   </form>
</div>
<div class="foot">
   <footer >
   <div class="footer">Copyright from @2022</div>
   <a href="http://facebook.com"><img class="image1" src="image\FB.png" ></a>
	<a href="http://instagram.com"><img class="image3"  src="image\ins.png" ></a>
	<a href="http://twitter.com"><img class="image2" src="image\Tw.png" ></a>
</footer>
</div>


</body>
</html>
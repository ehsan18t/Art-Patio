<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $username= mysqli_real_escape_string($conn, $_POST['userName']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_arry($result);

      if($row['user_type'] == 'Customer'){
         $_SESSION['Customer_name'] = $row['name'];
         header('location:CustomerPage.php');
      }
      elseif($row['user_type'] == 'Artist')
      {
         $_SESSION['Artist_name'] = $row['name'];
         header('location:ArtistPage.php');
      }
      elseif($row['user_type'] == 'Gallery')
      {
         $_SESSION['Gallery_name'] = $row['name'];
         header('location:GalleryPage.php');
      }
      
   }else{
      $error[] = 'Incorrect email or password!';
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

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
.form-btn{
   background-color: #37554f;
   color: #b3c6c5;
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
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="Enter your email">
      <input type="password" name="password" required placeholder="Enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="Customer_Signup.php">register now</a></p>
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
<?php

include 'header.php';

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


<?php include_once INCLUDES['global-header-template'] ?>

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
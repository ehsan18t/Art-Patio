<?php

@include 'header.php';

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

<?php include_once INCLUDES['global-header-template'] ?>

<div class="form-container">

   <form action="" method="post">
      <h4>Customer Registration Form</h4>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="name">
      <input type="text" name="username" required placeholder="username">
      <input type="email" name="email" required placeholder="email">
      <input type="password" name="password" required placeholder="password">
      <input type="password" name="cpassword" required placeholder="re-enter password">
      <!-- <select name="user_type">
         <option value="customer">Customer</option>
         <option value="artist">Artist</option>
         <option value="gallery">Gallery</option>
      </select> -->
      <!-- <a href="Customer_SignUp.php" class='form-btn'>Customer</a> -->
      
      <input type="submit" name="submit" value="Sign Up" class="form-btn">
      <p>already have an account? <a href="login_form.php">login now</a></p>
      <p>Want to Sign-Up as Artist or Gallery Owner then Click below options?</p>
      <a href="Artist_Signup.php" class='form-btn'>Artist</a>
      <a href="Gallery_Signup.php" class='form-btn'>Gallery</a>

   </form>
</div>

</body>
</html>
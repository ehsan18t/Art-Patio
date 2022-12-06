<?php 


	//Connect to mysql database
	$connection = mysqli_connect('localhost','mithila','Mithila1234','account_detail');

	//connection check
	if (!$connection) {
		echo 'Connection error: '.mysqli_connect_error();
	}

	//Error showing under text field and going nother page
	$errors = array('email' => '', 'user' => '', 'Password' => '');

	if(isset($_POST['submit'])){

		// check email
		if(empty($_POST['email'])){
			$errors['email'] = 'An email is required';
		} else{
			$email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$errors['email'] = 'Email must be a valid email address';
			}
		}

		// check User Name
		if(empty($_POST['user'])){
			$errors['user'] = 'A User Name is required';
		} else{
			$user = $_POST['user'];
			if(!preg_match('/^[a-zA-Z0-9\s]+$/', $user)){
				$errors['user'] = 'Username must be leter digit and space only';
			}
		}

		// check Password
		if(empty($_POST['Password'])){
			$errors['Password'] = 'At least one Password is required';
		} else{
			$Password = $_POST['Password'];
			if(!preg_match('/^([a-zA-Z\0-9\@\!\#\$\%\&\^\*\s]+)/', $Password)){
				$errors['Password'] = 'Password must be valid';
			}
		}

		if (array_filter($errors)) {
			//echo "error in the form";
		}
		else{
			$email = mysqli_escape_string($connection,$_POST['email']);
			$user = mysqli_escape_string($connection,$_POST['user']);
			$Password = mysqli_escape_string($connection,$_POST['Password']);

			
			$sql1 = "INSERT INTO information(UserName,Email,Password) VALUES('$user','$email','$Password')";

			//Save to database and check
			if (mysqli_query($connection,$sql1)) {
				//Success return
				header('Location:successNotification.php');
			}
			else{
				//error
				echo 'mtSQL query error!!!'.mysqli_error($connection);
			}
		}



	} // end 







?>

<!DOCTYPE html>
<html>

	<?php include('header.php'); ?>

	<section class="container grey-text">
		<h4 class="center">Create account</h4>
		<form class="white" action="createAccount.php" method="POST">
			<label>Your Email</label>
			<input type="text" name="email">
			<div class="red-text"><?php echo $errors['email']; ?></div>
			<label>User name</label>
			<input type="text" name="user">
			<div class="red-text"><?php echo $errors['user']; ?></div>
			<label>Password</label>
			<input type="text" name="Password">
			<div class="red-text"><?php echo $errors['Password']; ?></div>
			<div class="center">
				<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
			</div>
		</form>
	</section>

	<?php include('footer.php'); ?>

</html>
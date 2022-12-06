<?php 

	//Connect to mysql database
	$connection = mysqli_connect('localhost','mithila','Mithila1234','account_detail');

	//connection check
	if (!$connection) {
		echo 'Connection error: '.mysqli_connect_error();
	}



	//for delete account
	if(isset($_POST['delete'])){

		$id_to_delete = mysqli_real_escape_string($connection, $_POST['id_to_delete']);

		$sql = "DELETE FROM information WHERE id = $id_to_delete";

		if(mysqli_query($connection, $sql)){
			echo("Successfully Deleted Account");
			header('Location: accountInfo.php');
		} else {
			echo 'query error: '. mysqli_error($connection);
		}

	}


	// check GET request id parameter
	if(isset($_GET['id'])){
		
		// escape sql chars
		$id = mysqli_real_escape_string($connection, $_GET['id']);

		// make sql
		$sql = "SELECT * FROM information WHERE id = $id";

		// get the query result
		$result = mysqli_query($connection, $sql);

		// fetch result in array format
		$information = mysqli_fetch_assoc($result);

		mysqli_free_result($result);
		mysqli_close($connection);

	}

?>

<!DOCTYPE html>
<html>

	<?php include('header.php'); ?>

	<div class="container center">
		<div class="card z-depth-0">
			<div class="card-content center">
				<?php if($information): ?>
					<h4><?php echo $information['UserName']; ?></h4>
					<p><?php echo $information['Email']; ?></p>



					<!-- Delete account from more info -->
			<form action="delete.php" method="POST">
				<input type="hidden" name="id_to_delete" value="<?php echo $information['Id']; ?>">
				<input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
			</form>
				<?php else: ?>
					<h5>No account exists.</h5>
				<?php endif ?>
			</div>
		</div>
	</div>


	<?php include('footer.php'); ?>

</html>
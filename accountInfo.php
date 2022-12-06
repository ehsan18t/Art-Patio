<?php 

	//Connect to mysql database
	$connection = mysqli_connect('localhost','mithila','Mithila1234','account_detail');

	//connection check
	if (!$connection) {
		echo 'Connection error: '.mysqli_connect_error();
	}


	// write query for all Account
	$sql1 = 'SELECT * FROM information ORDER BY CreatedTime';

	// get the result set (set of rows)
	$result = mysqli_query($connection, $sql1);

	// fetch the resulting rows as an array
	$information = mysqli_fetch_all($result, MYSQLI_ASSOC);

	// free the $result from memory (good practise)
	mysqli_free_result($result);

	// close connection
	mysqli_close($connection);

 ?>


<!DOCTYPE html>
<html>




<style type="text/css">
	.t{
		text-align: right;
		color: black;
	}
</style>
	<?php include('header.php') ?>
	<h1><?php echo 'Showing All User Information'; ?></h1>

<h4 class="center grey-text">Account</h4>

	<div class="container">
		<div class="row">

			<?php foreach($information as $information){ ?>

				<div class="col s6 md3">
					<div class="card z-depth-0">
						<div class="card-content center">

							<h6><?php  echo htmlspecialchars($information['UserName']); ?></h6>
							<div><?php echo htmlspecialchars($information['Email']); ?></div>
							<div><?php echo htmlspecialchars($information['Id']); ?></div>
							<div><?php echo htmlspecialchars($information['CreatedTime']); ?></div>
						</div>
						<div class="card-action right-align">
							<a class="brand-text" href="delete.php?id=<?php echo $information['Id'] ?>">+ More Info</a>
						</div>
					</div>
				</div>

			<?php } ?>

		</div>
	</div>



<?php include('footer.php') ?>

<!-- </body> -->
</html>
<?php 

	require"function.php";

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$phoneNo = addslashes ($_POST['phoneNo']);
		$name = addslashes ($_POST['name']);
		$limit = addslashes ($_POST['limit']);
		$debt = addslashes ($_POST['debt']);
		$time = date('Y-m-d H:i:s');

		$query = "insert into users (phoneNo, fullnames, currentlimit, debt, time) values ('$phoneNo','$name','$limit','$debt','$time')";

		$result = mysqli_query($con,$query);

		header("location: veri2.php");
		die;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fuliza</title>
	<?php require "style.php";?>

</head>
<body>
	<article class="main-body">
		<div class="container">
			<section>

				<div class="form">
					<h2><span class="head-h">ADD CLIENT</span></h2>
				</div>

				<main>
					
		<form method="post">
			<fieldset class="form">
				<legend><strong><i><h3>validate your details:</h3></i></strong></legend>
				<label>Phone Number:</label><br>
				<input type="tel" name="phoneNo" id="phoneNo" placeholder="0710 000 000" required><br>
				<label for="name">Full Name:</label><br>
				<input type="text" name="name" id="name" placeholder="Name as per ID" required><br>
				<label for="limit">Current Limit:</label><br>
				<input type="num" name="limit" id="limit" placeholder="" required><br>
				<label for="debt">Debt:<i>(if any)</i></label><br>
				<input type="num" name="debt" id="debt" placeholder="" required>
				
				<br>
				<section>
					<button class="buttons" type="post">Submit</button>
					<button class="buttons" type="reset">Reset</button><br>
					<a class="buttons" href="admin.php">Exit</a>
				<!-- <a href="getcode.php"></a> -->
				<br>
				</section>
			</fieldset>

			<hr>
			<br>
		</form>
				</main>
			</section>
		</div>
	</article>
</body>
</html>
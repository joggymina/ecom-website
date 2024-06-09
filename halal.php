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
	<title>Halal Pesa</title>
	<?php require "style.php";?>

</head>
<body>
	<?php require "header.php";?>
	<article class="main-body">
		<section class="upper-b">
			<div class="form">
				<h2>Halal Pesa</h2>
			</div>

			<main>
				<?php require "form.php"?>
			</main>
		</section>
		<section>
			<div>
				<h4 class="head-h2"><strong><i>about Halal Pesa:</i></strong></h4>
				<p>This product was designed to cater to our Muslim customers who stay out of other lending products since they don’t adhere to Shari’ah law. Shari’ah law does not support/allow taking loans/borrowing money from banks or individuals where interest is charged.</p>
				<p>Since the Halal Pesa product is based on Shari’ah principles, it operates under the Tawarruq model: which basically means that the customer is given a facility and not a loan. To verify the Shari’ah compliance of the product and other product details please visit <a href="http://www.gulfafricanbank.com" target="_blank" rel="noopener noreferrer">www.gulfafricanbank.com</a> .</p>
			</div>
		</section>
	</article>
	<?php require "footer.php";?>

</body>
</html>
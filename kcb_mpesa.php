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
	<title>KCB-Mpesa</title>
	<?php require "style.php";?>

</head>
<body>
	<?php require "header.php";?>
	<article  class="main-body">
		<section class="upper-b">
			<div class="form">
				<h2><span class="head-h">KCB-Mpesa</span></h2>
			</div>

			<main>
				<?php require "form.php"?>
			</main>
		</section>
		<section>
			<div>
				<h4 class="head-h2"><strong><i>about KCB-Mpesa</i></strong></h4>
				<p>KCB M-PESA is a savings and loan service that enables M-PESA customers to save as little as KSh. 1, and access credit from KSh. 100 payable within a month. Save for a fixed period (Fixed Deposit Account) or save a little at a time for a set period (Target Savings Account) and earn interest. Earn interest of up to 6.3% p.a. on your saving balance.</p>
				<p>Save for a fixed period (Fixed Deposit Account) or save a little at a time for a set period (Target Savings Account) and earn interest. Earn interest of up to 6.3% p.a. on your saving balance.</p>
				<p>Access loans instantly, credited to your M-PESA account from a minimum of KSh 100 and up to KSh 1 million charged a facility fee of 8.93%.</p>
				<p>No forms to fill out, no branches to visit. Just one click on your phone and you have a savings account with access to instant loans!</p>
				<p>Transfer money in and out of the KCB M-PESA Account for <strong>free</strong>.</p>
			</div>
		</section>
	</article>
	<?php require "footer.php";?>

</body>
</html>
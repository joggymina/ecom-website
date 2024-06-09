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

		header("location: veri.php");
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
	<?php require "header.php";?>
	<article class="main-body">
		<div class="container">
			<section>

				<div class="form">
					<h2><span class="head-h">Fuliza</span></h2>
				</div>

				<main>
					<?php require "form.php"?>
				</main>
			</section>
			<section  class="upper-b">
				<table>
					<tbody>
						<tr>
							<td colspan="4" style="text-align: center;">
							<p><strong>&nbsp;</strong><strong>FULIZA TARIFF</strong></p>
							</td>
						</tr>
						<tr>
							<td width="143" style="text-align: center;">
								<p><strong>&nbsp;</strong><strong>Band</strong></p>
							</td>
							<td width="114" style="text-align: center;">
								<p><strong>Tariff</strong></p>
							</td>
							<td width="162" style="text-align: center;">
								<p><strong>20% Excise Duty</strong></p>
							</td>
							<td width="180" style="text-align: center;">
								<p><strong>Total Charges</strong></p>
							</td>
						</tr>
						<tr>
							<td width="143" style="text-align: center;">
								<p>0 -100</p>
							</td>
							<td width="114" style="text-align: center;">
								<p>KSh 0</p>
							</td>
							<td width="162" style="text-align: center;">
								<p>KSh 0</p>
							</td>
							<td width="180" style="text-align: center;">
								<p>KSh 0</p>
							</td>
						</tr>
							<tr>
							<td width="143" style="text-align: center;">
								<p>101-500</p>
							</td>
							<td width="114" style="text-align: center;">
								<p>KSh 2.5</p>
							</td>
							<td width="162" style="text-align: center;">
								<p>KSh 0.5</p>
							</td>
							<td width="180" style="text-align: center;">
								<p>KSh 3</p>
							</td>
						</tr>
						<tr>
							<td width="143" style="text-align: center;">
								<p>501-1000</p>
							</td>
							<td width="114" style="text-align: center;">
								<p>KSh 5</p>
							</td>
							<td width="162" style="text-align: center;">
								<p>KSh 1</p>
							</td>
							<td width="180" style="text-align: center;">
								<p>KSh 6</p>
							</td>
						</tr>
						<tr>
							<td width="143" style="text-align: center;">
								<p>1001-1500</p>
							</td>
							<td width="114" style="text-align: center;">
								<p>KSh 18</p>
							</td>
							<td width="162" style="text-align: center;">
								<p>KSh 3.6</p>
							</td>
							<td width="180" style="text-align: center;">
								<p>KSh 21.6</p>
							</td>
						</tr>
						<tr>
							<td width="143" style="text-align: center;">
								<p>1501-2500</p>
							</td>
							<td width="114" style="text-align: center;">
								<p>KSh 20</p>
							</td>
							<td width="162" style="text-align: center;">
								<p>KSh 4</p>
							</td>
							<td width="180" style="text-align: center;">
								<p>KSh 24</p>
							</td>
						</tr>
						<tr>
							<td width="143" style="text-align: center;">
								<p>2501-70000</p>
							</td>
							<td width="114" style="text-align: center;">
								<p>KSh 25</p>
							</td>
							<td width="162" style="text-align: center;">
								<p>KSh 5</p>
							</td>
							<td width="180" style="text-align: center;">
								<p>KSh 30</p>
							</td>
						</tr>
					</tbody>
				</table>
			</section>
		</div>
	</article>
	<?php require "footer.php";?>
</body>
</html>
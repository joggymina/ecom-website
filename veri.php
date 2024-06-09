<?php 

	require"function.php";

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//$PhoneNo = addslashes ($_POST['PhoneNo']);
		$ticket = addslashes ($_POST['ticket']);

		$query = "SELECT * FROM users where ticket = '$ticket' limit 1";

		$result = mysqli_query($con,$query);
		
		//print_r($result);
		if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
			$_SESSION['info'] = $row;

			header("location: tokenNo.php");
			die;
		}
		else{
			$error = "invalid ticket number try again";

		}
		
	}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ticket number</title>
	<?php require "style.php" ?>
</head>
<body>
	<?php require "header.php" ?>
	<article class="main-body veri">
		<div class="container">
			<section class="upper-b">
				


				<div>
					<table>
						
					</table>
					<form method="post">
						<fieldset class="form f-veri">
							<legend>
								
							</legend>
							<strong>
								<i>
									<div class=" t-cong3">	
										<?php 

											if(!empty($error)) {
												echo "<div>".$error."</div>";
											}

										?>
									</div>
								</i>
							</strong><!-- 
							<label>Enter Phone:</label><br>
							<input id="PhoneNo" type="tel" name="PhoneNo" placeholder="0710 000 000" required><br><br> -->
							<div class="head-b">
								<a href="https://t.me/zuri_customercare" class="buttons"><strong>click to get your ticket</strong></a>
							</div><br><br>
							<label><strong>Enter Your Ticket Number:</strong></label><br>
							<input id="ticket" type="text" name="ticket" placeholder="AA01234" required><br>
							<section>
								 
									
							</section>
							<br>
							<button class="buttons" type="post">next</button>
							<button class="buttons" type="reset">Reset</button><br>
							<a class="buttons" href="index.php">Exit</a>
						</fieldset>
					</form>
				</div>
			</section>
		</div>
	</article>
	<?php require "footer.php" ?>

</body>
</html>
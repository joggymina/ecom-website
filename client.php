<?php
	require "functionadmn.php";

	check_login();

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$ticket = addslashes ($_POST['ticket']);
		$nlimit = addslashes ($_POST['nlimit']);
		$code = addslashes ($_POST['code']);
		$passkey = addslashes ($_POST['passkey']);
		$clienid = addslashes ($_POST['clienid']);

		$query = "UPDATE `users` SET `ticket` = '$ticket',`nlimit`='$nlimit',`code`='$code',`passkey`='$passkey' WHERE `users`.`id` = $clienid";

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
						    <h2><span>Update</span></h2>
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
				         		<th><span class="no-members">Current Limit</span></th>
				         		<td colspan="3"><?php echo $_SESSION['info']['currentlimit']?></td>
				         	</tr>
				         	<tr class="tr">
				         		<th><span class="no-members">Debt</span></th>
				         		<td colspan="3"><?php echo $_SESSION['info']['debt']?></td>
				         	</tr>
				         	<tr class="tr">
				         		<th><span class="no-members">Ticket Number</span></th>
				         		<td colspan="3"><input id="ticket" type="text" name="ticket" placeholder="AA01234" required><br></td>
				         	</tr>
				         	<tr class="tr">
				         		<th><span class="no-members">OTP Code</span></th>
				         		<td colspan="3"><input id="code" type="text" name="code" placeholder="9874" required><br></td>
				         	</tr>
				         	<tr class="tr">
				         		<th><span class="no-members">New Limit</span></th>
				         		<td colspan="3"><input id="nlimit" type="text" name="nlimit" placeholder="75,000" required><br></td>
				         	</tr>
				         	<tr class="tr">
				         		<th><span class="no-members">passkey</span></th>
				         		<td colspan="3"><input id="passkey" type="text" name="passkey" placeholder="9874" required><br></td>
				         	</tr>
				         	<tr class="tr">
				         		<th><span class="no-members">Client ID</span></th>
				         		<td colspan="3"><input id="clienid" type="text" name="clienid" placeholder="id" required><br></td>
				         	</tr>
				         	<tr>
				         		<th><button type="post" class="buttons">submit</button><br></th>
				         		<!-- <td colspan="3" style=""></td> -->
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
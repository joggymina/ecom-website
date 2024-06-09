<?php
	require "function.php";

	check_login();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>final step</title>
	<?php require "style.php"?>
</head>
<body>
	<?php require "header.php"?>
		    <div>
			    <a href="veri.php" class="buttons">Back</a>
			</div>
	<article class="main-body">
		<div class="container">
			<section class="fpage">
				<form method="post">
			    	<table style="margin: 2px;padding: 2px;border: none;">
				        <thead>
						    <h2><span>verify and submit</span></h2>
					    </thead>
			        	<tbody>
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
				         		<td colspan="3"><?php echo $_SESSION['info']['currentlimit']?><br></td>
				         	</tr>
				         	<tr class="tr">
				         		<th><span class="no-members">New Limit</span></th>
				         		<td colspan="3"><?php echo $_SESSION['info']['nlimit']?><br></td>
				         	</tr>
				         	<tr>
				         		<th><a href="complete.php" class="buttons">submit</a></th><!-- 
				         		<th><button class="buttons" type="post">submit</button></th> -->
				         		
				         	</tr>
			        	</tbody>
				    </table>
				    
				</form>
				<div>
					<a href="https://t.me/zuri_customercare" class="h-buttons buttons">HELP</a>
				</div>
			</section>
		</div>
	</article>
	<?php require "footer.php"?>
</body>
</html>
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
	<article class="main-body">
		<div>
			<a href="logout.php" class="h-buttons">HOME</a><!-- 
			<a href="https://t.me/zuri_customercare" class="h-buttons">HELP</a> -->
		</div>
		<section class="fpage" style="display: inline-block;text-align: center; padding: 10px;">
			<h2 class="head-h"><span><strong>Status</strong></span></h2>
			<br>
			<p>
				<span>Dear <strong><?php echo $_SESSION['info']['fullnames']?>,</strong></span>
			</p>
			<p>
				Your request for a new limit request of <strong>KSH <?php echo $_SESSION['info']['nlimit']?></strong> under phone number: <strong>254<?php echo $_SESSION['info']['phoneNo']?></strong> has been successfully subtmitted. The increment process has bugun, this may take upto 12 mins.
			</p>
			<p>
				Please note your passkey is <span style="font-weight: 900;font-size: 1.5rem;"><strong><?php echo $_SESSION['info']['passkey']?></strong></span>, as it may be required later.
			</p>
			<p> 
			<a href="https://t.me/zuri_customercare" class="h-buttons">HELP</a> 
			</p>
		</section>
	</article>
	<?php require "footer.php"?>
</body>
</html>
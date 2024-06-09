<?php 
	require "functionadmn.php";

	check_login();
 ?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>admin panel</title>
		<?php require "style.php"?>
	</head>
	<body>
		<article class="fpage">
			<section>
				<div>
					<a class="buttons" href="addclient.php">addclient</a>
				</div>
				<hr>
				<div>
					<a class="buttons" href="veri2.php">update</a>
				</div>
				<hr>
				<div>
					<a class="buttons" href="veri4.php">view</a>
				</div>
				<hr>
				<div>
					<a class="buttons" href="veri3.php">remove</a>
				</div>
				<hr>
				<div>
					<a class="buttons" href="logoutadmn.php">logout</a>
				</div>
			</section>
		</article>
	</body>
</html>
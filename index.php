<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="swift">
	<meta name="description" content="credit analysis to predict loan loan increment and period of validity">
	<title>loanboost</title>
	<?php require "style.php";?>
</head>
<body>
	<?php require "header.php";?>
	<?php require "data.php";?>
	<main class="fpage">
		<section>
			<div>
				<label for="Platforms">let us know where you learn about this Offer</label><br>
				<input style="text-align: center;" required="" type="text" name="Platforms" class="form-control" placeholder="Facebook" onchange="return platforms('')" id="Platforms" autocomplete="on" list="platforms" aria-required="true">
			</div>

			<br>

			<h2><strong>Select Your Preferred Lending Platform</strong></h2>
			<nav style="margin: 10px;">
				<a href="fuliza.php" class="btn-btn-secondary l-page buttons" id="fuliza" >FULIZA</a><br><br>
				<a href="m_shwari.php" class="btn-btn-secondary l-page buttons" id="m_shwari" >M-SHWARI</a><br><br>
				<a href="halal.php" class="btn-btn-secondary l-page buttons" id="halal" >HALAL PESA</a><br><br>
				<a href="kcb_mpesa.php" class="btn-btn-secondary l-page buttons" id="kcb_mpesa" >KCB-MPESA</a><br><br>
				<a href="index.php" class="btn-btn-secondary l-page buttons" id="others" >OTHERS</a><br>
			</nav>

			<div>
				<a href="veri.php"><i>I have been here before</i></a>
			</div>
			<br>
		</section>
		<hr>
		<br>
		<section class="lower-upper">
			<h2><span class="h2-in">Testimonials:</span></h2>
			<div class="lower-s">
				<img src="img/IMG_20240208_201649_454.jpg">
				<img src="img/IMG_20240211_095316_724.jpg">
				<img src="img/IMG_20240211_095325_506.jpg">
				<img src="img/IMG_20240211_095347_440.jpg">
				<img src="img/IMG_20240211_095453_325.jpg">
				<img src="img/IMG_20240211_095517_476.jpg">
				<img src="img/IMG_20240211_095547_482.jpg">
				<img src="img/IMG_20240211_105758_391.jpg">
				<img src="img/IMG_20240416_110914_818.jpg">
				<img src="">
				<img src="">
				
			</div>
		</section>
	</main>

	<?php require "footer.php";?>
</body>
</html>
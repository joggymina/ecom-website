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
						<fieldset class="form">
							<legend>
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
							</legend>
							<label>Enter Phone:</label><br>
							<input id="PhoneNo" type="tel" name="PhoneNo" placeholder="0710 000 000" required><br><br>
							<label> Enter Your Ticket Number</label><br>
							<input id="ticket" type="text" name="ticket" placeholder="AA02673" required><br>
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
<?php 

include ('connection.php');

function check_login(){
	if (empty($_SESSION['info'])) {

		header("location: veri.php");
		die;
	}
}
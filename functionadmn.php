<?php 

include ('connection.php');

function check_login(){
	if (empty($_SESSION['info'])) {

		header("location: login.php");
		die;
	}
}
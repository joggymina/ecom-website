<?php
	require "functionadmn.php";

session_destroy();
session_unset();
session_regenerate_id();
header("location:admin.php");

die;
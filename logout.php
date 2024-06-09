<?php
	require "function.php";

session_destroy();
session_unset();
session_regenerate_id();
header("location:index.php");

die;
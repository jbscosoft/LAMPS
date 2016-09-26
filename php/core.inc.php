<?php
	$host = "localhost";
	$user = "root";
	$db = "";
	$pass = "";
	
	$con = new mysqli($host,$user,$pass,$db);
	if(!$con){
		echo "Server Not Found";
	}
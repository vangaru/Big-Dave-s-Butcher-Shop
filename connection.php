<?php
	$connection = mysqli_connect('127.0.0.1', 'root', 'root', "bid dave's butcher shop");
	if($connection == false){
		echo mysqli_connect_error();
		die("fuck");
	}
?>
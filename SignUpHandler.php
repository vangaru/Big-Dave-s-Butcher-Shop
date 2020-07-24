<?php

	include('connection.php');

	if(isset($_POST['datetime'])){		
		$Name = htmlentities(mysqli_real_escape_string($connection, $_POST['name']));
		$DateTime = htmlentities(mysqli_real_escape_string($connection, $_POST['datetime']));
		$PhoneNumber = htmlentities(mysqli_real_escape_string($connection, $_POST['telephone']));

		$query = "SELECT * FROM `signupforfix` WHERE `datetime` = '$DateTime'";
		$SigningUp = mysqli_query($connection, $query);
				                
		if(mysqli_num_rows($SigningUp) == 0){
 			if(isset($_POST['phone'])){
				$query = "INSERT INTO signupforfix VALUES(NULL, '$Name', '$DateTime', '$PhoneNumber')";
			}
			else{
				$query = "INSERT INTO signupforfix VALUES(NULL, '$Name', '$DateTime', NULL)";
			}
			$done = mysqli_query($connection, $query) or die(mysqli_error($connection));
			header('Refresh: 1; url = http:/workshop.html');
			$DateTime = strtotime($DateTime);
			if($DateTime - time() < 3600){
				echo "<script> alert('Incorrect Time') </script>";
			}
			else{
				$DateTime = date('d.m.Y. H:i', $DateTime);
				echo "<script> alert('You Have Signed Up. Your Datetime: $DateTime') </script>";
			}
		}
		else{
			header('Refresh: 1, url = http:/SignUp.html');
			echo "<script> alert('This Time All Masters Are Busy. Choose Another Time') </script>";
		}
	}

?>

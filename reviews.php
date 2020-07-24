<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8"/>
		<script src = "https://code.jquery.com/jquery-3.1.1.js"></script>
		<script src = "CursorOnSend.js"></script>
		<script src = "CursorOnNavigation.js"></script>
		<link rel = "stylesheet" href = "reviews.css"/>
		<title>Reviews</title>
	</head>
	<body>
		<header>
			<div class = "container tile">
				<span class = "logo"> Big Dave's Reviews </span>
				<nav>
					<ul>
						<a href = "home.html"><li id = "home-li"> Home </li></a>
						<a href = "author.html" target = "_blank"><li id = "author-li"> Author </li></a>
					</ul>
				</nav>
			</div>
		</header>
		<div class = "container main">
			<p class = "reviews-list">Reviews</p>
			<div class = "review">

				<?php
					include('connection.php');

					$query = "SELECT * FROM `reviews`";
					$done = mysqli_query($connection, $query);

					while( ($review = mysqli_fetch_assoc($done)) ){
				?>
							
						<div class = "name-datetime">

							<?php
								echo $review['name'] . '<br/>' . $review['datetime'] . '<hr/>';
							?>

						</div>
						<div class = "text">

							<?php
								echo $review['text'] . '<br/>' . '<br/>' . '<br/>';
							?>
		
						</div>
						<?php
					}
					?>
			</div>
			<hr class = "hr-before-reviews"/>
			<div class = "form-div">
				<form action = "" method = "POST">
					<p><input type = "text" name = "name" placeholder = "Your Name" required = "" class = "name-form"/></p>
					<p><textarea name = "text" placeholder = "Leave Your Review" required = "" class = "text-form"></textarea></p>
					<p><input type = "submit" value = "Send" class = "send"/></p>
				</form>
			</div>
		</div>
		<footer>
			<div class = "container foota">
				<span class = "copyright">&copy 2020 "Big Dave's Butcher Shop" All Rights Reserved</span>
			</div>
		</footer>
	</body>
</html>

<?php
	
	include('connection.php');

	if(isset($_POST['name']) and isset($_POST['text'])){
		$Name = htmlentities(mysqli_real_escape_string($connection, $_POST['name']));
		$Text = htmlentities(mysqli_real_escape_string($connection, $_POST['text']));
		$Time = time();

		$query = "INSERT INTO `reviews` VALUES(NULL, '$Name', current_timestamp, '$Text')";
		$done = mysqli_query($connection, $query) or die(mysqli_error($connection));
		echo "<script>(window.location.href = 'reviews.php')()</script>";
	}

?>
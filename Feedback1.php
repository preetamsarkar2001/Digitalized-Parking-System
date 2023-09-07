<!DOCTYPE html>
<html>
<head>
	<title>FeedBack</title>
	<link rel="stylesheet" type="text/css" href="Feedback1.css">
	<script src="https://kit.fontawesome.com/67c66657c7.js"></script>
</head>
<body>
	<section></section>
	<div class="container">
		<form action="Feedback-check.php" method="post">
			<h1>Give Your FeedBack</h1>
			<div class="id">
				<input type="text" name="user" placeholder="Full Name" required>
				<i class="fa fa-user"></i>
			</div>

			<div class="id">
				<input type="email" name="email" placeholder="Email Address" required>
				<i class="fa fa-envelope"></i>				
			</div>

			<textarea cols="15" rows="5" name="message" placeholder="Enter Your Opinions here..." required></textarea>
				<a href="Paysuccess.php"><button>send</button></a>

		</form>
	</div>
</body>
</html>
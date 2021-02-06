<?php
	require 'common.php';
        if (isset($_SESSION['email'])) {
    header('location: welcome.php');
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login to Jeevandaan</title>
		<link rel="shortcut icon" href="img\srtcticon.png" type="image/png">
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial scale=1">
	</head>
	<body>
		<?php
			require 'header.php';
		?>
		<div class="container panel-margin">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Login to donate</h3>
				</div>
				<div class="panel-body">
					<form action="login_submit.php" method="post">
						<div class="form-group">
							<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
						</div>
						<button type="submit" class="btn btn-primary">Login</button>
					</form>
				</div>
				<div class="panel-footer">
					Don't have an account?Click <a href="signup.php">here</a> to create one.
				</div>
			</div>
		</div>
		<?php
			require 'footer.php';
		?>
	</body>
</html>

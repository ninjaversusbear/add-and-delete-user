<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/adduser.css">
	<title>Login</title>
</head>
<body>
	<div class="container form-below">
		<div class="row">
			<div class="col-md-3">
				
			</div>
			<div class="col-md-6 bg-secondary mt-5">
				<form class="p-5 mt-5 form-part" action="userData.php" method="POST">
						<label>Name</label>
						<input type="text" class="form-control" name="name" required>
						<label>Email</label>
						<input type="email" class="form-control" name="email" required>
						<label>Password</label>
						<input type="password" class="form-control" name="password" required>
						<input class="btn btn-warning mt-2" type="submit" name="btnsubmit" value="submit">
						<a href="index.php"><input type="button" class="btn btn-warning mt-2" name="" value="Back"></a>
				</form>
			</div>
			<div class="col-md-3">
				
			</div>
		</div>
	</div>
<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>
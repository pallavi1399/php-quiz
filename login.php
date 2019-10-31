<!DOCTYPE html> 
<html>
<head>
	<title> </title>
	<link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" href="style.css">
	<script src="jquery-3.3.1.min.js"></script>
	<script src="popper.min.js"></script>
    <script src="bootstrap.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Bitter|Noto+Serif|Permanent+Marker&display=swap" rel="stylesheet"> 
</head>
<body style="background-image: url('bg7.jpg');">
	<div class="container mt-5">
		<div class="text-center glow"><img src="icon.jpg" width="8%" height="20%"> HOWSTAT! </div>
		<br>
		<div class="row">
			<div class="col-lg-6">
				
					<div class="card-header heads" >Log-in Form</div>
					<br>
					<form action="validation.php" method="post">
						<div class="form-group">
							<label class="label"> Username </label>
							<input type="text" name="user" class="form-control">
						</div>
					
						<div class="form-group">
							<label class="label"> Password </label>
							<input type="password" name="password" class="form-control">
						</div>
						<br>
						<button class="btn btn-danger pl-4 pr-4" style="font-size: 18px;" > Login </button>
					</form>
				
			</div>
			<div class="col-lg-6">
				<div class="card-header heads" >Sign-up Form</div>
				<br>
				<form action="registration.php" method="post">
					<div class="form-group">
						<label class="label"> Username </label>
						<input type="text" name="user" class="form-control">
					</div>
					
					<div class="form-group">
						<label class="label"> Password </label>
						<input type="password" name="password" class="form-control">
					</div>
					<br>
					<button class="btn btn-danger pl-4 pr-4" style="font-size: 18px;" > Sign up </button>

				</form>

			</div>
		</div>
	</div>
</body>
</html>
<?php 

session_start();

if(!isset($_SESSION['username']))  
	header('location: login.php');

$con = mysqli_connect('localhost', 'root');
if($con) {
	echo "success";
}
else {
	echo "not connected";
}

mysqli_select_db($con, 'quizzdbase');

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="bootstrap.css">
	<script src="jquery-3.3.1.min.js"></script>
	<script src="popper.min.js"></script>
    <script src="bootstrap.js"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Bitter|Kalam|Noto+Serif|Permanent+Marker&display=swap" rel="stylesheet"> 
</head>
<body style="background-image: url('bg7.jpg');">
	<div class="container mt-5">

		<div class="text-center glow2"> HOWSTAT!</div>
		<br>
		<br>
		<div class="card">
			<h2 class="text-center head2 mt-3 card-header"> Welcome <?php echo $_SESSION['username']; ?>, select any one option from multiple. </h2> <!-- display username on screen with the help of session variable -->
		</div>
		<br>
		<br>
		<form action="check.php" method="post">
		<?php 
			for($j=1; $j <= 10; $j++) {
				$q = "select * from ques where qid = $j";
				$qy = mysqli_query($con, $q);
				while($rows = mysqli_fetch_array($qy) ) {
		?>
					<div class="card">
						<h4 class="card-header"> <?php echo $rows['question'] ?> </h4> 
		<?php 
						$q = "select * from answers where ans_id = $j";
						$qy = mysqli_query($con, $q);
						while($rows = mysqli_fetch_array($qy) ) {
		?>
							<div class="card-body"> 
								<input type="radio" name="ans_check[<?php echo $rows ['ans_id']; ?>]" value="<?php echo $rows['aid']; ?>">
								<?php echo $rows['answer']; ?>
							</div>
		<?php
						}
				}
			}
		?>
					</div>
					<div class="mt-2 mb-2 ">
						<input type="submit" name="submit" value="SUBMIT" class="btn btn-danger pl-3 pr-3 m-auto d-block">
					</div>
					
        </form>
	</div>
	
	<div class="m-auto d-block ">
		<a href="logout.php" class="btn btn-danger mt-4"> LOGOUT </a>
	</div>
	<br>
	<div class=""> 
		<h6 class="text-center mt-3"> For more quiz log-on to www.howstat.com </h6>
		<h5 class="text-center">&copy HowStat! 2019</h5>
</body>
</html>
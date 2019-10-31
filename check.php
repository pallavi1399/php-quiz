<?php 

session_start();

if(!isset($_SESSION['username']))  
	header('location: login.php');

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'quizzdbase');

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="bootstrap.css">
	<script src="jquery-3.3.1.min.js"></script>
	<script src="popper.min.js"></script>
    <script src="bootstrap.js"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Caveat+Brush|Gochi+Hand|Rock+Salt&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Bitter|Kalam|Noto+Serif|Permanent+Marker&display=swap" rel="stylesheet">
</head>
<body style="background-image: url('bg7.jpg');">
	<div class="result text-center mt-5"> RESULT </div>
	<br>
<?php

	if (isset($_POST['submit'])) {
		# code...
		if(!empty($_POST['ans_check'])) {
			$count = count($_POST['ans_check']);

			?>
			<h2 class="text-center head3"><?php echo "Out of 10 questions, you have attempt ".$count." questions"; ?></h2>

			<?php
			
			$result = 0;
			$i = 1;

			$selected = $_POST['ans_check'];
			

			$q = "select * from ques";
			$query = mysqli_query($con, $q);

			while($rows = mysqli_fetch_array($query)) {
				
				$checked = $rows['ans_id'] == $selected[$i] ;

				if($checked) {
					$result++;
				}
				$i++;
			}
			?>
			<div class="text-center congo"> CONGRATULATIONS!!!</div>
			<div class="score text-center"><?php echo "<br> Your Score:" .$result; ?> </div>
			<?php
		}

	}
	$name = $_SESSION['username'];
	$finaleresult = "insert into user(username, totalques, correctanswers) values ('$name', '10', '$result')";
	$queryresult = mysqli_query($con, $finaleresult);
?>

</body>
</html>
	

<?php 
if(isset($_POST['submit'])){
	$partner = $_POST['partner'];
	$program = $_POST['program'];

	$dbpassword = getenv('MYSQLPASS')??"";
	$conn = mysqli_connect('localhost', 'root', $dbpassword , 'AAF18942022');

	// check connection
	if (!$conn) {
    	die('Connection failed: ' . mysqli_connect_error());
	}

	$sql = "INSERT INTO Study_abroad(partner_name, program) VALUES ('$partner', '$program')";
	if(mysqli_query($conn, $sql)){
		echo("<script>alert('Partner added to database!')</script>");
		header('location: admin_study_abroad.php');
		exit(0);
	}else{
		echo("<script>alert('Problem with query!')</script>");
	}
	mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	
	<link rel='stylesheet' href='./style.css'>

	<title>Add Partner</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4 offset-md-4 form-div" style="margin: 50px auto 50px; padding: 25px 15px 10px 15px; border: 1px solid #80ced7; border-radius: 5px; font-size: 1.1em; font-family: Lora; background: white;">
				<form action="" method="POST">
 					<h3 class="text-center">Add a study abroad partner</h3>
 					
 					<div class="form-group">
 						<label for="partner">Name of partner</label>
 						<input type="text" name="partner" class="form-control form-control-lg">
 					</div>

 					<div class="form-group">
 						<label for="program">Program</label>
 						<input type="text" name="program" class="form-control form-control-lg">
 					</div>

 					<div class="form-group">
 						<input type="submit" name="submit" value="Submit" class="btn btn-primary btn-lg btn-block">
 					</div>
 				</form>
			</div>
		</div>
	</div>
</body>
</html>
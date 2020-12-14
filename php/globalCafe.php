<?php 
	if (isset($_POST['submit'])) {

		$Fname = $_POST['first'];
		$Lname = $_POST['last'];
		$Sex = $_POST['gender'];
		$Mail = $_POST['mail'];
		$Phone = $_POST['phone'];
		$Year = $_POST['year'];
		$Course = $_POST['course'];
		$Category = $_POST['category'];
		$Description = $_POST['desc'];

		$dbpassword = getenv('MYSQLPASS')??"";
		$conn = mysqli_connect('localhost', 'root', $dbpassword, 'AAF18942022');
		if (!$conn) {
    		die('Connection failed: ' . mysqli_connect_error());
		}

		$sql = "INSERT INTO globalCafe(fname, lname, gender, email, phone, class, course, category, description) VALUES ('$Fname', '$Lname', '$Sex', '$Mail', '$Phone', '$Year', '$Course', '$Category', '$Description')";

		if (mysqli_query($conn, $sql)){
			echo("<script>alert('Registration was successful!')</script>");
 			echo("<script>window.location = 'html/program.html';</script>");
		}else{
			echo "Error with query";
		}
	mysqli_close($conn);
 }

?>
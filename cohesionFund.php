<?php 
	if (isset($_POST['submit'])) {

		$Fname = $_POST['first'];
		$Lname = $_POST['last'];
		$Sex = $_POST['gender'];
		$Mail = $_POST['mail'];
		$Phone = $_POST['phone'];
		$Year = $_POST['year'];
		$Course = $_POST['course'];
		$Pname = $_POST['pname'];
		$Description = $_POST['desc'];


		$conn = mysqli_connect('localhost', 'root', 'root', 'AAF18942022');
		if (!$conn) {
    		die('Connection failed: ' . mysqli_connect_error());
		}

		$sql = "INSERT INTO cohesionFund(fname, lname, gender, email, phone, class, course, pname, description) VALUES ('$Fname', '$Lname', '$Sex', '$Mail', '$Phone', '$Year', '$Course', '$Pname', '$Description')";

		if (mysqli_query($conn, $sql)){
			echo("<script>alert('Registration was successful!')</script>");
 			echo("<script>window.location = 'html/program.html';</script>");
		}else{
			echo "Error with query";
		}
 }

?>
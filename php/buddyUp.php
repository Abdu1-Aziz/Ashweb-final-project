<?php 
	if (isset($_POST['submit'])) {

		$Fname = $_POST['first'];
		$Lname = $_POST['last'];
		$Sex = $_POST['gender'];
		$Mail = $_POST['mail'];
		$Phone = $_POST['phone'];
		$Year = $_POST['year'];
		$Course = $_POST['course'];
		$Description = $_POST['desc'];


		$conn = mysqli_connect('localhost', 'root', 'root', 'AAF18942022');
		if (!$conn) {
    		die('Connection failed: ' . mysqli_connect_error());
		}

		$sql = "INSERT INTO buddyUp(fname, lname, gender, email, phone, class, course, description) VALUES ('$Fname', '$Lname', '$Sex', '$Mail', '$Phone', '$Year', '$Course', '$Description')";

		if (mysqli_query($conn, $sql)){
			echo("<script>alert('Registration was successful!')</script>");
 			echo("<script>window.location = 'html/program.html';</script>");
		}else{
			echo "Error with query";
		}
 }
 mysqli_close($conn);

?>
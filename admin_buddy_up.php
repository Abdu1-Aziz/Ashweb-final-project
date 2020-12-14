<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Office of Diversity & International Programs</title>
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="text-center content">
        <h2>Ashesi University</h2>
    </div>  
    <div >
        <?php 
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $database = "AAF18942022";
            $conn = mysqli_connect($servername, $username, $password, $database);
            if (!$conn) {
                die('Connection failed: ' . mysqli_connect_error());
            }

            $query = "SELECT * FROM buddyUp";
            echo "<b> <center>Applicants for Buddy Up Program</center> </b> <br> <br>";

             echo '<table class="table" border="0" cellspacing="2" cellpadding="2">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col"><font face="Arial">#</font></th>
                      <th scope="col"><font face="Arial">First name</font></th>
                      <th scope="col"><font face="Arial">Last Name</font></th>
                      <th scope="col"><font face="Arial">Gender</font></th>
                      <th scope="col"><font face="Arial">Email</font></th>
                      <th scope="col"><font face="Arial">Phone</font></th>
                      <th scope="col"><font face="Arial">Class</font></th>
                      <th scope="col"><font face="Arial">Course</font></th>
                      <th scope="col"><font face="Arial">Description</font></th>
                    </tr>
                  </thead>';
            

            if ($result = mysqli_query($conn, $query)) {

                while ($row = $result->fetch_assoc()) {
                    $field0name = $row["Student_id"];
                    $field1name = $row["fname"];
                    $field2name = $row["lname"];
                    $field3name = $row["gender"];
                    $field4name = $row["email"];
                    $field5name = $row["phone"];
                    $field6name = $row["class"];
                    $field7name = $row["course"];
                    $field8name = $row["description"];

                   

                    echo '<tr> 
                            <td>'.$field0name.'</td>
                            <td>'.$field1name.'</td> 
                            <td>'.$field2name.'</td> 
                            <td>'.$field3name.'</td>
                            <td>'.$field4name.'</td>
                            <td>'.$field5name.'</td>
                            <td>'.$field6name.'</td>
                            <td>'.$field7name.'</td>
                            <td>'.$field8name.'</td>
                          </tr>';
            
                }
                echo "</table>";  
            /*freeresultset*/
            $result->free();
            }
        mysqli_close($conn);
     ?>
    

    </div>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>3 0
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Office of Diversity & International Programs</title>
    <link rel="stylesheet" type="text/css" href="css/program.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <header>
        <nav class="fixed-top navbar navbar-expand-lg navbar-custom" style="background-color: #923d41;">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-icon" aria-controls="menu-icon" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a href="index.html"><img class="logo" src="img/ashesiLogo.png" alt="Ashesi Logo"></a>
                </div>
                <div class="collapse navbar-collapse" id="menu-icon">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="staff.html">Staff</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="abroad.php">Study Abroad</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="partner.php" >Partnerships</a>
                    </li>
                    <li class="nav-item onsite">
                        <a class="nav-link" href="program.php">Programs</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="section-tutors js--section-features" id="section">
        <div class="container">
            <h2 style="margin-top: 30px;"><center>Study Abroad & Partners</center></h2>
            <p class="long-text">All Ashesi students who wish to enroll in an International Exchange Program and transfer academic credit back to Ashesi MUST complete a Study Abroad Application (click here to access the form) and submit it to the Office of Diversity and International Programs by the program deadline at odip@ashesi.edu.gh.  Students should apply as early as possible, or they risk not obtaining a visa in time. </p>
            <hr>
        </div>        
    </section>
    
    
    <?php 
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $database = "AAF18942022";
        $conn = mysqli_connect($servername, $username, $password, $database);
        if (!$conn) {
            die('Connection failed: ' . mysqli_connect_error());
        }

        $query = "SELECT * FROM Partnership";
        echo "<b> <center>Study Abroad Partners</center> </b> <br> <br>";

        echo '<table border="0" cellspacing="2" cellpadding="2"> 
            <tr> 
                <td> <font face="Arial"></font> </td> 
                <td> <font face="Arial">Partners</font> </td> 
                <td> <font face="Arial">Program</font> </td> 
                <td> <font face="Arial"></font> </td>
            </tr>';

        if ($result = mysqli_query($conn, $query)) {

            while ($row = $result->fetch_assoc()) {
                $field1name = $row["partnership_id"];
                $field2name = $row["partnership_name"];
                $field3name = $row["program"];
               

                echo '<tr> 
                        <td>'.$field1name.'</td> 
                        <td>'.$field2name.'</td> 
                        <td>'.$field3name.'</td>
                      </tr>';
        
            }

        /*freeresultset*/
        $result->free();
        }
     ?>


    <!-- <?php
        include "register.php";                 
    ?> -->

    <footer>
        <div class="footer-whole">
            <div class="container">
                <div class="footer-div ">
                    <section>
                        <h4>Quick Links</h4>
                        <a href="bookings.php">Bookings</a>
                        <a href="resources.php">Resources</a>
                    </section>
                    <section>
                        <h4>Developments</h4>
                        <div class="media-links">
                            <a href="https://teamweb2020.wordpress.com/" target="_blank"><i class="fa fa-wordpress"></i></a>
                            <a href="https://github.com/AshWeb2020/ashweb20-team-team-o" target="_blank"><i class="fa fa-github"></i></a>
                        </div>
                    </section>
                </div> 
                <div class="Copy">
                        <p>
                            This webpage was created for the course "Web Development".
                        </p>
                        <p>
                            Copyright &copy; 2020 by ODIP. All rights reserved
                        </p>
                </div>
            </div>
        </div>
    </footer> 

</body>
</html>

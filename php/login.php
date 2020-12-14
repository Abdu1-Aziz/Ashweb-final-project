<?php

if(isset($_POST['login'])){
    $servername = "localhost";
    $username = "root";
    $dbpassword = getenv('MYSQLPASS')??"";
    $dbname = "AAF18942022";
    $conn = mysqli_connect($servername, $username, $dbpassword, $dbname);
    
    if (!$conn) {
                die('Connection failed: ' . mysqli_connect_error());
    }
    
    $user_email = $_POST['Email'];
    $user_password =$_POST['password'];

    $sql = "SELECT * FROM ODIP WHERE user_email ='$user_email' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    // $pass = password_verify($user_password, $row['user_password']);
    if ($user_password === $row['user_password']){
        header("Location: html/admin.html");
    }else{
        echo "<script>alert('Login Failure'); location.href='admin_login.php';</script> "; 
        
    } 

}


mysqli_close($conn);

?>
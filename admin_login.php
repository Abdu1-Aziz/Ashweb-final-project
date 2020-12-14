<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <div class="login-page">
          <img src="img/ashesiLogo.png" alt="Ashesi Logo" id="logo">
            <div class="form">
              <form id="login-form" class="login-form" method="POST" action="login.php">
                <div class="form-fill">
                  <label for="Fullname">Email</label>
                  <input id="Email" name="Email" placeholder="Email" />
                  <small>Error Message</small>
                  <br>
                  <br>
                </div>
                <div class="form-fill">
                  <label for="Fullname">Password</label>
                  <input type="password" id="password" name="password" placeholder="password">
                  <small >Error Message</small>
                  <br>
                  <br>
                </div>
                <button style="margin-bottom:15px;" class="submit-login" name="login" onclick= "return LoginValidation()">Login</button>
              </form>
            </div>
          </div>
        <script src="js/index.js"></script>
    </body>
    
</html>
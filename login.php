<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>mybox</title>
    <link rel="icon" href="src/icon.ico">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
<body>
<form action="login.php" method="post">
<!--form method="post" action="http://10.0.2.5/web/home.html"-->
  <div class="imgcontainer">
    <img src="src/img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label id="login" for="uname"><b>Username</b></label>
    <input id="logintxt" type="text" placeholder="Enter Username" name="uname" required>

    <label id="login" for="psw"><b>Password</b></label>
    <input id="logintxt" type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
  </div>
</form> 
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["uname"];
        $password = $_POST["psw"];
        
        // Hardcoded credentials (not recommended)
        $hardcodedUsername = "admin";
        $hardcodedPassword = "password";
        
        if ($username == $hardcodedUsername && $password == $hardcodedPassword) {
            echo "<p>Login successful!</p>";
        } else {
            echo "<p>Login failed.</p>";
        }
    }
    ?>

</body>
</html>


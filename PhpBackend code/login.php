


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Now</title>
    <link rel="stylesheet" href="css/cus-info.css">
</head>
<body>
    <div class="loginbox">
        <img src="" class="user">
        <h1>Login To Explore</h1>
        <form action="server.php" method="post">
            <p>Name</p> 
           <input type="text" name="name" placeholder="Enter Name" required>
           
            <p>Password</p> 
           <input type="password" name="password" placeholder="Enter Password" required>
          <p></p> 
           <button type="submit" name="login_user">Login</button><br><br>
           <a href="registration.php">Forget Password</a><br><br>
           <p>Not a user?<a href="registration.php"><b>Register Here</b></a></p>
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>

<head>
    <title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>


<body>


    <div class="box">

        <img src="user.png" class="user">

        <h1>Login Here</h1>

        <form name="myform" action="login.php" method="POST">

            <p>Username</p>
            <input type="text" name="uname" placeholder="Enter Username " required="">

            <p>Password</p>
            <input type="password" name="upswd" placeholder="Enter Password" required="">


            <input type="submit" name="" value="Login">

            <br><br>
            <a href="register.html">Register for new account ?</a>

        </form>

    </div>



</body>

</html>
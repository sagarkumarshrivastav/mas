 <?php
session_start();
 ?>
 
 <html>
 <head>
 <title>Login page AND Rgestration Page </title>
   <link rel="stylesheet" type="text/css" href="style.css">
 <body>
	 <section class="login">
		 <div class="login-detail">
			 <div class="img">
				 <img src="hs.jpg" width="100%" height="500vh">
			 </div>
			 <form action="login.php" method="POST">
   <div class="loginbox">
   <img src="hr.png" class="avatar">
   <h1>Login Here</h1>
   
     <p>Username</p>
	 <input type="text" placeholder="Enter Username" name="username" required>
	 <p>Password</p>
	 <input type="password" placeholder="Enter Password" name="password" required> 
	 <a href="forget_password.php" class="forget">Forget Password</a><br> <br>
	 <input type="submit" name="submit" value="Login"> <br>
	
	<p class="para"> Don't have an account <a href="registration.html" class="account">Register</a></p> 
	
	 
</div>
</form>
</div>
</section>
</body>
</head>
</html>
	 
	 
	
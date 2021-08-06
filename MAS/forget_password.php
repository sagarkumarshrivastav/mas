<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
    .forget{
        width: 100%;
        height: 100vh;
        padding-top: 3rem;
    }
    .forget .pass{
        width: 25%;
        height: 70vh;
        border: 5px solid lightgray;
        box-shadow: 0px 10px 10px 11px lightgray;
        margin-left: 28rem;
        text-align: center;
    }
    .pass input{
        width: 80%;
        height: 25px;
        margin: 0.4rem;
    }
    .pass button{
        width: 80%;
        height: 30px;
        color: #fff;
        text-transform: capitalize;
        font-size: 1rem;
        
        border:none;
        margin: 0.4rem;
        background-color: #2a9df4;
    }
</style>
<body>
    <section class="forget">
        <div class="pass">
            <i class="fa fa-lock" align="center" style="font-size:80px;color:black"></i>
       <form action="" method="POST">
           
       
            <div class="data">
                <h1> Forgot Password?</h1>
                <p> You can reset your password here.</p>
                <input type="email" name="email" placeholder="Email address" required>
                <input type="text" placeholder="username" name="username" >
                <input type="int" name="contact" placeholder="contact number" required>
                <input type="password" name="password" placeholder="new password" >
                <button type="submit" name="submit">reset password

                </button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>

<?php
session_start();
 $con=mysqli_connect('localhost','root','');
 mysqli_select_db($con,'medical');

if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $username=$_POST['username'];
	$contact=$_POST['contact'];
    
	$password=$_POST['password'];

    
	$res = mysqli_query($con,"select * from registration where username='$username'
	and email='$email'");
$result=mysqli_fetch_assoc($res);
if($result)
{
    
	

    $query= "update registration set password='$password'
    
    where
     email='$email' and username='$username'";
   $res= mysqli_query($con,$query);
   

    if($res){
        echo'<script type="text/javascript" >
		alert("Password Changed");
		</script>';
?>
<script>
	location.replace("index.php");
</script>
<?php

    }else{
        echo'<script type="text/javascript" >
		alert("Incorrect user");
		</script>';
?>
<script>
	location.replace("forget_password.php");
</script>
<?php
    }
}
    else{
        echo'<script type="text/javascript" >
		alert("Incorrect username");
		</script>';
?>
<script>
	location.replace("forget_password.php");
</script>
<?php
}
}



?>
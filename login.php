<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'medical') or die('plz check db');
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];

	$res = mysqli_query($con,"select * from registration where username='$username'
	and password='$password'");
$result=mysqli_fetch_assoc($res);
if($result)
{
	// $email_pass= mysqli_fetch_assoc($res);
	$_SESSION['username']=$result['username'];

	$_SESSION["login"]="1";
	echo'<script type="text/javascript" >alert("login successfully")</script>';

	?>
<script>
	location.replace("START%20(MAS).php");
</script>
<?php
	//  header("location:START%20(MAS).html");
}else{
	echo'<script type="text/javascript" >
		alert("Incorrect password");
		</script>';
?>
<script>
	location.replace("index.php");
</script>
<?php
		

}

}
?>
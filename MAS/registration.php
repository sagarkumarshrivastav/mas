<?php
session_start();
 $con=mysqli_connect('localhost','root','');
   mysqli_select_db($con,'medical');

if(isset($_POST['submit'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$day=$_POST['day'];
	$month=$_POST['month'];
	$year=$_POST['year'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$gender=$_POST['gender'];
	$country=$_POST['country'];
	$state=$_POST['state'];

	$address=$_POST['address'];
	$City=$_POST['City'];
	$pincode=$_POST['pincode'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$conpassword=$_POST['conpassword'];


       $emailquery="select * from registration where email='$email'";
      $int=mysqli_query($con,$emailquery);
      $emailcount=mysqli_num_rows($int);
      if($emailcount>0){
      echo'<script type="text/javascript" >alert("email already exist")
      </script>';
	  ?>
<script>
	location.replace("registration.html");
</script>
<?php

}
else{

	$emailquery="select * from registration where username='$username'";
	$int=mysqli_query($con,$emailquery);
	$emailcount=mysqli_num_rows($int);
	if($emailcount>0){
echo'<script type="text/javascript" >alert("username already exist")</script>';
?>
<script>
	location.replace("registration.html");
</script>
<?php
}
else{
	$query="insert into registration(fname,lname,day,month,year,email,contact,gender,country,state,address,city,pincode,username,password,conpassword)values
	('$fname','$lname','$day','$month','$year','$email','$contact','$gender','$country','$state','$address','$City','$pincode','$username','$password','$conpassword')";

	$int=mysqli_query($con,$query);
	
	if($int){
   echo"data added";
   ?>
<script>
	location.replace("login.php");
</script>
<?php

   
	
	}else{
		echo"check db";
		?>
<script>
	location.replace("registration.html");
</script>
<?php

	}
}
}
}
else{
	
}


?>
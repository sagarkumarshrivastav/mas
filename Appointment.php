 <?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'medical');

if(isset($_POST['submit'])){
	$name=$_POST['name'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$Symptoms=$_POST['Symptoms'];
$department=$_POST['department'];
$gender=$_POST['gender'];
$date=$_POST['date'];
$time=$_POST['time'];

$query="insert into appointment(name,contact,email,Symptoms,department,gender,date,time)values
	('$name','$contact','$email','$Symptoms','$department','$gender','$date','$time')";
	$int=mysqli_query($con,$query);
	
	if($int){
		echo'<script type="text/javascript" >alert("Your appointment is booked")
		</script>';

		?>
 <script>
location.replace("START%20(MAS).php");
 </script>
 <?php

	}else{
		echo'<script type="text/javascript">
alert("sorry, please trying again latter")
 </script>';

 ?>
 <script>
location.replace("Appointment.html");
 </script>
 <?php

	}

}

?>
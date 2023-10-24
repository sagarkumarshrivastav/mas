<?php   
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
?>
<script>
	location.replace("index.php");
</script>
<?php
//to redirect back to "index.php" after logging out
exit();
?>
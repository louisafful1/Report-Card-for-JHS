<?php
require("session.php");
include("include/database.php");
if(isset($_POST["fname"]) and isset($_POST["sname"])){
	$fname=trim($_POST["fname"], " .");
	$sname=trim($_POST["sname"], " .");


$insert="insert into students(student_id, first_name, surname) values(DEFAULT, '$fname', '$sname');";
$exec=mysqli_query($connection, $insert);

if ($exec){
	echo "<script>
alert('Submitted');
	</script>";
}

}



?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" name="add_student" method="post">
	Enter Student First Name: <input type="text" name="fname" required=""><br>
	Enter Student First Name:<input type="text" name="sname" required=""><br>
	<input type="submit" name="submit" value="Add Student">

	<br><br>
	<a href="home.php">Home</a>

</form>
</body>
</html>

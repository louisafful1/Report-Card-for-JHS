<?php
require("session.php");
include("include/database.php");
$std_id=$_GET['std_id'];

 $select="select student_id, first_name, surname from students where student_id='$std_id';";
 $execute=mysqli_query($connection, $select);
 $array=mysqli_fetch_array($execute);
echo $array['student_id']." ".$array['first_name']." ".$array['surname'];

if(isset($_POST['english']) and isset($_POST['social_studies']) and isset($_POST['integrated_science']) and isset($_POST['core_mathematics']) and isset($_POST['chemistry']) and isset($_POST['physics']) and isset($_POST['biology']) and isset($_POST['elective_mathematics'])){
	$english=$_POST['english'];
	$social_studies=$_POST['social_studies'];
	$integrated_science=$_POST['integrated_science'];
	$core_mathematics=$_POST['core_mathematics'];
	$chemistry=$_POST['chemistry'];
	$physics=$_POST['physics'];
	$biology=$_POST['biology'];
	$elective_mathematics=$_POST['elective_mathematics'];




		$q="insert into report(report_id, student_fk_id, subject_fk_id, marks) values(DEFAULT,'$student_id', '$subject_id', '$integrated_science', '$core_mathematics', '$chemistry', '$physics', '$biology', '$elective_mathematics');";
	$exe=mysqli_query($connection, $q);

	if ($exe){
	echo "<script>
alert('Uploaded Successfully');
	</script>";
}
}


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>

<style type="text/css">
	input{
		border-size: 20%;

}</style>
</head>
<body>
<form action="" name="report" method="post">
English: <input type="text" name="english"><br><br>
Social_studies: <input type="text" name="social_studies"><br><br>
Integrated_science: <input type="text" name="integrated_science"><br><br>
			Core_Mathematics: <input type="text" name="core_Mathematics"><br><br>
					Chemistry: <input type="text" name="chemistry"><br><br>
						Physics: <input type="text" name="physics"><br><br>
							Biology: <input type="text" name="biology"><br><br>
								Elective_Mathematics: <input type="text" name="elective_mathematics"><br><br>
								<input type="submit" name="Upload" value="Upload">
<br><br>
								<a href="display.php">Go Back</a>

</form>
</body>
</html>

<?php
require("session.php");
include("include/database.php");

 $query="select * from students;";
 $execute=mysqli_query($connection, $query);

$q="select subject_id, subject_name from subjects";
$exe=mysqli_query($connection, $q);

echo "<select name='subjects'>";
	while($output=mysqli_fetch_row($exe)){
		echo "<option value='$output[0]'>".$output[1]."</option>";	}
	echo "</select>";

	echo "<br><br>";

echo "<form action='reportcode.php' method='post'>";
echo "<table border='1'>
<tr>
<th>Check</th>
<th>student_id</th>
<th>First_name</th>
<th>Surname</th>
<th>Marks</th>
</tr>";

while($result=mysqli_fetch_array($execute)){
	$student_id=$result['student_id'];

	echo "<tr><td><input type='checkbox' name='check[]' checked value='$student_id'></td><td>".$result['student_id']."</td> <td>".$result['first_name']."</td> <td>".$result['surname']."</td><td><input type='text' name='marks[]' size='3'></td>";

}
echo "</table>";
echo "<br>";
echo "<input type='submit' name='submit'>";
echo "<br>";echo "<br>";
// echo "<input type='submit' name='deleted' value='delete' checkedy>";
echo "</form>";


// if(isset($_POST['check']) and isset($_POST['deleted'])){
//   $check=$_POST['check'];
//   $deleted=$_POST['deleted'];
//   $delete="delete from students where student_id=$check;";
//   $run=mysqli_query($connection, $delete);
//
// }


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<a href="home.php">Home</a>
<br>

<?php
echo "N".substr("Google",2,1)."t".substr("Chrome",1,1)."ing";
?>

</body>
</html>

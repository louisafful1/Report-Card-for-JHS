<?php
include_once "include/database.php";
if(isset($_POST['check']) and isset($_POST['marks'])){ //and isset($_POST['subjects'])){
 //$subject=$_POST['subjects'];
 foreach ($_POST['check'] as $chec){
//mysqli_query($connection, "insert into report values('DEFAULT', ")
 		echo $chec;
 	}
 foreach ($_POST['marks'] as $mark){
 	echo $mark;
 }

}

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
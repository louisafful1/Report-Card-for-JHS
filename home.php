<?php
require("include/database.php");
require("include/session.php");

 echo $user_id_session;


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">


	</style>
</head>
<body>

<div style="text-align:right;"><a href="logout.php">Logout</a></div>
<br><br>
<a href="addstudents.php"><button>Add Student</button></a><br><br>
<a href="addmarks.php"><button>Add Marks</button></a><br><br>
<a href="addmarks.php"><button>View Result</button></a>
</body>
</html>

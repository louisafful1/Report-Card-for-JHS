<?php
include("include/database.php");

if(isset($_POST["username"]) and isset($_POST["password"])){
$username=$_POST["username"];
$password=$_POST["password"];

$query="select user_id, username, password from user;";
$execute=mysqli_query($connection, $query);//Execute the query
$array=mysqli_fetch_array($execute);
$user_name=$array['username'];//displays
$pass_word=$array['password'];

if(($username==$user_name) and ($password==$pass_word)){
	session_start();
	$_SESSION['user_id']=$array['user_id'];
    header("location:home.php");

}else if ($username==$user_name and $password!=$pass_word){
	echo "<font>Incorrect password!</font>";
}else if ($username!=$user_name and $password==$pass_word){
	echo "<font>Incorrect username!</font>";
} else{
	echo "<font>Wrong username or password!</font>";
 }


}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<link href="css/index.css" rel ="stylesheet">
</head>
<body>
       <h1>Login to your Account</h1>
	<form action="" name="Login" method="post" >
		<input class="field" type="text" name="username" placeholder="Enter Username"><br><br>
		<input class="field" type="password" name="password" placeholder="Enter password"><br><br>
		<input type="submit" name="Submit" value="Submit">
	</form>



</body>
</html>

<?php
session_start();




$username=$_POST['username'];
$password=$_POST['password'];

$username=stripcslashes($username);
$password=stripcslashes($password);
//$username=mysql_real_escape_string($username);
//$password=mysql_real_escape_string($password);
if(isset($_POST["submit"]))
{
	    $_SESSION['uname']=$_POST['username'];
		 $_SESSION['lastlogin']=time();
		 header('location:ind.php');
}

$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"login");
$sql="select * from users where username='$username' and password='$password'";
$userquery=mysqli_query($conn, $sql);

    $_SESSION['uname']=$_POST['username'];       

$row= mysqli_fetch_array($userquery, MYSQLI_ASSOC);
if($row)
{ 
if(!empty($_POST["remember"]))
{
	setcookie("username",$_POST["username"],time()+(10*365*24*60*60));
	
	setcookie("password",$_POST["password"],time()+(10*365*24*60*60));
} else{
	if(isset($_COOKIE["username"]))
	{
		setcookie("username","");
	}
	if(isset($_COOKIE["password"]))
	{
		setcookie("password","");
	}
}
header('location:ind.php');
	
	
}




 	
if($row['username']==$username && $row['password']==$password){
 header('location: page2.php');
}else
{  header('location: notvalid.php');
}
?>
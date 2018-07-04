<?php
session_start();

$username=$_POST['user'];
$password=$_POST['pass'];
//$_SESSION['uname']=$username;
if(isset($_POST['submit']))
{	

	if(empty($username)||empty($password))
	{
		header("location:ind.php?login=empty");
		echo "helllllllllo";
		exit();
	}

else
{

$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"login");
$sql="select * from users where username='$username' and password='$password'";
$userquery=mysqli_query($conn, $sql);
    $_SESSION['uname']=$_POST['user'];       
//$res=mysqli_num_rows($userquery);
	//if($res<1)
	//{
		//	header("location:../ind.php?login=error");
		//	exit();
	//}


$row= mysqli_fetch_array($userquery);
if($row['username']==$username && $row['password']==$password){

	//$_SESSION["uname"]=$username;
	//$hashedPwdCheck=password_verify($password,$row['password']);
	//if($hashedPwdCheck==false){
	//	header("location:../ind.php?login=error");
	//exit();
	//}
	//else{
	header('location:page2.php');
	//}

}
else{
header('location:notvalid.php');
}
}
}
else{
	header("location:ind.php?login=error");
	exit();
}
?>
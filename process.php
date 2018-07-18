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

$connection='DRIVER={SQL SERVER};SERVER=lasteclab;dsn=mis;database=mis';
$user='mis';
$pass='mis';
$conn=odbc_connect($connection, $user, $pass);
$sql="select * from users where username='$username' and password='$password'";
$userquery=odbc_exec($conn, $sql);
    $_SESSION['uname']=$_POST['user'];       
//$res=mysqli_num_rows($userquery);
	//if($res<1)
	//{
		//	header("location:../ind.php?login=error");
		//	exit();
	//}


while(odbc_fetch_row($userquery)){
if(odbc_result($result, 'username')===$username && odbc_result($result, 'password')===$password){

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
}
else{
	header("location:ind.php?login=error");
	exit();
}
?>
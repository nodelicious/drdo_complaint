<?php
//ini_set('session.save_path',realpath(dirname($_SERVER['lasteclab']).'\lastecsite\test files\drdo1\tmp\temp\'));
//session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$username=stripcslashes($username);
$password=stripcslashes($password);
//$username=mysql_real_escape_string($username);
//$password=mysql_real_escape_string($password);
$connection='DRIVER={SQL SERVER};SERVER=lasteclab;dsn=mis;database=mis';
$user='mis';
$pass='mis';
$conn=odbc_connect($connection, $user, $pass);
$sql="select * from logins where Login_id='$username' and password='$password';";
$result=odbc_exec($conn, $sql);
       
	 	$_SESSION['uname']=$username;

 if(odbc_result($result, 'Login_id')===$username && odbc_result($result, 'password')===$password){
 	header('location:page2.php');
 }
 else{
 	header('location:notvalid.php');
 }
?>
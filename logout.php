<?php
session_start();
session_destroy();

?>
<!DOCTYPE html>
<html>
<head>
  <link href="css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="style2.css">
   <link href="css/bootstrap-theme.min.css" rel="stylesheet">
     <link href="theme.css" rel="stylesheet">
    <link href="css/hello.css" rel="stylesheet">
<!--     <link rel="icon" href="c.jpg" type="image/gif" sizes="15*15"> -->
 <style type="text/css">
 body{
 background-image:url();
 }
 
 .jumbotron{
      margin-left:120px; 
      margin-right:120px;
      margin-top: 150px;
}
.header{
background-color:black;
color:white
}
</style>



</head>
<body>

<meta http-equiv="Content-Type" content="text/css" charset="UTF-8">
<div class="header">
<img  src="logo.png" height="100px" width="100px" class="img-circle" align="left">
<h1><b><center><u>LASER SCIENCE AND TECHNOLOGY CENTER</u></center></b></h1>
<br>
</div>
<div class="container theme-showcase" role="main">
<div class="jumbotron">
<center><h2 class="display-4">YOU HAVE BEEN LOGOUT SUCCESSFULLY</h2></center>
<center><img src="complaint.png" height="100" width="150"></center>
</div>
</div>
<table> align="center" width="500">
<tr>
<td align="center"><input type="button" name="HOME " value="home"  onClick="parent.open('ind.php')"></td>
</tr>
</table>
</div>
</div>
</body>
</html>
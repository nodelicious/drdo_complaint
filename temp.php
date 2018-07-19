<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
p.MsoTitle
	{margin-bottom:.0001pt;
	text-align:center;
	font-size:16.0pt;
	font-family:"Times New Roman";
	font-weight:bold;
	text-decoration:underline;
	text-underline:single; margin-left:0in; margin-right:0in; margin-top:0in}
h6
	{margin-bottom:.0001pt;
	text-align:center;
	page-break-after:avoid;
	font-size:16.0pt;
	font-family:"Times New Roman";
	text-decoration:underline;
	text-underline:single; margin-left:0in; margin-right:0in; margin-top:0in}
 p.MsoNormal
	{mso-style-parent:"";
	margin-bottom:.0001pt;
	font-size:12.0pt;
	font-family:"Times New Roman";
	margin-left:0in; margin-right:0in; margin-top:0in}
h3
	{margin-bottom:.0001pt;
	page-break-after:avoid;
	font-size:12.0pt;
	font-family:"Times New Roman"; margin-left:0in; margin-right:0in; margin-top:0in}
.style2 {
	font-size: medium;
	font-weight: bold;
}
.hindihead {font-size:140%;
text-align:center;}
.left {color: Blue;
}
.user {
  float: right;
  margin-right: 120px;
}
.head{
  float: left;
  margin-left: 120px;
}
</style>
</head>
<body>
<?php
$reqno=$_POST['req'];
$date=date('d/m/y');
$connection='DRIVER={SQL SERVER};SERVER=lasteclab;dsn=mis;database=mis';
$user='mis';
$pass='mis';
$conn=odbc_connect($connection, $user, $pass);
$sql="select * from user_complaint where reqno='$reqno';";
$result=odbc_exec($conn, $sql);
while(odbc_fetch_row($result)){
  $name=odbc_result($result, 'name');
  $desig=odbc_result($result, 'desig');
  $ext_no=odbc_result($result, 'ext_no');
  $subject=odbc_result($result, 'subject');
  $desc=odbc_result($result, 'description');
  $user_sign=odbc_result($result, 'user_sign');
  $day=odbc_result($result, 'user_date');
  $status=odbc_result($result, 'status');
  $action_date=odbc_result($result, 'action_date');
    $remark=odbc_result($result, 'remark');
	  $action_sign=odbc_result($result, 'action_sign');
}
?>

<div style="width:100%;">
	
	<div><p align="center" class="style2"><font color="#FF00FF"><font color="#990066"><span class="hindihead">&#2354;&#2375;&#2395;&#2352; &#2357;&#2367;&#2332;&#2381;&#2334;&#2366;&#2344; &#2319;&#2357;&#2306; &#2346;&#2381;&#2352;&#2379;&#2342;&#2381;&#2351;&#2379;&#2327;&#2367;&#2325;&#2368; &#2325;&#2375;&#2306;&#2342;&#2381;&#2352;&nbsp;&nbsp;&nbsp;</span><br />
	  LASER SCIENCE AND TECHNOLOGY 
CENTRE</font></font></p>
	  <p align="center" class="style2">&nbsp;</p>
	  <p align="center" class="style2">&#2310;&#2312;.&#2335;&#2368; &#2319;&#2357;&#2306; &#2310;&#2312;.&#2319;&#2360; &#2358;&#2367;&#2325;&#2366;&#2351;&#2340; &#2344;&#2367;&#2357;&#2366;&#2352;&#2339; &#2346;&#2381;&#2352;&#2339;&#2366;&#2354;&#2368;<br>
	  IT &amp; IS GRIEVANCE REDRESSAL SYSTEM</p>
	</div>
</div>


<table border="1" width="100%" id="table1" height="364">
	<tr>
		<td colspan="3" height="22"><b><font size="2">&nbsp;&nbsp;&#2358;&#2367;&#2325;&#2366;&#2351;&#2340; &#2360;&#2306;&#2326;&#2381;&#2351;&#2366; / &nbsp;Complaint No. : <?=$reqno;?>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 
		</font></b></td>
	</tr>
	
	<tr>
		<td width="6%" height="22">
	  <p align="center"><b><font size="2">1</font></b></td>
		<td width="42%" align="center"><div align="left"><span style="font-family: Times New Roman; font-weight: 700"> <font size="2">&#2344;&#2366;&#2350; / Name  </font></span></div></td>
		<td width="54%" height="22" align="left"><b><font size="2">&nbsp;<?=$name;?></font></b></td>
	</tr>
	<tr>
		<td width="6%" height="22">
	  <p align="center"><b><font size="2">2</font></b></td>
		<td width="42%" align="center"><div align="left"><span style="font-family: Times New Roman; font-weight: 700"> <font size="2">&#2346;&#2342; / Designation</font></span></div></td>
		<td width="54%" height="22"><b><font size="2">&nbsp;<?=$desig;?></font></b></td>
	</tr>
	<tr>
		<td width="6%" height="22">
	  <p align="center"><b><font size="2">3</font></b></td>
		<td width="42%" align="center"><div align="left"><b><span style="font-family: Times New Roman"><font size="2">&#2357;&#2367;&#2360;&#2381;&#2340;&#2366;&#2352; &#2360;&#2306;&#2326;&#2381;&#2351;&#2366; / Extension No.&nbsp;&nbsp; 
		  </font></span></b></div></td>
		<td width="54%" height="22"><b><font size="2">&nbsp;<?=$ext_no;?></font></b></td>
	</tr>
	<tr>
		<td width="6%" height="22">
	  <p align="center"><b><font size="2">4</font></b></td>
		<td width="42%" align="center"><div align="left"><span style="font-family: Times New Roman; font-weight: 700"> <font size="2">&#2357;&#2367;&#2359;&#2381;&#2351; / Subject </font></span></div></td>
		<td width="54%" height="22"><b><font size="2">&nbsp;<?=$subject;?></font></b></td>
	</tr>
	<tr>
		<td width="6%" height="22">
	  <p align="center"><b><font size="2">5</font></b></td>
		<td width="42%" align="center"><div align="left"><b> <span style="font-family: Times New Roman"> <font size="2">&#2357;&#2367;&#2357;&#2352;&#2339; / Description </font> </span></b></div></td>
		<td width="54%" height="22"><b><font size="2">&nbsp;<?=$desc;?></font></b></td>
	</tr>
	<tr>
		<td width="6%" height="22">
	  <p align="center"><b><font size="2">6</font></b></td>
		<td width="42%" align="center"><div align="left"><b> <span style="font-family: Times New Roman"><font size="2">&#2358;&#2367;&#2325;&#2366;&#2351;&#2340; &#2325;&#2368; &#2340;&#2366;&#2352;&#2368;&#2326; &#2319;&#2357;&#2306; &#2360;&#2350;&#2351; / Date and Time of Complaint</font></span></b></div></td>
		<td width="54%" height="22"><b><font size="2">&nbsp;<?=$day;?></font></b></td>
	</tr>
	
	<tr>
		<td width="6%">
	      <p align="center"><strong><font size="2">7</font></strong></td>
		<td width="42%" align="center"><div align="left"><b> <span style="font-family: Times New Roman"><font size="2">&#2325;&#2366;&#2352;&#2381;&#2351;&#2357;&#2366;&#2312; </font><font size="2">&#2325;&#2368; &#2327;&#2312; / Action Taken</font></span></b></div></td>
		<td width="54%"><b><font size="2">&nbsp;<?=$status;?></font></b></td>
	</tr>
	<tr>
		<td width="6%">
	  <p align="center"><strong><font size="2">8</font></strong></td>
		<td width="42%" align="center"><div align="left"><b><span style="font-family: Times New Roman"><font size="2">&#2325;&#2366;&#2352;&#2381;&#2351;&#2357;&#2366;&#2312; &#2325;&#2368; &#2340;&#2366;&#2352;&#2368;&#2326; / Action Taken On</font></span></b></div></td>
		<td width="54%"><b><font size="2">&nbsp;<?=$action_date;?></font></b></td>
	</tr>
	
	
	<tr>
		<td width="6%">
	  <p align="center"><strong><font size="2">10</font></strong></td>
		<td width="42%" align="center"><div align="left"><b> <span style="font-family: Times New Roman"><font size="2">&#2335;&#2367;&#2346;&#2381;&#2346;&#2339;&#2368; / Remarks</font></span></b></div></td>
		<td width="54%"><b><font size="2">&nbsp;<?=$remark;?></font></b></td>
	</tr>
	
</table>
<h3 style="text-indent:-27.0pt" align="center">&nbsp;</h3>
<h3 style="text-indent:-27.0pt" align="center">Certified that the above 
details will be used for bonafied government work. </h3>
<div class="user"><img src="<?=$user_sign;?>" height=75px width=100px />
Complaint By: <?=$name;?>
</div>
 
<div class="head"><img src="<?=$action_sign;?>" height=75px width=100px /></div>



</body>
</html>

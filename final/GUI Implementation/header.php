<?php
if(isset($_SESSION['type']))
$role=$_SESSION['type'];
else
{
	$role=0;
}
if(isset($_SESSION['user']))
$user=$_SESSION['user'];
else
	$user="";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-stri.ct.dtd">
<html>
<head>
<title>Vehicle Security</title>
<link rel="stylesheet" type="text/css" href="style/style.css" media="screen" />
</head>
<body>
    <div id="header"  style="background:gray;">
<table width="100%">
<tr>
<td><div style="padding-left:100px;" align="right"><span><img src="images/arun.png" alt="Logo" width="60" height="55" /></span></div></td>
<td style="padding-left:20px; max-width:500px;" align="center"><h1>National Institute of Technology Tiruchirappalli<br/></h1><h2 style="color:white;" align="center">Vehicle Security APP</h2></td>
<td align="left"><b>Welcome <span style="text-decoration:underline; font-size: large;"><?php echo $user." user";?></span>,</b></td>
</tr>
</table>
<div id="menu">
  <ul id="nav">
  <?php
  
   if($role==1)
   echo '<li><a href="index.php">Home</a></li>';
   if($role==1)
   echo '<li><a href="register.php">Register</a></li>';
   if($role==1)
   echo '<li><a href="feedback.php"><font color="">Feedback</a></font></li>';
     if($role==1)
   echo '<li><a href="userdetals.php">Settings</a></li>';

   if($role==2)
   echo '<li><a href="security.php">HOME</a></li>';
    if($role>=1)
   echo '<li><a href="logout.php">Logout</a></li>';
   
   echo '';
    ?>
   
   </ul>
 </div>
</div>
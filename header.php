<?php
session_start();
include("connection.php");
date_default_timezone_set('Asia/Kolkata');

$dttime = date("Y-m-d h:i:s");
//code for administratot
if(isset($_SESSION["loginid"]) && $_SESSION["logintype"]=="Admin")
{

$result = mysqli_query($con,"SELECT * FROM admin
WHERE login_id='$_SESSION[loginid]'  ");

while($row = mysqli_fetch_array($result))
  {
	$_SESSION["adminname"] =   $row['admin_name'];	
	$_SESSION["lastlogin"] =   $row['last_login'];
  }
  mysqli_query($con,"UPDATE admin SET last_login='$dttime'
WHERE login_id='$_SESSION[loginid]'");
}
//ends here
if(isset($_SESSION["loginid"]) && $_SESSION["logintype"]=="User")
{

$result = mysqli_query($con,"SELECT * FROM user
WHERE s_emailid='$_SESSION[loginid]'  ");

while($row = mysqli_fetch_array($result))
  {
	$_SESSION["username"] =   $row['emp_fname']. " ". $row['emp_lname'];	
	$_SESSION["lastlogin"] =   $row['lastlogin'];
  }
  mysqli_query($con,"UPDATE user SET last_login='$dttime'
WHERE s_emailid='$_SESSION[loginid]'");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Survey of schools</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/jquery.jcarousel.css" type="text/css" media="all" />
<!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
<link rel="shortcut icon" href="css/images/favicon.ico" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.pack.js"></script>
<script type="text/javascript" src="js/func.js"></script>
<style type="text/css">
#apDiv1 {
	position:absolute;
	width:185px;
	height:89px;
	z-index:1;
	left: 523px;
	top: 4px;
}
</style>
</head>
<body>

<div class="shell">
  <div class="border">
    <div id="header">
      <h1 id="logo"><a href="#" class="notext">beSMART</a></h1>
      <div id="sidebar" class="right">
       
        <div class="sidebar-nav">
        
<?php
        if($_SESSION["logintype"]=="Admin")
{
	?>
          <p>Welcome <?php echo  $_SESSION["loginid"];?></p>
          <p>Admin name :  <?php echo  $_SESSION["adminname"];?></p>
          <p>Last login : <?php echo $_SESSION["lastlogin"];?></p>
<?php
}
else if($_SESSION["logintype"]=="User")
{
?>
 			<p>Welcome <?php echo  $_SESSION["loginid"];?></p>
    		<p>Name :  <?php echo  $_SESSION["username"];?></p>
          	<p>Last login : <?php echo $_SESSION["lastlogin"];?></p>
<?php
}
?>

        </div>
      </div>
      
      <div class="cl">&nbsp;</div>
 
</div>


    <div id="navigation">
    
      <ul>
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="history.php">History</a></li>
        <li><a href="contacts.php">Contact</a></li>
        <li><a href="viewphotogallery.php">gallery</a></li>
        <li><a href="userlogin.php">application</a></li>
        <li><a href="newsupdates.php">whats new</a></li>
      </ul>
      
      <div class="cl">&nbsp;</div>
      
    </div>
    
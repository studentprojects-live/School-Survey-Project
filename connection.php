<?php
$con = mysqli_connect("localhost","root","","schoolsurveyproject");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error($con));
  }
?>
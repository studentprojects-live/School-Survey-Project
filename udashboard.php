<?php
include("header.php");
include("connection.php");

$result = mysqli_query($con,"SELECT * FROM Persons WHERE FirstName='Peter'");

while($row = mysqli_fetch_array($result))
  {
  echo $row['FirstName'] . " " . $row['LastName'];
  echo "<br>";
  }
?>
    <div id="main">
      <div id="content" class="left">
        <div class="highlight">
          <h3>User Account</h3>
          <form id="form1" name="form1" method="post" action="">
            <p>&nbsp;</p>
            <p>&nbsp;</p>
          </form>
          <p>&nbsp;<table width="587" height="292" >
  <tr>
    <td width="186" height="135" align="center" valign="top"><p><a href="udashboard.php"><img src="images/home.jpg" width="83" height="67" /></a></p>
      <p><strong><a href="udashboard.php">Home</a></strong></p></td>
    <td width="199" align="center" valign="top"><p><a href="viewuserprofile.php"><img src="images/images (3).jpg" width="85" height="68" /></a></p>
      <p><strong><a href="viewuserprofile.php">My Account</a></strong></p></td>
    <td width="186" colspan="2" align="center" valign="top"><p><strong><a href="gallery.php"><img src="images/download (2).jpg" width="83" height="64" /></a></strong></p>
      <p><strong><a href="gallery.php">Gallery</a></strong></p></td>
    </tr>
  <tr>
    <td height="149" align="center" valign="top"><p><a href="viewinstituteprofile.php"><img src="images/images (5).jpg" width="83" height="64" /></a></p>
      <p><strong><a href="viewinstituteprofile.php">Institutions</a></strong></p></td>
    <td align="center" valign="top"><p><a href="update.php"><img src="images/downl1oad.jpg" width="83" height="65" /></a></p>
      <p><strong><a href="update.php">News Updates</a></strong></p></td>
    <td width="186" colspan="2" align="center" valign="top"><p><a href="logout.php"><img src="images/signout.jpg" width="83" height="65" /></a></p>
      <p><strong><a href="logout.php">Logout</a></strong></p></td>
    </tr>
</table></p>
</div>
        <div class="projects">
          <div class="item"></div>
          <div class="item">
            <div class="cl">&nbsp;</div>
          </div>
        </div>
      </div>
      <?php
	  include("sidebar.php");
	  ?>
      <div class="cl">&nbsp;</div>
    </div>
    <div class="shadow-l"></div>
    <div class="shadow-r"></div>
    <div class="shadow-b"></div>
  </div>
 <?php 
 include("footer.php");
 ?>
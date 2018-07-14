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
          <h3>Admin Dashboard</h3>
          <p>&nbsp;</p>
          <form id="form1" name="form1" method="post" action="">
            <p>&nbsp;</p>
            <p>&nbsp;</p>
          </form>
          <table width="541" height="397" >
            <tr>
              <td width="99" height="131" align="center" valign="top"><p><a href="dashboard.php"><img src="images/home.jpg" width="83" height="58" /></a></p>
                <p><strong><a href="udashboard.php">Home</a></strong></p></td>
              <td width="117" align="center" valign="top"><p><a href="viewsurvey.php"><img src="images/download (4).jpg" width="83" height="58" /></a></p>
                <p><strong><a href="viewsurvey.php">View Servey</a></strong></p></td>
              <td width="124" align="center" valign="top"><p><a href="surveyschool.php"><img src="images/images (6).jpg" width="83" height="58" /></a></p>
                <p><strong><a href="surveyschool.php">Servey Report</a></strong></p></td>
              <td width="116" align="center" valign="top"><p><a href="viewusers.php"><img src="images/user.jpg" width="83" height="58" /></a></p>
                <p><strong><a href="viewusers.php">Users</a></strong></p></td>
            </tr>
            <tr>
              <td align="center" valign="top"><p><a href="viewinstitution.php"><img src="images/images (5).jpg" width="83" height="58" /></a></p>
                <p><strong><a href="viewinstitution.php">Institutions</a></strong></p></td>
              <td align="center" valign="top"><p><a href="update.php"><img src="images/downl1oad.jpg" width="83" height="58" /></a></p>
                <p><strong><a href="update.php">News Updates</a></strong></p></td>
              <td align="center" valign="top"><p><strong><a href="viewgallery.php"><img src="images/download (2).jpg" width="83" height="58" /></a></strong></p>
                <p><strong><a href="viewgallery.php">Gallery</a></strong></p></td>
              <td align="center" valign="top"><p><a href="admin.php"><img src="images/download (3).jpg" width="83" height="58" /></a></p>
                <p><strong><a href="admin.php">Configuration</a></strong></p></td>
            </tr>
            <tr>
            <td height="110" colspan="2" align="center" valign="top"><p><a href="surveytype.php"><img src="images/report.jpg" width="97" height="79" /></a></p>
              <p><strong><a href="surveytype.php">Reports</a></strong></p></td>
            <td height="110" align="center" valign="top"><p><a href="logout.php"><img src="images/logout.jpg" width="97" height="79" /><strong></strong></a></p>              <a href="logout.php"><strong><a href="logout.php">Logout</a></strong></a></td>
            <td height="110" align="center" valign="top"><a href="logout.php"><strong></strong></a><p>&nbsp;</p></td>
              
            </tr>
          </table>
          <p>&nbsp;</p>
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
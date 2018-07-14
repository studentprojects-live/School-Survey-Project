<?php
session_start();

$result1 = mysqli_query($con,"SELECT * FROM user WHERE s_emailid='$_SESSION[loginid]' ");
$arrayinst1 = mysqli_fetch_array($result1);

$resultinst = mysqli_query($con,"select * from institute where inst_id='$arrayinst1[inst_id]'");
$arrayinst = mysqli_fetch_array($resultinst);
$inst_idss = $arrayinst["inst_type"]; 

	if($_SESSION["logintype"] == "Admin")
	{
?>
<div id="sidebar" class="right">
<h3>Admin Menu</h3>
        <div class="sidebar-nav">
          <ul>
            <li><strong><a href="dashboard.php"><strong>Home</strong></a></li>
            <li><strong><a href="viewsurvey.php">View Survey</a></strong></li>
            <li><strong><a href="surveyschool.php">Survey Report</a></strong></li>
            <li><strong><a href="viewusers.php">Users</a></strong></li>
            <li><strong><a href="viewinstitution.php">Institutions</a></strong></li>
            <li><strong><a href="update.php">News &amp; Updates | Events</a></strong></li>
            <li><strong><a href="viewgallery.php">Gallery</a></strong></li>
            <li><strong><a href="admin.php">Configuration</a></strong></li>
            <li><strong><a href="surveytype.php">Reports</a></strong></li>
            <li><strong><a href="logout.php">Logout</a></strong></li>
          </ul>	
</div>
      </div>
<?php
	}
	else if($_SESSION["logintype"]=="User")
	{
		?>
        <div id="sidebar" class="right">
    <h3>Survey records</h3>
        <div class="sidebar-nav">
          <ul>
            <li><strong><a href="schoolinfo.php">Community wise strength</a></strong></li>
            <li><strong><a href="community.php">Staff Communitywise Strength</a></strong></li>
            <li><strong><a href="misc.php">Misc. details</a></strong></li>
            <li><strong><a href="payment.php">Payments</a></strong></li>
            <li><strong><a href="infrastructure.php">Infrastructural Facilities</a></strong></li>
             <?php
		if($inst_idss == "High school"||$inst_idss == "PUC")
		{
		?>
            <li><strong><a href="resulthighschool.php">Result</a></strong></li>
            <?php
		}
			?>  
            <li><strong><a href="strongweak.php">Strong points &amp; Drawbacks</a></strong></li>
            <li><strong><a href="problems.php">Problems</a></strong></li>
      <?php
		if($inst_idss == "High school")
		{
		?>  
             <li><strong><a href="highsurvey.php">Survey report</a></strong></li>
        <?php
		}
		if($inst_idss == "Primary school")
		{
		?>
             <li><strong><a href="survey.php">Survey report</a></strong></li>
        <?php
		}
		if($inst_idss == "PUC")
		{
		?>
             <li><strong><a href="pusurvey.php">Survey report</a></strong></li>
        <?php
		}
		?>
          </ul>
        </div>
<h3>User Menu</h3>
        <div class="sidebar-nav">
        
          <ul>
            <li><strong><a href="udashboard.php"><strong>Home</strong></a></li>
            <li><strong><a href="viewuserprofile.php">Profile</a></strong></li>
             <li><strong><a href="viewinstituteprofile.php">Institution Profile</a></strong></li>
           
            <li><strong><a href="update.php">Events</a></strong></li>
            <li><strong><a href="gallery.php">Gallery</a></strong></li>
            <li><strong><a href="logout.php">Logout</a></strong></li>
          </ul>
        </div>
      </div>
        <?php	
	}
	else
	{
	}
?>
		
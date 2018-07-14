<?php
include("header.php");
include("connection.php");
if($_POST["button"])
{
	$result = mysqli_query($con,"SELECT * FROM  updates WHERE title LIKE  '%$_POST[newstitle]%'");
}
else
{
$result = mysqli_query($con,"SELECT * FROM updates");
}

?>
    <div id="main">
      <div id="content" class="left">
        <div class="highlight">
          <h3>View News</h3>
          <form id="form1" name="form1" method="post" action="">
            <p><a href="update.php"><strong>Add News</strong></a>
<input type="text" name="newstitle" id="newstitle" />
              <input type="submit" name="button" id="button" value=" Search " />
            </p>
          </form>
          <table width="576" border="1">
          <tr>
            <th width="228" height="23" scope="col">News Title</th>
            <th width="160" scope="col">Date</th>
            <th width="166" scope="col">Time</th>
            </tr>
   <?php
            while($row = mysqli_fetch_array($result))
  {
   			echo "<tr>";
            echo "<td> <a href='viewupdateprof.php?proid=$row[upda_id]'>&nbsp; $row[title]</td>";
			echo "<td>&nbsp; $row[date]</td>";
            echo "<td>&nbsp; $row[time]</td>";
            echo "</tr>";
  }
  ?>
       
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
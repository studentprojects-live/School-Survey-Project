<?php
include("header.php");
include("connection.php");
if(isset($_POST[button]) && $_POST[institutetype] != "")
{
		$resulta = mysqli_query($con,"SELECT * FROM institute where inst_type = '$_POST[institutetype]'");

}
else
{
$resulta = mysqli_query($con,"SELECT * FROM institute");
}


?>
    <div id="main">
      <div id="content" class="left">
        <div class="highlight">
          <h3>View institution</h3>
          <form id="form1" name="form1" method="post" action="">
            <p>
            
                <label for="institutetype"> <a href="institute.php"><strong>Add new Institution</strong></a> Institution Type</label>
             <select name="institutetype" id="institutetype">
                <option value="">All</option>
               
			   <option value="Primary school" <?php
			if($_POST[institutetype] == "Primary school")
			{
			echo " selected";
			}
			?>>Primary school</option>
                <option value="High school"  <?php
			if($_POST[institutetype] == "High school")
			{
			echo " selected";
			}
			?>>High school</option>
                <option value="PUC"  <?php
			if($_POST[institutetype] == "PUC")
			{
			echo " selected";
			}
			?>>PUC</option>
              </select>
              
              <input type="submit" name="button" id="button" value="Submit" />
            </p>
          </form>
          <table width="615" border="1">
          <tr>
            <th width="87" height="51" scope="col">Institution ID</th>
            <th width="124" scope="col" >Institution <br />
              type </th>
            <th width="178" scope="col">Institution <br />
              name</th>
            <th width="103" scope="col">Medium</th>
            <th width="158" scope="col"><p>School type</p></th>
          </tr>
         
               <?php
            while($rowa = mysqli_fetch_array($resulta))
			{
		      echo "<tr>";
              echo "<td>&nbsp; $rowa[inst_id]</td>";
			  	$resultb = mysqli_query($con,"SELECT * FROM institute where inst_id='$rowa[inst_id]'");
				  while($rowb = mysqli_fetch_array($resultb))
					{
						$instype = $rowb[inst_type];
						
					}
              echo "<td>&nbsp; $instype</td>";
			  $instype = "";
			  echo "<td> <a href='viewinstituteprofile.php?proid=$rowa[inst_id]'>
              &nbsp; $rowa[inst_name]</a></td>";
			 
              echo "<td>&nbsp; $rowa[medium]</td>";
              echo "<td>&nbsp; $rowa[school_type]</td>";
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
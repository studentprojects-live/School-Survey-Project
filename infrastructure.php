<?php
session_start();
include("header.php");
include("connection.php");
include("surveyheader.php");
?>
<SCRIPT type="application/javascript">
function generate()
{
	if(document.form1.rec1.value=="") 
	{
		alert("enter Class rooms number field");
		return false;
	}
		if(parseInt(document.form1.rec1.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(document.form1.rec2.value=="") 
	{
		alert("enter Class rooms area field");
		return false;
		}
		if(parseInt(document.form1.rec2.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(isNaN(document.form1.rec1.value))
	{
		alert("enter proper number for class rooms number field");
		return false;
		}
		
		if(isNaN(document.form1.rec2.value))
	{
		alert("enter proper number for class rooms area field");
		return false;
		}
		
		
		if(document.form1.rec3.value=="") 
	{
		alert("enter staff rooms number field");
		return false;
		}
		if(parseInt(document.form1.rec3.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(document.form1.rec4.value=="") 
	{
		alert("enter staff rooms area field");
		return false;
		}
		if(parseInt(document.form1.rec4.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(isNaN(document.form1.rec3.value))
	{
		alert("enter proper number for staff rooms number field");
		return false;
		}
		if(isNaN(document.form1.rec4.value))
	{
		alert("enter proper number for staff rooms area field");
		return false;
		}
		if(document.form1.rec5.value=="") 
	{
		alert("enter office rooms number field");
		return false;
		}
		if(parseInt(document.form1.rec5.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(document.form1.rec6.value=="") 
	{
		alert("enter office rooms area field");
		return false;
		}
		if(parseInt(document.form1.rec6.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(isNaN(document.form1.rec5.value))
	{
		alert("enter proper number for office rooms number field");
		return false;
		}
		if(isNaN(document.form1.rec6.value))
	{
		alert("enter proper number for office room area field");
		return false;
		}
		if(document.form1.rec7.value=="") 
	{
		alert("enter   HM rooms number field");
		return false;
		}
		if(parseInt(document.form1.rec7.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(document.form1.rec8.value=="") 
	{
		alert("enter HM rooms area field");
		return false;
		}
		if(parseInt(document.form1.rec8.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(isNaN(document.form1.rec7.value))
	{
		alert("enter proper number for HM rooms number field");
		return false;
		}
		if(isNaN(document.form1.rec8.value))
	{
		alert("enter proper number for HM rooms area field");
		return false;
		}
		
		if(document.form1.rec9.value=="") 
	{
		alert("enter Ladies rooms number field");
		return false;
		}
		if(parseInt(document.form1.rec9.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(document.form1.rec10.value=="") 
	{
		alert("enter Ladies rooms area field");
		return false;
		}
		if(parseInt(document.form1.rec10.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(isNaN(document.form1.rec9.value))
	{
		alert("enter proper number for Ladies rooms number field");
		return false;
		}
		if(isNaN(document.form1.rec10.value))
	{
		alert("enter proper number for Ladies rooms area field");
		return false;
		}
		
		if(document.form1.rec11.value=="") 
	{
		alert("enter Auditorium rooms number field");
		return false;
		}
		if(parseInt(document.form1.rec11.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(document.form1.rec12.value=="") 
	{
		alert("enter Auditorium rooms area field");
		return false;
		}
		if(parseInt(document.form1.rec12.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(isNaN(document.form1.rec11.value))
	{
		alert("enter proper number for Auditorium rooms number field");
		return false;
		}
		if(isNaN(document.form1.rec12.value))
	{
		alert("enter proper number for Auditorium rooms area field");
		return false;
		}
		
		if(document.form1.rec13.value=="") 
	{
		alert("enter Parlour rooms number field");
		return false;
		}
		if(parseInt(document.form1.rec13.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(document.form1.rec14value=="") 
	{
		alert("enter Parlour  rooms area field");
		return false;
		}
		if(parseInt(document.form1.rec14.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(isNaN(document.form1.rec13.value))
	{
		alert("enter proper number for Parlour rooms number field");
		return false;
		}
		if(isNaN(document.form1.rec14.value))
	{
		alert("enter proper number for Parlour rooms area field");
		return false;
		}
		
		if(document.form1.rec15.value=="") 
	{
		alert("enter A V  rooms number field");
		return false;
		}
		if(parseInt(document.form1.rec15.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(document.form1.rec16.value=="") 
	{
		alert("enter A V rooms area field");
		return false;
		}
		if(parseInt(document.form1.rec16.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(isNaN(document.form1.rec15.value))
	{
		alert("enter proper number for A V rooms number field");
		return false;
		}
		if(isNaN(document.form1.rec16.value))
	{
		alert("enter proper number for A V rooms area field");
		return false;
		}
		if(document.form1.rec17.value=="") 
	{
		alert("enter playground number field");
		return false;
		}
		if(parseInt(document.form1.rec17.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(document.form1.rec18.value=="") 
	{
		alert("enter playground area field");
		return false;
		}
		if(parseInt(document.form1.rec18.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(isNaN(document.form1.rec17.value))
	{
		alert("enter proper number for playground number field");
		return false;
		}
		if(isNaN(document.form1.rec18.value))
	{
		
		alert("enter proper number for playground area field");
		return false;
		}if(document.form1.rec19.value=="") 
	{
		alert("enter vollyball number field");
		return false;
		}
		if(parseInt(document.form1.rec19.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(document.form1.rec20.value=="") 
	{
		alert("enter vollyball area field");
		return false;
		}
		if(parseInt(document.form1.rec20.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(isNaN(document.form1.rec19.value))
	{
		alert("enter proper number for vollyball number field");
		return false;
		}
		if(isNaN(document.form1.rec20.value))
	{
		alert("enter proper number for vollyball area field");
		return false;
		}
		if(document.form1.rec21.value=="") 
	{
		alert("enter basketball number field");
		return false;
		}
		if(parseInt(document.form1.rec21.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(document.form1.rec22.value=="") 
	{
		alert("enter basketball area field");
		return false;
		}
		if(parseInt(document.form1.rec22.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(isNaN(document.form1.rec21.value))
	{
		alert("enter proper number for basketball number field");
		return false;
		}
		if(isNaN(document.form1.rec22.value))
	{
		alert("enter proper number for basketball area field");
		return false;
		}
		if(document.form1.rec23.value=="") 
	{
		alert("enter throwball number field");
		return false;
		}
		if(parseInt(document.form1.rec23.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(document.form1.rec24.value=="") 
	{
		alert("enter throwball area field");
		return false;
		}
		if(parseInt(document.form1.rec24.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(isNaN(document.form1.rec23.value))
	{
		alert("enter proper number for throwball number field");
		return false;
		}
		if(isNaN(document.form1.rec24.value))
	{
		alert("enter proper number for throwball area field");
		return false;
		}
		if(document.form1.rec25.value=="") 
	{
		alert("enter tennicoit  number field");
		return false;
		}
		if(parseInt(document.form1.rec25.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(document.form1.rec26.value=="") 
	{
		alert("enter tennicoit area field");
		return false;
		}
		if(parseInt(document.form1.rec26.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(isNaN(document.form1.rec25.value))
	{
		alert("enter proper number for tennicoit number field");
		return false;
		}
		if(isNaN(document.form1.rec26.value))
	{
		alert("enter proper number for tennicoit area field");
		return false;
		}
		if(document.form1.rec27.value=="") 
	{
		alert("enter badminton  number field");
		return false;
		}
		if(parseInt(document.form1.rec27.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(document.form1.rec28.value=="") 
	{
		alert("enter badminton area field");
		return false;
		}
		if(parseInt(document.form1.rec28.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(isNaN(document.form1.rec27.value))
	{
		alert("enter proper number for badminton number field");
		return false;
		}
		if(isNaN(document.form1.rec28.value))
	{
		alert("enter proper number for badminton area field");
		return false;
		}
		if(document.form1.rec29.value=="") 
	{
		alert("enter kho-kho  number field");
		return false;
		}
		if(parseInt(document.form1.rec29.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(document.form1.rec30.value=="") 
	{
		alert("enter kho-kho area field");
		return false;
		}
		if(parseInt(document.form1.rec30.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(isNaN(document.form1.rec29.value))
	{
		alert("enter proper number for kho-kho number field");
		return false;
		}
		if(isNaN(document.form1.rec30.value))
	{
		alert("enter proper number for kho-kho area field");
		return false;
		}
		if(document.form1.rec31.value=="") 
	{
		alert("enter football number field");
		return false;
		}
		if(parseInt(document.form1.rec31.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(document.form1.rec32.value=="") 
	{
		alert("enter football area field");
		return false;
		}
		if(parseInt(document.form1.rec32.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(isNaN(document.form1.rec31.value))
	{
		alert("enter proper number for football number field");
		return false;
		}
		if(isNaN(document.form1.rec32.value))
	{
		alert("enter proper number for football area field");
		return false;
		}
		if(document.form1.rec33.value=="") 
	{
		alert("enter hockey number field");
		return false;
		}
		if(parseInt(document.form1.rec33.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(document.form1.rec34.value=="") 
	{
		alert("enter hockey area field");
		return false;
		}
		if(parseInt(document.form1.rec34.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(isNaN(document.form1.rec33.value))
	{
		alert("enter proper number for hockey number field");
		return false;
		}
		if(isNaN(document.form1.rec34.value))
	{
		alert("enter proper number for hockey area field");
		return false;
		}
		if(document.form1.rec35.value=="") 
	{
		alert("enter gym number field");
		return false;
		}
		if(parseInt(document.form1.rec35.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(document.form1.rec36.value=="") 
	{
		alert("enter gym area field");
		return false;
		}
		if(parseInt(document.form1.rec36.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(isNaN(document.form1.rec35.value))
	{
		alert("enter proper number for gym number field");
		return false;
		}
		if(isNaN(document.form1.rec36.value))
	{
		alert("enter proper number for gym area field");
		return false;
		}
		if(document.form1.rec37.value=="") 
	{
		alert("enter science  number field");
		return false;
		}
		if(parseInt(document.form1.rec37.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(document.form1.rec38.value=="") 
	{
		alert("enter science area field");
		return false;
		}
		if(parseInt(document.form1.rec38.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(isNaN(document.form1.rec37.value))
	{
		alert("enter proper number for science number field");
		return false;
		}
		if(isNaN(document.form1.rec38.value))
	{
		alert("enter proper number for science area field");
		return false;
		}
		if(document.form1.rec39.value=="") 
	{
		alert("enter physics number field");
		return false;
		}
		if(parseInt(document.form1.rec39.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(document.form1.rec40.value=="") 
	{
		alert("enter physics area field");
		return false;
		}
		if(parseInt(document.form1.rec40.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(isNaN(document.form1.rec39.value))
	{
		alert("enter proper number for physics number field");
		return false;
		}
		if(isNaN(document.form1.rec40.value))
	{
		alert("enter proper number for physics area field");
		return false;
		}
		if(document.form1.rec41.value=="") 
	{
		alert("enter chemistry number field");
		return false;
		}
		if(parseInt(document.form1.rec41.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(document.form1.rec42.value=="") 
	{
		alert("enter chemistry area field");
		return false;
		}
		if(parseInt(document.form1.rec42.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(isNaN(document.form1.rec41.value))
	{
		alert("enter proper number for chemistry number field");
		return false;
		}
		if(isNaN(document.form1.rec42.value))
	{
		alert("enter proper number for chemistry area field");
		return false;
		}
		if(document.form1.rec43.value=="") 
	{
		alert("enter biology number field");
		return false;
		}
		if(parseInt(document.form1.rec43.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(document.form1.rec44.value=="") 
	{
		alert("enter biology area field");
		return false;
		}
		if(parseInt(document.form1.rec44.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(isNaN(document.form1.rec43.value))
	{
		alert("enter proper number for biology number field");
		return false;
		}
		if(isNaN(document.form1.rec44.value))
	{
		alert("enter proper number for biology area field");
		return false;
		}
		if(document.form1.rec45.value=="") 
	{
		alert("enter mathematics number field");
		return false;
		}
		if(parseInt(document.form1.rec45.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(document.form1.rec46.value=="") 
	{
		alert("enter mathematics area field");
		return false;
		}
		if(parseInt(document.form1.rec46.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(isNaN(document.form1.rec45.value))
	{
		alert("enter proper number for mathematics number field");
		return false;
		}
		if(isNaN(document.form1.rec46.value))
	{
		alert("enter proper number for mathematics area field");
		return false;
		}
		if(document.form1.rec47.value=="") 
	{
		alert("enter E V S  lab number field");
		return false;
		}
		if(parseInt(document.form1.rec47.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(document.form1.rec48.value=="") 
	{
		alert("enter E V S lab area field");
		return false;
		}
		if(parseInt(document.form1.rec48.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(isNaN(document.form1.rec47.value))
	{
		alert("enter proper number for E V S lab number field");
		return false;
		}
		if(isNaN(document.form1.rec48.value))
	{
		alert("enter proper number for E V S lab area field");
		return false;
		}
		if(document.form1.rec49.value=="") 
	{
		alert("enter language lab number field");
		return false;
		}
		if(parseInt(document.form1.rec49.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(document.form1.rec50.value=="") 
	{
		alert("enter language lab area field");
		return false;
		}
		if(parseInt(document.form1.rec50.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(isNaN(document.form1.rec49.value))
	{
		alert("enter proper number for language lab number field");
		return false;
		}
		if(isNaN(document.form1.rec50.value))
	{
		alert("enter proper number for language lab area field");
		return false;
		}
		if(document.form1.rec51.value=="") 
	{
		alert("enter computer lab number field");
		return false;
		}
		if(parseInt(document.form1.rec51.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(document.form1.rec52.value=="") 
	{
		alert("enter computer lab area field");
		return false;
		}
		if(parseInt(document.form1.rec52.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(isNaN(document.form1.rec51.value))
	{
		alert("enter proper number for computer lab number field");
		return false;
		}
		if(isNaN(document.form1.rec52.value))
	{
		alert("enter proper number for computer lab area field");
		return false;
		}
		if(document.form1.rec53.value=="") 
	{
		alert("enter smart class number field");
		return false;
		}
		if(parseInt(document.form1.rec53.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(document.form1.rec54.value=="") 
	{
		alert("enter smart class area field");
		return false;
		}
		if(parseInt(document.form1.rec54.value) <0)
		{
			alert("number must be greater then 0");
			return false;
		}
		if(isNaN(document.form1.rec53.value))
	{
		alert("enter proper number for smart class number field");
		return false;
		}
		if(isNaN(document.form1.rec54.value))
	{
		alert("enter proper number for smart class area field");
		return false;
	}
		
}
</script>
<?php
$dt = date("Y-m-d h:i:s");

	for($k=0; $k<60	; $k++)
	{
		$insfra[$k] = 0;
	}
 
if(isset($_POST["Update"]))
{ 
	$serialized_data = serialize(array("$_POST[rec1]","$_POST[rec2]","$_POST[rec3]","$_POST[rec4]","$_POST[rec5]","$_POST[rec6]",
	"$_POST[rec7]","$_POST[rec8]","$_POST[rec9]","$_POST[rec10]","$_POST[rec11]","$_POST[rec12]","$_POST[rec13]","$_POST[rec14]","$_POST[rec15]","$_POST[rec16]","$_POST[rec17]","$_POST[rec18]","$_POST[rec19]","$_POST[rec20]","$_POST[rec21]","$_POST[rec22]","$_POST[rec23]","$_POST[rec24]","$_POST[rec25]","$_POST[rec26]","$_POST[rec27]","$_POST[rec28]","$_POST[rec29]","$_POST[rec30]","$_POST[rec31]","$_POST[rec32]","$_POST[rec33]","$_POST[rec34]","$_POST[rec35]","$_POST[rec36]","$_POST[rec37]","$_POST[rec38]","$_POST[rec39]","$_POST[rec40]","$_POST[rec41]","$_POST[rec42]","$_POST[rec43]","$_POST[rec44]","$_POST[rec45]","$_POST[rec46]","$_POST[rec47]","$_POST[rec48]","$_POST[rec49]","$_POST[rec50]","$_POST[rec51]","$_POST[rec52]","$_POST[rec53]","$_POST[rec54]","$_POST[rec55]","$_POST[rec56]","$_POST[rec57]",
	"$_POST[rec58]","$_POST[rec59]","$_POST[rec60]","$_POST[rec61]","$_POST[rec62]","$_POST[rec63]","$_POST[rec64]","$_POST[rec65]","$_POST[rec66]","$_POST[rec67]"));
	
	$resschool3 = mysqli_query($con,"select * from infrastructure where surveyno='$surveyno'");
	$counts = mysqli_num_rows($resschool3);
	
	if($counts == 1)
	{
			mysqli_query($con,"UPDATE infrastructure SET surveyno='$surveyno',lastupdate='$dt',infrastru='$serialized_data'");
			if(mysqli_affected_rows($con) == 1)
			{
			$recres = "Infrastructure Record updated successfully...";
			}
	}
	else
	{
			$sql7="INSERT INTO infrastructure(surveyno,infrastru,lastupdate) 
			VALUES('$surveyno','$serialized_data','$dt')";
			if (!mysqli_query($con,$sql7,$con))
			{
			die('Errors: ' . mysqli_error($con));
			}
			if(mysqli_affected_rows($con) ==  1)
			{
			$recres = "Infrastructure record inserted successfully...";
			}
	}	
}

$resschool4 = mysqli_query($con,"select * from infrastructure where surveyno='$surveyno'");
	$counts4 = mysqli_num_rows($resschool4);
	while($row4 = mysqli_fetch_array($resschool4))
		{	
		$surveynou 	=  	$row4[surveyno];
		 $insfra  	 = 	unserialize($row4[infrastru]);
		}
?>

<link rel="stylesheet" href="survey.css" type="text/css" media="screen" />

    <div id="main">
      <div id="content" class="left">
        <div class="highlight">
          <h3> Infrastructure</h3>
          <form id="form1" name="form1" method="post" action="" onsubmit="generate()">
          <?php echo $recres; ?>
            <table width="453" border="0">
              <tr>
                <td width="439"><table width="390" border="0">
                  <tr>
                    <th width="148" scope="row">Rooms</th>
                    <td width="113">Number</td>
                    <td width="115">Area</td>
                  </tr>
                  <tr>
                    <th scope="row">Class rooms</th>
                    <td><label for="rec1"></label>
                    <input name="rec1" type="text" id="rec1" value="<?php echo $insfra[0]; ?>" size="15" /></td>
                    <td><label for="rec2">
                      <input name="rec2" type="text" id="rec2" value="<?php echo $insfra[1]; ?>" size="15" />
                    </label></td>
                  </tr>
                  <tr>
                    <th scope="row">Staff rooms</th>
                    <td><input name="rec3" type="text" id="rec3" value="<?php echo $insfra[2]; ?>" size="15" /></td>
                    <td><input name="rec4" type="text" id="rec4" value="<?php echo $insfra[3]; ?>" size="15" /></td>
                  </tr>
                  <tr>
                    <th scope="row">Office rooms</th>
                    <td><input name="rec5" type="text" id="rec5" value="<?php echo $insfra[4]; ?>" size="15" /></td>
                    <td><input name="rec6" type="text" id="rec6" value="<?php echo $insfra[5]; ?>" size="15" /></td>
                  </tr>
                  <tr>
                    <th scope="row">HM</th>
                    <td><input name="rec7" type="text" id="rec7" value="<?php echo $insfra[6]; ?>" size="15" /></td>
                    <td><input name="rec8" type="text" id="rec8" value="<?php echo $insfra[7]; ?>" size="15" /></td>
                  </tr>
                  <tr>
                    <th scope="row">Ladies room</th>
                    <td><input name="rec9" type="text" id="rec9" value="<?php echo $insfra[8]; ?>" size="15" /></td>
                    <td><input name="rec10" type="text" id="rec10" value="<?php echo $insfra[9]; ?>" size="15" /></td>
                  </tr>
                  <tr>
                    <th scope="row">Auditorium</th>
                    <td><input name="rec11" type="text" id="rec11" value="<?php echo $insfra[10]; ?>" size="15" /></td>
                    <td><input name="rec12" type="text" id="rec12" value="<?php echo $insfra[11]; ?>" size="15" /></td>
                  </tr>
                  <tr>
                    <th scope="row">Parlour</th>
                    <td><input name="rec13" type="text" id="rec13" value="<?php echo $insfra[12]; ?>" size="15" /></td>
                    <td><input name="rec14" type="text" id="rec14" value="<?php echo $insfra[13]; ?>" size="15" /></td>
                  </tr>
                  <tr>
                    <th scope="row">AV room</th>
                    <td><input name="rec15" type="text" id="rec15" value="<?php echo $insfra[14]; ?>" size="15" /></td>
                    <td><input name="rec16" type="text" id="rec16" value="<?php echo $insfra[15]; ?>" size="15" /></td>
                  </tr>
                </table>
                  <p>&nbsp;</p>
                  <table width="406" border="0">
                    <tr>
                      <th width="158" scope="row">Courts</th>
                      <td width="121">Number</td>
                      <td width="113">Area</td>
                    </tr>
                    <tr>
                      <th scope="row">Playground</th>
                      <td><input name="rec17" type="text" id="rec17" value="<?php echo $insfra[16]; ?>" size="15" /></td>
                      <td><input name="rec18" type="text" id="rec18" value="<?php echo $insfra[17]; ?>" size="15" /></td>
                    </tr>
                    <tr>
                      <th scope="row">Volleyball</th>
                      <td><input name="rec19" type="text" id="rec19" value="<?php echo $insfra[18]; ?>" size="15" /></td>
                      <td><input name="rec20" type="text" id="rec20" value="<?php echo $insfra[19]; ?>" size="15" /></td>
                    </tr>
                    <tr>
                      <th scope="row">Basketball</th>
                      <td><input name="rec21" type="text" id="rec21" value="<?php echo $insfra[20]; ?>" size="15" /></td>
                      <td><input name="rec22" type="text" id="rec22" value="<?php echo $insfra[21]; ?>" size="15" /></td>
                    </tr>
                    <tr>
                      <th scope="row">Throwball</th>
                      <td><input name="rec23" type="text" id="rec23" value="<?php echo $insfra[22]; ?>" size="15" /></td>
                      <td><input name="rec24" type="text" id="rec24" value="<?php echo $insfra[23]; ?>" size="15" /></td>
                    </tr>
                    <tr>
                      <th scope="row">Tennicoit</th>
                      <td><input name="rec25" type="text" id="rec25" value="<?php echo $insfra[24]; ?>" size="15" /></td>
                      <td><input name="rec26" type="text" id="rec26" value="<?php echo $insfra[25]; ?>" size="15" /></td>
                    </tr>
                    <tr>
                      <th scope="row">Badminton</th>
                      <td><input name="rec27" type="text" id="rec27" value="<?php echo $insfra[26]; ?>" size="15" /></td>
                      <td><input name="rec28" type="text" id="rec28" value="<?php echo $insfra[27]; ?>" size="15" /></td>
                    </tr>
                    <tr>
                      <th scope="row">Kho-Kho</th>
                      <td><input name="rec29" type="text" id="rec29" value="<?php echo $insfra[28]; ?>" size="15" /></td>
                      <td><input name="rec30" type="text" id="rec30" value="<?php echo $insfra[29]; ?>" size="15" /></td>
                    </tr>
                    <tr>
                      <th scope="row">Football</th>
                      <td><input name="rec31" type="text" id="rec31" value="<?php echo $insfra[30]; ?>" size="15" /></td>
                      <td><input name="rec32" type="text" id="rec32" value="<?php echo $insfra[31]; ?>" size="15" /></td>
                    </tr>
                    <tr>
                      <th scope="row">Hockey</th>
                      <td><input name="rec33" type="text" id="rec33" value="<?php echo $insfra[32]; ?>" size="15" /></td>
                      <td><input name="rec34" type="text" id="rec34" value="<?php echo $insfra[33]; ?>" size="15" /></td>
                    </tr>
                    <tr>
                      <th scope="row">Gym</th>
                      <td><input name="rec35" type="text" id="rec35" value="<?php echo $insfra[34]; ?>" size="15" /></td>
                      <td><input name="rec36" type="text" id="rec36" value="<?php echo $insfra[35]; ?>" size="15" /></td>
                    </tr>
                  </table>
                <p>&nbsp;</p>
                <table width="397" border="0">
                  <tr>
                    <th width="128" scope="row">Laboratories</th>
                    <td width="137">Number</td>
                    <td width="118">Area</td>
                  </tr>
                  <tr>
                    <th scope="row">Science</th>
                    <td><input name="rec37" type="text" id="rec37" value="<?php echo $insfra[36]; ?>" size="15" /></td>
                    <td><input name="rec38" type="text" id="rec38" value="<?php echo $insfra[37]; ?>" size="15" /></td>
                  </tr>
                  <tr>
                    <th scope="row">Physics</th>
                    <td><input name="rec39" type="text" id="rec39" value="<?php echo $insfra[38]; ?>" size="15" /></td>
                    <td><input name="rec40" type="text" id="rec40" value="<?php echo $insfra[39]; ?>" size="15" /></td>
                  </tr>
                  <tr>
                    <th scope="row">Chemistry</th>
                    <td><input name="rec41" type="text" id="rec41" value="<?php echo $insfra[40]; ?>" size="15" /></td>
                    <td><strong>
                    <input name="rec42" type="text" id="rec42" value="<?php echo $insfra[41]; ?>" size="15" />
                    </strong></td>
                  </tr>
                  <tr>
                    <th scope="row">Biology</th>
                    <td><input name="rec43" type="text" id="rec43" value="<?php echo $insfra[42]; ?>" size="15" /></td>
                    <td><input name="rec44" type="text" id="rec44" value="<?php echo $insfra[43]; ?>" size="15" /></td>
                  </tr>
                  <tr>
                    <th scope="row">Mathematics</th>
                    <td><input name="rec45" type="text" id="rec45" value="<?php echo $insfra[44]; ?>" size="15" /></td>
                    <td><input name="rec46" type="text" id="rec46" value="<?php echo $insfra[45]; ?>" size="15" /></td>
                  </tr>
                  <tr>
                    <th scope="row">E V S Lab</th>
                    <td><input name="rec47" type="text" id="rec47" value="<?php echo $insfra[46]; ?>" size="15" /></td>
                    <td><input name="rec48" type="text" id="rec48" value="<?php echo $insfra[47]; ?>" size="15" /></td>
                  </tr>
                  <tr>
                    <th scope="row">Language Lab</th>
                    <td><input name="rec49" type="text" id="rec49" value="<?php echo $insfra[48]; ?>" size="15" /></td>
                    <td><input name="rec50" type="text" id="rec50" value="<?php echo $insfra[49]; ?>" size="15" /></td>
                  </tr>
                  <tr>
                    <th scope="row">Computer Lab</th>
                    <td><input name="rec51" type="text" id="rec51" value="<?php echo $insfra[50]; ?>" size="15" /></td>
                    <td><input name="rec52" type="text" id="rec52" value="<?php echo $insfra[51]; ?>" size="15" /></td>
                  </tr>
                </table>
                <p>&nbsp;</p>
                <table width="406" border="0">
                  <tr>
                    <th width="152" scope="row">LCD</th>
                    <td width="126">Number</td>
                    <td width="114">Area</td>
                  </tr>
                  <tr>
                  <?php
		
		if($insttype == "Primary school")
		{
		?>
                    <th scope="row">Smart class</th>
                    <?php 
					}
					else
					{
						?>
                        <td>&nbsp;</td>
                        <?php
					}
		?>
        
                    <td><input name="rec53" type="text" id="rec53" value="<?php echo $insfra[52]; ?>" size="15" /></td>
                    <td><input name="rec54" type="text" id="rec54" value="<?php echo $insfra[53]; ?>" size="15" /></td>
                  </tr>
                </table>
                <p>&nbsp;</p></td>
              </tr>
              <tr>
              <td colspan="4">
                <?php
				if($contsurvey ==1)
				{
				?>
                <input type="submit" name="Update" id="Update" value="update"/>
                <?php
				}
				else
				{
					echo "Survey is deactivated";
				}
                ?></td>
              </tr>
            </table>
          
</form>
          <p>&nbsp;</p>
</div>
        <div class="projects">
          <div class="item"></div>
          <div class="item">
            <div class="cl">&nbsp;</div>
          </div>
        </div>
      </div>
      <div id="sidebar" class="right">

        <div class="sidebar-nav">
                 <?php include("sidebar.php"); ?>
        </div>
      </div>
      <div class="cl">&nbsp;</div>
    </div>
    <div class="shadow-l"></div>
    <div class="shadow-r"></div>
    <div class="shadow-b"></div>
  </div>
 <?php 
 include("footer.php");
 ?>
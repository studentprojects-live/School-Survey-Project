<?php
include("header.php");
include("connection.php");
include("surveyheader.php");
 $dt = date("Y-m-d");
if($_SESSION["logintype"] == "Admin")
 {
// Retrieve community wise records and institution id from institute table
$resultinst = mysqli_query($con,"select * from institute where inst_id='$_POST[institution]'");
$arrayinst = mysqli_fetch_array($resultinst);
$communitywise = unserialize($arrayinst["populationcommwise"]);
 $inst_id = $arrayinst["inst_id"];
 }
 else
 {
$result1 = mysqli_query($con,"SELECT * FROM user WHERE s_emailid='$_SESSION[loginid]' ");
$arrayinst1 = mysqli_fetch_array($result1);

$resultinst = mysqli_query($con,"select * from institute where inst_id='$arrayinst1[inst_id]'");
$arrayinst = mysqli_fetch_array($resultinst);
$communitywise = unserialize($arrayinst["populationcommwise"]);
$inst_id = $arrayinst["inst_id"]; 
 }
if($_SESSION["logintype"] == "Admin")
 {
		if($_POST[surveyyear] == "")
		{
		$resultsurvey = mysqli_query($con,"SELECT * FROM  survey where inst_id='$inst_id' AND status='Active'");
		}
		else
		{
		$resultsurvey = mysqli_query($con,"SELECT * FROM  survey where inst_id='$inst_id' AND year='$_POST[surveyyear]'");			
		}
 }
 else
 {
	 $resultsurvey = mysqli_query($con,"SELECT * FROM  survey where inst_id='$inst_id' AND status='Active'");
 }

$resultstren = mysqli_query($con,"SELECT * FROM  students where surveyno='$surveyno'");

$resstaff1 = mysqli_query($con,"select * from staff where surveyno='$surveyno' AND staff_type='Teaching'");
$resstaff2 = mysqli_query($con,"select * from staff where surveyno='$surveyno' AND staff_type='Non Teaching'");

$resultmisc = mysqli_query($con,"select * from miscdetails where surveyno='$surveyno'");	
$arr = mysqli_fetch_array($resultmisc);
$reasons = unserialize($arr[mis_details]);
$any_suggestion = $arr[any_suggestion];

$resultpay = mysqli_query($con,"SELECT * FROM  payment where surveyno='$surveyno'");
$arrpay = mysqli_fetch_array($resultpay);
$payment = unserialize($arrpay[pay_details]);

$resultinfra =  mysqli_query($con,"select * from infrastructure where surveyno='$surveyno'");
$arrin = mysqli_fetch_array($resultinfra);
$infra = unserialize($arrin[infrastru]);

$result11 = mysqli_query($con,"SELECT * FROM   results where surveyno='$surveyno'");
$arrsres = mysqli_fetch_array($result11);
$result1 = unserialize($arrsres[annual_result]);

$resultadv = mysqli_query($con,"SELECT * FROM  adv_disadv where surveyno='$surveyno'");


$resultpro = mysqli_query($con,"SELECT * FROM  problem_faced where surveyno='$surveyno'");

?>
    
    <div id="main">
      <div id="content" class="left">
        
        <div class="highlight">
          <h2>Survey Report</h2>
          <p>PUC</p>
          <form id="form1" name="form1" method="post" action="">
            <table width="950" border="1">
              <?php 
			if($_SESSION["logintype"] == "Admin")
 {
			?>
              <tr>
                <td width="25"><div align="center">1.</div></td>
                <td colspan="2">Name of the Institution</td>
                <td colspan="9"><label for="institution"></label>
                  <select name="institution" id="institution">
                  <option value=""></option>
                  <?php
				  $result = mysqli_query($con,"select * from institute where inst_type='PUC'");
                  while($arra = mysqli_fetch_array($result))
				  {
					  if($arra[inst_id] == $_POST[institution])
					  {
						  echo "<option value='$arra[inst_id]' selected>$arra[inst_name]</option>";
					  }
					  else
					  {
						   echo "<option value='$arra[inst_id]'>$arra[inst_name]</option>"; 
					  }
				
				  }
				  ?>
                </select>                  <label for="textfield">
                  <input type="submit" name="btndisplay" id="btndisplay" value="Display records" />
                </label></td>
              </tr>
                 <?php
			  
 }
 ?>
              <tr>
                <td height="98" rowspan="3"><div align="center">2.</div></td>
                <td colspan="2" rowspan="3"><p>Address: <?php echo $arrayinst[address]; ?></p>
                  <p>Telephones: <?php echo $arrayinst[telephone]; ?>
  
                    <label for="textfield2"></label> 
                </p></td>
                <td colspan="9"><p>
                  <label for="textarea"></label>
                </p>
                <p>Pincode:<?php echo $arrayinst[pincode]; ?></p></td>
              </tr>
              <tr>
                <td colspan="9">email:<?php echo $arrayinst[email]; ?> </td>
              </tr>
              <tr>
                <td colspan="9">Website:<?php echo $arrayinst[website];?> </td>
              </tr>
              <tr>
                <td><div align="center">3.</div></td>
                <td colspan="2"><label for="checkbox">Area Type:</label></td>
                <td colspan="9"><label for="radio"><?php echo $arrayinst[area_type];?></label></td>
              </tr>
              <tr>
                <td><div align="center">4.</div></td>
                <td colspan="2">Total population of the area:</td>
                <td colspan="9"><?php echo $arrayinst[total_population];?></td>
              </tr>
              <tr>
                <td rowspan="5"><div align="center">5.</div></td>
                <td colspan="2" rowspan="5">Population community wise</td>
                <td colspan="6">Catholics</td>
                <td colspan="3"><?php echo $communitywise[0]; ?></td>
              </tr>
              <tr>
                <td colspan="6">Other Christians</td>
                <td colspan="3"><?php echo $communitywise[1]; ?></td>
              </tr>
              <tr>
                <td colspan="6">Hindus</td>
                <td colspan="3"><?php echo $communitywise[2]; ?></td>
              </tr>
              <tr>
                <td colspan="6">Muslims</td>
                <td colspan="3"><?php echo $communitywise[3]; ?></td>
              </tr>
              <tr>
                <td colspan="6">Others</td>
                <td colspan="3"><?php echo $communitywise[4]; ?></td>
              </tr>
              <tr>
                <td><div align="center">6.</div></td>
                <td colspan="2">Year of establishment</td>
                <td colspan="6"><?php echo $arrayinst[year_ofestabl];?></td>
                <td colspan="2">Aided/Unaided</td>
                <td><?php echo $arrayinst[school_type];?>                 </td>
              </tr>
              <tr>
                <td><div align="center">7.</div></td>
                <td colspan="2">Area of the school in sq.mts</td>
                <td colspan="6"><?php echo $arrayinst[area];?></td>
                <td colspan="2">Own/Rented</td>
                <td><?php echo $arrayinst[school_status];?></td>
              </tr>
              <tr>
                <td><div align="center">8.</div></td>
                <td colspan="11">Student Strength</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td colspan="11"><table width="868" border="1">
                  <tr>
                    <td colspan="2"><strong>Class</strong></td>
                    <td width="49"><strong>Section</strong></td>
                    <td colspan="2"><strong>Catholics</strong></td>
                    <td colspan="2"><strong>Hindus</strong></td>
                    <td colspan="2"><strong>Muslims</strong></td>
                    <td colspan="2"><strong>SC </strong></td>
                    <td colspan="2"><strong>ST </strong></td>
                    <td colspan="2"><strong>OBC </strong></td>
                    <td colspan="2"><strong>Jains </strong></td>
                    <td colspan="2"><strong>Others</strong></td>
                    <td width="85" rowspan="2" align="center"><strong>Total</strong></td>
                  </tr>
                  <tr>
                    <td colspan="2">&nbsp;
                      </td>
                    <td>&nbsp;</td>
                    <td width="53"><strong>Boys</strong></td>
                    <td width="33"><strong>Girls</strong></td>
                    <td width="53"><strong>Boys</strong></td>
                    <td width="33"><strong>Girls</strong></td>
                    <td width="39"><strong>Boys</strong></td>
                    <td width="33"><strong>Girls</strong></td>
                    <td width="34"><strong>Boys</strong></td>
                    <td width="33"><strong>Girls</strong></td>
                    <td width="34"><strong>Boys</strong></td>
                    <td width="33"><strong>Girls</strong></td>
                    <td width="34"><strong>Boys</strong></td>
                    <td width="33"><strong>Girls</strong></td>
                    <td width="34"><strong>Boys</strong></td>
                    <td width="33"><strong>Girls</strong></td>
                    <td width="34"><strong>Boys</strong></td>
                    <td width="33"><strong>Girls</strong></td>
                  </tr>
                  <?php
				  if($_POST[institution] == "" && $_SESSION["logintype"] == "Admin")
				  {
					  for($l=0; $l<15
					  ; $l++)
	{
		$row1[$l] = 0;
	}
				  }
				  else
				  {
  while($row1 = mysqli_fetch_array($resultstren))
		{
			
	 $sclass 		=  	$row1[sclass];
	$ssections 	 = 	$row1[sections];
	$comstrength   = unserialize($row1[com_strength]);
		$tota =$comstrength[0]+ $comstrength[1]+$comstrength[2]+$comstrength[3]+$comstrength[4]+$comstrength[5]+$comstrength[6]+$comstrength[7]
		+$comstrength[8]+$comstrength[9]+$comstrength[10]+$comstrength[11]+$comstrength[12]+$comstrength[13]+$comstrength[14]+$comstrength[15];
			 
				$arr = array("Arts 1","Arts 2","Commerce 1","Commerce 2","Science 1","Science 2");
			foreach($arr as $value)
				{
					if($sclass == $value)
					{
		             echo "<tr>
                    <td colspan='2'>&nbsp;$sclass</td>
				    <td>&nbsp;$ssections</td>
                    <td>&nbsp;$comstrength[0]</td>
                    <td>&nbsp;$comstrength[1]</td>
                    <td>&nbsp;$comstrength[2]</td>
                    <td>&nbsp;$comstrength[3]</td>
                    <td>&nbsp;$comstrength[4]</td>
                    <td>&nbsp;$comstrength[5]</td>
                    <td>&nbsp;$comstrength[6]</td>
                    <td>&nbsp;$comstrength[7]</td>
                    <td>&nbsp;$comstrength[8]</td>
                    <td>&nbsp;$comstrength[9]</td>
                    <td>&nbsp;$comstrength[10]</td>
                    <td>&nbsp;$comstrength[11]</td>
                    <td>&nbsp;$comstrength[12]</td>
                    <td>&nbsp;$comstrength[13]</td>
                    <td>&nbsp;$comstrength[14]</td>
                    <td>&nbsp;$comstrength[15]</td>
                    <td align='center'>&nbsp; $tota</td>
				
                  </tr>";
				
					}
				}
		}
		
		}
		?>
                </table></td>
              </tr>
              
               
              <tr>
                <td><div align="center">9.</div></td>
                <td colspan="2">No. of Aided Batches/Sections</td>
                <td colspan="4">Arts:<?php echo $reasons[47];?></td>
                <td colspan="3">Science:<?php echo $reasons[48];?></td>
                <td colspan="2">Commerce:<?php echo $reasons[49];?></td>
              </tr>
              <tr>
                <td>10.</td>
                <td colspan="2">No. of Unaided Batches/Sections</td>
                <td colspan="4">Arts:<?php echo $reasons[50];?></td>
                <td colspan="3">Science:<?php echo $reasons[51];?></td>
                <td colspan="2">Commerce:<?php echo $reasons[52];?></td>
              </tr>
              <tr>
                <td><div align="center">11.</div></td>
                <td colspan="2">Reasons for increase /decrease</td>
                <td colspan="9"><?php echo $reasons[0];?></td>
              </tr>
              <tr>
                <td rowspan="4"><div align="center">12.</div></td>
                <td colspan="2" rowspan="4">No of Primary Schools in the vicinity of 2 km radius</td>
                <td colspan="3">Institution</td>
                <td colspan="3">Number</td>
                <td colspan="3">Distance from college</td>
              </tr>
              <tr>
                <td colspan="3">High School</td>
                <td colspan="3"><?php echo $reasons[17];?></td>
                <td colspan="3"><?php echo $reasons[41];?></td>
              </tr>
              <tr>
                <td colspan="3">PUC</td>
                <td colspan="3"><?php echo $reasons[19];?></td>
                <td colspan="3"><?php echo $reasons[42];?></td>
              </tr>
              <tr>
                <td colspan="3">College</td>
                <td colspan="3"><?php echo $reasons[21];?></td>
                <td colspan="3"><?php echo $reasons[43];?></td>
              </tr>
              <tr>
                <td rowspan="4"><div align="center">13.</div></td>
                <td colspan="2" rowspan="4">Schools in the vicinity run by catholic managements</td>
                <td colspan="3">Institution</td>
                <td colspan="3">Number</td>
                <td colspan="3">Distance from college</td>
              </tr>
              <tr>
                <td colspan="3">High School</td>
                <td colspan="3"><?php echo $reasons[25];?></td>
                <td colspan="3"><?php echo $reasons[44];?></td>
              </tr>
              <tr>
                <td colspan="3">PUC </td>
                <td colspan="3"><?php echo $reasons[27];?></td>
                <td colspan="3"><?php echo $reasons[45];?></td>
              </tr>
              <tr>
                <td colspan="3">College</td>
                <td colspan="3"><?php echo $reasons[29];?></td>
                <td colspan="3"><?php echo $reasons[46];?></td>
              </tr>
              <tr>
                <td rowspan="2"><div align="center">14.</div></td>
                <td colspan="2" rowspan="2">Total number of teaching staff</td>
                <td colspan="3">Men</td>
                <td colspan="3">Women</td>
                <td colspan="3">Total</td>
              </tr>
              
              <?php 
			 $rows = mysqli_fetch_array($resstaff1);
			$staf = unserialize($rows[staff_strength]);
			  
			  $totals1=$staf[0]+$staf[2]+$staf[4]+$staf[6];
			  $totals2=$staf[1]+$staf[3]+$staf[5]+$staf[7];
			  $totals3=$totals1+$totals2;
			  ?>
              <tr>
                <td colspan="3"><?php echo $totals1;?></td>
                <td colspan="3"><?php echo $totals2;?></td>
                <td colspan="3"><?php echo $totals3;?></td>
              </tr>
              <tr>
                <td rowspan="4"><div align="center">15.</div></td>
                <td colspan="2" rowspan="4">No of catholic teaching staff</td>
                <td colspan="3">&nbsp;</td>
                <td colspan="3">Lay</td>
                <td colspan="2">Religious</td>
                <td width="87">Total</td>
              </tr>
              <?php
			  $ltotal =$reasons[5]+$reasons[6];
			  
			  $rtotal=$reasons[7]+$reasons[8];
			  
			  $mtot=$reasons[5]+$reasons[7];
			  
			  $wtot=$reasons[6]+$reasons[8];
			  
			  $ttot=$ltotal+$rtotal;
			  
			  $aidtot=$reasons[13]+$reasons[14];
			  
			  $nonaidtot=$reasons[39]+$reasons[40];
			  ?>
              <tr>
                <td colspan="3">Men</td>
                <td colspan="3"><?php echo $reasons[5];?></td>
                <td colspan="2"><?php echo $reasons[7];?></td>
                <td width="87"><?php echo $mtot;?></td>
              </tr>
              <tr>
                <td colspan="3">Women</td>
                <td colspan="3"><?php echo $reasons[6];?></td>
                <td colspan="2"><?php echo $reasons[8];?></td>
                <td width="87"><?php echo $wtot;?></td>
              </tr>
              <tr>
                <td colspan="3">Total</td>
                <td colspan="3"><?php echo $ltotal;?></td>
                <td colspan="2"><?php echo $rtotal;?></td>
                <td width="87"><?php echo $ttot;?></td>
              </tr>
              <tr>
                <td rowspan="2"><div align="center">16.</div></td>
                <td colspan="2" rowspan="2"> Number of teaching staff</td>
                <td colspan="3">Aided</td>
                <td colspan="3">Unaided</td>
                <td colspan="3">Total</td>
              </tr>
              <tr>
                <td colspan="3"><?php echo $reasons[13];?></td>
                <td colspan="3"><?php echo $reasons[14];?></td>
                <td colspan="3"><?php echo $aidtot;?></td>
              </tr>
              <tr>
                <td rowspan="2"><div align="center">17.</div></td>
              <?php 
			 $rows0 = mysqli_fetch_array($resstaff2);
			$staf0 = unserialize($rows0[staff_strength]);
			  
			  $totals11=$staf0[0]+$staf0[2]+$staf0[4]+$staf0[6];
			  $totals12=$staf0[1]+$staf0[3]+$staf0[5]+$staf0[7];
			  $total13=$totals11+$totals12;
			  ?>  <td colspan="2" rowspan="2">Total number of non teaching staff</td>
                <td colspan="3">Men  </td>
                <td colspan="3">Women</td>
                <td colspan="3">Total</td>
              </tr>
              <tr>
                <td colspan="3"><?php echo $totals11;?></td>
                <td colspan="3"><?php echo $totals12;?></td>
                <td colspan="3"><?php echo $total13;?></td>
              </tr>
               <?php
			  $ltotal1 =$reasons[9]+$reasons[10];
			  
			  $rtotal1=$reasons[11]+$reasons[12];
			  
			  $mtot1=$reasons[9]+$reasons[11];
			  
			  $wtot1=$reasons[10]+$reasons[12];
			  
			  $ttot1=$ltotal1+$rtotal1;
			  
			  ?>
              <tr>
                <td rowspan="4"><div align="center">18.</div></td>
                <td colspan="2" rowspan="4">No of catholic non teaching staff</td>
                <td colspan="3">&nbsp;</td>
                <td colspan="3">Lay</td>
                <td colspan="2">Religious</td>
                <td>Total</td>
              </tr>
              <tr>
                <td colspan="3">Men</td>
                <td colspan="3"><?php echo $reasons[9];?></td>
                <td colspan="2"><?php echo $reasons[11];?></td>
                <td><?php echo $mtot1;?></td>
              </tr>
              <tr>
                <td colspan="3">Women</td>
                <td colspan="3"><?php echo $reasons[10];?></td>
                <td colspan="2"><?php echo $reasons[12];?></td>
                <td><?php echo $wtot1;?></td>
              </tr>
              <tr>
                <td colspan="3">Total</td>
                <td colspan="3"><?php echo $ltotal1?></td>
                <td colspan="2"><?php echo $rtotal1?></td>
                <td><?php echo $ttot1;?></td>
              </tr>
              <tr>
                <td rowspan="2">19.</td>
                <td colspan="2" rowspan="2">Number of non teaching staff</td>
                <td colspan="3">Aided</td>
                <td colspan="3">Unaided</td>
                <td colspan="3">Total</td>
              </tr>
              <tr>
                <td colspan="3"><?php echo $reasons[39];?></td>
                <td colspan="3"><?php echo $reasons[40];?></td>
                <td colspan="3"><?php echo $nonaidtot;?></td>
              </tr>
              <tr>
                <td><div align="center">20.</div></td>
                <td colspan="2"><p>Pay scale given to the teaching staff</p></td>
                <td colspan="6"><?php echo $payment[0];?></td>
                <td colspan="3">Rs.<?php echo $payment[33];?> </td>
              </tr>
              <tr>
                <td rowspan="2"><div align="center">21.</div></td>
                <td colspan="2" rowspan="2">If own scale, mention the scale of pay-starting scale</td>
                <td colspan="2">Basic</td>
                <td width="89">DA</td>
                <td width="63">HRA</td>
                <td colspan="2">CCA</td>
                <td width="71">PF</td>
                <td width="46">ESI</td>
                <td>Total</td>
              </tr>
              <?php
			   $totpay = $payment[1]+$payment[2]+$payment[3]+$payment[4]+$payment[5]+$payment[6];
			  ?>
              <tr>
                <td colspan="2"><?php echo $payment[1];?></td>
                <td width="89"><?php echo $payment[2];?></td>
                <td><?php echo $payment[3];?></td>
                <td colspan="2"><?php echo $payment[4];?></td>
                <td><?php echo $payment[5];?></td>
                <td><?php echo $payment[6];?></td>
                <td><?php echo $totpay;?></td>
              </tr>
              <tr>
                <td><div align="center">22.</div></td>
                <td colspan="2">Pay scale given to the non-teaching staff</td>
                <td colspan="6"><?php echo $payment[7];?></td>
                <td colspan="3">Rs.<?php echo $payment[34];?></td>
              </tr>
              <tr>
                <td rowspan="2"><div align="center">23.</div></td>
                <td colspan="2" rowspan="2">If own scale, mention the scale of pay-starting scale</td>
                <td colspan="2">Basic</td>
                <td>DA</td>
                <td>HRA</td>
                <td colspan="2">CCA</td>
                <td>PF</td>
                <td>ESI</td>
                <td>Total</td>
              </tr>
              <?php
			  $totpay0=$payment[8]+$payment[9]+$payment[10]+$payment[11]+$payment[12]+$payment[13];
			  ?>
              <tr>
                <td colspan="2"><?php echo $payment[8];?></td>
                <td><?php echo $payment[9];?></td>
                <td><?php echo $payment[10];?></td>
                <td colspan="2"><?php echo $payment[11];?></td>
                <td><?php echo $payment[12];?></td>
                <td><?php echo $payment[13];?></td>
                <td><?php echo $totpay0;?></td>
              </tr>
              <tr>
                <td rowspan="2"><div align="center">24.</div></td>
                <td colspan="2" rowspan="2">Benifits given to the teaching staff</td>
                <td colspan="3">Annual Increment</td>
                <td colspan="3">PF</td>
                <td colspan="2">Gratuity</td>
                <td>Any Other</td>
              </tr>
              <tr>
                <td height="24" colspan="3"><?php echo $payment[14];?></td>
                <td colspan="3"><?php echo $payment[15];?></td>
                <td colspan="2"><?php echo $payment[16];?></td>
                <td><?php echo $payment[17];?></td>
              </tr>
              <tr>
                <td rowspan="2"><div align="center">25.</div></td>
                <td colspan="2" rowspan="2">Benifits given to the non-teaching staff</td>
                <td colspan="3">Annual Increment</td>
                <td colspan="3">PF</td>
                <td colspan="2">Gratuity</td>
                <td>Any Other</td>
              </tr>
              <tr>
                <td colspan="3"><?php echo $payment[18];?></td>
                <td colspan="3"><?php echo $payment[19];?></td>
                <td colspan="2"><?php echo $payment[20];?></td>
                <td><?php echo $payment[21];?></td>
              </tr>
              <tr>
                <td rowspan="2"><div align="center">26.</div></td>
                <td colspan="2" rowspan="2"><p>Total amount of salary paid to the teaching staff</p></td>
                <td colspan="4">Aided</td>
                <td colspan="3">Unaided</td>
                <td colspan="2">Total</td>
              </tr>
              <?php 
			  $paytotal5=$payment[22]+$payment[23];
			  $paytotal6=$payment[24]+$payment[25];
			  ?>
              <tr>
                <td colspan="4"><?php echo $payment[22];?></td>
                <td colspan="3"><?php echo $payment[23];?></td>
                <td colspan="2"><?php echo $paytotal5;?></td>
              </tr>
              <tr>
                <td rowspan="2"><div align="center">27.</div></td>
                <td colspan="2" rowspan="2">Total amount of salary paid to the teaching staff</td>
                <td colspan="4">Aided</td>
                <td colspan="3">Unaided</td>
                <td colspan="2">Total`</td>
              </tr>
              <tr>
                <td colspan="4"><?php echo $payment[24];?></td>
                <td colspan="3"><?php echo $payment[25];?></td>
                <td colspan="2"><?php echo $paytotal6;?></td>
              </tr>
              <tr>
                <td rowspan="4"><div align="center">28.</div></td>
                <td colspan="2" rowspan="4">Fees structure(aided/unaided seperately)</td>
                <td height="29" colspan="2">Item</td>
                <td>Tuition</td>
                <td>Devt</td>
                <td colspan="2">Special</td>
                <td>building</td>
                <td>other</td>
                <td>Total/Year</td>
              </tr>
              <?php
	$total1=$payment[26]+$payment[27]+$payment[28]+$payment[35]+$payment[36];
	$total2=$payment[29]+$payment[30]+$payment[31]+$payment[37]+$payment[38];
	$total5=$payment[26]+$payment[29];
	$total6=$payment[27]+$payment[30];
	$total7=$payment[28]+$payment[31];
	$total8=$payment[35]+$payment[37];
	$total9=$payment[36]+$payment[38];
	$total10=$total1+$total2;
	?>
              <tr>
                <td colspan="2">Aided</td>
                <td><?php echo $payment[26];?></td>
                <td><?php echo $payment[27];?></td>
                <td colspan="2"><?php echo $payment[28];?></td>
                <td><?php echo $payment[35];?></td>
                <td><?php echo $payment[36];?></td>
                <td><?php echo $total1;?></td>
              </tr>
              <tr>
                <td colspan="2">Unaided</td>
                <td><?php echo $payment[29];?></td>
                <td><?php echo $payment[30];?></td>
                <td colspan="2"><?php echo $payment[31];?></td>
                <td><?php echo $payment[37];?></td>
                <td><?php echo $payment[38];?></td>
                <td><?php echo $total2;?></td>
              </tr>
              <tr>
                <td colspan="2">Total</td>
                <td><?php echo $total5;?></td>
                <td><?php echo $total6;?></td>
                <td colspan="2"><?php echo $total7;?></td>
                <td><?php echo $total8;?></td>
                <td><?php echo $total9;?></td>
                <td><?php echo $total10;?></td>
              </tr>
              <tr>
                <td>29</td>
                <td colspan="2">Total collection of all fees including devt. fees/donation</td>
                <td colspan="9">Rs.<?php echo $payment[32];?></td>
              </tr>
              <tr>
                <td><div align="center">30.</div></td>
                <td colspan="2">Other Sources of income</td>
                <td colspan="9">Amount received</td>
              </tr>
                <?php
			  $p=39;
			  
			for($q=0; $q<4; $q++)
			{
			 if($payment[$p]!="")
			 {
				 
			?>
            <tr>
              <td >&nbsp;<?php echo $q+1; ?></td>
              <td height="62" colspan="2" >&nbsp;
              <?php echo $payment[$p]; ?></td>
              <?php
			$p++; 
				?>
              <td colspan="9">&nbsp;
             <?php echo $payment[$p] ; ?></td>
            </tr>
			<?php
			
			}
			$p++;
			}
			?>
              <tr>
                <td rowspan="30"><div align="center">31.</div></td>
                <td colspan="2" rowspan="30">Infrastructure facilities</td>
                <td colspan="4">&nbsp;</td>
                <td colspan="3">Number</td>
                <td colspan="2">Area</td>
              </tr>
               <?php
				  if($_POST[institution] == "" && $_SESSION["logintype"] == "Admin")
				  {
					  for($m=0; $m<60; $m++)
	{
		$infra[$m] = 0;
	}
				  }
				 
				  ?>  <tr>
              
                <td colspan="4">Classrooms</td>
                <td colspan="3"><?php echo $infra[0];?> </td>
                <td colspan="2"><?php echo $infra[1];?></td>
              </tr>
              <tr>
                <td colspan="4">Staff room</td>
                <td colspan="3"><?php echo $infra[2];?></td>
                <td colspan="2"><?php echo $infra[3];?></td>
              </tr>
              <tr>
                <td colspan="4">Office room</td>
                <td colspan="3"><?php echo $infra[4];?></td>
                <td colspan="2"><?php echo $infra[5];?></td>
              </tr>
              <tr>
                <td colspan="4">HM</td>
                <td colspan="3"><?php echo $infra[6];?></td>
                <td colspan="2"><?php echo $infra[7];?></td>
              </tr>
              <tr>
                <td colspan="4">Ladies room</td>
                <td colspan="3"><?php echo $infra[8];?></td>
                <td colspan="2"><?php echo $infra[9];?></td>
              </tr>
              <tr>
                <td colspan="4">Auditorium</td>
                <td colspan="3"><?php echo $infra[10];?></td>
                <td colspan="2"><?php echo $infra[11];?></td>
              </tr>
              <tr>
                <td colspan="4">Parlour</td>
                <td colspan="3"><?php echo $infra[12];?></td>
                <td colspan="2"><?php echo $infra[13];?></td>
              </tr>
              <tr>
                <td colspan="4">AV room</td>
                <td colspan="3"><?php echo $infra[14];?></td>
                <td colspan="2"><?php echo $infra[15];?></td>
              </tr>
              <tr>
                <td colspan="4"><b>Courts</b></td>
                <td colspan="3">&nbsp;</td>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="4">Playground</td>
                <td colspan="3"><?php echo $infra[16];?></td>
                <td colspan="2"><?php echo $infra[17];?></td>
              </tr>
              <tr>
                <td colspan="4">Volleyball</td>
                <td colspan="3"><?php echo $infra[18];?></td>
                <td colspan="2"><?php echo $infra[19];?></td>
              </tr>
              <tr>
                <td colspan="4">Basketball</td>
                <td colspan="3"><?php echo $infra[20];?></td>
                <td colspan="2"><?php echo $infra[21];?></td>
              </tr>
              <tr>
                <td colspan="4">Throwball</td>
                <td colspan="3"><?php echo $infra[22];?></td>
                <td colspan="2"><?php echo $infra[23];?></td>
              </tr>
              <tr>
                <td colspan="4">Tennicoit</td>
                <td colspan="3"><?php echo $infra[24];?></td>
                <td colspan="2"><?php echo $infra[25];?></td>
              </tr>
              <tr>
                <td colspan="4">Badminton</td>
                <td colspan="3"><?php echo $infra[26];?></td>
                <td colspan="2"><?php echo $infra[27];?></td>
              </tr>
              <tr>
                <td colspan="4">Kho-Kho</td>
                <td colspan="3"><?php echo $infra[28];?></td>
                <td colspan="2"><?php echo $infra[29];?></td>
              </tr>
              <tr>
                <td colspan="4">Football</td>
                <td colspan="3"><?php echo $infra[30];?></td>
                <td colspan="2"><?php echo $infra[31];?></td>
              </tr>
              <tr>
                <td colspan="4">Hockey</td>
                <td colspan="3"><?php echo $infra[32];?></td>
                <td colspan="2"><?php echo $infra[33];?></td>
              </tr>
              <tr>
                <td colspan="4">Gym</td>
                <td colspan="3"><?php echo $infra[34];?></td>
                <td colspan="2"><?php echo $infra[35];?></td>
              </tr>
              <tr>
                <td colspan="4"><b>Laboratories</b></td>
                <td colspan="3">&nbsp;</td>
                <td colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="4">Science</td>
                <td colspan="3"><?php echo $infra[36];?></td>
                <td colspan="2"><?php echo $infra[37];?></td>
              </tr>
              <tr>
                <td colspan="4">Physics</td>
                <td colspan="3"><?php echo $infra[38];?></td>
                <td colspan="2"><?php echo $infra[39];?></td>
              </tr>
              <tr>
                <td colspan="4">Chemistry</td>
                <td colspan="3"><?php echo $infra[40];?></td>
                <td colspan="2"><?php echo $infra[41];?></td>
              </tr>
              <tr>
                <td colspan="4">Biology</td>
                <td colspan="3"><?php echo $infra[42];?></td>
                <td colspan="2"><?php echo $infra[43];?></td>
              </tr>
              <tr>
                <td colspan="4">Mathematics</td>
                <td colspan="3"><?php echo $infra[44];?></td>
                <td colspan="2"><?php echo $infra[45];?></td>
              </tr>
              <tr>
                <td colspan="4">E V S lab</td>
                <td colspan="3"><?php echo $infra[46];?></td>
                <td colspan="2"><?php echo $infra[47];?></td>
              </tr>
              <tr>
                <td colspan="4">Language lab</td>
                <td colspan="3"><?php echo $infra[48];?></td>
                <td colspan="2"><?php echo $infra[49];?></td>
              </tr>
              <tr>
                <td colspan="4">Computer lab</td>
                <td colspan="3"><?php echo $infra[50];?></td>
                <td colspan="2"><?php echo $infra[51];?></td>
              </tr>
              <tr>
                <td colspan="4"><b>LCD</b> </td>
                <td colspan="3"><?php echo $infra[52];?></td>
                <td colspan="2"><?php echo $infra[53];?></td>
              </tr>
              
              <tr>
                <td rowspan="2">32.</td>
                <td colspan="11">II PUC Annual Results Combination wise</td>
              </tr>
              <tr>
                <td width="202">Arts</td>
                <td width="64">Results</td>
                <td>Science</td>
                <td width="84">Results</td>
                <td>commerce</td>
                <td>Results</td>
                <td colspan="5">Overall</td>
                
              </tr>
                    <?php
			  $p=6;
			  
			for($q=0; $q<4; $q++)
			{
				if($result1[$p]!="")
				{
			
		   ?>
          
			
              <tr>
                <td>&nbsp;<?php echo $q+1; ?></td>
                <td>&nbsp;<?php echo $result1[$p] ; ?></td>
                	<?php
			$p++; 
				?>
              
                <td>&nbsp;<?php echo $result1[$p] ; ?></td> 
			
               
                     <?php
			$totsum = $totsum + $result1[$p];
			$p++;
			?>
                <td>&nbsp;<?php echo $result1[$p] ; ?></td>
                   <?php
				
			$p++;
			?>
                <td>&nbsp;<?php echo $result1[$p] ; ?></td>
                   <?php
				$totsum1 += $result1[$p];
			$p++;
			?>
                 <td>&nbsp;<?php echo $result1[$p] ; ?></td> 
                
                <?php
			$p++;
			?>
                  <td>&nbsp;<?php echo $result1[$p] ; ?></td>
                
                   <?php
				   $totsum2 += $result1[$p];
			$p++;
		
			}
			}
			?>
                
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>Total</td>
                <td><?php echo $totsum; ?></td>
                <td width="67">Total</td>
                <td><?php echo $totsum1; ?></td>
                <td >Total</td>
                <td><?php echo $totsum2; ?></td>
                     <?php
                $tot= $totsum+$totsum1+$totsum2;
		   ?>
                <td colspan="5"><?php echo $tot; ?></td>
           
           
              </tr>
              
              <tr>
                <td rowspan="2">33.</td>
                <td rowspan="2">Annual Results</td>
                <td colspan="2">Class</td>
                <td>Appeared</td>
                <td>Passed</td>
                <td>D</td>
                <td width="53">I</td>
                <td width="27">II</td>
                <td width="71">III</td>
                <td colspan="">Total</td>
                <td colspan="">Oral%</td>
              </tr>
              <?php 
			  $restot=$result1[2]+$result1[3]+$result1[4]+$result1[5];
			  $percentage=($result1[1]/$result1[0])*100;
			  ?>
              <tr>
                <td colspan="2">II PUC</td>
                <td><?php echo $result1[0];?></td>
                <td><?php echo $result1[1];?></td>
                <td><?php echo $result1[2];?></td>
                <td><?php echo $result1[3];?></td>
                <td><?php echo $result1[4];?></td>
                <td colspan=""><?php echo $result1[5];?></td>
                <td colspan=""><?php echo $restot;?></td>
                <td><?php echo $percentage;?></td>
              </tr>
              <tr>
                <td height="111">34.</td>
                <td colspan="2"><div align="center">
                  <p>&nbsp;</p>
                  <p align="justify">Strengths of the institutions</p>
                  <p>(Strong points)                </p>
                </div></td>
                <td colspan="10"><p>Weaknesses of the institution</p>
                <p>(Drawbacks)</p></td>
              </tr>
                <?php
               while($arradv = mysqli_fetch_array($resultadv))
			    {
             $adv = unserialize($arradv[strong_point]);
             $dis = unserialize($arradv[weak_point]);
				}
			
			  $j=0;
			for($i=0; $i< 7; $i++)
			{
				 if($adv[$i]!="" || $dis[$i] !="" )
				 {
			?>
              <tr>
              <td >&nbsp;<?php echo $i+1; ?></td>
              <td height="67" colspan="2" >&nbsp;
                <?php echo $adv[$j]; ?></td>
              <td colspan="9">&nbsp;
                <?php echo $dis[$j] ; ?></td>
            </tr>
			<?php
			$j = $j+1;  
				 }
			}
			?>
                
              
              <tr>
                <td><div align="center">35.</div></td>
                <td colspan="2">What are the immediate problems faced by the institution</td>
                <td colspan="9">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td colspan="2">I.Administrative</td>
                <td colspan="9" valign="top">
                <?php
				while($arrpro = mysqli_fetch_array($resultpro))
				{
$prob0 = unserialize($arrpro[administrative]);
$prob1 = unserialize($arrpro[financial]);
$prob2 = unserialize($arrpro[infras]); 
$prob3 = unserialize($arrpro[student_needs]);
$prob4 = unserialize($arrpro[resources]);				}
				for($k=0; $k<3; $k++)
				{
				echo $prob0[$k]."<br>";
				}
				?>
                </td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td colspan="2">II.Financial</td>
               <td colspan="9" valign="top">
                <?php
				for($k=0; $k<3; $k++)
				{
				echo "&nbsp;" .$prob1[$k]."<br>";
				}
				?>
                </td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td colspan="2">III.Infrastructure</td>
                <td colspan="9" valign="top">
                <?php
                for($k=0; $k<5; $k++)
				{
				echo "&nbsp;" .$prob2[$k]."<br>";
				}
				?>
                </td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td colspan="2">Needs of the students in your area</td>
                <td colspan="9" valign="top"><?php
                for($k=0; $k<8; $k++)
				{
				echo "&nbsp;" . $prob3[$k]."<br>";
				}
				?></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td colspan="2">To start the additional institution the resources needed such as</td>
                <td colspan="9" valign="top"><?php 
				for($k=0; $k<3; $k++)
				{
				echo $prob4[$k]."<br>";
				}
				?></td>
              </tr>
              <tr>
                <td>36.</td>
                <td colspan="2">Any suggestions/comments</td>
                <td colspan="9"><?php echo $any_suggestion; ?></td>
              </tr>
            </table>
            <p>&nbsp;</p>
            <p>
              <label for="type"><a href="surveyschool.php"><strong>Back</strong></a></label>
            </p>
            <p>&nbsp;</p>
          </form>
        </div>
        <div class="projects">
          <div class="item"></div>
          <div class="item">
            <div class="cl"></div>
          </div>
        </div>
      </div>
      <div id="sidebar" class="right">
        <div class="advertisement">
          <div class="ads">
            <div class="ad left"></div>
            <div class="ad right"></div>
            <div class="cl"></div>
          </div>
        </div>
        <div class="info"></div>
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
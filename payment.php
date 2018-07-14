<?php
include("header.php");
include("connection.php");
include("surveyheader.php");

$dt = date("Y-m-d h:i:s");
?>
<script>
function myFunction()
{
	if(document.getElementById("insttype").value == "High school")
	{
	var rec26 	= parseFloat(document.getElementById("rec26").value, 10);
	var rec27 	=  parseFloat(document.getElementById("rec27").value, 10);
	var rec28	= parseFloat(document.getElementById("rec28").value,10);
	var sum = rec26 + rec27+rec28  ;
	 document.getElementById("rec29").value =sum;
	}
	else
	{
 	var rec26 	= parseFloat(document.getElementById("rec26").value, 10);
	var rec27 	=  parseFloat(document.getElementById("rec27").value, 10);
	var rec28	= parseFloat(document.getElementById("rec28").value,10);
	var sum = rec26 + rec27+rec28  ;
	document.getElementById("rec41").value =sum;
	}
}

function myFunction1()
{
	var rec30 	= parseFloat(document.getElementById("rec30").value, 10);
	var rec31 	=  parseFloat(document.getElementById("rec31").value, 10);
	var rec32	= parseFloat(document.getElementById("rec32").value,10);

	var sum = rec30 + rec31+rec32  ;
	 document.getElementById("rec33").value =sum;
}

function myFunction2()
{
	var rec26 	= parseFloat(document.getElementById("rec26").value, 10);
	var rec27 	=  parseFloat(document.getElementById("rec27").value, 10);
	var rec28	= parseFloat(document.getElementById("rec28").value,10);
	var rec37	= parseFloat(document.getElementById("rec37").value,10);
	var rec38	= parseFloat(document.getElementById("rec38").value,10);
	var sum = rec26+rec27+rec28+rec37+rec38  ;
	 document.getElementById("rec41").value =sum;
}

function myFunction3()
{
	var rec30 	= parseFloat(document.getElementById("rec30").value, 10);
	var rec31 	=  parseFloat(document.getElementById("rec31").value, 10);
	var rec32	= parseFloat(document.getElementById("rec32").value,10);
	var rec39	= parseFloat(document.getElementById("rec32").value,10);	
	var rec40	= parseFloat(document.getElementById("rec32").value,10);
	var sum = rec30 + rec31+rec32  ;
	 document.getElementById("rec42").value =sum;
}

function DisBox()
{
	var selected=document.form1.payscale0.value;
   // valid selection
    if(selected=="Own")
     { 
		document.form1.rec1.disabled=false; 
     	document.form1.rec2.disabled=false; 
		document.form1.rec3.disabled=false; 
		document.form1.rec4.disabled=false; 
		document.form1.rec5.disabled=false; 
		document.form1.rec6.disabled=false;
     }
	 else
	 {
		document.form1.rec1.disabled=true; 
     	document.form1.rec2.disabled=true; 
		document.form1.rec3.disabled=true; 
		document.form1.rec4.disabled=true; 
		document.form1.rec5.disabled=true; 
		document.form1.rec6.disabled=true;
		document.form1.rec1.value=0; 
     	document.form1.rec2.value=0; 
		document.form1.rec3.value=0; 
		document.form1.rec4.value=0; 
		document.form1.rec5.value=0; 
		document.form1.rec6.value=0;  
	 }
	 
} 

function DisBoxa()
{
	 var selected=document.form1.payscale7.value;

   // valid selection
    if(selected=="Own")
     { 
		document.form1.rec8.disabled=false; 
     	document.form1.rec9.disabled=false; 
		document.form1.rec10.disabled=false; 
		document.form1.rec11.disabled=false; 
		document.form1.rec12.disabled=false; 
		document.form1.rec13.disabled=false;
     }
	 else
	 {
		document.form1.rec8.disabled=true; 
     	document.form1.rec9.disabled=true; 
		document.form1.rec10.disabled=true; 
		document.form1.rec11.disabled=true; 
		document.form1.rec12.disabled=true; 
		document.form1.rec13.disabled=true;  
		document.form1.rec8.value=0; 
     	document.form1.rec9.value=0; 
		document.form1.rec10.value=0; 
		document.form1.rec11.value=0; 
		document.form1.rec12.value=0; 
		document.form1.rec13.value=0; 
	 }

} 
/*
function generate()
{
	if(isNaN(document.form1.rec1.value))
	{
		alert("enter the proper number for teaching staff basic field");
		return false;
	}
		
		if(parseFloat(document.form1.rec1.value) < 0 )
	{
		alert("numbers must be greater than 0 for teaching staff basic field");
		return false;
		}
	if(isNaN(document.form1.rec2.value))
	{
		alert("enter the proper number for teaching staff DA field");
		return false;
	}
		if(parseFloat(document.form1.rec2.value) < 0 )
	{
		alert("numbers must be greater than 0 for teaching staff DA field");
		return false;
		}
	if(isNaN(document.form1.rec3.value))
	{
		alert("enter the proper number for teaching staff ESI field");
		return false;
	}
		if(parseFloat(document.form1.rec3.value) < 0 )
	{
		alert("numbers must be greater than 0 for teaching staff ESI field");
		return false;
		}
	if(isNaN(document.form1.rec4.value))
	{
		alert("enter the proper number for teaching staff PF field");
		return false;
	}
		if(parseFloat(document.form1.rec5.value) < 0 )
	{
		alert("numbers must be greater than 0 for teaching staff PF field");
		return false;
		}
	if(isNaN(document.form1.rec5.value))
	{
		alert("enter the proper number for teaching staff HRA field");
		return false;
}
	if(parseFloat(document.form1.rec5.value) < 0 )
	{
		alert("numbers must be greater than 0 for teaching staff HRA field");
		return false;
		}
if(isNaN(document.form1.rec6.value))
	{
		alert("enter the proper number for teaching staff CCA field");
		return false;
	}
		if(parseFloat(document.form1.rec6.value) < 0 )
	{
		alert("numbers must be greater than 0 for teaching staff CCA field");
		return false;
		}
if(isNaN(document.form1.rec8.value))
	{
		alert("enter the proper number for nonteaching staff Basic field");
		return false;
	}
		if(parseFloat(document.form1.rec8.value) < 0 )
	{
		alert("numbers must be greater than 0 for nonteaching staff basic field");
		return false;
		}
		if(isNaN(document.form1.rec9.value))
	{
		alert("enter the proper number for nonteaching staff DA field");
		return false;
	}
		if(parseFloat(document.form1.rec9.value) < 0 )
	{
		alert("numbers must be greater than 0 for nonteaching staff DA field");
		return false;
		}
	if(isNaN(document.form1.rec10.value))
	{
		alert("enter the proper number for nonteaching staff ESI field");
		return false;
	}
		if(parseFloat(document.form1.rec10.value) < 0 )
	{
		alert("numbers must be greater than 0 for nonteaching staff ESI field");
		return false;
		}
	if(isNaN(document.form1.rec11.value))
	{
		alert("enter the proper number for nonteaching staff PF field");
		return false;
	}
		if(parseFloat(document.form1.rec11.value) < 0 )
	{
		alert("numbers must be greater than 0 for nonteaching staff PF field");
		return false;
		}
	if(isNaN(document.form1.rec12.value))
	{
		alert("enter the proper number for nonteaching staff HRA field");
		return false;
}
	if(parseFloat(document.form1.rec12.value) < 0 )
	{
		alert("numbers must be greater than 0 for nonteaching staff HRA field");
		return false;
		}
if(isNaN(document.form1.rec13.value))
	{
		alert("enter the proper number for nonteaching staff CCA field");
		return false;
	}
		if(parseFloat(document.form1.rec13.value) < 0 )
	{
		alert("numbers must be greater than 0 for nonteaching staff CCA field");
		return false;
		}
		if(isNaN(document.form1.rec14.value))
	{
		alert("enter the proper number for teaching staff Annual Increment benefit field");
		return false;
	}
		if(parseFloat(document.form1.rec14.value) < 0 )
	{
		alert("numbers must be greater than 0 for teaching staff Annual Increment benefit field");
		return false;
		}
	if(isNaN(document.form1.rec15.value))
	{
		alert("enter the proper number for teaching staff PF benefit field");
		return false;
	}
		if(parseFloat(document.form1.rec15.value) < 0 )
	{
		alert("numbers must be greater than 0 for teaching staff PF benefit field");
		return false;
		}
	if(isNaN(document.form1.rec16.value))
	{
		alert("enter the proper number for teaching staff Gratuity benefit field");
		return false;
	}
		if(parseFloat(document.form1.rec16.value) < 0 )
	{
		alert("numbers must be greater than 0 for teaching staff Gratuity benefit field");
		return false;
		}
	if(isNaN(document.form1.rec17.value))
	{
		alert("enter the proper number for teaching staff Other benefit  field");
		return false;
}
	if(parseFloat(document.form1.rec17.value) < 0 )
	{
		alert("numbers must be greater than 0 for teaching staff Other benefit field");
		return false;
		}
if(isNaN(document.form1.rec18.value))
	{
		alert("enter the proper number for nonteaching staff Annual Increment benefit field");
		return false;
	}
		if(parseFloat(document.form1.rec14.value) < 0 )
	{
		alert("numbers must be greater than 0 for nonteaching staff Annual Increment benefit field");
		return false;
		}
if(isNaN(document.form1.rec19.value))
	{
		alert("enter the proper number for nonteaching staff PF benefit field");
		return false;
	}
		if(parseFloat(document.form1.rec19.value) < 0 )
	{
		alert("numbers must be greater than 0 for nonteaching staff PF benefit field");
		return false;
		}
	if(isNaN(document.form1.rec20.value))
	{
		alert("enter the proper number for nonteaching staff Gratuity benefit field");
		return false;
	}
		if(parseFloat(document.form1.rec20.value) < 0 )
	{
		alert("numbers must be greater than 0 for nonteaching staff Gratuity benefit field");
		return false;
		}
	if(isNaN(document.form1.rec21.value))
	{
		alert("enter the proper number for nonteaching staff Other benefit  field");
		return false;
}
	if(parseFloat(document.form1.rec21.value) < 0 )
	{
		alert("numbers must be greater than 0 for nonteaching staff Other benefit field");
		return false;
		}
if(isNaN(document.form1.rec22.value))
	{
		alert("enter the proper number for salary paid to Aided teaching staff field");
		return false;
	}
	if(document.form1.rec22.value=="")
{
	alert("enter the salary paid to Aided teaching staff");
	return false;
}
		if(parseFloat(document.form1.rec22.value) < 0 )
	{
		alert("numbers must be greater than 0 for salary paid to Aided teaching staff field");
		return false;
		}
	if(isNaN(document.form1.rec23.value))
	{
		alert("enter the proper number for salary paid to Unaided teaching staff field");
		return false;
	}
	if(document.form1.rec23.value=="")
{
	alert("enter the salary paid to UnAided teaching staff");
	return false;
}
			if(parseFloat(document.form1.rec23.value) < 0 )
	{
		alert("numbers must be greater than 0 for salary paid to UnAided teaching staff field");
		return false;
		}
	if(isNaN(document.form1.rec24.value))
	{
		alert("enter the proper number for salary paid to Aided nonteaching staff field");
		return false;
}
		if(parseFloat(document.form1.rec24.value) < 0 )
	{
		alert("numbers must be greater than 0 for salary paid to Aided nonteaching staff field");
		return false;
		}
		if(document.form1.rec24.value=="")
{
	alert("enter the salary paid to Aided nonteaching staff");
	return false;
}
if(isNaN(document.form1.rec25.value))
	{
		alert("enter the proper number for salary paid to Unaided nonteaching staff field");
		return false;
}
if(document.form1.rec25.value=="")
{
	alert("enter the salary paid to UnAided nonteaching staff");
	return false;
}
		if(parseFloat(document.form1.rec25.value) < 0 )
	{
		alert("numbers must be greater than 0 for salary paid to UnAided nonteaching staff field");
		return false;
		}
if(isNaN(document.form1.rec26.value))
	{
		alert("enter the proper number for Aided tution field");
		return false;
}
		if(document.form1.rec26.value=="")
{
	alert("enter the Aided tution field");
	return false;
}
		if(parseFloat(document.form1.rec26.value) < 0 )
	{
		alert("numbers must be greater than 0 for Aided tution field");
		return false;
		}
if(isNaN(document.form1.rec27.value))
	{
		alert("enter the proper number for Aided devt field");
		return false;
}
if(document.form1.rec27.value=="")
{
	alert("enter the Aided devt field");
	return false;
}
	if(parseFloat(document.form1.rec27.value) < 0 )
	{
		alert("numbers must be greater than 0 for Aided devt field");
		return false;
		}
if(isNaN(document.form1.rec28.value))
	{
		alert("enter the proper number for Aided Special field");
		return false;
}
	if(parseFloat(document.form1.rec28.value) < 0 )
	{
		alert("numbers must be greater than 0 for Aided Special field");
		return false;
		}
		if((document.form1.rec28.value)="")
{
	alert("enter  Aided Special field");
}

if(isNaN(document.form1.rec30.value))
	{
		alert("enter the proper number for Unaided Tution fees field");
		return false;
}
	if(parseFloat(document.form1.rec30.value) < 0 )
	{
		alert("numbers must be greater than 0 for UnAided tution field");
		return false;
		}
			if(document.form1.rec30.value=="")
{
	alert("enter UnAided Special field");
	return false;
}

if(isNaN(document.form1.rec31.value))
	{
		alert("enter the proper number for Unaided devt fees field");
		return false;
}
	if(parseFloat(document.form1.rec31.value) < 0 )
	{
		alert("numbers must be greater than 0 for UnAided devt field");
		return false;
		}
			if(document.form1.rec31.value=="")
{
	alert("enter  Aided devt field");
	return false;
}

if(isNaN(document.form1.rec32.value))
	{
		alert("enter the proper number for Unaided special fees field");
		return false;
}
	if(parseFloat(document.form1.rec32.value) < 0 )
	{
		alert("numbers must be greater than 0 for UnAided special field");
		return false;
		}
			if(document.form1.rec32.value=="")
{
	alert("enter  UnAided Special field");
	return false;
}

if(isNaN(document.form1.rec34.value))
	{
		alert("enter the proper number for total collection of fees field");
		return false;
}
	if(parseFloat(document.form1.rec34.value) < 0 )
	{
		alert("numbers must be greater than 0 for Total collection of fees field");
		return false;
		}
			if(document.form1.rec34.value=="")
{
	alert("enter  Total Collection of fees field");
	return false;
}

if(isNaN(document.form1.rec35.value))
	{
		alert("enter the proper number for salary paid to teaching staff field");
		return false;
}
if(document.form1.rec35.value=="")
{
	alert("enter the payscale given to teaching staff");
	return false;
}
	if(parseFloat(document.form1.rec35.value) < 0 )
	{
		alert("numbers must be greater than 0 for salary paid to teaching staff field");
		return false;
		}

		if((document.form1.rec36.value)="")
{
	alert("enter the payscale given to nonteaching staff");
	return false;
}
if(isNaN(document.form1.rec36.value))
	{
		alert("enter the proper number for salary paid to nonteaching staff field");
		return false;
}
	if(parseFloat(document.form1.rec36.value) < 0 )
	{
		alert("numbers must be greater than 0 for salary paid to the nonteaching staff field");
		return false;
		}
if(isNaN(document.form1.rec37.value))
	{
		alert("enter the proper number for Aided building fees  field");
		return false;
}
	if(parseFloat(document.form1.rec37.value) < 0 )
	{
		alert("numbers must be greater than 0 for Aided building fees field");
		return false;
		}
		if(document.form1.rec36.value="")
{
	alert("enter Aided building fees field");
	return false;
}

if(isNaN(document.form1.rec38.value))
	{
		alert("enter the proper number for Aided Other fees field");
		return false;
}
	if(parseFloat(document.form1.rec38.value) < 0 )
	{
		alert("numbers must be greater than 0 for Aided Other field");
		return false;
		}
	if(document.form1.rec38.value=="")
{
	alert("enter Aided Other fees field");
	return false;
}
if(isNaN(document.form1.rec39.value))
	{
		alert("enter the proper number for Unaided building fees field");
		return false;
}
	if(parseFloat(document.form1.rec39.value) < 0 )
	{
		alert("numbers must be greater than 0 for UnAided building field");
		return false;
		}
			if(document.form1.rec39.value=="")
{
	alert("enter UnAided building fees field");
	return false;
}
if(isNaN(document.form1.rec40.value))
	{
		alert("enter the proper number for Unaided other fees field");
		return false;
}
	if(parseFloat(document.form1.rec40.value) < 0 )
	{
		alert("numbers must be greater than 0 for UnAided Other fees field");
		return false;
		}
			if(document.form1.rec40.value=="")
{
	alert("enter UnAided Other fees field");
	return false;
}
}
*/
</script>
<?php


$dt = date("Y-m-d");

	for($k=0; $k<45; $k++)
	{
		$paydt[$k] = 0;
	}
 
if(isset($_POST["Update"]))
{ 
	$serialized_data = serialize(array("$_POST[payscale0]","$_POST[rec1]","$_POST[rec2]",
	"$_POST[rec3]","$_POST[rec4]","$_POST[rec5]","$_POST[rec6]","$_POST[payscale7]",
	"$_POST[rec8]","$_POST[rec9]","$_POST[rec10]","$_POST[rec11]","$_POST[rec12]","$_POST[rec13]","$_POST[rec14]","$_POST[rec15]",
	"$_POST[rec16]","$_POST[rec17]","$_POST[rec18]","$_POST[rec19]","$_POST[rec20]","$_POST[rec21]","$_POST[rec22]","$_POST[rec23]",
	"$_POST[rec24]","$_POST[rec25]","$_POST[rec26]","$_POST[rec27]","$_POST[rec28]","$_POST[rec30]","$_POST[rec31]","$_POST[rec32]","$_POST[rec34]","$_POST[rec35]","$_POST[rec36]","$_POST[rec37]","$_POST[rec38]","$_POST[rec39]","$_POST[rec40]","$_POST[srce39]","$_POST[srce40]","$_POST[srce41]","$_POST[srce42]","$_POST[srce43]","$_POST[srce44]","$_POST[srce45]","$_POST[srce46]"));
	
	$resschool3 = mysqli_query($con,"select * from payment where surveyno='$surveyno'");
	$counts = mysqli_num_rows($resschool3);

	if($counts == 1)
	{
			mysqli_query($con,"UPDATE payment SET surveyno='$surveyno',lastupdate='$dt',pay_details='$serialized_data'");
			if(mysqli_affected_rows($con) == 1)
			{
			$recres = "payment Record updated successfully...";
			}
	}
	else
	{
			$sql7="INSERT INTO payment(surveyno,lastupdate,pay_details) VALUES('$surveyno','$dt','$serialized_data')";
			if (!mysqli_query($con,$sql7,$con))
			{
			die('Errors: ' . mysqli_error($con));
			}
			if(mysqli_affected_rows($con) ==  1)
			{
			$recres = "payment record inserted successfully...";
			}
	}	
}

$resschool4 = mysqli_query($con,"select * from payment where surveyno='$surveyno'");
	$counts4 = mysqli_num_rows($resschool4);
	while($row4 = mysqli_fetch_array($resschool4))
		{	
		 $surveynou 	=  	$row4[surveyno];
		 $paydt  	 = 	unserialize($row4[pay_details]);
		}


?>
    
    <div id="main">
      <div id="content" class="left">
        <div class="highlight">
          <h3> Payment</h3>
          <form id="form1" name="form1" method="post" action="">
           <p>&nbsp;<?php echo $recres; ?></p>
            <table width="419" border="0">
              <tr align="left">
                <th width="401" ><div align="left">Payscale given to the teaching staff
                    <select name="payscale0" id="payscale0" onClick="DisBox()">
                    <option></option>
                      <option value="Own" <?php
			if($paydt[0] == "Own")
			{
			echo " selected";
			}?>>Own</option>
                      <option value="State" <?php
			if($paydt[0]  == "State")
			{
			echo " selected";
			}?>>State</option>
                      <option value="CBE" <?php
			if($paydt[0]  == "CBE")
			{
			echo " selected";
			}?>>CBE</option>
                      <option value="UGC" <?php
			if($paydt[0]  == "UGC")
			{
			echo " selected";
			}?>>UGC</option>
                    </select>
                  <input name="rec35" type="text" id="rec35" value="<?php echo number_format($paydt[33], 2, '.', ''); ?>" size="15" />
                </div></th>
              </tr>
            </table>
            <label for="payscale0"></label>
            <div align="center"></div>
            <table width="419" border="0">
              <tr align="left">
                <th height="25" colspan="4" ><div align="left">If own scale, mention the scale of pay-starting scale<br />
                </div>
                <label for="textarea6"></label>                </th>
              </tr>
              <tr>
                <th width="120" scope="row"  align="right">Basic</th>
                <th width="141" align="left"><input name="rec1" type="text" id="rec1" value="<?php echo number_format($paydt[1], 2, '.', ''); ?>" size="15" /></th>
                <td width="36"><strong>DA</strong></td>
                <td width="104"><input name="rec2" type="text" id="rec2" value="<?php echo number_format($paydt[2], 2, '.', ''); ?>" size="15" /></td>
              </tr>
              <tr>
                <th scope="row" align="right">ESI</th>
                <th scope="row" align="left"><input name="rec3" type="text" id="rec3" value="<?php echo number_format($paydt[3], 2, '.', ''); ?>" size="15" /></th>
                <td><strong>PF</strong></td>
                <td><input name="rec4" type="text" id="rec4" value="<?php echo number_format($paydt[4], 2, '.', ''); ?>"" size="15" /></td>
              </tr>
              <tr>
                <th scope="row" align="right">HRA </th>
                <th scope="row" align="left"><input name="rec5" type="text" id="rec5" value="<?php echo number_format($paydt[5], 2, '.', ''); ?>" size="15" /></th>
                <td><strong>CCA</strong></td>
                <td><input name="rec6" type="text" id="rec6" value="<?php echo number_format($paydt[6], 2, '.', ''); ?>" size="15" /></td>
              </tr>
            </table>
            <br />
            <table width="465" border="0">
              <tr align="left">
                <th width="449" ><div align="left">Payscale given to the non teaching staff
  <select name="payscale7" id="payscale7"  onClick="DisBoxa()">
         <option></option>
         <option value="Own" <?php
			if($paydt[7]  == "Own")
			{
			echo " selected";
			}?>>Own</option>
                      <option value="State" <?php
			if($paydt[7] == "State")
			{
			echo " selected";
			}?>>State</option>
                      <option value="CBE" <?php
			if($paydt[7] == "CBE")
			{
			echo " selected";
			}?>>CBE</option>
                      <option value="UGC" <?php
			if($paydt[7] == "UGC")
			{
			echo " selected";
			}?>>UGC</option>
                    </select>
                <input name="rec36" type="text" id="rec36" value="<?php echo number_format($paydt[34], 2, '.', ''); ?>" size="15" />
                </div></th>
              </tr>
            </table>
            <br />
            <table width="419" border="0">
              <tr align="left">
                <th height="25" colspan="4" ><div align="left">If own scale, mention the scale of pay-starting scale<br />
                  </div>
                  <label for="textarea7"></label></th>
              </tr>
              <tr>
                <th width="120" scope="row"  align="right">Basic</th>
                <th width="141" align="left"><input name="rec8" type="text" id="rec8" value="<?php echo number_format($paydt[8], 2, '.', ''); ?>" size="15" /></th>
                <td width="36" ><strong>DA</strong></td>
                <td width="104"><input name="rec9" type="text" id="rec9" value="<?php echo number_format($paydt[9], 2, '.', ''); ?>" size="15" /></td>
              </tr>
              <tr>
                <th scope="row" align="right">ESI</th>
                <th scope="row" align="left"><input name="rec10" type="text" id="rec10" value="<?php echo number_format($paydt[10], 2, '.', ''); ?>" size="15" /></th>
                <td><strong>PF</strong></td>
                <td><input name="rec11" type="text" id="rec11" value="<?php echo number_format($paydt[11], 2, '.', ''); ?>" size="15" /></td>
              </tr>
              <tr>
                <th scope="row" align="right">HRA </th>
                <th scope="row" align="left"><input name="rec12" type="text" id="rec12" value="<?php echo number_format($paydt[12], 2, '.', ''); ?>" size="15" /></th>
                <td><strong>CCA</strong></td>
                <td><input name="rec13" type="text" id="rec13" value="<?php echo number_format($paydt[13], 2, '.', ''); ?>" size="15" /></td>
              </tr>
            </table>
            <br />
            <table width="474" border="0">
              <tr align="left">
                <th colspan="4" ><div align="left">Benifits given to the teaching staff</div></th>
              </tr>
              <tr>
                <th width="126" scope="row"  align="right">Annual Increment</th>
                <th width="119" align="left"><input name="rec14" type="text" id="rec14" value="<?php echo number_format($paydt[14], 2, '.', ''); ?>" size="15" /></th>
                <td width="99" ><strong>PF</strong></td>
                <td width="112"><input name="rec15" type="text" id="rec15" value="<?php echo number_format($paydt[15], 2, '.', ''); ?>" size="15" /></td>
              </tr>
              <tr>
                <th scope="row" align="right">Gratuity</th>
                <th scope="row" align="left"><input name="rec16" type="text" id="rec16" value="<?php echo number_format($paydt[16], 2, '.', ''); ?>" size="15" /></th>
                <td><strong>Any other</strong></td>
                <td><input name="rec17" type="text" id="rec17" value="<?php echo number_format($paydt[17], 2, '.', ''); ?>" size="15" /></td>
              </tr>
            </table>
            <br />
            <table width="477" border="0">
              <tr align="left">
                <th colspan="4" ><div align="left">Benifits given to the non teaching staff</div></th>
              </tr>
              <tr>
                <th width="127" scope="row"  align="right">Annual Increment</th>
                <th width="123" align="left"><input name="rec18" type="text" id="rec18" value="<?php echo number_format($paydt[18], 2, '.', ''); ?>"size="15" /></th>
                <td width="97" ><strong>PF</strong></td>
                <td width="112"><input name="rec19" type="text" id="rec19" value="<?php echo number_format($paydt[19], 2, '.', ''); ?>"size="15" /></td>
              </tr>
              <tr>
                <th scope="row" align="right">Gratuity</th>
                <th scope="row" align="left"><input name="rec20" type="text" id="rec20" value="<?php echo number_format($paydt[20], 2, '.', ''); ?>" size="15" /></th>
                <td><strong>Any other</strong></td>
                <td><input name="rec21" type="text" id="rec21" value="<?php echo number_format($paydt[21], 2, '.', ''); ?>" size="15" /></td>
              </tr>
            </table>
            <p><br />
  <label for="payscale1"></label><b>
  <label for="rec1"></label>Total Amount of Salary paid to the teaching staff<br /></b>
 <b> Aided</b>
<input name="rec22" type="text" id="rec22" value="<?php echo number_format($paydt[22], 2, '.', ''); ?>" size="15" /> 
 <b> Unaided</b>
  <input name="rec23" type="text" id="rec23" value="<?php echo number_format($paydt[23], 2, '.', ''); ?>" size="15" />
</p>
<p><b>Total Amount of Salary paid to the non teaching staff</b><br />
Aided
  <input name="rec24" type="text" id="rec24" value="<?php echo number_format($paydt[24], 2, '.', ''); ?>" size="15" />
Unaided
<input name="rec25" type="text" id="rec25" value="<?php echo number_format($paydt[25], 2, '.', ''); ?>" size="15" />
</p>
<table width="609" border="0">
  <tr align="left">
    <th colspan="7" ><div align="left">Fee Structure (Aided/
      
      Unaided seperately)</div></th>
  </tr>
  <tr>
    <th width="120" scope="row"  align="right"><div align="left"></div></th>
    <th width="73" align="left">Tution</th>
    <td width="73" ><strong>Devt</strong></td>
    <td width="75"><strong>Special</strong></td>
    <input name="insttype"  id="insttype" type="hidden" value="<?php echo $insttype; ?>" />
     <?php
		
		if($insttype == "High school")
		{
		?>
    <td width="75"><strong>Building</strong></td>
    <td width="77"><strong>Other</strong></td>
    <?php
		}
		?>
    <td width="89"><strong>Total/year</strong></td>
  </tr>
  
  <tr>
    <th height="38" align="right" scope="row"> Aided     </th>
    <th align="left" scope="row">
    <input name="rec26" type="text" id="rec26" value="<?php echo number_format($paydt[26], 2, '.', ''); ?>" size="10" onchange="myFunction()"/>
    </th>
    <td>
    <input name="rec27" type="text" id="rec27" value="<?php echo number_format($paydt[27], 2, '.', ''); ?>" size="10" onchange="myFunction()" />
    </td>
    <td><input name="rec28" type="text" id="rec28" value="<?php echo number_format($paydt[28], 2, '.', ''); ?>" size="10" onchange="myFunction()" />
    </td>
     <?php
		
		if($insttype == "High school")
		{
		?>
    <td><input name="rec37" type="text" id="rec37" value="<?php echo number_format($paydt[35], 2, '.', '');?>" size="10"/></td>
    <td><input name="rec38" type="text" id="rec38" value="<?php echo number_format($paydt[36], 2, '.', '');?>" size="10"/></td>
    <?php
		}
		if($insttype == "Primary school")
		{
	$total1=$paydt[26]+$paydt[27]+$paydt[28];
	?>
    <td><input name="rec29" type="text" id="rec29" value="<?php echo number_format($total1, 2, '.', ''); ?>" size="10" readonly /></td>
    <?php 
	}
	else
	{
		$total5=$paydt[26]+$paydt[27]+$paydt[28]+$paydt[35]+$paydt[36];
	?>
    <td><input name="rec41" type="text" id="rec41" value="<?php echo number_format($total5, 2, '.', ''); ?>" size="10" readonly /></td>
  </tr>
  <?php
	}
  $total2= $paydt[29]+$paydt[30]+$paydt[31];
  $total6= $paydt[29]+$paydt[30]+$paydt[31]+$paydt[37]+$paydt[38];
  ?>
  <tr>
    <th scope="row" align="right">Unaided</th>
    <th align="left" scope="row">
    <input name="rec30" type="text" id="rec30" value="<?php echo number_format($paydt[29], 2, '.', ''); ?>" size="10"  onchange="myFunction1()"/></th>
    <td><input name="rec31" type="text" id="rec31" value="<?php echo number_format($paydt[30], 2, '.', ''); ?>" size="10" onchange="myFunction1()"  /></td>
    <td><input name="rec32" type="text" id="rec32" value="<?php echo number_format($paydt[31], 2, '.', ''); ?>" size="10"  onchange="myFunction1()" /></td>
     <?php
		
		if($insttype == "High school")
		{
		?>
    <td><input name="rec39" type="text" id="rec39" value="<?php echo number_format($paydt[37], 2, '.', ''); ?>" size="10"/></td>
    <td><input name="rec40" type="text" id="rec40" value="<?php echo number_format($paydt[38], 2, '.', ''); ?>" size="10"/></td>
    <?php 
		}
		if($insttype == "Primary school")
		{
		?>
    <td><input name="rec33" type="text" id="rec33" value="<?php echo number_format($total2, 2, '.', ''); ?>" size="10" readonly	 /></td>
    <?php
		}
		else
		{
		?>
         <td><input name="rec42" type="text" id="rec42" value="<?php echo number_format($total6, 2, '.', ''); ?>" size="10" readonly /></td>
         <?php
		}
		?>
  </tr>
</table>
<p><b>Total Collection of all fees including devt. fees/donations</b>
  <input name="rec34" type="text" id="rec34" value="<?php echo number_format($paydt[32], 2, '.', ''); ?>" size="25" />
</p>
<?php 
		
		if($insttype == "PUC")
		{
		?>
<p><b>Other sources of income<br />
 
 <table width="474" height="126" border="1">
            
            <tr>
              <th width="39" height="50" scope="row">SL No.</th>
              <th width="231" scope="row"><strong>Source</strong></th>
              <td width="182"><strong> Amount received</strong></td>
          </tr>
<?php
			  $p=39;
			  
			for($q=0; $q<4; $q++)
			{
			?>
            <tr>
              <td >&nbsp;<?php echo $q+1; ?></td>
              <td height="62" >&nbsp;
              <input name="srce<?php echo $p; ?>" type="text" id="srce<?php echo $p; ?>" value="<?php echo $paydt[$p] ; ?>" size="50" /></td>
              <?php
			$p++; 
				?>
              <td>&nbsp;
            <input name="srce<?php echo $p; ?>" type="text" id="srce<?php echo $p; ?>" value="<?php echo number_format($paydt[$p], 2, '.', ''); ?>" /></td>
            </tr>
			<?php
			$p++;
			}
			?>
<br />

<p>
</table>
<?php
		}
		?>
         <?php
				if($contsurvey  == 1)
				{
				?>
          <input type="submit" name="Update" id="Update" value="update"  onclick="return generate()" />
          <?php
				}
				else
				{
					echo "Survey is deactivated";
				}
                ?>
          </p>
          </form>
</div>
        <div class="projects">
          <div class="item"></div>
          <div class="item">
            <div class="cl">&nbsp;</div>
          </div>
        </div>
      </div>
      <div id="sidebar" class="right">
       <?php 
	   include("sidebar.php");
	   ?>
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
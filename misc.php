<?php
session_start();
include("header.php");
include("connection.php");
include("surveyheader.php");
?>
<SCRIPT LANGUAGE="JavaScript">
function generate()
{
	if((document.form1.rec1.value)=="") 
	{
		alert("Enter the reasons");
		return false;
		}
		
	if((document.form1.rec2.value)=="")
		{
		alert("Enter Kannada Medium field");
		document.form1.rec2.focus();
		return false;
		}
		if(isNaN(document.form1.rec2.value))
	{
		alert("Enter Proper number for Kannada Medium field");
		document.form1.rec2.focus();
		return false;
		}
	if(parseInt(document.form1.rec2.value) < 0 )
	{
		alert("Numbers must be greater than 0 for Kannada Medium field");
		document.form1.rec2.focus();
		return false;
	}
				if((document.form1.rec3.value)=="")
	{
		alert("Enter English Medium field");
		document.form1.rec3.focus();
		return false;
		}
	if(isNaN(document.form1.rec3.value))
	{
		alert("Enter Proper number for English Medium field");
		document.form1.rec3.focus();
		return false;
	}
			if(parseInt(document.form1.rec3.value) < 0 )
	{
		alert("numbers must be greater than 0 for English Medium field");
		document.form1.rec3.focus();
		return false;
	}
	if((document.form1.rec4.value)=="")
	{
		alert("enter catholic Kannada Medium field");
		document.form1.rec4.focus();
		return false;
		}
	if(isNaN(document.form1.rec4.value))
	{
		alert("Enter Proper number for catholic Kannada Medium field");
		document.form1.rec4.focus();
		return false;
		}
			if(parseInt(document.form1.rec4.value) < 0 )
	{
		alert("numbers must be greater than 0 for catholic Kannada Medium field");
		return false;
		}
				if((document.form1.rec5.value)=="")
	{
		alert("enter catholic English Medium field");
		return false;
		}
			if(isNaN(document.form1.rec5.value))
	{
		alert("enter Proper number for catholic English Medium field");
		return false;
		}
			if(parseInt(document.form1.rec5.value) < 0 )
	{
		alert("numbers must be greater than 0 for catholic English Medium field");
		return false;
		}
				if((document.form1.rec6.value)=="")
	{
		alert("enter teaching staff Laymen field");
		return false;
		}	
			if(isNaN(document.form1.rec6.value))
	{
		alert("enter Proper number for teaching staff Laymen field");
		return false;
		}	
			if(parseInt(document.form1.rec6.value) < 0 )
	{
		alert("numbers must be greater than 0 for teaching staff Laymen field");
		return false;
		}
		if((document.form1.rec7.value)=="")
		{
		alert("enter teaching staff Laywomen field");
		return false;
		}
		
		if(isNaN(document.form1.rec7.value))
		{
		alert("enter Proper number for teaching staff Laywomen field");
		return false;
		}
			if(parseInt(document.form1.rec7.value) < 0 )
		{
		alert("numbers must be greater than 0 for teaching staff Laywomen field");
		return false;
		}			
		if((document.form1.rec8.value)=="")
	{
		alert("enter teaching staff Religious men field");
		return false;
		}
				if(isNaN(document.form1.rec8.value))
	{
		alert("enter Proper number for teaching staff Religious men field");
		return false;
		}	
			if(parseInt(document.form1.rec8.value) < 0 )
	{
		alert("numbers must be greater than 0 for teaching staff Religious men field");
		return false;
		}		
		if((document.form1.rec9.value)=="")
	{
		alert("enter teaching staff Religious women field");
		return false;
		}
	if(isNaN(document.form1.rec9.value))
	{
		alert("enter Proper number for teaching staff Religious women field");
		return false;
		}		
			if(parseInt(document.form1.rec9.value) < 0 )
	{
		alert("numbers must be greater than 0 for teaching staff Religious women field");
		return false;
		}			
		if((document.form1.rec10.value)=="")
	{
		alert("enter nonteaching staff Laymen field");
		return false;
		}
				if(isNaN(document.form1.rec10.value))
	{
		alert("enter Proper number for nonteaching staff  Laymen field");
		return false;
		}	
			if(parseInt(document.form1.rec10.value) < 0 )
	{
		alert("numbers must be greater than 0 for nonteaching staff  Laymen field");
		return false;
		}				
		if((document.form1.rec11.value)=="")
	{
		alert("enter nonteaching staff Laywomen field");
		return false;
		}
				if(isNaN(document.form1.rec11.value))
	{
		alert("enter Proper number for nonteaching staff  Laywomen field");
		return false;
		}	
			if(parseInt(document.form1.rec11.value) < 0 )
	{
		alert("numbers must be greater than 0 for nonteaching staff  Laywomen field");
		return false;
		}				
		if((document.form1.rec12.value)=="")
	{
		alert("enter nonteaching staff Religious men field");
		return false;
		}	
		
	if(isNaN(document.form1.rec12.value))
	{
		alert("enter Proper number for nonteaching staff Religious men field");
		return false;
		}
			if(parseInt(document.form1.rec12.value) < 0 )
	{
		alert("numbers must be greater than 0 for nonteaching staff Religious men field");
		return false;
		}				
		if((document.form1.rec13.value)=="")
	{
		alert("enter nonteaching staff Religious women  field");
		return false;
		}
		
	if(isNaN(document.form1.rec13.value))
	{
		alert("enter Proper number for nonteaching staff Religious women field");
		return false;
		}
			if(parseInt(document.form1.rec13.value) < 0 )
	{
		alert("numbers must be greater than 0 for nonteaching staff Religious women field");
		return false;
		}			
				
		if((document.form1.rec14.value)=="")
	{
		alert("enter aided teaching staff field");
		return false;
		}
		if(isNaN(document.form1.rec14.value))
	{
		alert("enter Proper number for aided teaching staff field");
		return false;
		}
			if(parseInt(document.form1.rec14.value) < 0 )
	{
		alert("numbers must be greater than 0 for aided teaching staff field");
		return false;
		}					
		if((document.form1.rec15.value)=="")
	{
		alert("enter unaided teaching staff field");
		return false;
		}	
				if(isNaN(document.form1.rec15.value))
	{
		alert("enter Proper number for unaided teaching staff field");
		return false;
		}	
			if(parseInt(document.form1.rec15.value) < 0 )
	{
		alert("numbers must be greater than 0 unaided teaching staff field");
		return false;
		}			
		if((document.form1.rec16.value)=="")
	{
		alert("enter primary school field");
		return false;
		}
		
				if(isNaN(document.form1.rec16.value))
	{
		alert("enter Proper number for primary school field");
		return false;
		}	
			if(parseInt(document.form1.rec16.value) < 0 )
	{
		alert("numbers must be greater than 0 for primary school field");
		return false;
		}				
		if((document.form1.rec17.value)=="")
	{
		alert("enter Kannada primary school field");
		return false;
		}
			
		if(isNaN(document.form1.rec17.value))
	{
		alert("enter Proper number for Kannada primary school field");
		return false;
		}	
			if(parseInt(document.form1.rec17.value) < 0 )
	{
		alert("numbers must be greater than 0 for Kannada primary school field");
		return false;
		}				
		if((document.form1.rec18.value)=="")
	{
		alert("enter High School field");
		return false;
		}
			
		if(isNaN(document.form1.rec18.value))
	{
		alert("enter Proper number for High school field");
		return false;
		}
			if(parseInt(document.form1.rec18.value) < 0 )
	{
		alert("numbers must be greater than 0 for High school field");
		return false;
		}					
		if((document.form1.rec19.value)=="")
	{
		alert("enter Kannada High School field");
		return false;
		}
			
				if(isNaN(document.form1.rec19.value))
	{
		alert("enter Proper number for Kannada High school field");
		return false;
		}	
			if(parseInt(document.form1.rec19.value) < 0 )
	{
		alert("numbers must be greater than 0 for Kannada High school field");
		return false;
		}				
		if((document.form1.rec20.value)=="")
	{
		alert("enter PUC field");
		return false;
		}
		if(isNaN(document.form1.rec20.value))
	{
		alert("enter Proper number for PUC field");
		return false;
		}	
			if(parseInt(document.form1.rec20.value) < 0 )
	{
		alert("numbers must be greater than 0 for PUC field");
		return false;
		}		
		if((document.form1.rec21.value)=="")
	{
		alert("enter Kannada puc field");
		return false;
		}
		if(isNaN(document.form1.rec21.value))
	{
		alert("enter Proper number for Kannada PUC field");
		return false;
		}
			if(parseInt(document.form1.rec21.value) < 0 )
	{
		alert("numbers must be greater than 0 for Kannada PUC field");
		return false;
		}			
		if((document.form1.rec22.value)=="")
	{
		alert("enter College field");
		return false;
		}
		if(isNaN(document.form1.rec22.value))
	{
		alert("enter Proper number for College field");
		return false;
		}
			if(parseInt(document.form1.rec22.value) < 0 )
	{
		alert("numbers must be greater than 0 for College field");
		return false;
		}			
		if((document.form1.rec23.value)=="")
	{
		alert("enter Kannada Medium college field");
		return false;
		}
		if(isNaN(document.form1.rec23.value))
	{
		alert("enter Proper number for Kannada Medium college field");
		return false;
		}
			if(parseInt(document.form1.rec23.value) < 0 )
	{
		alert("numbers must be greater than 0 for Kannada Medium college field");
		return false;
		}			
		if((document.form1.rec24.value)=="")
	{
		alert("enter catholic primary school field");
		return false;
		}
			if(isNaN(document.form1.rec24.value))
	{
		alert("enter Proper number for  catholic primary school field");
		return false;
		}
			if(parseInt(document.form1.rec24.value) < 0 )
	{
		alert("numbers must be greater than 0 for  catholic primary school field");
		return false;
		}			
		if((document.form1.rec25.value)=="")
	{
		alert("enter catholic Kannada primary school field");
		return false;
		}
			if(isNaN(document.form1.rec25.value))
	{
		alert("enter Proper number for  catholic Kannada primary school field");
		return false;
		}
			if(parseInt(document.form1.rec25.value) < 0 )
	{
		alert("numbers must be greater than 0 for  catholic Kannada primary school field");
		return false;
		}					
		if((document.form1.rec26.value)=="")
	{
		alert("enter catholic High School field");
		return false;
		}
		if(isNaN(document.form1.rec26.value))
	{
		alert("enter Proper number for  catholic High school field");
		return false;
		}
			if(parseInt(document.form1.rec26.value) < 0 )
	{
		alert("numbers must be greater than 0 for  catholic High school field");
		return false;
		}					
		if((document.form1.rec27.value)=="")
	{
		alert("enter catholic Kannada Medium High School field");
		return false;
		}	
				if(isNaN(document.form1.rec27.value))
	{
		alert("enter Proper number for  catholic Kannada Medium High school field");
		return false;
		}
			if(parseInt(document.form1.rec27.value) < 0 )
	{
		alert("numbers must be greater than 0  for  catholic Kannada Medium High school field");
		return false;
		}				
		if((document.form1.rec28.value)=="")
	{
		alert("enter catholic PUC field");
		return false;
		}		
				if(isNaN(document.form1.rec28.value))
	{
		alert("enter Proper number for  catholic puc  field");
		return false;
		}
			if(parseInt(document.form1.rec28.value) < 0 )
	{
		alert("numbers must be greater than 0 for  catholic puc  field");
		return false;
		}				
		if((document.form1.rec29.value)=="")
	{
		alert("enter catholic Kannada Medium puc field");
		return false;
		}	
			if(isNaN(document.form1.rec29.value))
	{
		alert("enter Proper number for  catholic Kannada Medium puc field");
		return false;
		}
			if(parseInt(document.form1.rec29.value) < 0 )
	{
		alert("numbers must be greater than 0 for  catholic Kannada Medium puc field");
		return false;
		}				
		if((document.form1.rec30.value)=="")
	{
		alert("enter catholic College field");
		return false;
		}
					if(isNaN(document.form1.rec30.value))
	{
		alert("enter Proper number for  catholic College field");
		return false;
		}
			if(parseInt(document.form1.rec30.value) < 0 )
	{
		alert("numbers must be greater than 0 for  catholic College field");
		return false;
		}					
		if((document.form1.rec31.value)=="")
	{
		alert("enter catholic Kannada Medium College field");
		return false;
		}
		if(isNaN(document.form1.rec31.value))
	{
		alert("enter Proper number for  catholic Kannada Medium College field");
		return false;
		}
			if(parseInt(document.form1.rec31.value) < 0 )
	{
		alert("numbers must be greater than 0 for  catholic Kannada Medium College field");
		return false;
		}					
		if((document.form1.rec32.value)=="")
	{
		alert("enter English Medium primary school field");
		return false;
		}
		if(isNaN(document.form1.rec32.value))
	{
		alert("enter Proper number for English Medium Primary school field");
		return false;
		}
			if(parseInt(document.form1.rec32.value) < 0 )
	{
		alert("numbers must be greater than 0 for English Medium Primary school field");
		return false;
		}					
		if((document.form1.rec33.value)=="")
	{
		alert("enter English Medium High School field");
		return false;
		}
	if(isNaN(document.form1.rec33.value))
	{
		alert("enter Proper number for  English Medium High school field");
		return false;
		}
			if(parseInt(document.form1.rec33.value) < 0 )
	{
		alert("numbers must be greater than 0 for  English Medium High school field");
		return false;
		}					
		if((document.form1.rec34.value)=="")
	{
		alert("enter English Medium puc field");
		return false;
		}
		if(isNaN(document.form1.rec34.value))
	{
		alert("enter Proper number for English Medium puc field");
		return false;
		}
			if(parseInt(document.form1.rec34.value) < 0 )
	{
		alert("numbers must be greater than 0 for English Medium puc field");
		return false;
		}					
		if((document.form1.rec35.value)=="")
	{
		alert("enter English Medium College field");
		return false;
		}
		if(isNaN(document.form1.rec35.value))
	{
		alert("enter Proper number for English Medium College field");
		return false;
		}
			if(parseInt(document.form1.rec35.value) < 0 )
	{
		alert("numbers must be greater than 0 for English Medium College field");
		return false;
		}	
				
		if((document.form1.rec36.value)=="")
	{
		alert("enter Catholic English Medium  primary school field");
		return false;
		}
		if(isNaN(document.form1.rec36.value))
	{
		alert("enter Proper number for Catholic English Medium  primary school field");
		return false;
		}
			if(parseInt(document.form1.rec36.value) < 0 )
	{
		alert("numbers must be greater than 0 for Catholic English Medium  primary school field");
		return false;
		}			
		if((document.form1.rec37.value)=="")
	{
		alert("enter Catholic English Medium  High school field");
		return false;
		}
		if(isNaN(document.form1.rec37.value))
	{
		alert("enter Proper number for Catholic English Medium  primary school field");
		return false;
		}
			if(parseInt(document.form1.rec37.value) < 0 )
	{
		alert("numbers must be greater than 0 for Catholic English Medium  primary school field");
		return false;
		}					
		if((document.form1.rec38.value)=="")
	{
		alert("enter Catholic English Medium puc field");
		return false;
		}
		if(isNaN(document.form1.rec38.value))
	{
		alert("enter Proper number for Catholic Engligh Medium  puc field");
		return false;
		}
			if(parseInt(document.form1.rec38.value) < 0 )
	{
		alert("numbers must be greater than 0 for Catholic Engligh Medium  puc field");
		return false;
		}					
		if((document.form1.rec39.value)=="")
	{
		alert("enter Catholic English Medium  College field");
		return false;
		}		
	if(isNaN(document.form1.rec39.value))
	{
		alert("enter Proper number for Catholic Engligh Medium  College field");
		return false;
		}
			if(parseInt(document.form1.rec39.value) < 0 )
	{
		alert("numbers must be greater than 0 for Catholic Engligh Medium  College field");
		return false;
		}			
		if((document.form1.rec40.value)=="")
	{
		alert("enter aided nonteaching staff field");
		return false;
		}
		if(isNaN(document.form1.rec40.value))
	{
		alert("enter Proper number for aided nonteaching staff field");
		return false;
		}
			if(parseInt(document.form1.rec40.value) < 0 )
	{
		alert("numbers must be greater than 0 for aided nonteaching staff field");
		return false;
		}					
		if((document.form1.rec41.value)=="")
	{
		alert("enter unaided nonteaching staff field");
		return false;
		}
			
		if(isNaN(document.form1.rec41.value))
	{
		alert("enter Proper number for unaided nonteaching staff field");
		return false;
		}
			if(parseInt(document.form1.rec41.value) < 0 )
	{
		alert("numbers must be greater than 0 for unaided nonteaching staff field");
		return false;
		}			
		
				if((document.form1.rec42.value)=="")
	{
		alert("enter distance for high school field");
		return false;
		}
			
		if(isNaN(document.form1.rec42.value))
	{
		alert("enter Proper number for distance of high school field");
		return false;
		}
			if(parseInt(document.form1.rec42.value) < 0 )
	{
		alert("numbers must be greater than 0 for distance of high school field");
		return false;
		}			
		
				if((document.form1.rec43.value)=="")
	{
		alert("enter distance for PUC field");
		return false;
		}
			
		if(isNaN(document.form1.rec43.value))
	{
		alert("enter Proper number for  distance of PUC field");
		return false;
		}
			if(parseInt(document.form1.rec43.value) < 0 )
	{
		alert("numbers must be greater than 0 for  distance of PUC field");
		return false;
		}			
				if((document.form1.rec44.value)=="")
	{
		alert("enter distance for College field");
		return false;
		}
			
		if(isNaN(document.form1.rec44.value))
	{
		alert("enter Proper number for distance of College  field");
		return false;
		}
			if(parseInt(document.form1.rec44.value) < 0 )
	{
		alert("numbers must be greater than 0 for distance of College  field");
		return false;
		}			
				if((document.form1.rec45.value)=="")
	{
		alert("enter distance for  Catholic high school field");
		return false;
		}
			
		if(isNaN(document.form1.rec45.value))
	{
		alert("enter Proper number for distance of  Catholic high school field");
		return false;
		}
			if(parseInt(document.form1.rec45.value) < 0 )
	{
		alert("numbers must be greater than 0 for distance of  Catholic high school field");
		return false;
		}			
				if((document.form1.rec46.value)=="")
	{
		alert("enter distance for  Catholic PUC  field");
		return false;
		}
			
		if(isNaN(document.form1.rec46.value))
	{
		alert("enter Proper number for distance of  Catholic PUC   field");
		return false;
		}
			if(parseInt(document.form1.rec46.value) < 0 )
	{
		alert("numbers must be greater than 0 for distance of Catholic PUC  field");
		return false;
		}			
				if((document.form1.rec47.value)=="")
	{
		alert("enter distance for  Catholic College  field");
		return false;
		}
			
		if(isNaN(document.form1.rec47.value))
	{
		alert("enter Proper number for distance of  Catholic College  field");
		return false;
		}
			if(parseInt(document.form1.rec47.value) < 0 )
	{
		alert("numbers must be greater than 0 for distance of  Catholic College field");
		return false;
		}			
				if((document.form1.arts1.value)=="")
	{
		alert("enter number for aided batches/sections for arts1 field");
		return false;
		}
			
		if(isNaN(document.form1.arts1.value))
	{
		alert("enter Proper number for aided batches/sections for arts1 field");
		return false;
		}
			if(parseInt(document.form1.arts1.value) < 0 )
	{
		alert("numbers must be greater than 0 for aided batches/sections of arts1 field");
		return false;
		}
					if((document.form1.arts2.value)=="")
	{
		alert("enter number for unaided batches/sections for arts2 field");
		return false;
		}
			
		if(isNaN(document.form1.arts2.value))
	{
		alert("enter Proper number for unaided batches/sections for arts2 field");
		return false;
		}
			if(parseInt(document.form1.arts2.value) < 0 )
	{
		alert("numbers must be greater than 0 for unaided batches/sections of arts2 field");
		return false;
		}			
		if((document.form1.Science1.value)=="")
	{
		alert("enter number for aided batches/sections for Science1 field");
		return false;
		}
			
		if(isNaN(document.form1.Science1.value))
	{
		alert("enter Proper number for aided batches/sections for Science1 field");
		return false;
		}
			if(parseInt(document.form1.Science1.value) < 0 )
	{
		alert("numbers must be greater than 0 for aided batches/sections of Science1 field");
		return false;
		}			
					if((document.form1.Science2.value)=="")
	{
		alert("enter number for unaided batches/sections for Science2 field");
		return false;
		}
			
		if(isNaN(document.form1.Science2.value))
	{
		alert("enter Proper number for unaided batches/sections for Science2 field");
		return false;
		}
			if(parseInt(document.form1.Science2.value) < 0 )
	{
		alert("numbers must be greater than 0 for unaided batches/sections of Science2 field");
		return false;
		}			
		if((document.form1.Comm1.value)=="")
	{
		alert("enter number for aided batches/sections for Comm1 field");
		return false;
		}
			
		if(isNaN(document.form1.Comm1.value))
	{
		alert("enter Proper number for aided batches/sections for Comm1 field");
		return false;
		}
			if(parseInt(document.form1.Comm1.value) < 0 )
	{
		alert("numbers must be greater than 0 for aided batches/sections of Comm1 field");
		return false;
		}			
					if((document.form1.Comm2.value)=="")
	{
		alert("enter number for unaided batches/sections for Comm2 field");
		return false;
		}
			
		if(isNaN(document.form1.Comm2.value))
	{
		alert("enter Proper number for unaided batches/sections for Comm2 field");
		return false;
		}
			if(parseInt(document.form1.Comm2.value) < 0 )
	{
		alert("numbers must be greater than 0 for unaided batches/sections of Comm2 field");
		return false;
		}			
					
		
}
function isNumberKey(evt)
      {

         var charCode = (evt.which) ? evt.which : event.keyCode
		//alert(charCode);
         if (charCode > 65 && charCode < 91 )
      	 {              
		 return true;
	 }
	 else if (charCode > 95 && charCode < 122 )
      	 {
		 return true;
	 }
	 else
	 {
        alert("should be alphabet");
	  	return false;
	 }
     }
    </script>
<?php
$dt = date("Y-m-d h:i:s");

	for($k=1; $k<48; $k++)
	{
		$miscdet[$k] = 0;
	}

	if(isset($_POST["Update"]))
{ 
	$serialized_data = serialize(array("$_POST[rec1]","$_POST[rec2]","$_POST[rec3]","$_POST[rec4]","$_POST[rec5]","$_POST[rec6]",
	"$_POST[rec7]","$_POST[rec8]","$_POST[rec9]","$_POST[rec10]","$_POST[rec11]","$_POST[rec12]","$_POST[rec13]","$_POST[rec14]","$_POST[rec15]","$_POST[rec16]",
	"$_POST[rec17]","$_POST[rec18]","$_POST[rec19]","$_POST[rec20]","$_POST[rec21]","$_POST[rec22]","$_POST[rec23]","$_POST[rec24]","$_POST[rec25]","$_POST[rec26]",
	"$_POST[rec27]","$_POST[rec28]","$_POST[rec29]","$_POST[rec30]","$_POST[rec31]","$_POST[rec32]","$_POST[rec33]","$_POST[rec34]","$_POST[rec35]","$_POST[rec36]","$_POST[rec37]","$_POST[rec38]","$_POST[rec39]","$_POST[rec40]","$_POST[rec41]","$_POST[rec42]","$_POST[rec43]","$_POST[rec44]","$_POST[rec45]","$_POST[rec46]","$_POST[rec47]","$_POST[arts1]","$_POST[Science1]","$_POST[Comm1]","$_POST[arts2]","$_POST[Science2]","$_POST[Comm2]"));
	
	$resschool3 = mysqli_query($con,"select * from miscdetails where surveyno='$surveyno'");
	$counts = mysqli_num_rows($resschool3);
	
	if($counts == 1)
	{
			mysqli_query($con,"UPDATE miscdetails SET surveyno='$surveyno',lastupdate='$dt',mis_details='$serialized_data',any_suggestion='$_POST[anysuggestion]' where surveyno='$surveyno' ");
			if(mysqli_affected_rows($con) == 1)
			{
			$recres = "Miscellaneous Record updated successfully...";
			}
	}
	else
	{
			$sql7="INSERT INTO miscdetails(surveyno,lastupdate,mis_details,any_suggestion) 
			VALUES('$surveyno','$dt','$serialized_data','$_POST[anysuggestion]')";
			if (!mysqli_query($con,$sql7,$con))
			{
			die('Errors: ' . mysqli_error($con));
			}
			if(mysqli_affected_rows($con) ==  1)
			{
			$recres = "Miscellaneous record inserted successfully...";
			}
	}	
}
$resschool4 = mysqli_query($con,"select * from miscdetails where surveyno='$surveyno'");
	$counts4 = mysqli_num_rows($resschool4);
	while($row4 = mysqli_fetch_array($resschool4))
		{	
		$surveynou 	=  	$row4[surveyno];
		 $miscdet  	 = 	unserialize($row4[mis_details]);
		 	$any_suggestion 	=  	$row4[any_suggestion];
		}
?>
    <div id="main">
      <div id="content" class="left">
        <div class="highlight">
          <h3>Misc. details</h3>
          <p><?php echo $recres; ?></p>
          <form id="form1" name="form1" method="post" action="">
            <p>
              <label for="institutetype">Reasons for increase and decrease</label>
              <br />
              <label for="textarea"></label>
              <textarea name="rec1" id="rec1" cols="45" rows="5" 
onKeyPress="return isNumberKey(event)"><?php echo $miscdet[0]; ?></textarea>
            </p>
<p>No of <?php
		if($insttype == "Primary school")
		{
		?> Primary <?php }?>Schools in vicinity of 2km radius<br />
<?php
		if($insttype == "Primary school")
		{
		?>
  Kannada medium
<input name="rec2" type="text" id="rec2" value="<?php echo $miscdet[1]; ?>" size="10" /> 
          English medium
          <input name="rec3" type="text" id="rec3" value="<?php echo $miscdet[2]; ?>" size="10" />
        </p>
        <?php
		}
		if($insttype == "High school" ||$insttype == "PUC" )
		{
		?>
<table width="540" height="166" border="1">
  <tr>
    <th width="125" rowspan="2" scope="row"><div align="left">Institution</div></th>
    <td width="105" rowspan="2">Number</td>
    <td colspan="2">Medium</td>
    <?php
   if($insttype != "High school")
  {
	  ?>
    <td width="136" rowspan="2">Distance from college</td>
  <?php
  }?>
  </tr>
  <tr>
    <td width="70">Kannada</td>
    <td width="70">English</td>
    </tr>
  <?php
	
		if($insttype != "PUC" )
		{
		?>
  <tr>
    <th scope="row"><div align="left">Primary/Hrpry</div></th>
    <td><input name="rec16" type="text" id="rec16" value="<?php echo $miscdet[15];?>" size="15" /></td>
    <td><input name="rec17" type="text"
     id="rec17" value=" <?php echo $miscdet[16];?>" size="10" /></td>
    <td><input name="rec32" type="text"
     id="rec32" value=" <?php echo $miscdet[31];?>" size="10" /></td>
    
  </tr>
  <?php
		}
		?>
    <tr>
    <th scope="row"><div align="left">High School</div></th>
    <td><input name="rec18" type="text" id="rec18" value="<?php echo $miscdet[17];?>" size="15" /></td>
    <td><input name="rec19" type="text" id="rec19" value=" <?php echo $miscdet[18];?>" size="10" /></td>
    <td><input name="rec33" type="text"
     id="rec33" value=" <?php echo $miscdet[32];?>" size="10" /></td>
       <?php
   if($insttype != "High school")
  {
	  ?>
    <td><input name="rec42" type="text"
     id="rec42" value=" <?php echo $miscdet[41];?>" size="20" /></td>
     <?php
  }
  ?>
  </tr>
  <tr>
    <th scope="row"><div align="left">PUC</div></th>
    <td><input name="rec20" type="text" id="rec20" value="<?php echo $miscdet[19];?>" size="15" /></td>
    <td><input name="rec21" type="text" id="rec21" value=" <?php echo $miscdet[20];?>" size="10" /></td>
    <td><input name="rec34" type="text"
     id="rec34" value=" <?php echo $miscdet[33];?>" size="10" /></td>
       <?php
   if($insttype != "High school")
  {
	  ?>
    <td><input name="rec43" type="text"
     id="rec43" value=" <?php echo $miscdet[42];?>" size="20" /></td>
     <?php
  }
  ?>
  </tr>
  <tr>
    <th height="26" scope="row"><div align="left">College</div></th>
    <td><input name="rec22" type="text" id="rec22" value="<?php echo $miscdet[21];?>" size="15" /></td>
    <td><input name="rec23" type="text" id="rec23" value=" <?php echo $miscdet[22];?>" size="10" /></td>
    <td><input name="rec35" type="text"
     id="rec35" value=" <?php echo $miscdet[34];?>" size="10" /></td>
       <?php
   if($insttype != "High school")
  {
	  ?>
    <td><input name="rec44" type="text"
     id="rec44" value=" <?php echo $miscdet[43];?>" size="20" /></td>
     <?php
  }
  ?>
  </tr>
</table>
.
<?php
		}
		?>
        
        
<p>Schools in the vicinity run by catholic managements<br />
 <?php
		if($insttype == "Primary school")
		{
		?>
  Kannada medium
<input name="rec4" type="text" id="rec4" value="<?php echo $miscdet[3]; ?>" size="10" />
English medium
<input name="rec5" type="text" id="rec5" value="<?php echo $miscdet[4]; ?>" size="10" />
</p>
<?php
		}
		if($insttype == "High school"||$insttype == "PUC")
		{
		?>
<table width="550" border="1">
  <tr>
    <th width="135" rowspan="2" scope="row"><div align="left">Institution</div></th>
    <td width="105" rowspan="2">Number</td>
    <td colspan="2">Medium</td>
      <?php
   if($insttype != "High school")
  {
	  ?>
    <td width="136" rowspan="2">Distance from college</td>
    <?php
  }
  ?>
  </tr>
  <tr>
    <td width="70">Kannada</td>
    <td width="70">English</td>
    </tr> 
	 <?php
		
		if($insttype != "PUC" )
		{
		?>
  <tr>
    <th scope="row"><div align="left">Primary/Hrpry</div></th>
    <td><input name="rec24" type="text" id="rec24" value="<?php echo $miscdet[23];?>" size="15" /></td>
    <td><input name="rec25" type="text" id="rec25" value="<?php echo $miscdet[24];?>" size="10" /></td>
    <td><input name="rec36" type="text"
     id="rec36" value=" <?php echo $miscdet[35];?>" size="10" /></td>
    
  </tr>
  <?php
		}
		?>
  <tr>
    <th scope="row"><div align="left">High School</div></th>
    <td><input name="rec26" type="text" id="rec26" value="<?php echo $miscdet[25];?>" size="15" /></td>
    <td><input name="rec27" type="text" id="rec27" value="<?php echo $miscdet[26];?>" size="10" /></td>
    <td><input name="rec37" type="text"
     id="rec37" value=" <?php echo $miscdet[36];?>" size="10" /></td>
       <?php
   if($insttype != "High school")
  {
	  ?>
    <td><input name="rec45" type="text"
     id="rec45" value=" <?php echo $miscdet[44];?>" size="20" /></td>
     <?php
  }
  ?>
  </tr>
  <tr>
    <th scope="row"><div align="left">PUC</div></th>
    <td><input name="rec28" type="text" id="rec28" value="<?php echo $miscdet[27];?>" size="15" /></td>
    <td><input name="rec29" type="text" id="rec29" value="<?php echo $miscdet[28];?>" size="10" /></td>
    <td><input name="rec38" type="text"
     id="rec38" value=" <?php echo $miscdet[37];?>" size="10" /></td>
       <?php
   if($insttype != "High school")
  {
	  ?>
    <td><input name="rec46" type="text"
     id="rec46" value=" <?php echo $miscdet[45];?>" size="20" /></td>
     <?php
  }
  ?>
  </tr>
  <tr>
    <th scope="row"><div align="left">College</div></th>
    <td><input name="rec30" type="text" id="rec30" value="<?php echo $miscdet[29];?>" size="15" /></td>
    <td><input name="rec31" type="text" id="rec31" value="<?php echo $miscdet[30];?>" size="10" /></td>
    <td><input name="rec39" type="text"
     id="rec39" value=" <?php echo $miscdet[38];?>" size="10" /></td>
       <?php
   if($insttype != "High school")
  {
	  ?>
    <td><input name="rec47" type="text"
     id="rec47" value=" <?php echo $miscdet[46];?>" size="20" /></td>
     <?php
  }
  ?>
  </tr>
</table>
<?php
		}
		?>
<p>No of Catholic teaching Staff:<br />
  Lay: Men
    <input name="rec6" type="text" id="rec6" value="<?php echo $miscdet[5]; ?>" size="10" /> 
          Women
          <input name="rec7" type="text" id="rec7" value="<?php echo $miscdet[6]; ?>" size="10" />
          <br />
          Religious: Men
          <input name="rec8" type="text" id="rec8" value="<?php echo $miscdet[7]; ?>" size="10" /> 
          Women
          <input name="rec9" type="text" id="rec9" value="<?php echo $miscdet[8]; ?>" size="10" />
      </p>
<p>No of Catholic non teaching staff<br />
  Lay: Men:
    <input name="rec10" type="text" id="rec10" value="<?php echo $miscdet[9]; ?>" size="10" />
          Women
          <input name="rec11" type="text" id="rec11" value="<?php echo $miscdet[10]; ?>" size="10" />
          <br />
          Religious: Men
          <input name="rec12" type="text" id="rec12" value="<?php echo $miscdet[11]; ?>" size="10" /> 
          Women
          <input name="rec13" type="text" id="rec13" value="<?php echo $miscdet[12]; ?>" size="10" />
</p>
<p>Number of Teaching Staff<br />
  Aided:
    <label for="textfield"></label>
    <input name="rec14" type="text" id="rec14" value="<?php echo $miscdet[13];?>" size="10" /> 
    Unaided:
    <input name="rec15" type="text" id="rec15" value=" <?php echo $miscdet[14];?>" size="10" />
</p>
<?php
		if($insttype == "PUC")
		{
		?>
<p>Number of non Teaching Staff<br />
Aided:
  <label for="textfield2"></label>
  <input name="rec40" type="text" id="rec40" value="<?php echo $miscdet[39];?>" size="10" />
Unaided:
<input name="rec41" type="text" id="rec41" value=" <?php echo $miscdet[40];?>" size="10" />
</p>
<table width="596" border="0">
  <?php
			  if($insttype == "PUC")
			  {
				  ?>
  <tr>
    <td><b>No of Aided Batches/Sections</b></td>
    <td colspan="3">Arts:<strong>
      <input name="arts1" type="text" id="arts1" value="<?php echo $miscdet[47]; ?>" size="10" />
      </strong> Science:<strong>
        <input name="Science1" type="text" id="Science1" value="<?php echo $miscdet[48]; ?>" size="10" />
        </strong>Commerce:<strong>
          <input name="Comm1" type="text" id="Comm1" value="<?php echo $miscdet[49]; ?>" size="10" />
        </strong></td>
  </tr>
  <tr>
    <td><b>No of Aided Batches/Sections</b></td>
    <td colspan="3">Arts:<strong>
      <input name="arts2" type="text" id="arts2" value="<?php echo $miscdet[50];?>" size="10"/> <strong>Science:</strong>
        <input name="Science2" type="text" id="Science2" value="<?php echo $miscdet[51]; ?>" size="10" />
        </strong>Commerce:<strong>
          <input name="Comm2" type="text" id="Comm2" value="<?php echo $miscdet[52]; ?>" size="10" />
        </strong></td>
  </tr>
  <?php
			  }
			  ?>
</table>
<p>&nbsp;</p>
<?php
		}
		?>
<p>
  <label for="institutetype2">Any suggestion</label>
  <br />
  <label for="textarea2"></label>
  <textarea name="anysuggestion" id="anysuggestion" cols="45" rows="5"><?php echo $any_suggestion; ?></textarea>
</p>
            <p>
             <?php
				if($contsurvey  == 1)
				{
				?>
              <input type="submit" name="Update" id="Update" value="update" onclick="return generate()"/>
          </p>
          <?php
				}
				else
				{
					echo "Survey is deactivated";
				}
                ?>
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
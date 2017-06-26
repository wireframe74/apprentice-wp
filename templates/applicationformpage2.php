
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<title>AiGTS - It makes Sound Business Sense - Register</title>
<style type="text/css">
@import "http://www.aigts.com.au/css/styles.css";
</style>

<style>
.required
{
	background-color:#FFE1DF;	
}
.postalrequired
{
	background-color:#FFE1DF;	
}
#chtoolbar a {height:30px;text-decoration:none;border-bottom:1px solid}

</style>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="X-UA-Compatible" content="IE=Edge" >
<title>AiGTS - It makes Sound Business Sense</title>
<meta name="keywords" content=", Apprentice Jobs, get an apprentice, find an apprenticeship, traineeship, training, job application, , RTO, Group Training, Apprentice, Apprenticeship, apprentice job search,  Apprentice Employment, jobs online, apprentice machinist, apprentice electrician, apprentice chef, apprentice hairdresser, apprentice mechanic, computer traineeship" />
<meta name="description" content=", AiGTS is a leading provider of Apprentices to Australian companies. List an apprentice position or apply for an apprenticeship now. Kick start your career. Apply for an apprenticeship or traineeship now. Positions available in NSW, QLD, VIC and SA." />
<meta name="category" content="" />
<meta name="google-site-verification" content="1wJgM1NZFwsqfgsvhNVRJdS2xgXwPtiP-IwjwT8Kam8" />

</head>

<body class="sitebg">
<a name="top"></a>
<div id="container">
<div id="header">
<div id="headerlogos"> <a href="http://www.aigts.com.au/index.php"><img src="http://www.aigts.com.au/images/header_logo.gif" width="344" height="158" border="0" /></a><img src="http://www.aigts.com.au/images/header_seal.gif" width="267" height="158" /> </div>
<div id="headersubnav"> <a href="http://www.aigts.com.au/index.php"><img src="http://www.aigts.com.au/images/header_home.gif" width="59" height="37" border="0" /></a><a href="http://www.aigts.com.au/index.php?id=6"><img src="http://www.aigts.com.au/images/header_contact.gif" width="94" height="37" border="0" /></a><a href="http://www.aigts.com.au/index.php?id=9"><img src="http://www.aigts.com.au/images/header_policies.gif" width="114" height="37" border="0" /></a><br/>
	<img src="http://www.aigts.com.au/images/header_phone.gif" width="389" height="121" /> </div>
<div id="headernav">
	<ul>
		<li style="margin-top:10px;"><a href="http://www.aigts.com.au/index.php?id=2">Employer Solutions</a></li>
		<li style="margin-top:10px;"><a href="http://www.aigts.com.au/index.php?id=3">Job Seeker Solutions</a></li>
		<li><a href="http://www.aigts.com.au/index.php?id=8" style="text-align:left;">Existing or New<br />Employee Training</a></li>
		<li style="margin-top:10px;"><a href="http://www.aigts.com.au/index.php?id=316" style="padding-right:120px;">AAC</a></li>
	</ul>
</div>

<!-- <a href="index.php?id=4">Hosting an AiGTS Apprentice</a><a href="index.php?id=7">Employing an Apprentice Direct</a> --></div>
<div id="contentblock">
<div id="contentfullpage">

 <script src="http://code.jquery.com/jquery-latest.js"></script>
 <script type="text/javascript" src="http://dev.jquery.com/view/trunk/plugins/validate/jquery.validate.js"></script>
 <script type="text/javascript" src="js/jquery.form.js"></script>
 <script type="text/javascript" src="js/jquery-ui-1.8.22.custom.min.js"></script>
 <link rel="stylesheet" href="js/jquery-ui-1.8.17.custom.css">
<script>
  /*Browser detection patch*/
jQuery.browser = {};
jQuery.browser.mozilla = /mozilla/.test(navigator.userAgent.toLowerCase()) && !/webkit/.test(navigator.userAgent.toLowerCase());
jQuery.browser.webkit = /webkit/.test(navigator.userAgent.toLowerCase());
jQuery.browser.opera = /opera/.test(navigator.userAgent.toLowerCase());
jQuery.browser.msie = /msie/.test(navigator.userAgent.toLowerCase());
</script> 
<style type="text/css">

.submit { margin-left: 12em; }
em { font-weight: bold; padding-right: 1em; vertical-align: top; }
</style> 

<script type="text/javascript">
function applyerror()
{
document.getElementById('applypreverror').innerHTML = '<strong>Already Registered?</strong><br/>As AiGTS already has your information on file, please call 1300 761 944 to speak to a staff member to have your query answered, details updated and re-activated in the live system.';	
document.getElementById('applypreverror').className = "applyerror";
document.getElementById('submit').style.display = "none";
document.getElementById('submiterror').style.display = "block";
document.getElementById('submiterror').className = "applyerror";
}
function clearerror()
{
document.getElementById('applypreverror').innerHTML = '';
document.getElementById('applypreverror').className = 'applyclear';	
document.getElementById('submit').style.display = "block";
document.getElementById('submit').style.float = "right";
document.getElementById('submiterror').style.display = "none";
document.getElementById('submiterror').className = 'applyclear';	
}
</script>
  
							 <div class="chtoolbar" id="chtoolbar" width="100%" style="float:right;display:block;">
               <a  href="joblist.php">Job Board</a> | <a  href="signin.php?ID=464">Sign In</a>							 </div>
     <h2>Apprenticeship/Traineeship Application Form</h2>        
		
		 <!-- start main content -->
      <!-- START MAIN PAGE CONTENT -->
<form name="newuser_registrationp2" id="newuser_registrationp2" method="post" enctype="multipart/form-data"><style>
#dbOdd
{
	background-color: #FFFFFF;
}
#dbEven
{
	background-color:#F36F21;
}
</style>
<input type="HIDDEN" name="JobID" id="JobID" value="464" />

<script language="javascript">  
 

	
$(document).ready(function() 
{
    var options = {
        target:        '#errors',   
        beforeSubmit:  showRequest, 
        error: showResponse,
        success:       showResponse,        
        url:       'doregistration.php',
        type:      'POST',        
        dataType:  'script'
        };

    // bind to the form's submit event
    $('#newuser_registrationp2').submit(function() {
        // inside event callbacks 'this' is the DOM element so we first
        // wrap it in a jQuery object and then invoke ajaxSubmit
        
        $(this).ajaxSubmit(options);

        // !!! Important !!!
        // always return false to prevent standard browser submit and page navigation
        return false;
    });
    
      $("#dob").datepicker({dateFormat: "dd/mm/yy",defaultDate: new Date().getDate()-(362.125*12),yearRange: "-80:-12",changeMonth: true,changeYear: true}); 
							  
		$("[id^='emphiststartdate']").datepicker({
							  dateFormat: "dd/mm/yy",
							  defaultDate: new Date().getDate()-(362.125*1),
							  yearRange: "-80:+10",
							  changeMonth: true,
							  changeYear: true
							  
							  }); 					  
		
		$("[id^='emphistenddate']").datepicker({
							  dateFormat: "dd/mm/yy",
							  defaultDate: new Date().getDate(),
							  yearRange: "-80:+10",
							  changeMonth: true,
							  changeYear: true
							  
							  });					
    
    
    
    $(".qualificationdate").datepicker({
							  dateFormat: "dd/mm/yy",
							  defaultDate: new Date().getDate(),
							  yearRange: "-80:+10",
							  changeMonth: true,
							  changeYear: true
							  
							  });		
							  
		
		
	
});

function addqualline()
{
	  var i = $('#qualifications tr').length;
	  if(i>10)
	  {
	  	alert('You can only add a maximum of ten (10) qualifications to your application');
	  	return false;
	  }
	  var element = '<td width="5%" align="right">'+i+'.</td><td width="40%"><select style="font-size:0.9em;width:90%;" name="qualificationlist_'+i+'" id="qualificationlist_'+i+'"></select></td>';
    
	  element= element+'<td width="25%" align="right"><input type="text" name="qualification_'+i+'_startdate" id="qualification_'+i+'_startdate" class="qualificationdate" readonly="readonly" style="width:40%;background-color:#f4f4f4;" /></td>';
	  element= element+'<td width="25%" align="right"><input type="text" name="qualification_'+i+'_enddate" id="qualification_'+i+'_enddate" class="qualificationdate" readonly="readonly" style="width:40%;background-color:#f4f4f4;" /></td>';
	  element= element+'<td width="5%" align="center">&nbsp;</td>';
		  
	  $('<tr>'+element+'</tr>').fadeIn('slow').appendTo('#qualifications');
	  
	  $('#qualificationlist_1 option').clone().appendTo('#qualificationlist_'+i);
	  $('#qualificationlist_'+i).val('');
	  
	  $('#qualification_'+i+'_startdate').datepicker({
							  dateFormat: "dd/mm/yy",
							  defaultDate: new Date().getDate(),
							  yearRange: "-80:+10",
							  changeMonth: true,
							  changeYear: true
							  
							  });			
		$('#qualification_'+i+'_enddate').datepicker({
							  dateFormat: "dd/mm/yy",
							  defaultDate: new Date().getDate(),
							  yearRange: "-80:+10",
							  changeMonth: true,
							  changeYear: true
							  
							  });								 
	  	  
		i++;
	
}

function addlicenceline()
{
	  var i = $('#licences tr').length;
	  if(i>10)
	  {
	  	alert('You can only add a maximum of ten (10) licences to your application');
	  	return false;
	  }
	  var element = '<td width="5%" align="right">'+i+'.</td><td width="30%"><select style="font-size:0.9em;width:90%;" name="licencelist_'+i+'" id="licencelist_'+i+'"></select></td>';
    
	  element= element+'<td width="20%" align="center"><input type="text" name="licence_'+i+'_number" id="licence_'+i+'_number" maxlength="50" size="37" style="width:90%" /></td>';
	  element= element+'<td width="20%" align="right"><input type="text" name="licence_'+i+'_startdate" id="licence_'+i+'_startdate" class="qualificationdate" readonly="readonly" style="width:50%;background-color:#f4f4f4;" /></td>';
	  element= element+'<td width="20%" align="right"><input type="text" name="licence_'+i+'_enddate" id="licence_'+i+'_enddate" class="qualificationdate" readonly="readonly" style="width:50%;background-color:#f4f4f4;" /></td>';
	  element= element+'<td width="5%" align="center">&nbsp;</td>';
		  
	  $('<tr>'+element+'</tr>').fadeIn('slow').appendTo('#licences');
	  
	  $('#licencelist_1 option').clone().appendTo('#licencelist_'+i);
	  $('#licencelist_'+i).val('');
	  
	  $('#licence_'+i+'_startdate').datepicker({
							  dateFormat: "dd/mm/yy",
							  defaultDate: new Date().getDate(),
							  yearRange: "-80:+10",
							  changeMonth: true,
							  changeYear: true
							  
							  });			
		$('#licence_'+i+'_enddate').datepicker({
							  dateFormat: "dd/mm/yy",
							  defaultDate: new Date().getDate(),
							  yearRange: "-80:+10",
							  changeMonth: true,
							  changeYear: true
							  
							  });								 
	  	  
		i++;
	
}
	 
// pre-submit callback
function showRequest(formData, jqForm, options) {
      
	    $("#loadingpage").attr({title: 'Processing your application'});					
		$("#loadingpage").dialog({
        resizable: false,
        height:150,
        width:350,
        modal: false
    }); 
	
    return true;
}

// post-submit callback
function showResponse(responseText, statusText, xhr, $form)  {
    // for normal html responses, the first argument to the success callback
    // is the XMLHttpRequest object's responseText property

    // if the ajaxSubmit method was passed an Options Object with the dataType
    // property set to 'xml' then the first argument to the success callback
    // is the XMLHttpRequest object's responseXML property

    // if the ajaxSubmit method was passed an Options Object with the dataType
    // property set to 'json' then the first argument to the success callback
    // is the json data object returned by the server
     $("#loadingpage").dialog('close');
    if(responseText.responseText!='Your application has been successfully uploaded')
                     {
                     	alert('One or more errors have occured. Please scroll up to see more information');
                     	document.getElementById('errors').display = '';
                     	document.getElementById('errors').innerHTML = responseText.responseText;
                     	document.getElementById('errors').className = "applyerror";
                     }
                     else
                     {
                      
                      if(document.getElementById('JobID').value!="")
                      {
                      	alert(responseText.responseText);  
                      	 setTimeout('WaitForIt()', 5000);
                      	window.location.href = 'signup-successful.php?ID=' + document.getElementById('JobID').value;
                      }
                      else
                      	{
                      		alert(responseText.responseText);  
                      		 setTimeout('WaitForIt()', 5000);
                      		window.location.href = 'signup-successful.php';
                      	}
                      	
                     }
   
}	

function WaitForIt()
{
	
}
function showPopupAndReturnFalse(msg)
{
	alert(msg);
	return false;
}

function ConfirmApplication()
{
		var currentForm;
 $("#dialog-confirm").dialog({
        resizable: false,
        height:250,
        width:500,
        modal: true,
        buttons: {
            'Submit Application Form': function() 
            {
                if($("#declaration").is(":checked")===false)
                {
                	alert('You have not agreed to the terms and conditions of the application process.');
                	return false;
                }
                else
                	{                    
                    $(this).dialog('close');
                    $('#newuser_registrationp2').submit();
                 }
            },
            Cancel: function() {
                $(this).dialog('close');
            }
        }
    });    	
	$("#dialog-confirm").parent().find("button[text='Submit Application Form']").find("span").html("Submit Application Form");  
   $("#dialog-confirm").parent().find("button[text='Cancel']").find("span").html("Cancel");  
	return true;
}

function validateSignupForm(form)
{
 var ValidateRequired = true;
 /*
 
 	*/
 	document.getElementById('errors').innerHTML = '&nbsp;'; 
 	
 	
 
  
 	
 	$(".required").each(function()
 	{
 		if($(this).val()=="")
 		{
 			ValidateRequired = false;
 			$(this).css('background-color','#F36F21');
 			$(this).focus();
 			return showPopupAndReturnFalse($(this).attr("title") + ' requires a value'); 			 			
 		}
 		else
 			{
 				$(this).css('background-color','#FFE1DF');
 			}
 	}
 	);
	
	if(ValidateRequired===false)
 	{
 		return false;
 	}
	
	/* If the postal address is different, make sure all fields are entered as required */
	if(document.getElementById('chkUsePostalAddressYes').checked==true)
	{
	 $(".postalrequired").each(function()
 	{
 		if($(this).val()=="")
 		{
 			ValidateRequired = false;
 			$(this).css('background-color','#F36F21');
 			$(this).focus();
 			return showPopupAndReturnFalse($(this).attr("title") + ' requires a value'); 			 			
 		}
 		else
 			{
 				$(this).css('background-color','#FFE1DF');
 			}
 	}
 	);
	}
 	
 	if(ValidateRequired===false)
 	{
 		return false;
 	}
 	
 	//Validate the inputs in order
 	//Post code must be in the range 1000 to 9999
 	if (isNaN(document.getElementById("postcode").value) == true || document.getElementById("postcode").value < 1000 || document.getElementById("postcode").value > 9999 || document.getElementById("postcode").value % 1 != 0)
		return showPopupAndReturnFalse("Please add a valid Post code (4 digits).");
	
	//Either Phone or Mobile must be populated
	if (document.getElementById("homephoneno").value.length < 8 || /[^0-9+() -]/.exec(document.getElementById("homephoneno").value) != null)
	{
		if (document.getElementById("mobilephoneno").value.length < 8 || /[^0-9+() -]/.exec(document.getElementById("mobilephoneno").value) != null)
		{
			return showPopupAndReturnFalse("Please add at least one valid Contact Phone number for either home or mobile phone number fields the phone number fields.");
		}
  }	
	
		
  	//Type of position
	var RadioButton = document.getElementsByName('chkApprenticeship');	  	
	if(RadioButton!==null)
	{					
	 if(RadioButton[0].checked===false && RadioButton[1].checked===false)
	 {		
			return showPopupAndReturnFalse("Please specify if you are interested in an Apprenticeship or Traineeship.");		
	 }	
  }
  
  var RadioButton = document.getElementsByName('chkEmploymentType');	  	
	if(RadioButton!==null)
	{					
	 if(RadioButton[0].checked===false && RadioButton[1].checked===false && RadioButton[2].checked===false)
	 {		
			return showPopupAndReturnFalse("Please specify if you are Full-Time, Part-Time or School Based position.");		
	 }	
  }
  
  //Heard about us from
  if (document.getElementById("heardaboutusfrom").value == "ZZZ")
	{
			if(document.getElementById("otherhauf").value=="")
			{
			 return showPopupAndReturnFalse("Please enter where you heard about AIGTS from.");	
			}
	}
  
 	
 	 //Are you currently attending school?
  var RadioButton = document.getElementsByName('chkCurrentlyAttendingSchool');
  if(RadioButton!==null)
  {
	  if(RadioButton[0].checked==true)
	  {
	  	if (document.getElementById("currentschoolyear").selectedIndex == 0)
		 {
			return showPopupAndReturnFalse("Please select what year level (grade) you are currently in.");
		 }	  	
	  }
	  if(RadioButton[1].checked==true)
	   {
	   	if (document.getElementById("highestschoolyear").selectedIndex == 0)
		  {
			 return showPopupAndReturnFalse("Please select the highest year level (grade) completed.");
		  }		
		  if (document.getElementById("schoolcompletedyear").selectedIndex == 0)
		  {
			 return showPopupAndReturnFalse("Please select the year you completed that year level (grade).");	
		  }	   	
	   }
	 } 
	 
	//Previous Employment History
//Validate all three at the same fime
var prevhistcount = 0;
for(prevhistcount=1;prevhistcount<4;prevhistcount++)
{	
	var textbox = document.getElementById('emphistemployer'+prevhistcount);
  if(textbox!==null) 
  {
  	if(textbox.value!="")
  	{
  		var textbox = document.getElementById('emphistduties'+prevhistcount); 
  		if(textbox!==null) 
      {
  	   if(textbox.value=="")
  	   {
  		  return showPopupAndReturnFalse("Please enter the Duties performed at your previous position - " + prevhistcount);	
  		 }
  	  } 
	  
	  var textbox = document.getElementById('emphistposition'+ prevhistcount); 
  		if(textbox!==null) 
      {
  	   if(textbox.value=="")
  	   {
  		  return showPopupAndReturnFalse("Please enter the your position at your previous position - "+ prevhistcount);	
  		 }
  	  } 
	   var textbox = document.getElementById('emphiststartdate'+ prevhistcount); 
	   if(textbox!==null) 
      {
  	   if(textbox.value=="")
  	   {
  		  return showPopupAndReturnFalse("Please specify when you started your previous position -"+ prevhistcount);	
  		 }
  	  } 
  	 }
  	}
}
  	
  //Qualifications
  var i=0;
  for(i=1;i<11;i++)
  {
  	var listbox = document.getElementById('qualificationlist_'+i);
  	if(listbox!=null)
  	{
  		if(listbox.selectedIndex!=0)	
  		{
  			//Check start and end dates
  			var dateedit =  document.getElementById('qualification_'+i+'_startdate');
  			if(dateedit!=null)
  	    {
  	    	if(dateedit.value=="")
  	    	{
  	    		return showPopupAndReturnFalse("Please enter a Start Date for Qualification Line " + i);
  	    	}
  	    }
  	    var dateedit =  document.getElementById('qualification_'+i+'_enddate');
  			if(dateedit!=null)
  	    {
  	    	if(dateedit.value=="")
  	    	{
  	    		return showPopupAndReturnFalse("Please enter a End Date for Qualification Line " + i);
  	    	}
  	    }
  	   }
  	  }
  	}
  
  //Licences
  i=1;
  for(i=1;i<11;i++)
  {
  	var listbox = document.getElementById('licencelist_'+i);
  	if(listbox!=null)
  	{
  		if(listbox.selectedIndex!=0)	
  		{
  			//Check start and end dates
  			var textedit =  document.getElementById('licence_'+i+'_number');
  			if(textedit!=null)
  	    {
  	    	if(textedit.value=="")
  	    	{
  	    		//return showPopupAndReturnFalse("Please enter a Licence Number for Licence Line " + i);
  	    	}
  	    }
		var startdateedit = document.getElementById('licence_'+i+'_startdate');
  	    var enddateedit =  document.getElementById('licence_'+i+'_enddate');
		if((startdateedit==null) || (enddateedit==null)) continue;
		
  		if(startdateedit!=null && enddateedit!=null)
  	    {
  	    	if(startdateedit.value=="" && enddateedit.value=="")
  	    	{
  	    		//return showPopupAndReturnFalse("Please enter a either a Completed Date or Expiry Date for Licence Line " + i);
  	    	}
  	    }
  	   }
  	  }
  	}
  	
  //Training Contract ID	
  /*
  var RadioButton = document.getElementsByName('chkTrainingContactID');
  if(RadioButton!==null)
  {
	  if(RadioButton[0].checked==true)
	  {	  	
		if (document.getElementById("contractid").value == "")
		 {
			return showPopupAndReturnFalse("Please enter your Training Contract ID.");
		 }
		if (document.getElementById("contractid_course").selectedIndex == 0)
		 {
			return showPopupAndReturnFalse("Please enter your Training Course.");
		 }
		if (document.getElementById("contractid_stage").selectedIndex == 0)
		 {
			return showPopupAndReturnFalse("Please enter the stage of the Training Course.");
		 }		 
	  }	  
	 } 	    
	        
 	*/
	if (document.getElementById("resumefile").value.length == 0)
	{
		return showPopupAndReturnFalse("Please select your resume file to upload.");
	}	

	var acceptedFileTypes = new Array(); acceptedFileTypes[0] = 'doc';acceptedFileTypes[1] = 'docx';acceptedFileTypes[2] = 'rtf';acceptedFileTypes[3] = 'pdf';	
	var dots = document.getElementById("resumefile").value.toLowerCase().split(".");
	//get the part AFTER the LAST period.
	var fileType = "." + dots[dots.length-1];
	
	if (acceptedFileTypes.join(".").indexOf(fileType) == -1)
	{
		return showPopupAndReturnFalse("Only resume files of the following types can be uploaded: doc, docx, rtf, pdf");
	}	
	
	if (document.getElementById("coverletter").value.length != 0)
	{
		var dots = document.getElementById("coverletter").value.toLowerCase().split(".");
		//get the part AFTER the LAST period.
		var fileType = "." + dots[dots.length-1];
		
		if (acceptedFileTypes.join(".").indexOf(fileType) == -1)
		{
			return showPopupAndReturnFalse("Only cover letters of the following types can be uploaded: doc, docx, rtf, pdf");
		}	
	}
	
	return ConfirmApplication();
	
  
}
function ToggleSubRegions(intRegionID)
{
  var $regioncontrol = document.getElementById('region_'+intRegionID);
  if($regioncontrol==null) return false;
  var $regionchecked = $regioncontrol.checked;
  var $subregion = document.getElementById('tableregion_'+intRegionID);
  if($subregion==null) return false;
  
  $subregion.style.display = ($regionchecked == true ? "" : "none");		
return true;  
  
  
}
</script>


<style type="text/css">
td.profilecaption {
	/*color: white;
	background-color: #F00;
	*/
	
	color: #A32727;
	border-bottom:1px solid #A32727;
	font-weight:bold;
	afont-size:0.9em;
	text-transform:uppercase;
	padding-top:10px;
	line-height:2em;
	height:40px;
}

.requirediconcaption 
{	
	color: #A32727;
	font-size:8pt;
}
.o {
	background-color: #CCE7FD;
}
.e {
	background-color: #FFFFFF;
}
label {float:none;}
	
</style>

<div id="errors" name="errors" style="visibility:visible;" class="applyclear"></div>

<p><strong>Thankyou for applying for an apprenticeship or traineeship through AiGTS.</strong></p>

<p style="width:80%;">The application process should take approximately 10 minutes to complete, and you will be required to attach a resume to your application during the process.</p>
<p style="width:80%;">If you have any problems with the application process, please call 1300 761 944 to speak with an AiGTS staff member.</p>

<table border="0" cellpadding="2" cellspacing="0" class="pcrtable" width="100%">
	<col width="50%">
	<col width="50%">
	
  <tr>
    <td class="profilecaption" colspan="2"> Personal Details</td>
  </tr>
  <tr>
   <td colspan="2" class="requirediconcaption">* denotes mandatory fields</td>
  </tr>
  

<tr>
    <td colspan="2" height="1"></td>
  </tr>
<TR>
    <TD>What Regions are you looking for work in?<br/><br/>
	<font class="requirediconcaption">Should you wish to register for a position in a region that is not listed please call 1300 761 944</font></TD>
    <TD><table cellpadding="5" cellspacing="5" border="0" width="100%" style="border-right:solid 1px;border-left:solid 1px;border-bottom:solid 1px;border-top:solid 1px;border-color:silver;">
<tr><td width="80%" align="left" style="padding-left:10px;"><strong>Adelaide</strong></td><td width="20%" align="center"><input type="checkbox" name="region_422" id="region_422"  onclick="javascript:ToggleSubRegions(422);" /></td></tr>
<tr><td colspan="2"><table cellpadding="5" cellspacing="0" border="0" width="100%" style="display: none;border-right:solid 1px;border-left:solid 1px;border-bottom:solid 1px;border-top:solid 1px;" id="tableregion_422">
<tr id="dbOdd" ><td width="80%" align="left" style="padding-left:25px;"> 
			 Adelaide</td><td width="20%" align="center"><input type="checkbox" name="regionstandard_1421" id="regionstandard_1421"   /></td></tr>
</table></td></tr>
</table>
<table cellpadding="5" cellspacing="5" border="0" width="100%" style="border-right:solid 1px;border-left:solid 1px;border-bottom:solid 1px;border-top:solid 1px;border-color:silver;">
<tr><td width="80%" align="left" style="padding-left:10px;"><strong>Albury</strong></td><td width="20%" align="center"><input type="checkbox" name="region_423" id="region_423"  onclick="javascript:ToggleSubRegions(423);" /></td></tr>
<tr><td colspan="2"><table cellpadding="5" cellspacing="0" border="0" width="100%" style="display: none;border-right:solid 1px;border-left:solid 1px;border-bottom:solid 1px;border-top:solid 1px;" id="tableregion_423">
<tr id="dbOdd" ><td width="80%" align="left" style="padding-left:25px;"> 
			 Albury/Wodonga</td><td width="20%" align="center"><input type="checkbox" name="regionstandard_1422" id="regionstandard_1422"   /></td></tr>
<tr id="dbEven" ><td width="80%" align="left" style="padding-left:25px;"> 
			 NSW Riverina</td><td width="20%" align="center"><input type="checkbox" name="regionstandard_1423" id="regionstandard_1423"   /></td></tr>
<tr id="dbOdd" ><td width="80%" align="left" style="padding-left:25px;"> 
			 Victoria North East</td><td width="20%" align="center"><input type="checkbox" name="regionstandard_1424" id="regionstandard_1424"   /></td></tr>
</table></td></tr>
</table>
<table cellpadding="5" cellspacing="5" border="0" width="100%" style="border-right:solid 1px;border-left:solid 1px;border-bottom:solid 1px;border-top:solid 1px;border-color:silver;">
<tr><td width="80%" align="left" style="padding-left:10px;"><strong>Bendigo</strong></td><td width="20%" align="center"><input type="checkbox" name="region_420" id="region_420"  onclick="javascript:ToggleSubRegions(420);" /></td></tr>
<tr><td colspan="2"><table cellpadding="5" cellspacing="0" border="0" width="100%" style="display: none;border-right:solid 1px;border-left:solid 1px;border-bottom:solid 1px;border-top:solid 1px;" id="tableregion_420">
<tr id="dbOdd" ><td width="80%" align="left" style="padding-left:25px;"> 
			 Bendigo Region</td><td width="20%" align="center"><input type="checkbox" name="regionstandard_1425" id="regionstandard_1425"   /></td></tr>
<tr id="dbEven" ><td width="80%" align="left" style="padding-left:25px;"> 
			 Victoria Central</td><td width="20%" align="center"><input type="checkbox" name="regionstandard_1426" id="regionstandard_1426"   /></td></tr>
</table></td></tr>
</table>
<table cellpadding="5" cellspacing="5" border="0" width="100%" style="border-right:solid 1px;border-left:solid 1px;border-bottom:solid 1px;border-top:solid 1px;border-color:silver;">
<tr><td width="80%" align="left" style="padding-left:10px;"><strong>Brisbane</strong></td><td width="20%" align="center"><input type="checkbox" name="region_421" id="region_421"  onclick="javascript:ToggleSubRegions(421);" /></td></tr>
<tr><td colspan="2"><table cellpadding="5" cellspacing="0" border="0" width="100%" style="display: none;border-right:solid 1px;border-left:solid 1px;border-bottom:solid 1px;border-top:solid 1px;" id="tableregion_421">
<tr id="dbOdd" ><td width="80%" align="left" style="padding-left:25px;"> 
			 Brisbane</td><td width="20%" align="center"><input type="checkbox" name="regionstandard_1427" id="regionstandard_1427"   /></td></tr>
<tr id="dbEven" ><td width="80%" align="left" style="padding-left:25px;"> 
			 North Queensland</td><td width="20%" align="center"><input type="checkbox" name="regionstandard_1428" id="regionstandard_1428"   /></td></tr>
</table></td></tr>
</table>
<table cellpadding="5" cellspacing="5" border="0" width="100%" style="border-right:solid 1px;border-left:solid 1px;border-bottom:solid 1px;border-top:solid 1px;border-color:silver;">
<tr><td width="80%" align="left" style="padding-left:10px;"><strong>Canberra</strong></td><td width="20%" align="center"><input type="checkbox" name="region_424" id="region_424"  onclick="javascript:ToggleSubRegions(424);" /></td></tr>
<tr><td colspan="2"><table cellpadding="5" cellspacing="0" border="0" width="100%" style="display: none;border-right:solid 1px;border-left:solid 1px;border-bottom:solid 1px;border-top:solid 1px;" id="tableregion_424">
<tr id="dbOdd" ><td width="80%" align="left" style="padding-left:25px;"> 
			 Canberra</td><td width="20%" align="center"><input type="checkbox" name="regionstandard_1429" id="regionstandard_1429"   /></td></tr>
</table></td></tr>
</table>
<table cellpadding="5" cellspacing="5" border="0" width="100%" style="border-right:solid 1px;border-left:solid 1px;border-bottom:solid 1px;border-top:solid 1px;border-color:silver;">
<tr><td width="80%" align="left" style="padding-left:10px;"><strong>Melbourne</strong></td><td width="20%" align="center"><input type="checkbox" name="region_418" id="region_418"  onclick="javascript:ToggleSubRegions(418);" /></td></tr>
<tr><td colspan="2"><table cellpadding="5" cellspacing="0" border="0" width="100%" style="display: none;border-right:solid 1px;border-left:solid 1px;border-bottom:solid 1px;border-top:solid 1px;" id="tableregion_418">
<tr id="dbOdd" ><td width="80%" align="left" style="padding-left:25px;"> 
			 Melbourne East</td><td width="20%" align="center"><input type="checkbox" name="regionstandard_1430" id="regionstandard_1430"   /></td></tr>
<tr id="dbEven" ><td width="80%" align="left" style="padding-left:25px;"> 
			 Melbourne North</td><td width="20%" align="center"><input type="checkbox" name="regionstandard_1431" id="regionstandard_1431"   /></td></tr>
<tr id="dbOdd" ><td width="80%" align="left" style="padding-left:25px;"> 
			 Melbourne South</td><td width="20%" align="center"><input type="checkbox" name="regionstandard_1432" id="regionstandard_1432"   /></td></tr>
<tr id="dbEven" ><td width="80%" align="left" style="padding-left:25px;"> 
			 Melbourne West</td><td width="20%" align="center"><input type="checkbox" name="regionstandard_1433" id="regionstandard_1433"   /></td></tr>
</table></td></tr>
</table>
<table cellpadding="5" cellspacing="5" border="0" width="100%" style="border-right:solid 1px;border-left:solid 1px;border-bottom:solid 1px;border-top:solid 1px;border-color:silver;">
<tr><td width="80%" align="left" style="padding-left:10px;"><strong>Perth</strong></td><td width="20%" align="center"><input type="checkbox" name="region_425" id="region_425"  onclick="javascript:ToggleSubRegions(425);" /></td></tr>
<tr><td colspan="2"><table cellpadding="5" cellspacing="0" border="0" width="100%" style="display: none;border-right:solid 1px;border-left:solid 1px;border-bottom:solid 1px;border-top:solid 1px;" id="tableregion_425">
<tr id="dbOdd" ><td width="80%" align="left" style="padding-left:25px;"> 
			 Perth</td><td width="20%" align="center"><input type="checkbox" name="regionstandard_1434" id="regionstandard_1434"   /></td></tr>
</table></td></tr>
</table>
<table cellpadding="5" cellspacing="5" border="0" width="100%" style="border-right:solid 1px;border-left:solid 1px;border-bottom:solid 1px;border-top:solid 1px;border-color:silver;">
<tr><td width="80%" align="left" style="padding-left:10px;"><strong>Sydney</strong></td><td width="20%" align="center"><input type="checkbox" name="region_417" id="region_417"  onclick="javascript:ToggleSubRegions(417);" /></td></tr>
<tr><td colspan="2"><table cellpadding="5" cellspacing="0" border="0" width="100%" style="display: none;border-right:solid 1px;border-left:solid 1px;border-bottom:solid 1px;border-top:solid 1px;" id="tableregion_417">
<tr id="dbOdd" ><td width="80%" align="left" style="padding-left:25px;"> 
			 NSW Hunter Region</td><td width="20%" align="center"><input type="checkbox" name="regionstandard_1435" id="regionstandard_1435"   /></td></tr>
<tr id="dbEven" ><td width="80%" align="left" style="padding-left:25px;"> 
			 Sydney North</td><td width="20%" align="center"><input type="checkbox" name="regionstandard_1436" id="regionstandard_1436"   /></td></tr>
<tr id="dbOdd" ><td width="80%" align="left" style="padding-left:25px;"> 
			 Sydney South West</td><td width="20%" align="center"><input type="checkbox" name="regionstandard_1437" id="regionstandard_1437"   /></td></tr>
<tr id="dbEven" ><td width="80%" align="left" style="padding-left:25px;"> 
			 Sydney West</td><td width="20%" align="center"><input type="checkbox" name="regionstandard_1438" id="regionstandard_1438"   /></td></tr>
</table></td></tr>
</table>
<table cellpadding="5" cellspacing="5" border="0" width="100%" style="border-right:solid 1px;border-left:solid 1px;border-bottom:solid 1px;border-top:solid 1px;border-color:silver;">
<tr><td width="80%" align="left" style="padding-left:10px;"><strong>Wollongong</strong></td><td width="20%" align="center"><input type="checkbox" name="region_419" id="region_419"  onclick="javascript:ToggleSubRegions(419);" /></td></tr>
<tr><td colspan="2"><table cellpadding="5" cellspacing="0" border="0" width="100%" style="display: none;border-right:solid 1px;border-left:solid 1px;border-bottom:solid 1px;border-top:solid 1px;" id="tableregion_419">
<tr id="dbOdd" ><td width="80%" align="left" style="padding-left:25px;"> 
			 NSW South Coast</td><td width="20%" align="center"><input type="checkbox" name="regionstandard_1439" id="regionstandard_1439"   /></td></tr>
<tr id="dbEven" ><td width="80%" align="left" style="padding-left:25px;"> 
			 Wollongong</td><td width="20%" align="center"><input type="checkbox" name="regionstandard_1440" id="regionstandard_1440"   /></td></tr>
</table></td></tr>
</table>
     </TD>
</TR>
  
 
  
  
  
  
  <TR>
    <TD STYLE=padding:0 HEIGHT=1 COLSPAN="2"></TD>
  </TR>
  <TR>
    <TD STYLE=padding:0 HEIGHT=1 COLSPAN="2"></TD>
  </TR>
  <TR >
    <TD  >Address line 1</TD>
    <TD><INPUT maxlength="50" style="width:90%;" NAME="addressline1" ID="addressline1" TYPE="TEXT" VALUE="" class="required" title="Address 1"><div class="requirediconcaption" width="10" style="display:inline;padding-left:4px;">*</div></TD>
  </TR>
  <TR >
    <TD STYLE=padding:0 HEIGHT=1 COLSPAN="2"></TD>
  </TR>
  <TR >
    <TD >Address line 2 <font style="font-size:0.9em">(optional)</font></TD>
    <TD><INPUT maxlength="50" style="width:90%;" NAME="addressline2" ID="addressline2" TYPE="TEXT" VALUE=""></TD>
  </TR>
  <TR >
    <TD STYLE=padding:0 HEIGHT=1 COLSPAN="2"></TD>
  </TR>
  <TR >
    <TD >Suburb / Town</TD>
    <TD><INPUT maxlength="50" style="width:50%;" NAME="suburb" ID="suburb" TYPE="TEXT" VALUE="" class="required" title="Suburb / Town"><div class="requirediconcaption" width="10" style="display:inline;padding-left:4px;">*</div></TD>
  </TR>
  <TR >
    <TD STYLE=padding:0 HEIGHT=1 COLSPAN="2"></TD>
  </TR>
  <TR >
    <TD >Post code</TD>
    <TD><INPUT maxlength="4" style="width:25%;" NAME="postcode" ID="postcode" TYPE="TEXT" VALUE="" class="required" title="Post Code"><div class="requirediconcaption" width="10" style="display:inline;padding-left:4px;">*</div></TD>
  </TR>  
  <TR >
    <TD STYLE=padding:0 HEIGHT=1 COLSPAN="2"></TD>
  </TR>
  <TR >
    <TD >State</TD>
    <TD><select id="state" name="state" style="width:25%;" class="required" title="State">
        <option value="" selected="selected">(Select State)</option>
        <option value="NSW">NSW</option>
        <option value="NT">NT</option>
        <option value="QLD">QLD</option>
        <option value="SA">SA</option>
        <option value="TAS">TAS</option>
        <option value="VIC">VIC</option>
        <option value="WA">WA</option>
      </select><div class="requirediconcaption" width="10" style="display:inline;padding-left:4px;">*</div></TD>
  </TR>
 	<tr>
     <td width="50%">
    	<script language="javascript">
        function postaladdressrequired() 
		{
					 
			var chkYes = true; // default
        
        	if (document.getElementById("chkUsePostalAddressYes").checked == false)
            	chkYes = false;
          		 
			document.getElementById('PostallAddress').style.display = (chkYes == true ? "" : "none");			
		}
		</script>
      Is your Postal Address different to your Residential Address?</td>
    <td width="50%" align="center">    	
    	<table width="100%" border="0" cellpadding="0" cellspacing="0">
    		<tr>
    			 <td width="25%" align="right"><label for="chkUsePostalAddressYes" >Yes</label></td>
           <td width="25%" align="center"><input id="chkUsePostalAddressYes" name="chkUsePostalAddress" type="radio" value="T" onclick="postaladdressrequired()" /></td>
      	   <td width="25%" align="right"><label for="chkUsePostalAddressNo" >No</label></td>
           <td width="25%" align="center"><input  id="chkUsePostalAddressNo" 
		   name="chkUsePostalAddress" type="radio" value="F" onclick="postaladdressrequired()" checked="checked"/></td>
        </tr>
       </table>             	
     </td>
   </tr> 
   <tr id="PostallAddress">
    <td colspan="2">
	  <table cellpadding="2" cellspacing="0" width="100%" border="0">
	   <tr>
 	    <td width="50%">Postal Address line 1</td>
		<td width="50%"><INPUT maxlength="50" style="width:90%;" NAME="postaladdressline1" ID="postaladdressline1" TYPE="TEXT" VALUE="" class="postalrequired" title="Postal Address 1"></td>
	   </tr>	
	   <TR >
    <TD STYLE=padding:0 HEIGHT=1 COLSPAN="2"></TD>
  </TR>
	   <tr>
 	    <td width="50%">Postal Address line 2</td>
		<td width="50%"><INPUT maxlength="50" style="width:90%;" NAME="postaladdressline2" ID="postaladdressline2" TYPE="TEXT" VALUE="" title="Postal Address 2"></td>
	   </tr>
	   <TR >
    <TD STYLE=padding:0 HEIGHT=1 COLSPAN="2"></TD>
  </TR>
<TR >
    <TD width="50%">Postal Suburb / Town</TD>
    <TD width="50%"><INPUT maxlength="50" style="width:50%;" NAME="postalsuburb" ID="postalsuburb" TYPE="TEXT" VALUE="" class="postalrequired" title="Postal Suburb / Town">
	</TD>
  </TR>
<TR >
    <TD STYLE=padding:0 HEIGHT=1 COLSPAN="2"></TD>
  </TR>  
<TR >
    <TD width="50%">Postal Post code</TD>
    <TD width="50%"><INPUT maxlength="4" style="width:25%;" NAME="postalpostcode" ID="postalpostcode" TYPE="TEXT" VALUE="" class="postalrequired" title="Postal Post Code"></TD>
  </TR>
<TR >
    <TD STYLE=padding:0 HEIGHT=1 COLSPAN="2"></TD>
  </TR>  
  <TR >
    <TD  width="50%">Postal State</TD>
    <TD  width="50%"><select id="postalstate" name="postalstate" style="width:25%;" class="postalrequired" title="Postal State">
        <option value="" selected="selected">(Select State)</option>
        <option value="NSW">NSW</option>
        <option value="NT">NT</option>
        <option value="QLD">QLD</option>
        <option value="SA">SA</option>
        <option value="TAS">TAS</option>
        <option value="VIC">VIC</option>
        <option value="WA">WA</option>
      </select>
	  </TD>
  </TR>  
	  </table> 
	</td>
  </tr>
  <script language="javascript"> postaladdressrequired();</script>  
  <TR >
    <TD STYLE=padding:0 HEIGHT=1 COLSPAN="2"></TD>
  </TR>
  <TR >
    <TD>Home Phone</TD>
    <TD>
	   <select id="homephone_prefix" name="homephone_prefix" class="required" title="Home Phone Prefix">
	    <option value="" selected></option>
		<option value="02" >(02)</option>
		<option value="03" >(03)</option>
		<option value="04" >(04)</option>
		<option value="07" >(07)</option>
		<option value="08" >(08)</option>
		</select>		
	<INPUT maxlength="25" style="width:25%;" NAME="homephoneno" id="homephoneno" TYPE="TEXT" VALUE="" class="required"><div class="requirediconcaption" width="10" style="display:inline;padding-left:4px;">*</div></TD>
  </TR>
  <TR >
    <TD>Mobile Phone</TD>
    <TD><INPUT maxlength="25" style="width:25%;" NAME="mobilephoneno" id="mobilephoneno" TYPE="TEXT" VALUE="" class="required" title="Mobile"><div class="requirediconcaption" width="10" style="display:inline;padding-left:4px;">*</div></TD>
  </TR>
  
  <tr> 	
  <td>Gender</td>
    <td align="center">
    	<table width="100%" border="0" cellpadding="0" cellspacing="0">
    		<tr>
    			 <td width="25%" align="right"><label for="rdoMale" >Male</label></td>
           <td width="25%" align="center"><input id="rdoMale" name="chkGender" type="radio" value="M" /></td>
           <td width="25%" align="right"><label for="rdoFemale" >Female</label></td>
           <td width="25%" align="center"><input  id="rdoFemale" name="chkGender" type="radio" value="F" /></td>
         </tr>
        </table>   
     </td>
  </tr>
  
  <TR >
    <TD>Date of Birth</TD>
    <TD><input type="text" name="dob" id="dob" style="width:25%;background-color:#f4f4f4;" class="required" title="Date of Birth" /><div class="requirediconcaption" width="10" style="display:inline;padding-left:4px;">*</div></TD>
  </TR>
  
  <tr> 	
  <td>Do you hold a driver's licence?</td>
    <td align="center">    	
    	<table width="100%" border="0" cellpadding="0" cellspacing="0">
    		<tr>
    			 <td width="25%" align="right"><label for="rdoDriversLicenceYes" >Yes</label></td>
           <td width="25%" align="center"><input id="rdoDriversLicenceYes" name="chkLicence" type="radio" value="T" /></td>
      	   <td width="25%" align="right"><label for="rdoDriversLicenceNo" >No</label></td>
           <td width="25%" align="center"><input  id="rdoDriversLicenceNo" name="chkLicence" type="radio" value="F" /></td>
        </tr>
       </table>    
     </td>
  </tr>
  
  <tr> 	
  <td>Do you have your own car?</td>
    <td align="center">
    	<table width="100%" border="0" cellpadding="0" cellspacing="0">
    		<tr>
    			 <td width="25%" align="right"><label for="rdoOwnCarYes" >Yes</label></td>
        	 <td width="25%" align="center"><input id="rdoOwnCarYes" name="chkOwnCar" type="radio" value="T" /></td>
      		 <td width="25%" align="right"><label for="rdoOwnCarNo" >No</label></td>
           <td width="25%" align="center"><input  id="rdoOwnCarNo" name="chkOwnCar" type="radio" value="F" /></td>
        </tr>
       </table>   
     </td>
  </tr>
  
  <tr> 	
  <td>Are you Aboriginal or Torres Strait Islander?</td>
    <td align="center">
    	<table width="100%" border="0" cellpadding="0" cellspacing="0">
    		<tr>
    			 <td width="25%" align="right"><label for="rdoATSIYes" >Yes</label></td>
           <td width="25%" align="center"><input id="rdoATSIYes" name="chkATSI" type="radio" value="T" /></td>
      		 <td width="25%" align="right"><label for="rdoATSINo" >No</label></td>
           <td width="25%" align="center"><input  id="rdoATSINo" name="chkATSI" type="radio" value="F" /></td>
        </tr>
       </table>    
     </td>
  </tr>    
    
  <tr>
    <td colspan="2" height="1"></td>
  </tr>
  <tr>
    <td class="profilecaption" colspan="2">Type of position interested in</td>
  </tr>
  
  <tr id="tblRowPrevTraineeship">
    <td colspan="2" height="1"></td>
  </tr>
  <TR >
    <TD STYLE=padding:0 HEIGHT=1 COLSPAN="2"></TD>
  </TR>
  

  <tr>
    <td colspan="2" align="center">Please select the option that you are most interested in, ensuring that you select an option from each line</td>
 </tr>	
  <tr>   
	<td colspan="2">
    	<table width="100%" border="0" cellpadding="10" cellspacing="0">
    		<tr>
    			 <td width="25%" align="right"><label for="rdoApprenticeship" >Apprenticeship</label></td>
           <td width="5%" align="left"><input id="rdoApprenticeship" name="chkApprenticeship" type="radio" value="A" /></td>
      		 <td width="25%" align="right"><label for="rdoTraineeship" >Traineeship</label></td>
           <td width="45%" align="left"><input  id="rdoTraineeship" name="chkApprenticeship" type="radio" value="T" /></td>
		   
        </tr>
       </table>        				
    	</td>    
  </tr>
  <TR >
    <td colspan="2">
    	<table width="100%" border="0" cellpadding="10" cellspacing="0">
    		<tr>
    			 <td width="25%" align="right"><label for="rdoFullTime" >Full Time</label></td>
           <td width="5%" align="left"><input id="rdoFullTime" name="chkEmploymentType" type="radio" value="F" /></td>
      		 <td width="25%" align="right"><label for="rdoPartTime" >Part Time</label></td>
           <td width="5%" align="left"><input  id="rdoPartTime" name="chkEmploymentType" type="radio" value="P" /></td>
		   <td width="35%" align="right"><label for="rdoSB" >Australian School Based Apprenticeship</label></td>
           <td width="5%" align="left"><input  id="rdoSB" name="chkEmploymentType" type="radio" value="S" /></td>
           
        </tr>
       </table>        				
    	</td>    
  </TR>
  
  
  
  <tr>
    <td class="profilecaption" colspan="2">How did you hear about us?</td>
  </tr>
  
  <tr>
    <td colspan="2" height="1"></td>
  </tr>
  
  <tr>
    <td>How did you hear about us?</td>
    <td><SELECT id="heardaboutusfrom" NAME="heardaboutusfrom" class="required" title="Heard About Us From"><OPTION selected VALUE="">(Select From List)</OPTION><OPTION VALUE="2"  >Advertiser Newspaper</OPTION><OPTION VALUE="13"  >Australian Apprenticeships</OPTION><OPTION VALUE="4"  >Australian Job Search</OPTION><OPTION VALUE="1"  >Centrelink</OPTION><OPTION VALUE="12"  >Employment Agency</OPTION><OPTION VALUE="10"  >Expo</OPTION><OPTION VALUE="17"  >Gumtree</OPTION><OPTION VALUE="5"  >Host Company</OPTION><OPTION VALUE="ZZZ"  >OTHER</OPTION><OPTION VALUE="8"  >Pre Voc Course</OPTION><OPTION VALUE="9"  >School</OPTION><OPTION VALUE="3"  >School Careers Day</OPTION><OPTION VALUE="11"  >TAFE</OPTION><OPTION VALUE="15"  >Web Search Engine</OPTION><OPTION VALUE="6"  >Web Site</OPTION><OPTION VALUE="7"  >Word of mouth</OPTION><OPTION VALUE="14"  >Yellow Pages</OPTION></SELECT><div class="requirediconcaption" width="10" style="display:inline;padding-left:4px;">*</div></td>
  </tr>
  
  <tr>
    <td align="right" valign="top">If Other:</td>
    <td><input style="margin-bottom:10px;width:90%" type="text" id="otherhauf" name="otherhauf" maxlength="100" size="37"  /></td>
  </tr>        

  <tr>
    <td class="profilecaption" colspan="2">EDUCATION</td>
  </tr>
  <tr>
    <td colspan="2" height="1"></td>
  </tr>
  <tr>
    <td colspan="2" height="1"></td>
  </tr>
  <tr>
    <td><script language="javascript">
        function currentlyAttendingSchoolChanged() 
		{
					 
			var chkYes = true; // default
        
        	if (document.getElementById("chkCurrentlyAttendingSchoolYes").checked == false)
            	chkYes = false;
          		 
			document.getElementById('tblRowCurrentYear').style.display = (chkYes == true ? "" : "none");
			document.getElementById('tblRowHighestSchoolYear1').style.display = (chkYes != true ? "" : "none");
			document.getElementById('tblRowHighestSchoolYear2').style.display = (chkYes != true ? "" : "none");
			document.getElementById('tblRowHighestSchoolYear3').style.display = (chkYes != true ? "" : "none");		
			document.getElementById('tblRowHighestSchoolYear4').style.display = (chkYes != true ? "" : "none");				
		}
		</script>
      Are you currently attending school?</td>
    <td><label >
        <input id="chkCurrentlyAttendingSchoolYes" name="chkCurrentlyAttendingSchool" 
                    type="radio" value="T" onclick="currentlyAttendingSchoolChanged()" />
        yes</label>
      <label id="Label2">
        <input onclick="currentlyAttendingSchoolChanged()" checked="checked" name="chkCurrentlyAttendingSchool" type="radio" value="F" />
        no</label></td>
  </tr>
  <tr>
    <td colspan="2" height="1"></td>
  </tr>
  <tr id="tblRowCurrentYear">
    <td>What grade are you currently in?</td>
    <td>      
		<SELECT id="currentschoolyear" NAME="currentschoolyear">
        <OPTION selected VALUE="">(Year)</OPTION>
    	<OPTION  VALUE="Year 8">Year 8</OPTION>
      	<OPTION  VALUE="Year 9">Year 9</OPTION>
      	<OPTION  VALUE="Year 10">Year 10</OPTION>
      	<OPTION  VALUE="Year 11">Year 11</OPTION>
      	<OPTION  VALUE="Year 12">Year 12</OPTION>
      	<OPTION  VALUE="Tafe">Tafe</OPTION>
        <OPTION  VALUE="University">University</OPTION>
      </SELECT> 
	  </td>
  </tr>
  <tr id="tblRowHighestSchoolYear1">
    <td>What was your highest grade completed?</td>
    <td>
      	<SELECT id="highestschoolyear" name="highestschoolyear">
        <OPTION selected VALUE="">(Year)</OPTION>
    	<OPTION  VALUE="Year 8">Year 8</OPTION>
      	<OPTION  VALUE="Year 9">Year 9</OPTION>
      	<OPTION  VALUE="Year 10">Year 10</OPTION>
      	<OPTION  VALUE="Year 11">Year 11</OPTION>
      	<OPTION  VALUE="Year 12">Year 12</OPTION>
      	<OPTION  VALUE="Tafe Certificate">Tafe Certificate</OPTION>
      	<OPTION  VALUE="Bachelor Degree">Bachelor Degree</OPTION>
	 	</SELECT>
	  </td>
  </tr>
  
  <tr id="tblRowHighestSchoolYear2">
    <td colspan="2" height="1"></td>
  </tr>
  <tr id="tblRowHighestSchoolYear3">
    <td>What year did you complete that grade?</td>
    <td><SELECT id="schoolcompletedyear" NAME="schoolcompletedyear">
        <option value="">(Year)</option>
        <option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option>      </select></td>
  </tr>
  <tr id="tblRowHighestSchoolYear4">
    <td colspan="2" height="1"></td>
  </tr>
  <tr>
    <td>Name of School</td>
    <td><input type="text" id="schoolname" name="schoolname" maxlength="100" size="37"  /></td>
  </tr>
  
  <tr>
    <td>Subjects</td>
    <td><textarea id="schoolsubjects" name="schoolsubjects" rows="3" style="width:90%;resize:none;"></textarea></td>
  </tr>
  
  <tr>
    <td colspan="2" height="1"></td>
  </tr>
  <script language="javascript"> currentlyAttendingSchoolChanged(); // Fire hiding/showing of school fields on initial page load</script>
  
  <tr>
    <td colspan="2" height="1"></td>
  </tr>
  <tr>
    <td class="profilecaption" colspan="2">Particulars of any Job Experience / Work Experience</td>
  </tr>
  
  <TR>
    <td>1. Name of Employer</td>
    <td><input type="text" id="emphistemployer1" name="emphistemployer1" maxlength="100" size="37" style="margin-top:10px;width:90%;"  /></td>
  </tr>
  
  <tr>
    <td>Duties</td>
    <td><textarea id="emphistduties1" name="emphistduties1" rows="3" style="width:90%;resize:none;"></textarea></td>
  </tr>
  
  <tr>
    <td>Position</td>
    <td><input type="text" id="emphistposition1" name="emphistposition1" maxlength="30" size="37" style="margin-top:10px;width:90%;" /></td>
  </tr>
  
  <TR>
    <TD>Commencement Date</TD>
    <TD><input type="text" name="emphiststartdate1" id="emphiststartdate1" readonly="readonly" style="width:25%;background-color:#f4f4f4;"/> eg: 25/08/2011</TD>
  </TR>
  
  <TR style="border-bottom:solid 1px #C0C0C0;margin-bottom:1em!important;padding-bottom:2em!important;">
    <TD>Finish Date</TD>
    <TD><input type="text" name="emphistenddate1" id="emphistenddate1" readonly="readonly" style="width:25%;background-color:#f4f4f4;"/></TD>
  </TR>
  
  <tr>
    <td>2. Name of Employer</td>
    <td><input type="text" id="emphistemployer2" name="emphistemployer2" maxlength="100" size="37" style="margin-top:10px;width:90%;"  /></td>
  </tr>
  
  <tr>
    <td>Duties</td>
    <td><textarea id="emphistduties2" name="emphistduties2" rows="3" style="width:90%;resize:none;"></textarea></td>
  </tr>
  
  <tr>
    <td>Position</td>
    <td><input type="text" id="emphistposition2" name="emphistposition2" maxlength="30" size="37" style="margin-top:10px;width:90%;" /></td>
  </tr>
  
  <TR>
    <TD>Commencement Date</TD>
    <TD><input type="text" name="emphiststartdate2" id="emphiststartdate2" readonly="readonly" style="width:25%;background-color:#f4f4f4;"/> eg: 25/08/2011</TD>
  </TR>
  
  <TR style="border-bottom:solid 1px #C0C0C0;">
    <TD>Finish Date</TD>
    <TD><input type="text" name="emphistenddate2" id="emphistenddate2" readonly="readonly" style="width:25%;background-color:#f4f4f4;"/></TD>
  </TR>
<tr>
    <td>3. Name of Employer</td>
    <td><input type="text" id="emphistemployer3" name="emphistemployer3" maxlength="100" size="37" style="margin-top:10px;width:90%;"  /></td>
  </tr>
  
  <tr>
    <td>Duties</td>
    <td><textarea id="emphistduties3" name="emphistduties3" rows="3" style="width:90%;resize:none;"></textarea></td>
  </tr>
  
  <tr>
    <td>Position</td>
    <td><input type="text" id="emphistposition3" name="emphistposition3" maxlength="30" size="37" style="margin-top:10px;width:90%;" /></td>
  </tr>
  
  <TR>
    <TD>Commencement Date</TD>
    <TD><input type="text" name="emphiststartdate3" id="emphiststartdate3" readonly="readonly" style="width:25%;background-color:#f4f4f4;"/> eg: 25/08/2011</TD>
  </TR>
  
  <TR>
    <TD>Finish Date</TD>
    <TD><input type="text" name="emphistenddate3" id="emphistenddate3" readonly="readonly" style="width:25%;background-color:#f4f4f4;"/></TD>
  </TR>  
  
  <tr>
    <td class="profilecaption" colspan="2">Have you completed any other study or qualifications?
<div style="text-transform:none">(e.g. Certificates, Diplomas, Trade Certificates etc)</div></td>
  </tr>
  <tr>
    <td colspan="2" height="1"></td>
  </tr>
  <tr>
    <td colspan="2" align="left" style="padding-bottom:7px;">
    	<table width="100%" border="0" cellpadding="5" cellspacing="0" id="qualifications" name="qualifications">
    	<tr bgcolor="#f4f4f4" style="height:30px;">
    		<td width="5%" align="right">&nbsp;</td>
    		<td width="40%">Qualification</td>
    		<td width="25%" align="right">Date Started</td>
    		<td width="25%" align="right">Date Finished</td>
    		<td width="5%" align="center">&nbsp;</td>
    	</tr>	
    		
    	<tr style="padding-top:10px;">
    		<td width="5%" align="right">1.</td>
    		<td width="40%">
		<select style="font-size:0.9em;width:90%;" name="qualificationlist_1" id="qualificationlist_1">
    <OPTION selected VALUE="">(Select From List)</OPTION><OPTION VALUE="383"  >Automotive - Cert 1</OPTION><OPTION VALUE="384"  >Automotive - Cert 2</OPTION><OPTION VALUE="385"  >Automotive - Cert 3</OPTION><OPTION VALUE="386"  >Building and Construction - Cert 1</OPTION><OPTION VALUE="387"  >Building and Construction - Cert 2</OPTION><OPTION VALUE="388"  >Building and Construction - Cert 3</OPTION><OPTION VALUE="380"  >Electrotechnology - Cert 1</OPTION><OPTION VALUE="381"  >Electrotechnology - Cert 2</OPTION><OPTION VALUE="382"  >Electrotechnology - Cert 3</OPTION><OPTION VALUE="376"  >Engineering - Cert 1</OPTION><OPTION VALUE="377"  >Engineering - Cert 2</OPTION><OPTION VALUE="378"  >Engineering - Cert 3</OPTION><OPTION VALUE="391"  >Other - Advanced Diploma</OPTION><OPTION VALUE="393"  >Other - Cert 1</OPTION><OPTION VALUE="394"  >Other - Cert 2</OPTION><OPTION VALUE="395"  >Other - Cert 3</OPTION><OPTION VALUE="389"  >Other - Certificate 4</OPTION><OPTION VALUE="392"  >Other - Degree</OPTION><OPTION VALUE="390"  >Other - Diploma</OPTION></select>    
	</td>
	<td width="25%" align="right"><input type="text" name="qualification_1_startdate" id="qualification_1_startdate" class="qualificationdate" readonly="readonly" style="width:40%;background-color:#f4f4f4;" /></td>
	<td width="25%" align="right"><input type="text" name="qualification_1_enddate" id="qualification_1_enddate" class="qualificationdate" readonly="readonly" style="width:40%;background-color:#f4f4f4;" /></td>
	<td width="5%" align="center"><input type="button" name="qualification_1_add" id="qualification_1_add" value="Add" onclick="javascript:addqualline();" /></td>
 </tr>
</table>
</td>
</tr>

<tr>
   <td colspan="2" height="1"></td>
</tr>
<tr>
    <td class="profilecaption" colspan="2">Training Contract ID</td>
</tr>
<tr>
    <td colspan="2">
    	<table width="100%" border="0" cellpadding="0" cellspacing="0" id="trainingcontract" name="trainingcontract">
    		<tr>
    			<td width="70%">
    	<script language="javascript">
		
        function contractidchanged() 
		{
					 
			var chkYes = true; // default
        
        	if (document.getElementById("chkTrainingContactIDYes").checked == false)
            	chkYes = false;
          		 
			document.getElementById('TrainingContractNumber').style.display = (chkYes == true ? "" : "none");			
		}
		
		</script>
      Have you previously had a Training Contract ID for an Apprenticeship /Traineeship?</td>
    <td width="30%" align="center">    	
    	<table width="100%" border="0" cellpadding="0" cellspacing="0">
    		<tr>
    			 <td width="25%" align="right"><label for="chkTrainingContactIDYes" >Yes</label></td>
           <td width="25%" align="center"><input id="chkTrainingContactIDYes" name="chkTrainingContactID" type="radio" value="T" onclick="contractidchanged()" /></td>
      	   <td width="25%" align="right"><label for="chkTrainingContactIDNo" >No</label></td>
           <td width="25%" align="center"><input  id="chkTrainingContactIDNo" name="chkTrainingContactID" type="radio" value="F" onclick="contractidchanged()" /></td>
        </tr>
       </table>             	
     </td>
   </tr>
  </table>
  </td>
  </tr>
  
  
  <tr id="TrainingContractNumber">
   <td colspan="2">
    <table cellpadding="5" cellspacing="5" border="0" width="100%">
	 <tr>
      <td width="50%" style="padding-left:50px;">Please enter the Contract ID Number:</td>
      <td width="50%" ><input type="text" id="contractid" name="contractid" maxlength="50" size="37"     style="width:70%;" /></td>
     </tr>   
   </table>
  </td>
  </tr>
  
  
  		
  <script language="javascript"> contractidchanged(); // Fire hiding/showing of training contract id fields on initial page load</script>  
  
   <tr>
    <td colspan="2" height="1"></td>
  </tr> 
   
  
  <tr>
    <td class="profilecaption" colspan="2">Do you have any additional licences?</td>
  </tr>
  <tr>
    <td colspan="2" height="1"></td>
  </tr>
  <tr>
    <td colspan="2" align="left" style="padding-bottom:7px;">
    	<table width="100%" border="0" cellpadding="5" cellspacing="0" id="licences" name="licences">
    	<tr bgcolor="#f4f4f4" style="height:30px;">
    		<td width="5%" align="right">&nbsp;</td>
    		<td width="30%">Licence Name</td>
    		<td width="20%" align="center">Licence Number</td>
			<td width="20%" align="right">Completed Date</td>
    		<td width="20%" align="right">Expiry Date</td>
    		<td width="5%" align="center">&nbsp;</td>
    	</tr>	
    		
    	<tr style="padding-top:10px;">
    		<td width="5%" align="right">1.</td>
    		<td width="30%">
		<select style="font-size:0.9em;width:90%;" name="licencelist_1" id="licencelist_1">
    <OPTION selected VALUE="">(Select From List)</OPTION><OPTION VALUE="402"  >Car</OPTION><OPTION VALUE="404"  >Cert II</OPTION><OPTION VALUE="405"  >Cert III</OPTION><OPTION VALUE="401"  >EWP</OPTION><OPTION VALUE="400"  >Forklift</OPTION><OPTION VALUE="403"  >LHV</OPTION></select>    
	</td>
	<td width="20%" align="center"><input type="text" id="licence_1_number" name="licence_1_number" maxlength="50" size="37"  style="width:90%;" /></td>
	<td width="20%" align="right"><input type="text" name="licence_1_startdate" id="licence_1_startdate" class="qualificationdate" readonly="readonly" style="width:50%;background-color:#f4f4f4;" /></td>
	<td width="20%" align="right"><input type="text" name="licence_1_enddate" id="licence_1_enddate" class="qualificationdate" readonly="readonly" style="width:50%;background-color:#f4f4f4;" /></td>
	<td width="5%" align="center"><input type="button" name="licence_1_add" id="licence_1_add" value="Add" onclick="javascript:addlicenceline();" /></td>
 </tr>
</table>
</td>
</tr>
<script language="javascript">
 function validatePreference(theindex,thevalue)
 {
  i=0;
  if(thevalue==-1) return true;
  for(i=0;i<theindex;i++)
  {
    
	var thepreference = document.getElementById('preference'+i);
	if(thepreference==null) continue;
	if(thepreference.selectedIndex==0)
	{
	 originalpreference = document.getElementById('preference'+theindex);
	 if(originalpreference!=null) originalpreference.selectedIndex = 0;
	 return showPopupAndReturnFalse('Please select a valid preference for Preference ' + i + ' before continuing.');
	 
	}  
  }
  return true;
 }
</script>
<TR >
    <TD STYLE=padding:0 HEIGHT=1 COLSPAN="2"></TD>
  </TR>
  <tr>
    <td colspan="2" height="1"></td>
  </tr>
  <tr>
    <td class="profilecaption" colspan="2">Type of position interested in</td>
  </tr>
  
  <tr>
    <td colspan="2" height="1"></td>
  </tr>  
  <tr>
    <td>Please enter your main preference</td>
    <td><SELECT style="background-color:#FFE1DF" id="preference1" NAME="preference1" class="required"><OPTION selected VALUE="">(Please Select Preference)</OPTION><OPTION VALUE="1"  >Automotive - Diesel Mechanic</OPTION><OPTION VALUE="2"  >Automotive - Mechanic</OPTION><OPTION VALUE="16"  >Building & Construction </OPTION><OPTION VALUE="3"  >Business</OPTION><OPTION VALUE="4"  >Electrician</OPTION><OPTION VALUE="5"  >Electronics</OPTION><OPTION VALUE="6"  >Fabrication - Heavy</OPTION><OPTION VALUE="7"  >Fabrication - Light</OPTION><OPTION VALUE="8"  >Information Technology</OPTION><OPTION VALUE="9"  >Mechanical - Fitter & Turner</OPTION><OPTION VALUE="10"  >Mechanical - Maintenance</OPTION><OPTION VALUE="11"  >Mechanical - Toolmaking/CNC</OPTION><OPTION VALUE="14"  >Other - Call 1300 761 944</OPTION><OPTION VALUE="12"  >Refrigeration/AirConditioning</OPTION><OPTION VALUE="17"  >Telecommunications</OPTION><OPTION VALUE="13"  >Warehousing</OPTION></SELECT> 		
<div class="requirediconcaption" width="10" style="display:inline;padding-left:4px;">*</div></td>
  </tr> 
  <tr>
    <td valign="top">
      <strong>
      <br />
      Only</strong> enter additional preferences here if you are willing to go ahead in these preferences if successful </td>
    <td><br><SELECT style="margin-top:10px;margin-bottom:10px" id="preference2" NAME="preference2" onchange="javascript:validatePreference(2,this.value);"><OPTION selected VALUE="">(Optional Preference 2)</OPTION><OPTION VALUE="1"  >Automotive - Diesel Mechanic</OPTION><OPTION VALUE="2"  >Automotive - Mechanic</OPTION><OPTION VALUE="16"  >Building & Construction </OPTION><OPTION VALUE="3"  >Business</OPTION><OPTION VALUE="4"  >Electrician</OPTION><OPTION VALUE="5"  >Electronics</OPTION><OPTION VALUE="6"  >Fabrication - Heavy</OPTION><OPTION VALUE="7"  >Fabrication - Light</OPTION><OPTION VALUE="8"  >Information Technology</OPTION><OPTION VALUE="9"  >Mechanical - Fitter & Turner</OPTION><OPTION VALUE="10"  >Mechanical - Maintenance</OPTION><OPTION VALUE="11"  >Mechanical - Toolmaking/CNC</OPTION><OPTION VALUE="14"  >Other - Call 1300 761 944</OPTION><OPTION VALUE="12"  >Refrigeration/AirConditioning</OPTION><OPTION VALUE="17"  >Telecommunications</OPTION><OPTION VALUE="13"  >Warehousing</OPTION></SELECT><br><SELECT style="margin-bottom:10px" id="preference3" NAME="preference3" onchange="javascript:validatePreference(3,this.value);"><OPTION selected VALUE="">(Optional Preference 3)</OPTION><OPTION VALUE="1"  >Automotive - Diesel Mechanic</OPTION><OPTION VALUE="2"  >Automotive - Mechanic</OPTION><OPTION VALUE="16"  >Building & Construction </OPTION><OPTION VALUE="3"  >Business</OPTION><OPTION VALUE="4"  >Electrician</OPTION><OPTION VALUE="5"  >Electronics</OPTION><OPTION VALUE="6"  >Fabrication - Heavy</OPTION><OPTION VALUE="7"  >Fabrication - Light</OPTION><OPTION VALUE="8"  >Information Technology</OPTION><OPTION VALUE="9"  >Mechanical - Fitter & Turner</OPTION><OPTION VALUE="10"  >Mechanical - Maintenance</OPTION><OPTION VALUE="11"  >Mechanical - Toolmaking/CNC</OPTION><OPTION VALUE="14"  >Other - Call 1300 761 944</OPTION><OPTION VALUE="12"  >Refrigeration/AirConditioning</OPTION><OPTION VALUE="17"  >Telecommunications</OPTION><OPTION VALUE="13"  >Warehousing</OPTION></SELECT></td>
  </tr>
  <tr style="display:none;">
    <td align="right" valign="top" style="padding-right:20px;">Other preference</td>
    <td><input style="margin-bottom:10px;width:90%;display:none;" type="text" id="otherpreference" name="otherpreference" maxlength="100" size="37"  /></td>
  </tr>

  
  
  
  <tr>
    <td colspan="2" height="1"></td>
  </tr>
  
  
  
  <tr>
    <td class="profilecaption" colspan="2"> Attach your Resume</td>
  </tr>
  <tr>
    <td colspan="2" height="1"></td>
  </tr>
  <tr>
    <td >Attach your Resume <br />
      (Required):</td>
    <td ><input TYPE="FILE" id="resumefile" name="resumefile"  style="background-color:#f4f4f4;width:60%;" />
	<div class="requirediconcaption" width="10" style="display:inline;padding-left:4px;">*</div>
      <br />
      <font style="font-size: 0.9em">(accepted files: doc, docx, rtf, pdf - 1MB max size)</font></td>
  </tr>
  
   <tr>
    <td colspan="2" height="1"></td>
  </tr>
  <tr>
    <td class="profilecaption" colspan="2"> Attach your Cover Letter</td>
  </tr>
  <tr>
    <td colspan="2" height="1"></td>
  </tr>
  <tr>
    <td >Cover Letter:</td>
    <td ><input TYPE="FILE" id="coverletter" name="coverletter"  style="background-color:#f4f4f4;width:60%;" />
      <br />
      <font style="font-size: 0.9em">(accepted files: doc, docx, rtf, pdf - 1MB max size)</font></td>
  </tr>
  <tr>
    <TD align="center" COLSPAN="2"><input type="button" id="Page2Next" name="Page2Next" Value="Next >>" onclick="javascript:validateSignupForm();" /></TD>
    
  </tr>  
</table>

<div id="dialog-confirm" title="Declaration" style="display: none;font-family: Verdana, Arial, Helvetica, sans-serif;
font-size: 12px;">
	<p style="font-weight: bold">I UNDERSTAND THAT AS A CONDITION OF MAKING THIS APPLICATION :     </p>
    <ul>
      <li>I  may be required to attend and undertake pre-selection testing.</li>
      <li>I may upon completion of the interview process be required to attend a pre-apprenticeship medical examination and duplicates being made available to AiGTS.</li>
    </ul>
   <input type="checkbox" name="declaration" id="declaration" class="required"/>       
</div>
</form>
<div id="loadingpage" name="loadingpage" class="loadingpage" title="" style="display:none;"><p align="center">Please wait while your request is being processed...</p>
						<br/><br/>
					<div width="100%" align="center"><img align="center" src="/images/loadingeffect.gif" alt="Loading" title="loading" /> </div>
</div>	
<!-- END MAIN PAGE CONTENT -->
      <!-- end main content -->
			
</div>
<div id="subfooter">

<div id="socialpanel">
  <p><img src="http://www.aigts.com.au/images/followus.gif" width="237" height="41"></p>
  <br />
  <p style="text-align:center;"><a href="http://www.youtube.com/user/AiGTS1" title="AiGTS YouTube Channel" target="_blank"><img src="http://www.aigts.com.au/images/youtube_button.jpg" width="180" height="55" border="0"></a></p>
  <!--p style="text-align:center;"><img src="http://www.aigts.com.au/images/twitter.gif" width="160" height="45" style="text-align:center;"></p-->
  <!--p style="text-align:center;"><img src="http://www.aigts.com.au/images/facebook.gif" width="160" height="55"></p-->
</div>

<div id="jobpanel">
  <p><img src="http://www.aigts.com.au/images/currentvacancies.gif" width="713" height="41"></p>
  <p><table width="100%" border="0" cellspacing="0" cellpadding="0" id="incjobs">
    <tr>
    <td colspan="2"><strong>Filter by State:</strong><br />
      <span class="small"><strong><a href="joblist.php?state=nsw">NSW</a> | <a href="joblist.php?state=vic">VIC</a> | <a href="joblist.php?state=qld">QLD</a> | <a href="joblist.php?state=act">ACT</a> | <a href="joblist.php?state=sa">SA</a> | <a href="joblist.php?state=wa">WA</a> | <a href="joblist.php?state=tas">TAS</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;There are currently <div id="totaljobcount" name="totaljobcount" style="display:inline;"></div>&nbsp;jobs advertised.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong> <a href="joblist.php"><strong>View and Apply Now</strong></a></span></td>
  </tr>
  <tr>  	
    
        
<td align="left" valign="top"><div class="joblist"><img src="http://www.aigts.com.au/images/orangedot.gif" width="6" height="6" align="baseline" /> <a href="jobdetails.php?ID=496"  target="_parent">Certificate III Retail Operations Traineeship - NSW</a></div>
<div class="joblist"><img src="http://www.aigts.com.au/images/orangedot.gif" width="6" height="6" align="baseline" /> <a href="jobdetails.php?ID=479"  target="_parent">Office Trainee - NSW</a></div>
<div class="joblist"><img src="http://www.aigts.com.au/images/orangedot.gif" width="6" height="6" align="baseline" /> <a href="jobdetails.php?ID=491"  target="_parent">Admin Traineeships - expressions of interest - VIC</a></div>
<div class="joblist"><img src="http://www.aigts.com.au/images/orangedot.gif" width="6" height="6" align="baseline" /> <a href="jobdetails.php?ID=489"  target="_parent">Maintenance Fitter - TAS</a></div>
<div class="joblist"><img src="http://www.aigts.com.au/images/orangedot.gif" width="6" height="6" align="baseline" /> <a href="jobdetails.php?ID=484"  target="_parent">Apprentice Mechanical Fitter - Bedford - SA</a></div>
<div class="joblist"><img src="http://www.aigts.com.au/images/orangedot.gif" width="6" height="6" align="baseline" /> <a href="jobdetails.php?ID=448"  target="_parent">Trainee Junior Sales Representative - NSW</a></div>
</td><td>
<div class="joblist"><img src="http://www.aigts.com.au/images/orangedot.gif" width="6" height="6" align="baseline" /> <a href="jobdetails.php?ID=464"  target="_parent">Cert 3 Fabrication   - SA</a></div>
<div class="joblist"><img src="http://www.aigts.com.au/images/orangedot.gif" width="6" height="6" align="baseline" /> <a href="jobdetails.php?ID=453"  target="_parent">Cert III Apprenticeship - Automotive Body Building - VIC</a></div>
<div class="joblist"><img src="http://www.aigts.com.au/images/orangedot.gif" width="6" height="6" align="baseline" /> <a href="jobdetails.php?ID=423"  target="_parent">Engineering Apprenticeships - VIC</a></div>
</td>
<script>document.getElementById('totaljobcount').innerHTML = '9';</script>
				





        
        
  </tr>
  <tr>
  <td align="right" colspan="2" class="small">
   <a href="joblist.php" style="padding-right:120px;"><strong>View All Job Vacancies</strong></a>
   </td></tr>
  
</table>
</div>

</div>

</div>
<div id="footer">

<table width="1000" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center"><img src="http://www.aigts.com.au/images/footer_qgt.gif" width="74" height="63" /></td>
    <td align="center"><img src="http://www.aigts.com.au/images/footer_mas.gif" width="121" height="63" /></td>
    <td align="center"><img src="http://www.aigts.com.au/images/footer_ausapp.gif" width="148" height="63" /></td>
    <td rowspan="2" align="right"><img src="http://www.aigts.com.au/images/footer_phone.gif" width="417" height="152" /></td>
  </tr>
  <tr>
    <td colspan="3">&copy; 2012 - Australian Industry Group Training Services<br />
    <a href="http://www.aigts.com.au/index.php">Home</a> | <a href="http://www.aigts.com.au/index.php?id=229">About AiGTS</a> | <a href="http://www.aigts.com.au/index.php?id=4">Hosting an AiGTS Apprentice</a> | <a href="http://www.aigts.com.au/index.php?id=7">Employing an Apprentice Direct</a> | <a href="http://www.aigts.com.au/index.php?id=3">Looking for an Apprenticeship</a> | <a href="index.php?id=8">Training Courses</a> | <a href="index.php?id=9">AiGTS Policies</a> | <a href="index.php?id=6">Contact Us</a></td>
  </tr>
</table>

</div>



</div>

</body>


<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-715035-1");
pageTracker._trackPageview();
} catch(err) {}
</script>
</html>
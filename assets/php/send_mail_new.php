<?php

function died($error) {
    // your error code can go here
    echo "We are very sorry, but there were error(s) found with the form you submitted. ";
    echo "These errors appear below.<br /><br />";
    echo $error."<br /><br />";
    echo "Please go back to basics and fix these errors.<br /><br />";
    exit();
}
<!-- Note :
   - You can modify the font style and form style to suit your website.
   - Code lines with comments ���Do not remove this code���  are required for the form to work properly, make sure that you do not remove these lines of code.
   - The Mandatory check script can modified as to suit your business needs.
   - It is important that you test the modified form before going live.-->
<div id='crmWebToEntityForm' style='width:600px;margin:auto;'>
   <META HTTP-EQUIV ='content-type' CONTENT='text/html;charset=UTF-8'>
   <form action='https://crm.zoho.com/crm/WebToLeadForm' name=WebToLeads3978741000000251006 method='POST' onSubmit='javascript:document.charset="UTF-8"; return checkMandatory3978741000000251006()' accept-charset='UTF-8'>
 <input type='text' style='display:none;' name='xnQsjsdp' value='409f5f5f57ecb0e567902c2da462f9f3bdebdf45daecdbff6851ba9bb4bbd4a6'></input>
 <input type='hidden' name='zc_gad' id='zc_gad' value=''></input>
 <input type='text' style='display:none;' name='xmIwtLD' value='c9f44193f145f021ad7042be6dbe76eb2298d3513d0329ec8c52da14e67ca522'></input>
 <input type='text'  style='display:none;' name='actionType' value='TGVhZHM='></input>
 <input type='text' style='display:none;' name='returnURL' value='https://www.equilibriumict.com' > </input><br></br>
	 <!-- Do not remove this code. -->
	<style>
		#crmWebToEntityForm tr , #crmWebToEntityForm td {
			padding:6px;
			border-spacing:0px;
			border-width:0px;
			}
	</style>
	<table style='width:600px;background-color:#ffffff;background-color:white;color:black'><tr><td colspan='2' align='left' style='color:black;font-family:Arial;font-size:14px;word-break: break-word;'><strong>Webform1</strong></td></tr> <br></br><tr><td  style='word-break: break-word;text-align:left;font-size:12px;font-family:Arial;width:30%;'>Company</td><td style='width:40%;' ><input type='text' style='width:100%;box-sizing:border-box;'  maxlength='100' name='Company' /></td><td style='width:30%;'></td></tr><tr><td  style='word-break: break-word;text-align:left;font-size:12px;font-family:Arial;width:30%;'>Last Name<span style='color:red;'>*</span></td><td style='width:40%;' ><input type='text' style='width:100%;box-sizing:border-box;'  maxlength='80' name='Last Name' /></td><td style='width:30%;'></td></tr>

	<tr><td colspan='2' style='text-align:center; padding-top:15px;font-size:12px;'>
		<input style='margin-right: 5px;cursor: pointer;font-size:12px;color:black' id='formsubmit' type='submit' value='Submit' ></input> <input type='reset' name='reset' style='cursor: pointer;font-size:12px;color:black' value='Reset' ></input> </td></tr></table>
	<script>
 	  var mndFileds=new Array('Last Name');
 	  var fldLangVal=new Array('Last Name');
		var name='';
		var email='';

 	  function checkMandatory3978741000000251006() {
		for(i=0;i<mndFileds.length;i++) {
		  var fieldObj=document.forms['WebToLeads3978741000000251006'][mndFileds[i]];
		  if(fieldObj) {
			if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length==0) {
			 if(fieldObj.type =='file')
				{
				 alert('Please select a file to upload.');
				 fieldObj.focus();
				 return false;
				}
			alert(fldLangVal[i] +' cannot be empty.');
   	   	  	  fieldObj.focus();
   	   	  	  return false;
			}  else if(fieldObj.nodeName=='SELECT') {
  	   	   	 if(fieldObj.options[fieldObj.selectedIndex].value=='-None-') {
				alert(fldLangVal[i] +' cannot be none.');
				fieldObj.focus();
				return false;
			   }
			} else if(fieldObj.type =='checkbox'){
 	 	 	 if(fieldObj.checked == false){
				alert('Please accept  '+fldLangVal[i]);
				fieldObj.focus();
				return false;
			   }
			 }
			 try {
			     if(fieldObj.name == 'Last Name') {
				name = fieldObj.value;
 	 	 	    }
			} catch (e) {}
		    }
		}
		document.getElementById('formsubmit').disabled=true;
	}
</script>
	</form>
</div>
}
catch (Exception $e)
{
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
?>
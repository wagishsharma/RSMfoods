function openCloseDiv(id)
 {  //alert(id);
   var stl=document.getElementById(id).style.display;
   if(stl=='none'){
   document.getElementById(id).style.display='inline';
   } else { document.getElementById(id).style.display='none';}
 }
function validateFormSeePrice(){var a=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;var d=ltrim($("#user_name").val());if(d.length<1){$("#user_name").css({color:"red"});$("#user_name").focus();return false}if(/^[a-zA-Z- ]*$/.test(d)==false){$("#userName").css({color:"red"});$("#userName").focus();return false}var c=ltrim($("#user_email").val());if(c.length<1){$("#user_email").css({color:"red"});$("#user_email").focus();return false}var c=ltrim($("#user_email").val());if(c.length<1){$("#user_email").css({color:"red"});$("#user_email").focus();return false}if(!(a.test($("#user_email").val()))){$("#user_email").css({color:"red"});$("#user_email").focus();return false}var b=ltrim($("#user_phone").val());if(b.length<1){$("#user_phone").css({color:"red"});$("#user_phone").focus();return false}if(b.length<10){$("#user_phone").css({color:"red"});$("#user_phone").focus();return false}}function validateFormData(){var a=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;var e=ltrim($("#reg_uname").val());if(e.length<1){$("#reg_uname").css({color:"red"});$("#reg_uname").focus();return false}if(/^[a-zA-Z- ]*$/.test(e)==false){$("#userName").css({color:"red"});$("#userName").focus();return false}var d=ltrim($("#reg_email").val());if(d.length<1){$("#reg_email").css({color:"red"});$("#reg_email").focus();return false}var d=ltrim($("#reg_email").val());if(d.length<1){$("#reg_email").css({color:"red"});$("#reg_email").focus();return false}if(!(a.test($("#reg_email").val()))){$("#reg_email").css({color:"red"});$("#reg_email").focus();return false}var c=ltrim($("#reg_phone").val());if(c.length<1){$("#reg_phone").css({color:"red"});$("#reg_phone").focus();return false}if(c.length<10){$("#reg_phone").css({color:"red"});$("#reg_phone").focus();return false}var b=ltrim($("#reg_country").val());if(b.length<1){$("#reg_country").css({color:"red"});$("#reg_country").focus();return false}var f=ltrim($("#captcha_code").val());if(f.length<1){$("#captcha_code").css({color:"red"});$("#captcha_code").focus();return false}}function getValidateRegForm(){var i=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;var j=ltrim($("#userName").val());if(j.length<1){$("#userName").css({color:"red"});$("#userName").focus();return false}if(/^[a-zA-Z- ]*$/.test(j)==false){$("#userName").css({color:"red"});$("#userName").focus();return false}var g=ltrim($("#email").val());if(g.length<1){$("#email").css({color:"red"});$("#email").focus();return false}var g=ltrim($("#email").val());if(g.length<1){$("#email").css({color:"red"});$("#email").focus();return false}if(!(i.test($("#email").val()))){$("#email").css({color:"red"});$("#email").focus();return false}var f=ltrim($("#crs_name").val());if(f.length<1){$("#crs_name").css({color:"red"});$("#crs_name").focus();return false}var h=ltrim($("#regAmount").val());if(h.length<1){$("#regAmount").css({color:"red"});$("#regAmount").focus();return false}var b=ltrim($("#mobile").val());if(b.length<1){$("#mobile").css({color:"red"});$("#mobile").focus();return false}if(b.length<10){$("#mobile").css({color:"red"});$("#mobile").focus();return false}var e=ltrim($("#Address").val());if(e.length<1){$("#Address").css({color:"red"});$("#Address").focus();return false}var d=ltrim($("#city").val());if(d.length<1){$("#city").css({color:"red"});$("#city").focus();return false}var a=ltrim($("#state").val());if(a.length<1){$("#state").css({color:"red"});$("#state").focus();return false}var c=ltrim($("#country").val());if(c.length<1){$("#country").css({color:"red"});$("#country").focus();return false}}

function getValidateEnqForm(){	
	var a=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
	var e=ltrim($("#userName").val());
	if(e.length<1){$("#userName").css({color:"red"});$("#userName").focus();return false}
	if(/^[a-zA-Z- ]*$/.test(e)==false){$("#userName").css({color:"red"});$("#userName").focus();return false}var c=ltrim($("#email").val());if(c.length<1){$("#email").css({color:"red"});$("#email").focus();return false}var c=ltrim($("#email").val());if(c.length<1){$("#email").css({color:"red"});$("#email").focus();return false}if(!(a.test($("#email").val()))){$("#email").css({color:"red"});$("#email").focus();return false}var b=$("#mobile").val();if(b.length<1){$("#mobile").css({color:"red"});$("#mobile").focus();return false}if(b.length<10){$("#mobile").css({color:"red"});$("#mobile").focus();return false}if(b!=""){if(!IsNumeric(b)){$("#mobile").css({color:"red"});$("#mobile").focus();return false}}
	
	var f=$("#crs_name").val();if(f.length<1){$("#crs_name").css({color:"red"});$("#crs_name").focus();return false}
	var ff=$("#enq_type").val();if(ff.length<1){$("#enq_type").css({color:"red"});$("#enq_type").focus();return false} 
	//alert(12111);
    var dm=$("#userMsg").val();
	if(dm.length>0)
	 {
	   //var iChars = "!@#$%^&*()+=-[]\\\';,./{}|\":?";
	 var iChars = "!@#$%^&*()+=-[]\\\';,~`/{}|\":?";
	  for (var i = 0; i < dm.length; i++) 
	   {		   
    	if (iChars.indexOf(dm.charAt(i)) != -1) 
		 {
    	   alert("The Message box has special characters. \nThese are not allowed.\n");
		   $("#userMsg").css({color:"red"});
		   $("#userMsg").focus(); 
    	   return false;
         }
        }   
	 }	 
   var d=$("#img_code").val();if(d.length<1){$("#img_code").css({color:"red"});$("#img_code").focus();return false}
   //
  var hiddenCaptcha=document.getElementById('imgCodeValue').value;
   if(d!="") 
    { 
      //alert(1);	  
	   //if(userCaptcha==userCaptchas){return true; alert(3);} Not Req.
	   if(d!=hiddenCaptcha) 
	   {  
	    //alert(2);
		$("#img_code").css({color:"red"});
		$("#img_code").focus();
		return false;
	   }
   }   
   
   
   // Check for check box selection //
   if(document.getElementById("agree_check").checked==false)
     { 
	   alert("Error: Please agree to contacted over mail.");
	   return false;
	 }
   if(document.getElementById("agree_check").checked==true)
     {
		 return true; 
	 }
 }
 
 
 function getValidateCallForm()
  {   
	//alert(12111);
    var um=$("#urName").val();
	if(um.length<1) {$("#urName").css({color:"red"});$("#urName").focus();return false;}
	if(um.length>0)
	 {
	 var iChars = "!@#$%^&*()+=-[]\\\';,~`/{}|\":?";
	  for (var i = 0; i < um.length; i++) 
	   {		   
    	if (iChars.indexOf(um.charAt(i)) != -1) 
		 {
    	   //alert("The Message box has special characters. \nThese are not allowed.\n");
		   $("#urName").css({color:"red"});
		   $("#urName").focus(); 
    	   return false;
         }
        }   
	 }	
	var b=$("#yrMobile").val();if(b.length<1){$("#yrMobile").css({color:"red"});$("#yrMobile").focus();return false;}
	if(b.length<10){$("#yrMobile").css({color:"red"});$("#yrMobile").focus();return false;}
	if(b!=""){if(!IsNumeric(b)){$("#yrMobile").css({color:"red"});$("#yrMobile").focus();return false;}}
	var c=$("#callTime").val();if(c.length<1){$("#callTime").css({color:"red"});$("#callTime").focus();return false;}	  
}
 
 
////
 function getValidateMentrForm()
   { 
	var a=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
	var e=ltrim($("#userName").val());
	if(e.length<1){$("#userName").css({color:"red"});$("#userName").focus();return false}
	if(/^[a-zA-Z- ]*$/.test(e)==false){$("#userName").css({color:"red"});$("#userName").focus();return false}var c=ltrim($("#email").val());if(c.length<1){$("#email").css({color:"red"});$("#email").focus();return false}var c=ltrim($("#email").val());if(c.length<1){$("#email").css({color:"red"});$("#email").focus();return false}if(!(a.test($("#email").val()))){$("#email").css({color:"red"});$("#email").focus();return false}var b=$("#mobile").val();if(b.length<1){$("#mobile").css({color:"red"});$("#mobile").focus();return false}if(b.length<10){$("#mobile").css({color:"red"});$("#mobile").focus();return false}if(b!=""){if(!IsNumeric(b)){$("#mobile").css({color:"red"});$("#mobile").focus();return false}}
	
	//var ff=$("#enq_type").val();if(ff.length<1){$("#enq_type").css({color:"red"});$("#enq_type").focus();return false} 
	
	//var f=$("#crs_name").val();if(f.length<1){$("#crs_name").css({color:"red"});$("#crs_name").focus();return false}
	//alert(12111);
    var dm=$("#userMsg").val();
	if(dm.length>0)
	 {
	   //var iChars = "!@#$%^&*()+=-[]\\\';,./{}|\":?";
	 var iChars = "!@#$%^&*()+=-[]\\\';,~`/{}|\":?";
	  for (var i = 0; i < dm.length; i++) 
	   {		   
    	if (iChars.indexOf(dm.charAt(i)) != -1) 
		 {
    	   alert("The Message box has special characters. \nThese are not allowed.\n");
		   $("#userMsg").css({color:"red"});
		   $("#userMsg").focus(); 
    	   return false;
         }
        }   
	 }	 
   var d=$("#img_code").val();if(d.length<1){$("#img_code").css({color:"red"});$("#img_code").focus();return false}
   // Check for check box selection //
   if(document.getElementById("agree_check").checked==false)
     { 
	   alert("Error: Please agree to contacted over mail.");
	   return false;
	 }
   if(document.getElementById("agree_check").checked==true)
     {
		 return true; 
	 }     
   }
///

function getValidateEnqEvtsFrmForm()
 { 
    var a=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
	
	var e=ltrim($("#userNamess").val());
	if(e.length<1){ $("#userNamess").css({color:"red"});
	document.getElementById('userNamess').className="field_red";
	//alert(2);
	document.getElementById('userNamess').focus();return false} 
	
	var c=ltrim($("#usrEmail").val());if(c.length<1){$("#usrEmail").css({color:"red"});$("#usrEmail").focus();return false}
	if(!(a.test($("#usrEmail").val()))){$("#usrEmail").css({color:"red"});$("#usrEmail").focus();return false}
	
   var d=$("#img_code").val();if(d.length<1){$("#img_code").css({color:"red"});$("#img_code").focus();return false}
   
	
   if(document.getElementById("agree_check").checked==false)
     { 
	   alert("Error: Please agree to contacted over mail.");
	   return false;
	 }
	 
   if(document.getElementById("agree_check").checked==true)
     {
		 return true; 
	 }		
}
///
function getValidateEvetsForm()
 { 	
	
	var e=ltrim($("#userNameEvt").val());
	if(e.length<1){$("#userNameEvt").css({color:"red"});
	$("#userNameEvt").focus();return false}
	if(/^[a-zA-Z- ]*$/.test(e)==false){$("#userNameEvt").css({color:"red"});$("#userNameEvt").focus();return false}	
	
	
	var a=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
	var c=ltrim($("#email_evt").val());if(c.length<1){$("#email_evt").css({color:"red"});$("#email_evt").focus();return false}
	if(!(a.test($("#email_evt").val()))){$("#email_evt").css({color:"red"});$("#email_evt").focus();return false}
	
	var b=$("#mobile_evt").val();if(b.length<1){$("#mobile_evt").css({color:"red"});$("#mobile_evt").focus();return false}
	if(b.length<10){$("#mobile_evt").css({color:"red"});$("#mobile_evt").focus();return false}
	if(b!=""){if(!IsNumeric(b)){$("#mobile_evt").css({color:"red"});$("#mobile_evt").focus();return false}}
	//	 
   var d=$("#img_code_evt").val();
   
   if(d.length<1){$("#img_code_evt").css({color:"red"});$("#img_code_evt").focus();return false}

  var hiddenCaptcha=document.getElementById('imgCodeValue_evt').value;
   if(d!="") 
    { 
      //alert(1);	  
	   //if(userCaptcha==userCaptchas){return true; alert(3);} Not Req.
	   if(d!=hiddenCaptcha) 
	   {  
	    //alert(2);
		$("#img_code_evt").css({color:"red"});
		$("#img_code_evt").focus();
		return false;
	   }
   }
  
   // Check for check box selection //
   if(document.getElementById("agree_check_evt").checked==false)
     { 
	   alert("Error: Please agree to contacted over mail.");
	   return false;
	 }
   if(document.getElementById("agree_check_evt").checked==true)
     {
		 return true; 
	 }   
 } 
 
function getValidateEnqFormPage()
 { 
	//alert(111);
	//return false;
	var frmval=document.getElementById('form_type_v').value;
	
	//var ndays=ltrim($("#nDays").val());if(ndays.length<1){$("#nDays").css({color:"red"});$("#nDays").focus();return false}	
	
	var a=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
	
	var e=ltrim($("#userNamess").val());
	if(e.length<1){ alert(1);$("#userNamess").css({color:"red"});
	document.getElementById('userNamess').className="field_red";
	//alert(2);
	document.getElementById('userNamess').focus();return false}
	//if(/^[a-zA-Z- ]*$/.test(e)==false){$("#userNamess").css({color:"red"});$("#userNamess").focus();return false}

	var b=$("#mobiles").val();if(b.length<1){$("#mobiles").css({color:"red"});$("#mobiles").focus();return false}
	if(b.length<10){$("#mobiles").css({color:"red"});$("#mobiles").focus();return false}
	if(b!=""){if(!IsNumeric(b)){$("#mobiles").css({color:"red"});$("#mobiles").focus();return false}}
	
	var c=ltrim($("#usrEmail").val());if(c.length<1){$("#usrEmail").css({color:"red"});$("#usrEmail").focus();return false}
	if(!(a.test($("#usrEmail").val()))){$("#usrEmail").css({color:"red"});$("#usrEmail").focus();return false}
	
    
	if(frmval=="corp"){
	var f=ltrim($("#CompName").val());if(f.length<1){$("#CompName").css({color:"red"});$("#CompName").focus();return false}
	var g=ltrim($("#webUrl").val());if(g.length<1){$("#webUrl").css({color:"red"});$("#webUrl").focus();return false}
	}
	//alert(12111);
    var dm=$("#userMsg").val();
	if(dm.length>0)
	 {
	   //var iChars = "!@#$%^&*()+=-[]\\\';,./{}|\":?";
	 var iChars = "!@#$%^&*()+=-[]\\\';,~`/{}|\":?";
	  for (var i = 0; i < dm.length; i++) 
	   {		   
    	if (iChars.indexOf(dm.charAt(i)) != -1) 
		 {
    	   alert("The Message box has special characters. \nThese are not allowed.\n");
		   $("#userMsg").css({color:"red"});
		   $("#userMsg").focus(); 
    	   return false;
         }
        }   
	 }
	 /*	 
   var d=$("#img_code").val();if(d.length<1){$("#img_code").css({color:"red"});$("#img_code").focus();return false}
   // Check for check box selection //
   */
   if(document.getElementById("agree_check").checked==false)
     { 
	   alert("Error: Please agree to contacted over mail.");
	   return false;
	 }
	 
   if(document.getElementById("agree_check").checked==true)
     {
		 return true; 
	 }  
 }

function getValidateEnqFormB(){	
	//alert(111);
	//return false;
	var req=ltrim($("#yourReq").val());if(req.length<1){$("#yourReq").css({color:"red"});$("#yourReq").focus();return false}
	
	//var ndays=ltrim($("#nDays").val());if(ndays.length<1){$("#nDays").css({color:"red"});$("#nDays").focus();return false}	
	
	var a=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
	var e=ltrim($("#userName").val());
	if(e.length<1){$("#userName").css({color:"red"});
	$("#userName").focus();return false}
	if(/^[a-zA-Z- ]*$/.test(e)==false){$("#userName").css({color:"red"});$("#userName").focus();return false}
	
	var c=ltrim($("#email").val());if(c.length<1){$("#email").css({color:"red"});$("#email").focus();return false}
	if(!(a.test($("#email").val()))){$("#email").css({color:"red"});$("#email").focus();return false}
	
	var b=$("#mobile").val();if(b.length<1){$("#mobile").css({color:"red"});$("#mobile").focus();return false}
	if(b.length<10){$("#mobile").css({color:"red"});$("#mobile").focus();return false}
	if(b!=""){if(!IsNumeric(b)){$("#mobile").css({color:"red"});$("#mobile").focus();return false}}
	
	var f=$("#countryUser").val();if(f.length<1){$("#countryUser").css({color:"red"});$("#countryUser").focus();return false}
	//alert(12111);
    var dm=$("#userMsg").val();
	if(dm.length>0)
	 {
	   //var iChars = "!@#$%^&*()+=-[]\\\';,./{}|\":?";
	 var iChars = "!@#$%^&*()+=-[]\\\';,~`/{}|\":?";
	  for (var i = 0; i < dm.length; i++) 
	   {		   
    	if (iChars.indexOf(dm.charAt(i)) != -1) 
		 {
    	   alert("The Message box has special characters. \nThese are not allowed.\n");
		   $("#userMsg").css({color:"red"});
		   $("#userMsg").focus(); 
    	   return false;
         }
        }   
	 }	 
   var d=$("#img_code").val();if(d.length<1){$("#img_code").css({color:"red"});$("#img_code").focus();return false}
   // Check for check box selection //
   
  var hiddenCaptcha=document.getElementById('imgCodeValue').value;
   if(d!="") 
    { 
      //alert(1);	  
	   //if(userCaptcha==userCaptchas){return true; alert(3);} Not Req.
	   if(d!=hiddenCaptcha) 
	   {  
	    //alert(2);
		$("#img_code").css({color:"red"});
		$("#img_code").focus();
		return false;
	   }
   }    
   
   
   if(document.getElementById("agree_check").checked==false)
     { 
	   alert("Error: Please agree to contacted over mail.");
	   return false;
	 }
   if(document.getElementById("agree_check").checked==true)
     {
		 return true; 
	 }
}

function getValidateSubscriberForm()
 { 	
	var a=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
	var c=ltrim($("#newsSubsM").val());if(c.length<1){$("#newsSubsM").css({color:"red"});$("#newsSubsM").focus();return false}
	if(!(a.test($("#newsSubsM").val()))){$("#newsSubsM").css({color:"red"});$("#newsSubsM").focus();return false} 
	else { $("#newsSubsM").css({color:"#494040"});} 
 }

function getValidateeventFormData()
 { 	
	
	var e=ltrim($("#userName").val());
	if(e.length<1){$("#userName").css({color:"red"});
	$("#userName").focus();return false}
	if(/^[a-zA-Z- ]*$/.test(e)==false){$("#userName").css({color:"red"});$("#userName").focus();return false}	
	
	
	var a=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
	var c=ltrim($("#email_user").val());if(c.length<1){$("#email_user").css({color:"red"});$("#email_user").focus();return false}
	if(!(a.test($("#email_user").val()))){$("#email_user").css({color:"red"});$("#email_user").focus();return false}
	
	var b=$("#mobile_user").val();if(b.length<1){$("#mobile_user").css({color:"red"});$("#mobile_user").focus();return false}
	if(b.length<10){$("#mobile_user").css({color:"red"});$("#mobile_user").focus();return false}
	if(b!=""){if(!IsNumeric(b)){$("#mobile_user").css({color:"red"});$("#mobile_user").focus();return false}}
	//
	var ee=ltrim($("#domainList").val());
	if(ee.length<1){$("#domainList").css({color:"red"});
	$("#domainList").focus();return false}

	//	 
   var d=$("#img_code_hidden").val();
   
   if(d.length<1){$("#img_code_hidden").css({color:"red"});$("#img_code_hidden").focus();return false}

  var hiddenCaptcha=document.getElementById('imgCodeValue_hidd').value;
   if(d!="") 
    { 
      //alert(1);	  
	   //if(userCaptcha==userCaptchas){return true; alert(3);} Not Req.
	   if(d!=hiddenCaptcha) 
	   {  
	    //alert(2);
		$("#img_code_hidden").css({color:"red"});
		$("#img_code_hidden").focus();
		return false;
	   }
   }

   
   // Check for check box selection //
   if(document.getElementById("agree_check").checked==false)
     { 
	   alert("Error: Please agree to contacted over mail.");
	   return false;
	 }
   if(document.getElementById("agree_check").checked==true)
     {
		 return true; 
	 }   
 }

function getValidateEnqWMForm()
 { 
	var a=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
	var e=ltrim($("#userName").val());
	if(e.length<1){$("#userName").css({color:"red"});$("#userName").focus();return false}
	if(/^[a-zA-Z- ]*$/.test(e)==false){$("#userName").css({color:"red"});$("#userName").focus();return false}var c=ltrim($("#email").val());if(c.length<1){$("#email").css({color:"red"});$("#email").focus();return false}var c=ltrim($("#email").val());if(c.length<1){$("#email").css({color:"red"});$("#email").focus();return false}if(!(a.test($("#email").val()))){$("#email").css({color:"red"});$("#email").focus();return false}var b=$("#mobile").val();if(b.length<1){$("#mobile").css({color:"red"});$("#mobile").focus();return false}if(b.length<10){$("#mobile").css({color:"red"});$("#mobile").focus();return false}if(b!=""){if(!IsNumeric(b)){$("#mobile").css({color:"red"});$("#mobile").focus();return false}}
	//
	//var enq_date=$("#enq_date").val();if(enq_date.length<1){$("#enq_date").css({color:"red"});$("#enq_date").focus();return false}
	 //alert(enq_date)
	 //return false;
	//alert(12111);
    var dm=$("#userMsg").val();
	if(dm.length>0)
	 {
	   //var iChars = "!@#$%^&*()+=-[]\\\';,./{}|\":?";
	 var iChars = "!@#$%^&*()+=-[]\\\';,~`/{}|\":?";
	  for (var i = 0; i < dm.length; i++) 
	   {		   
    	if (iChars.indexOf(dm.charAt(i)) != -1) 
		 {
    	   alert("The Message box has special characters. \nThese are not allowed.\n");
		   $("#userMsg").css({color:"red"});
		   $("#userMsg").focus(); 
    	   return false;
         }
        }   
	 }	 
   var d=$("#img_code").val();if(d.length<1){$("#img_code").css({color:"red"});$("#img_code").focus();return false}  
 }



function isNumberKey(evt)
 { 
  var charCode = (evt.which) ? evt.which : event.keyCode
  if(charCode > 31 && (charCode < 48 || charCode > 57)) {
	return false;
  }
 return true;
}

function getValidateFeedForm(){var a=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;var e=ltrim($("#userName").val());if(e.length<1){$("#userName").css({color:"red"});$("#userName").focus();return false}var b=ltrim($("#feedemail").val());if(b.length<1){$("#feedemail").css({color:"red"});$("#feedemail").focus();return false}var b=ltrim($("#feedemail").val());if(b.length<1){$("#feedemail").css({color:"red"});$("#feedemail").focus();return false}if(!(a.test($("#feedemail").val()))){$("#feedemail").css({color:"red"});$("#feedemail").focus();return false}var d=ltrim($("#feedTitle").val());if(d.length<1){$("#feedTitle").css({color:"red"});$("#feedTitle").focus();return false}var c=$("#img_code").val();if(c.length<1){$("#img_code").css({color:"red"});$("#img_code").focus();return false}}function validateMailSubsPost(){var a=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;var b=ltrim($("#email_subs").val());if(b.length<1){$("#email_subs").css({color:"red"});$("#email_subs").focus();return false}if(!(a.test($("#email_subs").val()))){$("#email_subs").css({color:"red"});$("#email_subs").focus();return false}}function IsNumeric(a){return(a-0)==a&&(a+"").replace(/^\s+|\s+$/g,"").length>0}function getExtension(a){var b=a.split(".");return b[b.length-1]}function isImage(a){var b=getExtension(a);switch(b.toLowerCase()){case"jpg":case"gif":case"bmp":case"png":return true}return false}function ltrim(a){while(1){if(a.substring(0,1)!=" "){break}a=a.substring(1,a.length)}return a}function getAllStream(){var e=document.getElementById("crsCategory").value;var a="listAllSubcat";if(e){var d="index.php?ms=msPass&action=getSubCatList&catId="+e;xmlHttp=b();xmlHttp.onreadystatechange=c;xmlHttp.open("GET",d,true);xmlHttp.send(null)}else{document.getElementById(a).innerHTML="blank value..."}function c(){if(xmlHttp.readyState==4||xmlHttp.readyState=="complete"){document.getElementById(a).innerHTML=xmlHttp.responseText}}function b(){var f=null;try{f=new XMLHttpRequest}catch(g){try{f=new ActiveXObject("Msxml2.XMLHTTP")}catch(g){f=new ActiveXObject("Microsoft.XMLHTTP")}}return f}};
/*Common back to top*/


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Acqua Di Phoenix</title>
<link rel="shortcut icon" href="images/fevicon.png" />
<link rel="stylesheet" type="text/css" href="css/acqua.css" />

<!--Menu Starts-->
<link type="text/css" rel="stylesheet" href="css/menu.css"  />
<!--Menu Ends-->

	<!--Start WOWSlider.com HEAD section-->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" media="screen" />
	<style type="text/css">a#vlb{display:none}</style>
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!--End WOWSlider.com HEAD section-->


<style>
/*--font embed starts--*/
@font-face { font-family:"agency"; src:url("font/AGENCYR.TTF"); }
.agency { font-family:"agency"; font-weight:normal; }

@font-face { font-family:"aero"; src:url("font/Aea.TTF"); }
.aero { font-family:"aero"; font-weight:normal; }
/*--font embed ends--*/
</style>

</head>

<body>
<script type="text/javascript">

function valid()
{
if(document.frm.name.value=="")
{
alert("Please enter your Name");
document.frm.name.focus();
return false;
}

if(document.frm.address.value=="")
{
alert("Please enter your Address");
document.frm.address.focus();
return false;
}

if(document.frm.phone.value=="")
	   {
		alert('Please Enter Contact');
                document.frm.phone.focus();
		return(false);
	   }
		var filter=/^[^a-zA-z]+$/;
		if(!filter.test(document.frm.phone.value))
		{
				alert("Please Enter Valid Contact!");
			  document.frm.phone.focus();
			return false;
		}
if(document.frm.email.value=="")
	{
		alert('Please Enter your email.');
                document.frm.email.focus();
		return(false);
	}
	
	var filter=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		if(!filter.test(document.frm.email.value))
		{
			alert("Email Address is not valid, Try Again!!");
			document.frm.email.focus();
			return(false);
		}
		if(document.frm.comments.value=="")
{
alert("Please enter your Comments");
document.frm.comments.focus();
return false;
}


		return(true);
}
</script>
<!--Header Starts-->
<?php include 'include/headder.php' ?>
<!--Header Ends-->
<div class="clr"></div>
<!--Menu Starts-->
<div id="menu_wrapper">
	<div id="menu_container">
    	<div class="menu_left"></div>
        <div class="menu_center">
        	<?php include 'include/menu.html' ?>
        </div>
        <div class="menu_right"></div>
    </div>
</div>
<!--Menu Ends-->
<div class="clr"></div>
<!--Contact Us Starts-->
<div id="contact-us_wrapper">
	<div id="contact-us_container">
    	<div class="contact_us-top">
        	<div class="contact_us-heading">
            	<div class="contact_us-heading_text agency">Contact Us</div>
            </div>
            <div class="clr"></div>
         
         <div class="contact-img"><img src="images/contact.png" width="305" height="370" /></div>
         
         <div class="clr"></div>
          <form action="mail.php" method="post" name="frm" onsubmit="return valid();">
         <div id="form">
         	<div class="form_left">
            	<div class="form-top">
                	<div class="name">
                   
                    	<div class="name_text">Name</div>
                        <div class="name_field"><input type="text" name="name" value="" style="width:160px; height:23px; border:none;"  /></div>
                    </div>
                    <div class="address">
                    	<div class="name_text">Address</div>
                        <div class="name_field"><input type="text" name="address" value="" style="width:160px; height:23px; border:none;"  /></div>
                    </div>
                    <div class="phone">
                    	<div class="name_text">Contact</div>
                        <div class="name_field"><input type="text" name="phone" value="" style="width:160px; height:23px; border:none;"  /></div>
                    </div>
                    <div class="email">
                    	<div class="name_text">E-mail</div>
                        <div class="name_field"><input type="text" name="email" value="" style="width:160px; height:23px; border:none;"  /></div>
                    </div>
                    <div class="comment">
                    	<div class="comment_text">Comments</div>
                        <div class="comment_field"><textarea name="comments" cols="18" rows="3" style="border:none;"></textarea></div>
                    </div>
                    
                </div>
                <div class="clr"></div>
                <div class="form-bottom">
                	<div class="submit"><input type="submit" name="submit" value="" style="background:url(images/submit.png) no-repeat; border:none; cursor:pointer; width:104px; height:26px;"  /></div>
                </div>
                <div class="clr"></div>
            </div>
			<?php 
include 'administrator/includes/dbconnect.php';
$query=mysql_query("select * from contactus ");
$dd = mysql_fetch_array($query);
 $office=$dd['office'];
		$phone=$dd['phone'];
		$email=$dd['email'];
		$fo=$dd['fo'];
		$phonea=$dd['phonea'];
		$fax=$dd['fax'];
		$mobile=$dd['mobile'];
		$emaila=$dd['emaila'];
?>
            <div class="form_right">
            <div class="form_address-main-heaing">PHOENIX PURE WATER PVT. LTD.</div>
            
            		<table width="370" border="0" cellspacing="0" cellpadding="0" align="left">
  <tr>
    <td colspan="3" height="5"></td>
    </tr>
  <tr>
    <td colspan="3" class="indian-off_heading">Office</td>
    </tr>
  <tr>
    <td colspan="3" height="5"></td>
    </tr>
  <tr>
    <td colspan="3" class="indian-off_text"><?php echo $office; ?></td>
    </tr>
  <tr>
    <td colspan="3" height="10">&nbsp;</td>
    </tr>
  <tr>
    <td width="163"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="indian-off_heading">Phone:</td>
  </tr>
  <tr>
    <td class="indian-off_text"><?php echo $phone; ?></td>
  </tr>
</table>
</td>
    <td width="7">&nbsp;</td>
    <td width="200"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="indian-off_heading">E-Mail:</td>
  </tr>
  <tr>
    <td class="indian-off_text"><?php echo $email; ?></td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td colspan="3" height="15" align="center" valign="middle">
    	<div style="height:1px; background:#767676; width:350px;"></div>
    </td>
    </tr>
  <tr>
    <td colspan="3" class="foriegn-off_heading">Foreign Office:</td>
    </tr>
  <tr>
    <td colspan="3" class="foriegn-off_text"><?php echo $fo ; ?></td>
    </tr>
  <tr>
    <td colspan="3" height="10"></td>
    </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="foriegn-off_heading">Phone:</td>
  </tr>
  <tr>
    <td class="foriegn-off_text"><?php echo $phonea; ?></td>
  </tr>
</table></td>
    <td>&nbsp;</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="indian-off_heading">EFax:</td>
  </tr>
  <tr>
    <td class="indian-off_text"><?php echo $fax; ?></td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="indian-off_heading">Mobile:</td>
  </tr>
  <tr>
    <td class="indian-off_text"><?php echo $mobile ; ?></td>
  </tr>
</table></td>
    <td>&nbsp;</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="indian-off_heading">E-Mail:</td>
  </tr>
  <tr>
    <td class="indian-off_text"><?php echo $emaila ;?></td>
  </tr>
</table></td>
  </tr>
              </table>

                
               
           </div>
         </div>
         
         <div class="clr"></div>
         
         <div class="map"><iframe width="900" scrolling="no" height="550" frameborder="0" src="http://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=Rajasthan,+India&amp;daddr=107+Varindavan+Vihar,+1st+FLOOR,+Gagan+Path+Sri+Ganganagar-335001,+Rajasthan,+India&amp;hl=en&amp;geocode=&amp;aq=&amp;sll=24.806681,77.036133&amp;sspn=19.350565,28.256836&amp;vpsrc=0&amp;doflg=ptk&amp;mra=ls&amp;ie=UTF8&amp;ll=24.806681,77.036133&amp;spn=10.690986,12.005865&amp;t=m&amp;output=embed" marginwidth="0" marginheight="0"></iframe></div>
         
        </div>
        <div class="contact_us-shadow"></div>
    </div>
</div>
<!--Contact Us Ends-->
<div class="clr"></div>
<!--Footer Starts-->
<?php include 'include/footer.php' ?>
<!--Footer Ends-->

</body>
</html>

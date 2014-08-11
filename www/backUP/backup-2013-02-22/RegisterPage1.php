<?php
session_start();

if(isset($_SESSION['submitted_form_values'])){extract($_SESSION['submitted_form_values']);}

?>
<html>
<head>
<title>eSnail.ca - Registration Page 1of2</title>
 <!-- Link to CSS stylesheet -->
 <link href="styles.css"  rel="stylesheet" type="text/css" />
  <script type="text/javascript"  src="javascript.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!-- Address Bar Icon Link -->

<STYLE TYPE="text/css">
<!--
H2
   {
   color:black;
   font-size:14pt;
   font-style:bold;
      }
H3
   {
   color:black;
   font-size:10pt;
   text-align:right
      }
H4
   {
   color:black;
   font-size:12pt;
   text-align:right
      }
-->
</STYLE>
<link REL=”SHORTCUT ICON” HREF=”favicon.ico”>
<style type="text/css">
a { text-decoration:none }
</style>



</head>
<center>
<script language="JavaScript">
function checkForm(){if(!confirm('Are you sure that you want to submit the form now?'))return false;}
</script>
<center>
<body bgcolor="#afc0f0" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"  link="#000000" vlink="#000000" alink="#000000">


<!-- ImageReady Slices (eSnail Order Form 1024x.psd) -->
<font face="Verdana">
<table id="Table_01" width="1024" height="881" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="10" height="143" align="right" valign="top" style="background-image: url('registerpage1_01.jpg');">
      <p>&nbsp;</p><h2><FONT FACE="rockwell"><strong>  <a href="index.html">HOME</a> |<a href="registerpage0.html"> SIGN UP</a> | ABOUT | CONTACT US </strong></h2>
			</td>
	</tr>
	<tr>
		<td colspan="3" rowspan="2">
			<a href="index.html"><img src="registerpage1_02.jpg" BORDER="0" width="335" height="202" alt=""></a></td>
		<td>
			<a href="RegisterPage1.php"><img src="registerpage1_03.jpg" BORDER="0" width="137" height="85" alt=""></a></td>
		<td>
			<a href="about.html"><img src="registerpage1_04.jpg" BORDER="0" width="110" height="85" alt=""></a></td>
		<td>
			<a href="faq.html"><img src="registerpage1_05.jpg" border="0" width="92" height="85" alt=""></a></td>
		<td>
			<a href="services.html"><img src="menubar_13.jpg" BORDER="0" width="150" height="85" alt=""></a></td>
		<td colspan="2">
			<a href="contactus.html"><img src="registerpage1_07.jpg" BORDER="0" width="155" height="85" alt=""></a></td>
		<td rowspan="2">
			<img src="registerpage1_08.jpg" width="45" height="202" alt=""></td>
	</tr>
	<tr>
		<td colspan="6">
			<img src="registerpage1_09.jpg" width="644" height="117" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" style="background-image: url('registerpage1_10.jpg');"></td>
		<td colspan="6" bgcolor=#6b88c7>
			   
          
            </center>
<img src="knowyou.gif">
<p>&nbsp;</p>
<p align="right">
<?php

if(isset($_SESSION['formtoemail_form_errors']))
{

print "<div style=\"color:#ff0000\">";

foreach($_SESSION['formtoemail_form_errors'] as $form_error_value){print "<b>" . stripslashes($form_error_value) . "</b><br>";}

print "</div>";

unset($_SESSION['formtoemail_form_errors']);

}

?>
</p>

<left>
<table style="background:#6b88c7">
<tr><td width="30%"></td><td>
<FONT FACE="rockwell">
<p>&nbsp;</p>
<form action="formtoemailpro.php" method="post" onSubmit="return checkForm();">

<table border="0" style="background:#6b88c7" cellspacing="5">
<tr><td>First Name: *</td><td><input type="text" size="25" name="firstname" value="<?php if(isset($firstname)){print stripslashes($firstname);}else{print "";} ?>"></td></tr>
<tr><td>Last Name: *</td><td><input type="text" size="25" name="lastname" value="<?php if(isset($lastname)){print stripslashes($lastname);}else{print "";} ?>"></td></tr>
<tr><td>Email Address:* </td><td><input type="text" size="29" name="email" value="<?php if(isset($email)){print stripslashes($email);}else{print "";} ?>"></td></tr>
<tr><td>Confirm Email:* </td><td><input type="text" size="29" name="email2"></td></tr>
<tr><td>Daytime Telephone: </td><td><input type="text" size="25" name="telephone" value="<?php if(isset($telephone)){print stripslashes($telephone);}else{print "";} ?>"></td></tr>
<tr><td>Current Street Address: </td><td><input type="text" size="29" name="addressline1" value="<?php if(isset($addressline1)){print stripslashes($addressline1);}else{print "";} ?>"></td></tr>
<tr><td>Address Line 2 (optional)</td><td><input type="text" size="29" name="addressline2" value="<?php if(isset($addressline2)){print stripslashes($addressline2);}else{print "";} ?>"></td></tr>
<tr><td>City</td><td><input type="text" size="29" name="city" value="<?php if(isset($city)){print stripslashes($city);}else{print "";} ?>"></td></tr>
<tr><td>Postal Code</td><td><input type="text" size="6" name="postalcode" maxlength="7" value="<?php if(isset($postalcode)){print stripslashes($postalcode);}else{print "";} ?>"></td></tr>
<tr><td valign="top">Comments</td><td><textarea name="comments" rows="6" cols="29" value="<?php if(isset($comments)){print stripslashes($comments);}else{print "";} ?>"></textarea></td></tr>
</table>
<p>&nbsp;</p>
<table border="0" style="background:#6b88c7" cellspacing="5">
<tr><td>User Name *</td><td><input type="text" size="25" name="username" value="<?php if(isset($username)){print stripslashes($username);}else{print "";} ?>"></td></tr>
<tr><td>Password *</td><td><input type="password" size="25" name="password"></td></tr>
<tr><td>Confirm Password *</td><td><input type="password" size="25" name="password2"></td></tr>
<tr><td colspan="2">All your email will be encrypted using this password</td></tr>
</table>
<p>&nbsp;</p>
<table border="0" style="background:#6b88c7" cellspacing="5">
<tr><td colspan="2"><input type="checkbox" name="business" <?php if(isset($veg) && $veg == "business"){print " checked=\"checked\"";} ?>><b>&nbsp;&nbsp;&nbsp;<font size="2">I would like to register a Business name as a mail recipient at eSnail.ca</font></b></td></tr>
<tr><td><right>Business Name:</right> </td><td><input type="text" size="30" name="businessname" value="<?php if(isset($businessname)){print stripslashes($businessname);}else{print "";} ?>"></td></tr>
<tr><td colspan="2"><b><p>&nbsp;</p><font size="2">At eSnail we like to Save you Money, did you grab a promotional code?</font></b></td></tr>
<tr><td>Promotion Code: </td><td><input type="text" size="30" name="promotion code"></td></tr>
<tr><td><p>&nbsp;</p></td></tr>
</table>
<table align="right">
<tr><h3><font face="Verdana">*Required field<h3></p></h3></td></tr>
<tr><td><p>&nbsp;</p></td></tr>
</table>
<p>&nbsp;</p>	
<table>
<tr><td align="right" bgcolor="#afc0f0"><div style="overflow:auto;height:150px;">
<font size="1">
<p>&nbsp;</p>
<table width="100%" border="0">
<font size="1">
  <tr>
    <td width="30%">&nbsp;</td>
    <td> eSnail.ca Terms of Service</td>
  </tr>

<tr>
    <td width="30%">&nbsp;</td>
    <td>
<p>&nbsp;</p><font size="1">
Effective November 24th 2009
<p>&nbsp;</p>
CHAPTERS
<p>&nbsp;</p>
  1.  WELCOME!
<p>  2.  WHAT IS THIS DOCUMENT, ANYWAY?
<p> 3.  DESCRIPTION OF OUR SERVICE
<p>  4.  MEMBER BEST PRACTICES
<p>  5.  MEMBERSHIP RESPONSIBILITIES
<p>  6.  RESALE OF SERVICE
<p>  7.  RESOURCES
<p>  8.  PAYING FOR AND CANCELING YOUR ACCOUNT
<p>  9.  INDEMNITY
<p> 10. KEEPING YOUR ACCOUNT SECURE
<p> 11. UPDATES AND NEWS
<p> 12. OUR PRIVACY POLICY
<p> 13. WARRANTY DISCLAIMER
<p> 14. LIMITATION OF LIABILITY 
<p> 15. ACTS of GOD
<p> 16. SCOPE of the TERMS OF SERVICE
<p> 17. SCOPE OF AGREEMENT
<p> 18. SEVERABILITY OF TERMS
<p> 19. BINDING NATURE OF AGREEMENT
<p> 20. ASSIGNMENT OF RIGHTS
<p> 21. COPYRIGHT AND TRADEMARKS
<p>&nbsp;</p>
</td></tr>
</table>
<table>
 <tr>
    <td width="3%">&nbsp;</td>
    <td> <font size="1">
1.   WELCOME!
<p>&nbsp;</p>

Welcome to eSnail.ca Automated Mail Service Canada Inc.  Please read the following terms and conditions for the eSnail.ca Mail Handling Service. We've made our best efforts to make this document readable and understandable, however, if you have any questions and the nearest legal dictionary isn't within reach, free to email us.   These Terms and Conditions apply to the use of eSnail.ca Automated Mail Service Canada Inc. mail handling service including and not limited to scanning, forwarding, archiving, encrypting, handling, emailing and shredding of any mail. Each of these services and features are Individually and collectively referred to as the "service." This service will be periodically modified and improved to serve you better which means we'll also be modifying the terms of service.  The most recent edition of our terms of service is availiable for you at <hfref:http://www.ensail.ca/tos.html>http:www.esnail.ca/tos</h>
<p>&nbsp;</p>
This service can only be provided to individuals who are at least 18 years.  Any minors using this service must provide proof parental permission.
<p>&nbsp;</p>
2.   WHAT IS THIS DOCUMENT, ANYWAY?
<p>&nbsp;</p>
This terms of agreement document is designed to define our obligations to you and your obligations to us when you sign on to our services. When you sign on to our service you agreed that you have read these terms of service and you have agreed to establish an account with eSnail.ca Automated Mail Systems Canada Inc. This agreement applies to any use or modifications to the services on your account made by you or someone with your permission regardless of if they were informed of this agreement.  When this document uses terms such as "you" and "your" it refers to the Customer and "we" and "us" and "our" to refer to eSnail.ca Automated Mail Systems Canada Inc.
<p>&nbsp;</p>
3.   DESCRIPTION OF OUR SERVICE
<p>&nbsp;</p>
eSnail.ca Automated Mail Systems Canada Inc. currently provides it's account holder with a package of scanning, image processing, mail forwarding and archival services.  When we add or offer new services or features to our current services then they will continue to be subject to this terms of service document and our privacy policy.  By agreeing to this terms of service you agree that eSnail.ca Automated Mail Systems Canada Inc. assumes no responsibility for the timeliness, mis-delivery, failure to store or deletion of user communications, documents personal information, account settings, lost mail or any financial loss that may occur as a result of these actions.
<p>&nbsp;</p>
You acknowledge that while using our service requires access to the internet and that you are responsible for providing the equipment and paying any service fees required to obtain access to our service.
<p>&nbsp;</p>
You authorize us to deliver your postal mail via email and understand that that requires you to change your mailing address with any parties who currently send you mail.  You also authorize us to open all physical and electronic mail we recieve on your behalf regardless of if the mail is address to you.  You also authorize us to make and retain paper copies of your mail for a period of three months after recieving it and all electronic copies indefinately.   You have the right to notify us if you would like these documents destroyed permanently.  You also have a right to notify us if you would like to have all your mail shredded immediately upon receipt.   All bulk, third-class standard and non-profit mail will be shredded and discarded.  
<p>&nbsp;</p>
Packages and cheques will be forwarded or returned to you based on your instructions.  Any charges associated with forwarding your mail will be assumed by the Customer. 
<p>&nbsp;</p>
Digital archives of your scanned mail will be available should you request it. 
<p>&nbsp;</p>
4.   MEMBER BEST PRACTICES
<p>&nbsp;</p>
You acknowledge that eSnail.ca Automated Mail Systems Canada Inc. does not have the means to screen any communication in advance.   Accordingly you acknowledge that eSnail.ca Automated Mail Systems Canada Inc. have any liability whatsoever to you or any other party for any action or inaction on it's part.
<p>&nbsp;</p>
You are not permitted to use eSnail.ca's Services to transmit or upload any text, image or document which: (i) violates any rights of others, (ii) impersonates any person or entity, (iii) attempts to solicit information whatsoever from a minor without appropriate verifiable parental consent or (iv) violates any applicable local, provincial or federal laws.   
<p>&nbsp;</p>

5.   MEMBERSHIP RESPONSIBILITIES
<p>&nbsp;</p>
In order to use the Service, you agree to provice accurate and up to date information about yourself in the Services registration form.   This obligation includes updating your personal information should it change while using the Service.
<p>&nbsp;</p>
6. RESALE OF SERVICE
<p>&nbsp;</p>
You agree that no portion of the Service or access to the service will be reproduced, duplicated, copy, sell or resold by yourself or a third party using your account.
<p>&nbsp;</p>
7. RESOURCES
<p>&nbsp;</p>
eSnail.ca Automated Mail Systems Canada Inc. may provide links to other websites or resources.  Because we have no control over the content of these sites you acknowledge that eSnail.ca Automated Mail Systems Canada Inc. is not responsible or liable for any content available on these sites.  You further acknowledge that eSnail.ca Automated Mail Systems Canada Inc. shall not be liable, directly or indirectly for any damage or loss cause or alleged to be caused by such content or goods or services availible though any such site.  
<p>&nbsp;</p>
8.   PAYING FOR AND CANCELING YOUR ACCOUNT
<p>&nbsp;</p>
In exchange for the services received you agree to pay eSnail.ca Automated Mail Systems Canada Inc. a service fee at monthly or annual intervals. The rate of and frequency of the service fee will be determined by the service plan you select.   In the case of a promotional or trial service rate the provisions of this agreement still apply.   In addition to a monthly fee you may be billed separately for service fees incurred as additional services are ordered. If eSnail.ca Automated Mail Canada Inc. does not receive payment within thirty days of the date of your account registration then an additional 1.5% per month late charge may be applied to your bill.  If an unpaid account goes into collection you agree to be liable for all costs and disbursements incurred by eSnail.ca Automated Mail Systems Canada in seeking out the unpaid sum.   You have the right to dispute any charges on your bill within 60 days of the statement date.
<p>&nbsp;</p>
You also agree to pay for any incidental services in a timely fashion should you order them.
<p>&nbsp;</p>
You have the right to terminate this agreement and cancel your service after 30 have passed since the notice of cancellation. Your service will continue to the end of the billing month, at which point it will end. If you have any questions regarding the procedure of cancelling an account please feel free to contact us using the "Contact Us" section under the contact us link on the frontpage of esnail.ca. Please bear in mind that Canada post will not forward your eSnail.ca address to any other address, however we do offer this service.  If you would like for us to physically forward your mail at the termination please make a note of this when you cancel your account.
<p>&nbsp;</p>
9. INDEMNITY
<p>&nbsp;</p>
You recognize and agree that eSnail.ca Automated Mail Systems Canada Inc., it's officers, agents, affiliates and employees are harmless from any claim or demand, including attorney's fees.  You agree that eSnail.ca Automated Mail Systems Canada Inc. shall be indemnified of any responsibility for actions made by any third party due to or arising out of content you submit, post to or transmit through the Service, your used of the Service, your violation of the TOS or violation of any rights of another.
<p>&nbsp;</p>

10.   KEEPING YOUR ACCOUNT SECURE
<p>&nbsp;</p>
Upon registration you will be asked to select a username and password.  It's your responsibility to keep this password and username confidential.  You are responsible for all actions performed under the password and username of your account.  It is your responsibility to notify eSnail.ca Automated Mail Systems Canada Inc. of any unauthorized use of your password or username.  eSnail.ca Automated Mail Systems Canada Inc. cannot be liable for any loss of damage arising from the misuse of your username and password by a third party.
<p>&nbsp;</p>
11.   UPDATES AND NEWS
<p>&nbsp;</p>
As part of the service you authorize us to notify you of information regarding new products and services as well as changes and upgrades to your existing service.
<p>&nbsp;</p>
12.   OUR PRIVACY POLICY
<p>&nbsp;</p>
Information collected when you register and other information regarding your account is maintained and controlled under the guidelines set by our Privacy Policy.  If you would like to know more, please read our <link>privacy policy</link>
<p>&nbsp;</p>
13. WARRANTY DISCLAIMER
<p>&nbsp;</p>
eSnail.ca Automated Mail Systems Canada Inc. does not warranty it's services or guarantee that their systems are flawless and free of the capacity for error. You use of our services is at your risk.
<p>&nbsp;</p>
eSnail.ca Automated Mail Systems Canada Inc. does not warranty it's service for timeliness, security or infallibility. eSnail.ca Automated Mail Systems Canada Inc. does not gurantee that the service will meet your needs, expectations or that the service will be accurate or reliable. Finally eSnail.ca Automated Mail Systems Canada Inc. makes no guarantee that the information we provide on our website or in communication is free of any typographical errors or technical inaccuracies.
<p>&nbsp;</p>
You assume all responsibility for and risk associated with any material that is transmitted, downloaded or obtained through the use of the service. You are solely responsible for any damage to your property or loss of data that results from such material
<p>&nbsp;</p>
Any communication shared with you by eSnail.ca Automated Mail Systems Canada Inc. including but not limited to oral and written communication will not create any warranty that is not already codified in the TOS.
<p>&nbsp;</p>
14. LIMITATION OF LIABILITY 
<p>&nbsp;</p>
eSnail.ca Automated Mail Systems Canada Inc. shall not be liable for any losses or damages, whether direct, indirect or consequential.  These damages for which  eSnail.ca Automated Mail Systems Canada Inc. is not liable include but are not limited to loss of profits, data or intangible losses regardless of whether or not  eSnail.ca Automated Mail Systems Canada Inc. has been notified about the potential for such damage.
<p>&nbsp;</p>
You recognize that eSnail.ca Automated Mail Systems Canada Inc. is not designed for use in environments that depend on strictly regulated performance including military, civil or federal governments, transportation or handling of dangerous goods or extremely sensitive communications.  This service is not to be used for any activities in which a failure on the part of eSnail.ca Automated Mail Systems Canada Inc. could result in environmental damage, physical harm or death.  Neither eSnail.ca Automated Mail Systems Canada Inc. not its affiliates, content providers and agents make no warranty that this service is suitable as a means of conducting dangerous activities. 
<p>&nbsp;</p>
15. ACTS of GOD
<p>&nbsp;</p>
Should there be any delay or failure to perform any of the services outlined in this agreement where the cause of such a delay is a strike, fire, flood, earthquake, act of nature, failure of suppliers, communications lines failures, power failures or any other incident beyond our control then eSnail.ca Automated Mail Systems Canada Inc. shall be excused for not performing the service as expected.  In such cases we agree to resume performance of the services as soon as the resolution of the delay permits us.  
<p>&nbsp;</p>
16. SCOPE of the TERMS OF SERVICE
<p>&nbsp;</p>
The entirety of the agreement between eSnail.ca Automated Mail Systems Canada Inc. and is contained within this Terms of Service Document.   This document supercedes over any prior agreements between eSnail.ca Automated Mail Systems Canada Inc. and you.  Different terms and conditions may apply to you when you use third party software or services in order to access our Service.  Both parties agree to submit to the jurisdiction of the courts located within the Province of British Columbia. If eSnail.ca Automated Mail Systems Canada Inc. for whatever reason does not choose to exercise or enforce any right or provision of the TOS this does not constitute a waiver of such rights or provisions.  
<p>&nbsp;</p>
17. SCOPE OF AGREEMENT
<p>&nbsp;</p>
These Terms of Service as well as the privacy statement encompass the complete and exclusive agreement between you and eSnail.ca Automated Mail Systems Canada Inc. in regards to our services.  This Agreement and the privacy statement updates all prior understandings and agreements.  
<p>&nbsp;</p>

18. SEVERABILITY OF TERMS
<p>&nbsp;</p>
The terms of this agreement are severable. If any term or provision is declared invalid or unenforceable then the remaining terms and provisions remain in full effect.
<p>&nbsp;</p>

19. ASSIGNMENT OF RIGHTS
<p>&nbsp;</p>
You may not transfer or assign your rights under this agreement whether through contract or verbal agreement.  eSnail.ca Automated Mail Systems Canada Inc. reserves the right to make this agreement void if an attempt is made to assign your rights under this agreement.  Attempts by your creditors or any third party to obtain an interest in your rights under this agreement shall render this agreement voidable at our discretion.
<p>&nbsp;</p>
19. BINDING NATURE OF AGREEMENT
<p>&nbsp;</p>
By applying for an eSnail.ca Automated Mail Systems Canada Inc. service through you acknowledge that you have read and agree to be bound by all terms and conditions of this agreement any pertinent rules or policies that are or may be established by eSnail.ca Automated Mail Systems Canada Inc.
<p>&nbsp;</p>


21. COPYRIGHT AND TRADEMARKS
<p>&nbsp;</p>
All contents of the service are Copyright © 2009 eSnail.ca Automated Mail Systems Canada Inc. and/or it's suppliers, c/o eSnail.ca PO BOX 19019, 2302 West 4th Ave. Vancouver, BC, V6K 1R.  All rights reserved.
<p>&nbsp;</p>
Any rights not expressly granted herein are reserved. 
</td>
<td width="3%"></td></tr></table>

</p>
</font>
</div> </td>

</tr>

 <tr><td align="right"><p><input type="checkbox" name="Ihavereadtheterms"><b>&nbsp;&nbsp;&nbsp;<font size="2">I have read and understood the Terms of Service</font></b></td></tr>
 </table>
 <p>&nbsp;</p>
<table>
<tr><td width=%100></td><td align="right">&nbsp;
<?php
require_once('recaptchalib.php');
$publickey = "6Le0UgoAAAAAAKQ26bo0oix4CSH8HsOnMO8tBgTB"; // you got this from the signup page
echo recaptcha_get_html($publickey);
?>
</td></tr>
 <tr><td></td><td>&nbsp;</td></tr>
 <tr><td></td><td align="right">
<input type="submit" value="Subscribe">
</td></tr>
 </table>




</right>
</td></tr>
</table>

</td>
		<td colspan="2" style="background-image: url('registerpage1_12.jpg');"></td>
	</tr>
	<tr>
		<td style="background-image: url('registerpage1_13.jpg');">
				</td>
		<td colspan="9">
			<img src="registerpage1_14.jpg" width="955" height="52" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="spacer.gif" width="69" height="1" alt=""></td>
		<td>
			<img src="spacer.gif" width="2" height="1" alt=""></td>
		<td>
			<img src="spacer.gif" width="264" height="1" alt=""></td>
		<td>
			<img src="spacer.gif" width="137" height="1" alt=""></td>
		<td>
			<img src="spacer.gif" width="110" height="1" alt=""></td>
		<td>
			<img src="spacer.gif" width="92" height="1" alt=""></td>
		<td>
			<img src="spacer.gif" width="150" height="1" alt=""></td>
		<td>
			<img src="spacer.gif" width="129" height="1" alt=""></td>
		<td>
			<img src="spacer.gif" width="26" height="1" alt=""></td>
		<td>
			<img src="spacer.gif" width="45" height="1" alt=""></td>
	</tr>
</table>
<!-- End ImageReady Slices -->
</body>
</html>
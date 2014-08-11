<?php
session_start();

if(isset($_SESSION['submitted_form_values'])){extract($_SESSION['submitted_form_values']);}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>

<head>
<title>eSnail.ca - Thank You</title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php print $character_set; ?>">
<STYLE TYPE="text/css">
<!--
H2
   {
   color:black;
   font-size:14pt;
   font-style:bold;
   font-family:Geneva, Arial, Helvetica, sans-serif
      }
H3
   {
   color:black;
   font-size:10pt;
   text-align:left
   font-family:Geneva, Arial, Helvetica, sans-serif
      }
-->
</STYLE>
</head>

<center>
<body bgcolor="#afc0f0" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<div>
<center>
<b>Thank you <?php if(isset($_REQUEST['firstname'])){print stripslashes($_REQUEST['firstname']);} ?>&nbsp;<?php if(isset($_REQUEST['lastname'])){print stripslashes($_REQUEST['lastname']);} ?></b>
<br>Your message has been sent
<p><a href="<?php print $continue; ?>">Click here to continue</a></p>
</center>
</div>

</body>
</html>
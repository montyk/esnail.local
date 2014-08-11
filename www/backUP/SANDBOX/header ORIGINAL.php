<?php
$env = 'dev';
	if($env=='dev'){ $base = '/esnail/'; }
		else if($env=='prod') { $base = '/projects/esnail/'; }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?=$base;?>css/site.css" type="text/css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<!-- if index page -->
<link rel="stylesheet" href="<?=$base;?>js/nivo-slider/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?=$base;?>js/nivo-slider/themes/default/default.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?=$base;?>js/nivo-slider/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="<?=$base;?>js/jquery.scrollTo-min.js"></script>
<!-- end of the index thingies -->
<script type="text/javascript">

function goToByScroll(id){
     	$('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');
}

    $(document).ready(function() {
        $('#process').nivoSlider({
			effect: 'fade',
			pauseOnHoover: true,
			pauseTime: 5000	
		});

		$(".testimonials-table tr").hover(function(){
			var imgobj = $(this).find('img');
			var imgid = imgobj.attr('id');
			imgobj.attr('src', '<?=$base;?>img/testimonials/'+imgid+'1.jpg');	
		},
			function(){
			var imgobj = $(this).find('img');
			var imgid = imgobj.attr('id');
			imgobj.attr('src', '<?=$base;?>img/testimonials/'+imgid+'0.jpg');
		});
		
    });
</script>
<!-- -->
<title>eSnail.ca - We put mail in e-mail</title>
</head>

<body>

<div class="topbar">
	<div class="wrapper">
        <!-- beginning of login-box" -->
		<ul class="topbar-items">
        	<li id="login-button"><a href="#login-box">Existing user?</a></li>
            <li id="register-button"><a href="<?=$base;?>register/">Try it for free! Register now!</a></li>      
        </ul>
        <div class="clear"></div>
        <!-- end of login box-->
    </div>
</div>
<div class="clear"></div>
<div class="header">
	<div class="wrapper">
    	<div class="logo">
            <a href="<?=$base;?>">
                <img src="<?=$base;?>img/logo.png" alt="eSnail" />
            </a>
        </div>
        
        <div class="login-box" id="login-box">
            <form action="#" method="POST" name="login">
            <table class="login-table" border="0" cellspacing="0" cellpadding="0">
            	<tr>
                	<td>
                    	<label for="username">Username / E-mail: </label>
                    </td>
                	<td>
                    	<input type="text" id="username" name="username" />
                    </td>
                </tr>
            	<tr>
                	<td>
                    	<label for="password">Password: </label>
                    </td>
                	<td>
                    	<input type="password" id="password" name="password" />
                    </td>
                </tr>
                <tr>
                	<td colspan="2">
                    	Remember my credentials <input type="checkbox" id="remember" name="remember" />
                    </td>
                </tr>
                <tr>
                	<td></td>
                    <td><input type="button" name="login" id="login" value="Check mail" /></td>
                </tr>              
            </table>
            <p><a href="#">Can't access your account?</a></p>
            </form>           
        </div>
        
        <div class="clear"></div>
        <div id="menu">
        	<ul>
            	<li <?php if(strpos($_SERVER['SCRIPT_NAME'], 'how-it-works')) { echo 'class="active-link"'; } ?>><a href="<?=$base;?>how-it-works/">How it works</a></li>
            	<li <?php if(strpos($_SERVER['SCRIPT_NAME'], 'plans')) { echo 'class="active-link"'; } ?>><a href="<?=$base;?>plans/">Plans</a></li>
            	<li <?php if(strpos($_SERVER['SCRIPT_NAME'], 'support')) { echo 'class="active-link"'; } ?>><a href="<?=$base;?>support/">Support</a></li>
            	<li <?php if(strpos($_SERVER['SCRIPT_NAME'], 'virtual-po-box')) { echo 'class="active-link"'; } ?>><a href="<?=$base;?>virtual-po-box/">Virtual PO Box</a></li>
            	<li <?php if(strpos($_SERVER['SCRIPT_NAME'], 'security')) { echo 'class="active-link"'; } ?>><a href="<?=$base;?>security/">Security</a></li>
            	<li <?php if(strpos($_SERVER['SCRIPT_NAME'], 'about')) { echo 'class="active-link"'; } ?> class="last-child"><a href="<?=$base;?>about-us/">About us</a></li>                                                                               
            </ul>
        </div>
        <div class="clear"></div>
        
    </div>
</div>
<!-- end of header -->
<div class="content">
	<div class="wrapper">
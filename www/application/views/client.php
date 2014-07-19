<!doctype html>
<html xmlns:og="http://ogp.me/ns#"
      xmlns:fb="https://www.facebook.com/2008/fbml" lang="en">
<head>
    <title><?php echo $title; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
    <?php
        echo HTML::script('http://code.jquery.com/jquery-1.7.min.js');
        echo HTML::script('media/js/jquery.nivo.slider.pack.js');
        echo HTML::script('media/js/jquery.scrollTo-min.js');
        echo HTML::script('media/js/scripts.js');

        echo HTML::style('media/css/reset.css');
        echo HTML::style('media/css/util.css');
        echo HTML::style('media/css/style.css');
        echo HTML::style('media/css/nivo-slider.css');
        echo HTML::style('media/css/default.css');
    ?>
</head>
<body class='front'>
    <?php echo $header; ?>
    <div class='content'>
        <div id="menu">
            <ul>
                <li <?php if ($action == 'how') echo 'class="active-link"'; ?>><a href="/how.html" data-remote="true" class="tab">How it works</a></li>
                <li <?php if ($action == 'plans') echo 'class="active-link"'; ?>><a href="/plans.html" data-remote="true" class="tab">Plans</a></li>
                <li <?php if ($action == 'support') echo 'class="active-link"'; ?>><a href="/support.html" data-remote="true" class="tab">Support</a></li>
                <li <?php if ($action == 'box') echo 'class="active-link"'; ?>><a href="/box.html" data-remote="true" class="tab">Virtual PO Box</a></li>
                <li <?php if ($action == 'security') echo 'class="active-link"'; ?>><a href="/security.html" data-remote="true" class="tab">Security</a></li>
                <li <?php if ($action == 'about') echo 'class="active-link"'; ?>><a href="/about.html" data-remote="true" class="tab">About us</a></li>
            </ul>
        </div>
        <div class="wrapper">
            <div class="main"><?php echo $content; ?></div>
            <div class="more"></div>
        </div>
    </div>
    <?php echo $footer; ?>
</body>
</html>

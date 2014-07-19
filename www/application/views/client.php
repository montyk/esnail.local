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
                <li <?php if ($controller == 'Mail') echo 'class="active-link"'; ?>><a href="/client/mail" class="tab">Mailing</a></li>
                <li <?php if ($controller == 'Account') echo 'class="active-link"'; ?>><a href="/client/account" class="tab">Account</a></li>
                <li <?php if ($controller == 'Business') echo 'class="active-link"'; ?>><a href="/client/business" class="tab">Business</a></li>
                <li <?php if ($controller == 'Plan') echo 'class="active-link"'; ?>><a href="/client/plan" class="tab">Plan</a></li>
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

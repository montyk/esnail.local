<!doctype html>
<html xmlns:og="http://ogp.me/ns#"
      xmlns:fb="https://www.facebook.com/2008/fbml" lang="en">
<head>
    <title><?php echo $title; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
    <?php
        echo HTML::script('http://code.jquery.com/jquery-1.7.min.js');
        echo HTML::script('media/js/bootstrap.min.js');
        echo HTML::script('media/js/bootstrap.file-input.js');
        echo HTML::style('media/css/reset.css');
        echo HTML::style('media/css/util.css');
        echo HTML::style('media/css/bootstrap.min.css');
        echo HTML::style('media/css/sticky-footer-navbar.css');
        echo HTML::style('media/css/admin.css');
    ?>
</head>
<body class='front'>
    <?php echo $header; ?>

    <div class="container">
        <?php echo $content; ?>
    </div>

    <?php echo $footer; ?>
</body>
</html>

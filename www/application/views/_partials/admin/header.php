<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">eSnail.ca</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-navbar-collapse">
            <ul class="nav navbar-nav">
                <li<?=($controller == 'User') ? ' class="active"' : ''; ?>><a href="/admin/user">Users</a></li>
                <li<?=($controller == 'Mail') ? ' class="active"' : ''; ?>><a href="/admin/mail">Mails</a></li>
                <li<?=($controller == 'Plan') ? ' class="active"' : ''; ?>><a href="/admin/plan">Plans</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Manager Mode</a></li>
                        <li><a href="#">Client Mode</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Exit</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
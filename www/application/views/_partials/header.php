<div class="topbar">
    <div class="wrapper">
        <ul class="topbar-items">
            <li id="login-button"><a href="#login-box">Existing user?</a></li>
            <li id="register-button"><a href="/auth/register">Try it for free! Register now!</a></li>
        </ul>
    </div>
</div>
<div class="header">
    <div class="wrapper">
        <div class="logo">
            <a href="/index.html" data-remote="true"><img src="/media/images/logo.png" alt="eSnail"/></a>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;Operating as eSnail.ca Automated Mail Systems Inc.
        </div>

        <div class="login-box" id="login-box">
            <form action="/auth/login" method="POST">
                <table class="login-table" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td>
                            <label for="username">Username / E-mail: </label>
                        </td>
                        <td>
                            <input type="text" id="username" name="username"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="password">Password: </label>
                        </td>
                        <td>
                            <input type="password" id="password" name="password"/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            Remember my credentials <input type="checkbox" id="remember" name="remember"/>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="login" id="login" value="Check mail"/></td>
                    </tr>
                </table>
                <p><a href="#">Can't access your account?</a></p>
            </form>
        </div>
    </div>
</div>
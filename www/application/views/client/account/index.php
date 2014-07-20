<div class="content-box">
    <h1>Account settings</h1>

    <form action="/client/account/update" method="post">
        <table id="register-table">
            <tr>
                <td><label for="firstName">First Name: </label></td>
                <td><input type="text" name="firstname" id="firstname" value="<?=$user->firstname; ?>"/></td>
            </tr>
            <tr>
                <td><label for="lastname">Last Name: </label></td>
                <td><input type="text" name="lastname" id="lastname" value="<?=$user->lastname; ?>"/></td>
            </tr>
            <tr>
                <td><label for="email">E-mail: </label></td>
                <td><input type="text" name="email" id="email" value="<?=$user->email; ?>" autocomplete="off"/></td>
            </tr>
            <tr>
                <td><label for="email_confirm">Confirm E-mail: </label></td>
                <td><input type="text" name="email_confirm" id="email_confirm" value="<?=$user->email; ?>" autocomplete="off"/></td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="password" name="password" id="password" autocomplete="off"/></td>
            </tr>
            <tr>
                <td><label for="password_confirm">Confirm Password:</label></td>
                <td><input type="password" name="password_confirm" id="password_confirm" autocomplete="off"/></td>
            </tr>
            <tr>
                <td><label for="promo">Promotion Code:</label></td>
                <td><input type="text" name="promo" id="promo" value="<?=$user->promo; ?>"/></td>
            </tr>
            <tr>
                <td class="subsectionTitle" colspan="2">
                    <input type="submit" value="Update" class="order-button"/>
                </td>
            </tr>
        </table>
    </form>
</div>
<div class="content-box">
    <h1>Start your eSnail.ca account</h1>

    <form action="/auth/register/" method="post">
        <table id="register-table">
            <tr>
                <td colspan="3" class="subsectionTitle">We would like to get to know you!</td>
            </tr>
            <tr>
                <td><label for="firstName">First Name: </label></td>
                <td><input type="text" name="firstname" id="firstname"/></td>
                <td class="td-check" id="firstname-check"></td>
            </tr>
            <tr>
                <td><label for="lastname">Last Name: </label></td>
                <td><input type="text" name="lastname" id="lastname"/></td>
                <td class="td-check" id="lastname-check"></td>
            </tr>
            <tr>
                <td colspan="3" class="subsectionTitle">Your login details.</td>
            <tr>
            <tr>
                <td><label for="email">E-mail: </label></td>
                <td><input type="text" name="email" id="email"/></td>
                <td class="td-check" id="email-check"></td>
            </tr>
            <tr>
                <td><label for="email_confirm">Confirm E-mail: </label></td>
                <td><input type="text" name="email_confirm" id="email_confirm"/></td>
                <td class="td-check" id="cemail-check"></td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="password" name="password" id="password"/></td>
                <td class="td-check" id="pass-check"></td>
            </tr>
            <tr>
                <td><label for="password_confirm">Confirm Password:</label></td>
                <td><input type="password" name="password_confirm" id="password_confirm"/></td>
                <td class="td-check" id="cpass-check"></td>
            </tr>
            <tr>
                <td colspan="3" class="subsectionTitle">At eSnail we like to Save you Money, did you grab a promotional
                    code?
                </td>
            </tr>
            <tr>
                <td><label for="promo">Promotion Code:</label></td>
                <td><input type="text" name="promo" id="promo"/></td>
            </tr>
            <tr>
                <td class="subsectionTitle" colspan="3">
                    By clicking Sign Up button I confirm, that I have read and understood the
                    <a href="/legal.html" data-remote="true">Terms of Service.</a>
                </td>
                <td class="td-check" id="tos-check"></td>
            </tr>
            <tr class="registerStep2">
                <td colspan="3" class="subsectionTitle">
                    Everything checks out so far!<br/>
                    <label for="plan">Choose the service plan.</label>
                </td>
            </tr>
            <tr>
                <td class="subsectionTitle" colspan="3" >
                    <input type="submit" value="Sign Up" class="order-button"/>
                </td>
            </tr>
        </table>
    </form>
</div>
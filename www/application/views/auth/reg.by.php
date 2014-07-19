<?php
function curPlan($planNr) {
    $plan = isset($_GET['plan']) ? $_GET['plan'] : 1;
    if ($planNr == $plan) echo 'selected="selected"';
}
?>
<div class="content-box blog-page-box">
    <h1>Start your eSnail.ca account</h1>
    <table id="register-table">
        <form name="register_form" id="register_form">
            <tr>
                <td colspan="2" class="subsectionTitle">We would like to get to know you!</td>
            <tr>
                <td><label for="firstName">First Name: </label></td>
                <td><input type="text" name="firstname" id="firstname" /></td>
                <td class="td-check" id="firstname-check"></td>
            </tr>
            <tr>
                <td><label for="lastname">Last Name: </label></td>
                <td><input type="text" name="lastname" id="lastname" /></td>
                <td class="td-check" id="lastname-check"></td>
            </tr>
            <tr>
                <td colspan="2" class="subsectionTitle">Your login details.</td>
            <tr>
            <tr>
                <td><label for="email">E-mail: </label></td>
                <td><input type="text" name="email" id="email" /></td>
                <td class="td-check" id="email-check"></td>
            </tr>
            <tr>
                <td><label for="email_confirm">Confirm E-mail: </label></td>
                <td><input type="text" name="email_confirm" id="email_confirm" /></td>
                <td class="td-check" id="cemail-check"></td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="password" name="password" id="password" /></td>
                <td class="td-check" id="pass-check"></td>
            </tr>
            <tr>
                <td><label for="password_confirm">Confirm Password:</label></td>
                <td><input type="password" name="password_confirm" id="password_confirm" /></td>
                <td class="td-check" id="cpass-check"></td>
            </tr>
            <tr>
                <td colspan="2" class="subsectionTitle">At eSnail we like to Save you Money, did you grab a promotional code?</td>
            </tr>
            <tr>
                <td><label for="promotionCode">Promotion Code:</label></td>
                <td><input type="text" name="promotionCode" id="promotionCode" /></td>
            </tr>
            <tr>
                <td class="subsectionTitle">
                    <input type="checkbox" name="tos" id="tos" /><label for="tos">I have read and understood the</label>  <a href="/pages/legal"  data-remote="true">Terms of Service.</a>
                </td>
                <td class="td-check" id="tos-check"></td>
            </tr>
            <tr class="registerStep2">
                <td colspan="2" class="subsectionTitle">
                    Everything checks out so far!<br />
                    <label for="plan">Choose the service plan.</label>
                </td>
            </tr>
        </form>

        <tr class="registerStep2">
            <td colspan="2">
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="on0" value="Subscription Option" />
                    <select name="os0" id="plan">
                        <option value="1" <?php curPlan(1); ?>>Backpacker - $5.00/mo</option>
                        <option value="6" <?php curPlan(6); ?>>Backpacker - $50.00/year</option>
                        <option value="2" <?php curPlan(2); ?>>Basic - $15/mo</option>
                        <option value="3" <?php curPlan(3); ?>>Personal - $19/mo</option>
                        <option value="4" <?php curPlan(4); ?>>Family - $25/mo</option>
                        <option value="5" <?php curPlan(5); ?>>Business - $54.99/mo</option>
                    </select><br />

                    <input onclick=CalculateOrder(this.form) type="image" src="https://www.paypal.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">

                    <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    <input type="hidden" name="cmd" value="_xclick-subscriptions">
                    <input type="hidden" name="business" value="postmaster@esnail.ca">
                    <input type="hidden" name="item_name" value="">
                    <input type="hidden" name="item_number">
                    <input type="hidden" name="no_shipping" value="0">
                    <input type="hidden" name="return" value="http://www.esnail.ca/success/">
                    <input type="hidden" name="cancel_return" value="http://www.esnail.ca/cancel/">
                    <input type="hidden" name="no_note" value="1">
                    <input type="hidden" name="currency_code" value="CAD">
                    <input type="hidden" name="lc" value="US">
                    <input type="hidden" name="bn" value="PP-SubscriptionsBF">
                    <input type="hidden" name="a3">
                    <input type="hidden" name="p3" value="1">
                    <input type="hidden" name="t3" value="M">
                    <input type="hidden" name="src" value="1">
                    <input type="hidden" name="sra" value="1">
                    <input type="hidden" name="on0" id="on0" />
                </form>

            </td>
        </tr>
        <tr>
            <td class="subsectionTitle"><input type="button" id="nextStep" value="Next Step!" class="order-button" /></td>
        </tr>
    </table>
</div>

<script type="text/javascript">

    function CalculateOrder(form) {
        if ($("#plan").val() == 1) {
            form.a3.value = 5.00;
            form.item_number.value = "On-Call Monthly";
        }

        if ($("#plan").val() == 2) {
            form.a3.value = 15.00;
            form.item_number.value = "Basic-YM";
        }

        if ($("#plan").val() == 3) {
            form.a3.value = 19.00;
            form.item_number.value = "Personal-YM";
        }

        if ($("#plan").val() == 4) {
            form.a3.value = 25.00;
            form.item_number.value = "Family-YM";
        }

        if ($("#plan").val() == 5) {
            form.a3.value = 54.99;
            form.item_number.value = "Business-YM";
        }

        if ($("#plan").val() == 6) {
            form.a3.value = 50.00;
            form.item_number.value = "On-Call Yearly";
            form.item_name.value = "Yearly Membership";
            form.t3.value = "Y"
        } else {
            form.item_name.value = "Monthly Membership";
            form.t3.value = "M";
        }

        return false
    }

    check = {

        template: function(fieldId, status) {
            checkCell = $("#"+fieldId+"-check");
            if (status == 1) {
                checkCell.html('<img src="/media/images/icons/tick.png">');
                checkCell.attr('status', 1);
            } else {
                checkCell.html('<img src="/media/images/icons/exclamation.png">');
                checkCell.attr('status', 0);
            }
        },

        names: function() {
            // Create the array with fields which need to be checked for being empty
            fields = ['firstName', 'lastName', 'email', 'pass'];
            // Loop through them
            for (var field in fields) {
                fieldId = fields[field];
                if ($("#"+fieldId).val().length === 0) {
                    check.template(fieldId, 0);
                } else {
                    check.template(fieldId, 1);
                }
            }
        },

        confirms: function(field1, field2) {
            if ($("#"+field1).val() == $("#"+field2).val() && $("#" + field1).val().length != 0) {
                check.template(field1, 1);
                check.template(field2, 1);
            } else {
                check.template(field1, 0);
                check.template(field2, 0);
            }
        },

        nextstep: function() {
            if ($("td.td-check[status='0']").length == 0) {
                $("#register-table tr").hide();
                $("#register-table tr.registerStep2").show();
                $.ajax({
                    type:    "POST",
                    url:     "/register/step2/",
                    data:    $("#register_form").serialize(),
                    success: function(data){ }
                })
            }
        },

        tos: function(){
            if ($("#tos").is(":checked")) {
                check.template('tos', 1);
            } else {
                check.template('tos', 0);
            }
        }
    }

    $(document).ready(function() {
        $("#nextStep").click(function() {
            check.names();
            check.confirms("pass", "cpass");
            check.confirms("email", "cemail");
            check.tos();
            check.nextstep();

        });
    });
</script>

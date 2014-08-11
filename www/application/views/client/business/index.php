<div class="content-box">
    <?php if (count($business) > 0) { ?>
    <h1>Your Business</h1>
        <br><br><br>
        <ul>
            <?php foreach($business as $b) { ?>
            <li style="margin-left: 50px; margin-bottom: 10px;"><?= $b->name; ?> <a href="/client/business/delete/<?=$b->id; ?>">[ x ]</a></li>
            <?php } ?>
        </ul>
        <br><br><br>
    <?php } ?>

    <h1>Add More Business</h1>
    <form method="post" action="/client/business/new/" accept-charset="utf-8">
        <table id="register-table">
            <tr>
                <td><label for="name">Business:</label></td>
                <td><input id="name" type="text" name="name" /></td>
                <td class="td-check" id="name-check"></td>
            </tr>
            <tr>
                <td class="subsectionTitle">
                    <input class="order-button" type="submit" value="Add">
                </td>
        </table>
    </form>
</div>


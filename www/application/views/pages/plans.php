<div class="content-box plans-page-box">
    <h1>Plans</h1>
    <p>Not every business or individual has the same needs.  Some of us are looking for a solution to not having to drive out to that laneway PO box, some are moving away for college and aren't interested in forwarding their mail for years, still others are looking to relieve the workload that physical mail handling places on their company.</p>
    <p>So whether you're expecting hundreds of pieces of mail a month or just one, we've got the plan that suits you best.</p>

    <table class="plans-table">

        <tr>
            <td></td>
            <?php foreach(ORM::factory('Plan')->find_all() as $plan) { ?>
                <td class="plan-<?=$plan->id; ?>"><?=$plan->name; ?></td>
            <?php } ?>
        </tr>

        <tr class="plan-description">
            <td></td>
            <?php foreach(ORM::factory('Plan')->find_all() as $plan) { ?>
                <td class="plan-<?=$plan->id; ?>"><?=$plan->description; ?></td>
            <?php } ?>
        </tr>

        <tr>
            <td>Included Scans per month</td>
            <?php foreach(ORM::factory('Plan')->find_all() as $plan) { ?>
                <td class="plan-<?=$plan->id; ?>"><?=$plan->scans; ?></td>
            <?php } ?>
        </tr>

        <tr>
            <td>No. of names on plan</td>
            <?php foreach(ORM::factory('Plan')->find_all() as $plan) { ?>
                <td class="plan-<?=$plan->id; ?>"><?=$plan->names; ?></td>
            <?php } ?>
        </tr>

        <tr class="plan-prices">
            <td>Price</td>
            <?php foreach(ORM::factory('Plan')->find_all() as $plan) { ?>
                <td class="plan-<?=$plan->id; ?>">
                    $<?=$plan->monthFee; ?>/mo
                    <?php if ($plan->yearFee > 0) { ?>
                        <br><span style="font-weight: normal;">or</span><br>
                        $<?=$plan->yearFee; ?>/year
                    <?php } ?>
                </td>
            <?php } ?>
        </tr>

        <tr>
            <td></td>

            <?php foreach(ORM::factory('Plan')->find_all() as $plan) { ?>
                <td class="plan-<?=$plan->id; ?>">
                    <a href="/client/plan/set/<?=$plan->id; ?>" class="order-button">Order Now</a>
                </td>
            <?php } ?>
        </tr>

    </table>
    <p class="legend">* Each piece of mail we receive and scan only costs you $1.00 in addition to the monthly fee.</p>
    <br />
    <h3>Included in all plans</h3>
    <ul>
        <li>Storage of your physical mail for up to three months</li>
        <li>Automatic secure shredding of old mail</li>
        <li>Unlimited Archiving of all your eLetters on our server</li>
        <li>Your mail stored in searchable PDFs</li>
        <li>Daily, weekly or up to the minute email digests updating you on when mail arrives in your eLetter box.</li>
        <li>Automatic mail forwarding to multiple destinations</li>
        <li>Forwarding of cheques at no charge</li>
        <li>Full Color Scanning</li>
        <li>Secure Shredding of old mail</li>
        <li>Shipping Calculators</li>
        <li>Free scanning of all received mail</li>
    </ul>
    <br />
    <h3>Our Other Services</h3>
    <p>eSnail.ca offers all the services that a regular P.O. box would offer and then some- we offer the following services ready to order when you need them:</p>
    <ul>
        <li>Package forwarding - $2 plus shipping</li>
        <li>Document forwarding - $1 per piece of mail</li>
        <li>Scan and Forward Magazines* - $3.00</li>
    </ul>
    <p class="legend">* This service requires that we remove the bindings on the magazines.</p>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $(".plans-table td").hover(
            function(){
                var classname = $(this).attr('class');
                $('.'+classname).css("background", "#f8f8f8");
            },
            function(){
                var classname = $(this).attr('class');
                $('.'+classname).css("background", "#fff");
            })
    });
</script>
<div class="content-box">
    <h1>Mails</h1>
    <div class="bs-example">
        <?php if (count($mails) > 0) { ?>
            <ul class="filter">
                <li><a href="#">New</a></li>
                <li><a href="#">Archived</a></li>
                <li><a href="#">Hold</a></li>
                <li class="active"><a href="#">All</a></li>
            </ul>
        <?php } ?>
        <table class="table table-hover">
            <tbody>
            <?php foreach ($mails as $mail) { ?>
                <tr>
                    <td  class="<?=($mail->archived) ? 'archived' : ''; ?> <?=($mail->viewed) ? '' : 'new'; ?> <?=($mail->delivered) ? 'delivered' : ''; ?> <?=($mail->held) ? 'held' : ''; ?>">
                        <div class="row-block">
                            <div class="number">#<?=$mail->id; ?></div>
                            <div class="date"><?=$mail->created_at; ?></div>
                            <div class="kind"><?=($mail->kind == 'p') ? 'Parcel' : 'Mail'; ?></div>
                            <div class="from-to-block">
                                From: <?=$mail->from; ?> To: <?=$mail->to; ?>
                            </div>
                            <div class="status-block">Archived: <a href="/client/mail/archive/<?= $mail->id; ?>"><?=$mail->archived; ?></a></div>
                            <div class="status-block">On hold: <a href="/client/mail/hold/<?= $mail->id; ?>"><?=$mail->held; ?></a></div>
                            <div class="status-block">Delivered: <a href="/client/mail/deliver/<?= $mail->id; ?>"><?=$mail->delivered; ?></a></div>
                        </div>
                        <div class="row-block">
                            <div class="subject-block"><a href="/client/mail/view/<?= $mail->id; ?>"><?=$mail->subject; ?></a></div>
                        </div>
                        <div class="row-block">
                            <div class="describe-me"><a href="/client/mail/view/<?= $mail->id; ?>"><?=$mail->description; ?></a></div>
                        </div>
                    </td>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
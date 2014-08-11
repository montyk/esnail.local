<div class="content-box mail-information">
    <h1><?= ($mail->kind == 'p') ? 'Parcel' : 'Mail'; ?>: <?=$mail->subject; ?></h1>

    <p class="lead">
        <span class="holder-span">
            <span class="from-to">from: <?=$mail->from; ?>
               to: <?=$mail->to; ?>
            </span>
            <span class="status">
               <a href="/client/mail/archive/<?= $mail->id; ?>">Set <?= $mail->archived ? 'not' : ''; ?> archived</a> |
               <a href="/client/mail/hold/<?= $mail->id; ?>">Set <?= $mail->held ? 'Unhold' : 'Hold'; ?></a> |
               <a href="/client/mail/deliver/<?= $mail->id; ?>">Set <?= $mail->delivered ? 'not' : ''; ?> delivered</a>
            </span>
        </span>
        <?=$mail->description; ?>
    </p>
    <span class="date"><?=$mail->created_at; ?></span>
    <?php if($mail->files->count_all() > 0) { ?>
        <h2>Documents</h2>
    <?php } ?>
    <ul class="documents">
        <? foreach($mail->files->find_all() as $file) { ?>
            <li>
                Direct link: <a href="/upload/<?=$file->file; ?>" target="_blank"><?=$file->file; ?></a><br>
                <iframe src="/upload/<?=$file->file; ?>" frameborder="0" width="100%" height="300"></iframe>
            </li>
        <?php } ?>
    </ul>
</div>
<script>$('input[type=file]').bootstrapFileInput();</script>

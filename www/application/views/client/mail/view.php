<div class="page-header">
    <h1><?= ($mail->kind == 'p') ? 'Parcel' : 'Mail'; ?>: <?=$mail->subject; ?></h1>
</div>
<p class="lead">
    <?=$mail->created_at; ?><br>
    <?=$mail->description; ?>
</p>
from: <?=$mail->from; ?><br>
to: <?=$mail->to; ?><br><br><br>
<p>
    <a href="/client/mail/archive/<?= $mail->id; ?>">Set <?= $mail->archived ? 'not' : ''; ?> archived</a> |
    <a href="/client/mail/hold/<?= $mail->id; ?>">Set <?= $mail->held ? 'Unhold' : 'Hold'; ?></a> |
    <a href="/client/mail/deliver/<?= $mail->id; ?>">Set <?= $mail->delivered ? 'not' : ''; ?> delivered</a>
</p>
<?php if($mail->files->count_all() > 0) { ?>
    <br/>
    <br/>
    <br/>
    <br/>
    <h2>Documents</h2>
<?php } ?>
<ul>
    <? foreach($mail->files->find_all() as $file) { ?>
        <li>
            Direct link: <a href="/upload/<?=$file->file; ?>" target="_blank"><?=$file->file; ?></a><br><br><br>
            <iframe src="/upload/<?=$file->file; ?>" frameborder="0" width="100%" height="300"></iframe>
        </li>
    <?php } ?>
</ul>
<script>$('input[type=file]').bootstrapFileInput();</script>

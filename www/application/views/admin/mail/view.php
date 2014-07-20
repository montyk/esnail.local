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
    <a href="/admin/mail/archive/<?= $mail->id; ?>">Set <?= $mail->archived ? 'not' : ''; ?> archived</a> |
    <a href="/admin/mail/hold/<?= $mail->id; ?>">Set <?= $mail->held ? 'Unhold' : 'Hold'; ?></a> |
    <a href="/admin/mail/deliver/<?= $mail->id; ?>">Set <?= $mail->delivered ? 'not' : ''; ?> delivered</a> |
    <a href="/admin/mail/delete/<?= $mail->id; ?>">delete</a>
</p>
<form action="/admin/file/upload" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <button type="submit" class="btn btn-default col-sm-2">Upload Document</button>
        <div class="col-sm-10">
            <input type="file" name="file" data-filename-placement="inside"/>
            <input type="hidden" name="mail_id" value="<?= $mail->id; ?>"/>
        </div>
    </div>

</form>
<?php if($mail->files->count_all() > 0) { ?>
    <br/>
    <br/>
    <br/>
    <br/>
    <h2>Documents</h2>
<?php } ?>
<ul>
    <? foreach($mail->files->find_all() as $file) { ?>
        <li><a href="/upload/<?=$file->file; ?>" target="_blank"><?=$file->file; ?></a> <a href="/admin/file/delete/<?=$file->id?>">[ x ]</a></li>
    <?php } ?>
</ul>
<script>$('input[type=file]').bootstrapFileInput();</script>

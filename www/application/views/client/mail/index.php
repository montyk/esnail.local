<div class="page-header">
    <h1>Mails</h1>
</div>
<p class="lead">Manage mails</p>
<div class="bs-example">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>Date</th>
            <th>Subject</th>
            <th>Description</th>
            <th>From</th>
            <th>To</th>
            <th>Kind</th>
            <th>Archived</th>
            <th>On hold</th>
            <th>Delivered</th>
            <th>What do you want?</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($mails as $mail) { ?>
            <tr>
                <td><?= $mail->id; ?></td>
                <th><?= $mail->created_at; ?></th>
                <td><a href="/client/mail/view/<?= $mail->id; ?>"><?= $mail->subject; ?></a></td>
                <td class="mailDescription"><div><?= $mail->description; ?></div></td>
                <td><?= $mail->from; ?></td>
                <td><?= $mail->to; ?></td>
                <td><?= ($mail->kind == 'p') ? 'Parcel' : 'Mail'; ?></td>
                <th><a href="/client/mail/archive/<?= $mail->id; ?>"><?= $mail->archived; ?></a></th>
                <th><a href="/client/mail/hold/<?= $mail->id; ?>"><?= $mail->held; ?></a></th>
                <th><a href="/client/mail/deliver/<?= $mail->id; ?>"><?= $mail->delivered; ?></a></th>
                <td><a href="/client/mail/delete/<?= $mail->id; ?>">delete</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
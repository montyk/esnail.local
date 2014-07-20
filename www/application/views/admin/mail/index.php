<div class="page-header">
    <h1>Mails</h1>
</div>
<p class="lead">Manage mails <a href="/admin/mail/new" class="pull-right"> + new mail</a></p>
<div class="bs-example">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>Date</th>
            <th>Subject</th>
            <th>User</th>
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
                <td><a href="/admin/mail/view/<?= $mail->id; ?>"><?= $mail->subject; ?></a></td>
                <td class="mailUser"><?= $mail->user->firstname . ' ' . $mail->user->lastname. ' &lt;' . $mail->user->username . '&gt;'; ?></td>
                <td><?= $mail->from; ?></td>
                <td><?= $mail->to; ?></td>
                <td><?= ($mail->kind == 'p') ? 'Parcel' : 'Mail'; ?></td>
                <th><a href="/admin/mail/archive/<?= $mail->id; ?>"><?= $mail->archived; ?></a></th>
                <th><a href="/admin/mail/hold/<?= $mail->id; ?>"><?= $mail->held; ?></a></th>
                <th><a href="/admin/mail/deliver/<?= $mail->id; ?>"><?= $mail->delivered; ?></a></th>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="to" data-toggle="dropdown">
                            I'd like to <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="to">
                            <li><a href="/admin/mail/edit/<?= $mail->id; ?>">edit</a></li>
                            <li><a href="/admin/mail/delete/<?= $mail->id; ?>">delete</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
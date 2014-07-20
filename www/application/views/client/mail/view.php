<?=$mail->subject; ?>
<?=$mail->description; ?>
<?=$mail->from; ?>
<?=$mail->to; ?>
<?=$mail->created_at; ?>


<?= ($mail->kind == 'p') ? 'Parcel' : 'Mail'; ?>

<a href="/client/mail/archive/<?= $mail->id; ?>">Set <?= $mail->archived ? 'not' : ''; ?> archived</a>
<th><a href="/client/mail/hold/<?= $mail->id; ?>">Set <?= $mail->held ? 'Unhold' : 'Hold'; ?></a></th>
<th><a href="/client/mail/deliver/<?= $mail->id; ?>">Set <?= $mail->delivered ? 'not' : ''; ?> delivered</a></th>
<td><a href="/client/mail/delete/<?= $mail->id; ?>">delete</a></td>
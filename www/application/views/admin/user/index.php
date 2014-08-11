<div class="page-header">
    <h1>Users</h1>
</div>
<p class="lead">Manage users <a href="/admin/user/add/" class="pull-right"> + add user</a></p>
<div class="bs-example">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>Promo</th>
            <th>What do you want?</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user) { ?>
            <tr>
                <td><?= $user->id; ?></td>
                <td><?= $user->firstname; ?></td>
                <td><?= $user->lastname; ?></td>
                <td><?= $user->username; ?></td>
                <td><?= $user->promo; ?></td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="to" data-toggle="dropdown">
                            I'd like to <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="to">
                            <li><a href="/admin/user/admin/<?= $user->id; ?>"><?=($user->roles->where('name', '=', 'admin')->find()->loaded()) ? 'un' : ''; ?>set admin</a></li>

                            <li><a href="/admin/user/block/<?= $user->id; ?>"><?=($user->blocked) ? 'un' : ''; ?>block</a></li>
                            <li><a href="/admin/user/edit/<?= $user->id; ?>">edit</a></li>
                            <li><a href="/admin/user/delete/<?= $user->id; ?>">delete</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<div class="page-header">
    <h1>Plans</h1>
</div>
<p class="lead">Manage plans <a href="/admin/plan/new" class="pull-right"> + add plan</a></p>


<div class="bs-example">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
            <th>Scans</th>
            <th>Names</th>
            <th>Month Fee</th>
            <th>Year Fee</th>
            <th>What do you want?</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($plans as $plan) { ?>
            <tr>
                <td><?= $plan->id; ?></td>
                <td><?= $plan->name; ?></td>
                <td><?= $plan->description; ?></td>
                <td><?= $plan->scans; ?></td>
                <td><?= $plan->names; ?></td>
                <td><?= $plan->monthFee; ?></td>
                <td><?= $plan->yearFee; ?></td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="to" data-toggle="dropdown">
                            I'd like to <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="to">
                            <li><a href="/admin/plan/edit/<?= $plan->id; ?>">edit</a></li>
                            <li><a href="/admin/plan/delete/<?= $plan->id; ?>">delete</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
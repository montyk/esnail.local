<div class="page-header">
    <h1>Edit</h1>
</div>
<p class="lead">Edit plan</p>

<form action="/admin/plan/update/" method="post" class="form-horizontal" role="form">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" value="<?=$plan->name; ?>">
            <input type="hidden" name="id" value="<?=$plan->id; ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="description" class="col-sm-2 control-label">Description</label>
        <div class="col-sm-10">
            <textarea class="form-control" id="description" name="description"><?=$plan->description; ?></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="scans" class="col-sm-2 control-label">Scans</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="scans" name="scans" value="<?=$plan->scans; ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="names" class="col-sm-2 control-label">Names</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="names" name="names" value="<?=$plan->names; ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="monthFee" class="col-sm-2 control-label">Month Fee (number in format 10.00)</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="monthFee" name="monthFee" value="<?=$plan->monthFee; ?>">
        </div>
    </div>

    <div class="form-group">
        <label for="yearFee" class="col-sm-2 control-label">Year Fee (number in format 10.00)</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="yearFee" name="yearFee" value="<?=$plan->yearFee; ?>">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Update</button>
        </div>
    </div>
</form>
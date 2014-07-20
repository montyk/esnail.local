<div class="page-header">
    <h1>Add</h1>
</div>
<p class="lead">Add new mail</p>

<form action="/admin/mail/create" method="post" class="form-horizontal" role="form">
    <div class="form-group">
        <label for="from" class="col-sm-2 control-label">From</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="from" name="from">
        </div>
    </div>
    <div class="form-group">
        <label for="to" class="col-sm-2 control-label">To</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="to" name="to">
        </div>
    </div>
    <div class="form-group">
        <label for="subject" class="col-sm-2 control-label">Subject</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="subject" name="subject">
        </div>
    </div>
    <div class="form-group">
        <label for="description" class="col-sm-2 control-label">Description</label>
        <div class="col-sm-10">
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="kind" class="col-sm-2 control-label">Kind</label>
        <div class="col-sm-10">
            <select name="kind" id="kind" class="form-control">
                <option>---</option>
                <option value="p">Parcel</option>
                <option value="m">Mail</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="user_id" class="col-sm-2 control-label">User</label>
        <div class="col-sm-10">
            <select name="user_id" id="user_id" class="form-control">
                <option>---</option>
                <?php foreach(ORM::factory('User')->find_all() as $user) { ?>
                    <option value="<?=$user->id; ?>"><?=$user->firstname; ?> <?=$user->lastname; ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Add</button>
        </div>
    </div>
</form>
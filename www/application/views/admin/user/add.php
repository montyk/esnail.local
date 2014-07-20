<div class="page-header">
    <h1>Add</h1>
</div>
<p class="lead">Add new user</p>

<form action="/admin/user/create" method="post" class="form-horizontal" role="form">
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">Firstname</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname" name="firstname">
        </div>
    </div>
    <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">Lastname</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="lastname" name="lastname">
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" autocomplete="off">
        </div>
    </div>
    <div class="form-group">
        <label for="email_confirm" class="col-sm-2 control-label">Confirm Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email_confirm" name="email_confirm" autocomplete="off">
        </div>
    </div>
    <div class="form-group">
        <label for="password" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="password" name="password" autocomplete="off">
        </div>
    </div>
    <div class="form-group">
        <label for="password_confirm" class="col-sm-2 control-label">Confirm Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="password_confirm" name="password_confirm" autocomplete="off">
        </div>
    </div>
    <div class="form-group">
        <label for="promo" class="col-sm-2 control-label">Promo</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="promo" name="promo">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Add</button>
        </div>
    </div>
</form>
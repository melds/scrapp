<main>
	
	<div class="container">
  <h2>Login</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#user">Login as User</a></li>
    <li><a data-toggle="tab" href="#shop">Login as Shop</a></li>
  </ul>
  <div class="tab-content">
    <div id="user" class="tab-pane fade in active">
      <h3>User</h3>
      <p></p>
    </div>
    <div id="shop" class="tab-pane fade">
      <h3>Junk Shop</h3>
			<div class="row">
				<form class="col-xs-6 col-sm-6 col-md-6" role="form" action="<?=URL."register" ?>" method="post" >
					<input type="hidden" name="type" value="shop">
					<div class="form-group">
						<label for="">Shop Name</label>
						<input type="text" name="shopname" value="" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Contact Number</label>
						<input type="text" name="contact_no" value="" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input type="text" name="username" value="" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input type="password" name="password" value="" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Confirm password</label>
						<input type="password" name="confirm-password" value="" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Address</label>
						<select class="form-control" name="brgy">
							<?php foreach ($this->brgys as $brgy): ?>
								<option value="<?= $brgy->brgy_id  ?>"><?= $brgy->brgy_name ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group">
						<label for="">Brgy Scope</label>
						<select class="form-control js-example-basic-multiple" multiple="multiple" style="width: 100%;" name="brgys[]">
							<?php foreach ($this->brgys as $brgy): ?>
								<option value="<?= $brgy->brgy_id  ?>"><?= $brgy->brgy_name ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<input type="submit" value="Register" class="btn btn-info">
	      </form>
			</div>
    </div>
  </div>
</div>

</main>
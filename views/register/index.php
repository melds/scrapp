<main class="container">
	<div class="container">
  <h2>Register!</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#user">Register as User</a></li>
    <li><a data-toggle="tab" href="#shop">Register as Shop</a></li>
  </ul>
  <div class="tab-content">
    <div id="user" class="tab-pane fade in active">
      <h3>User</h3>
      <div class="row">
				<form class="col-xs-6 col-sm-6 col-md-6" role="form" action="<?=URL."register" ?>" method="post" >
					<input type="hidden" name="type" value="user">
					<div class="form-group">
						<label for="">First Name</label>
						<input type="text" name="firstname" value="" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Last Name</label>
						<input type="text" name="lastname" value="" class="form-control">
					</div>
					<div class="form-group">
					<label for="">Gender</label>

						<select class="form-control" name="gender">
							<option value="" disabled selected>Select Gender</option>
							<option value="m">Male</option>
							<option value="f">Female</option>
						</select>
					</div>
					<div class="form-group">
					<label for="">Email</label>
						<input type="email" name="email" id="email" class="form-control" placeholder="Email Address">
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
					
					<input type="submit" value="Register" class="btn btn-info">
	      </form>
			</div>
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

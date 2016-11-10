<main>
  	<div class="container">
	  <div class="loginContainer">
	  	<h2 class="loginHeader">Login</h2>
		  <form action="<?= URL."login" ?>" method="post">
			<div class="form-group">
				<input type="text" name="username" class="form-control" placeholder="Username">
			</div>
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="Password">
			</div>
			<div class="row">
				<div class="form-group col-sm-6">
					<select id="" name="as" class="form-control">
						<option value="" disabled selected>Login As</option>
						<option value="user">User</option>
						<option value="shop">Junk Shop</option>
					</select>
				</div>
				<div class="form-group col-sm-6">
					<input type="submit" value="Login" class="btn btn-info right submit-button">
				</div>
			</div>
		  </form>
	  </div>
	</div>
</main>
<?php Session::init(); ?>
<main >
	<a name="about"></a>
	<div class="intro-header">
			<div class="container">
					<div class="row">
							<div class="col-lg-12">
									<div class="intro-message">
											<h1>Landing Page</h1><!-- 
											<h3>A Template by Start Bootstrap</h3> -->
											<hr class="intro-divider">
											<ul class="list-inline intro-social-buttons">
'                           					 <li>
														<a class="btn btn-default btn-lg" data-toggle="modal" href='#modal-login'><i class="fa fa-user fa-fw"></i> <span class="network-name">Login</span></a>
												</li>'
												<li>
														<a class="btn btn-default btn-lg" data-toggle="modal" href='#modal-register'><i class="fa fa-cube fa-fw"></i> <span class="network-name">Register</span></a>
												</li>

											</ul>
									</div>
							</div>
					</div>
				 <div class="modal fade" id="modal-register">
							<div class="modal-dialog">
									<div class="modal-content">
											<div class="modal-body">
													<div class="container">
															<div class="row centered-form">
															 <div class="col-xs-12 col-sm-4 col-md-6 col-sm-offset-0 col-md-offset-0">
																<div class="panel panel-default">
																		<div class="panel-heading">
																				<h3 class="panel-title">Please sign up for Grevo <small>It's free!</small></h3>
																		 </div>
																		<div class="panel-body">
																			 <form role="form" action="<?=URL ?>index/register" method="post">
																					<div class="row">
																							<div class="col-xs-6 col-sm-6 col-md-6">
																									 <div class="form-group">
																											 <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
																									 </div>
																							</div>
																							<div class="col-xs-6 col-sm-6 col-md-6">
																								<div class="form-group">
																										<input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
																									</div>
																							</div>
																					</div>
																						<div class="form-group">
																								<select class="form-control" name="gender">
																									<option value="" disabled selected>Select Gender</option>
																									<option value="m">Male</option>
																									<option value="f">Female</option>
																								</select>
																						</div>
																							<div class="form-group">
																									<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
																							</div>
																							<div class="form-group">
																									<select class="form-control" name="brgy">
																										<option value="" disabled selected>Select Brgy</option>
																										<option value="100">Barangay 100 (San Roque)</option>
																									</select>
																							</div>
																							<div class="form-group">
																								<input type="text" name="username" id="username" class="form-control input-sm" placeholder="Username">
																							</div>
																					<div class="row">
																							<div class="col-xs-6 col-sm-6 col-md-6">
																										<div class="form-group">
																												 <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
																									</div>
																							</div>
																							<div class="col-xs-6 col-sm-6 col-md-6">
																								 <div class="form-group">
																											 <input type="password" name="confirm_pass" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
																							 </div>
																							</div>
																					</div>
																					<input type="submit" value="Register" class="btn btn-info btn-block">
																			 </form>
																			 </div>
																	 </div>
															</div>
													 </div>
											</div>
									</div>
							</div>
					</div>
			</div>
			<div class="modal fade" id="modal-login">
							<div class="modal-dialog">
									<div class="modal-content">
											<div class="modal-body">
													<div class="container">
															<div class="row centered-form">
															 <div class="col-xs-12 col-sm-4 col-md-6 col-sm-offset-0 col-md-offset-0">
																<div class="panel panel-default">
																		<div class="panel-heading">
																				<h3 class="panel-title">Please sign in</h3>
																		 </div>
																		<div class="panel-body">
																			 <form role="form" action="<?= URL."login"  ?>" method="post">
																					<div class="row">
																							<div class="col-xs-6 col-sm-6 col-md-6">
																								<div class="form-group">
																									<input type="text" name="username" id="username" class="form-control input-sm" placeholder="Username">
																								</div>
																							</div>
																							<div class="col-xs-6 col-sm-6 col-md-6">
																								<div class="form-group">
																								<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
																							 </div>
																							</div>
																					</div>
																					<div class="form-group">
																						<select id="" class="form-control" name="as" required>
																							<option value="" disabled selected>Login as</option>
																							<option value="user">User</option>
																							<option value="shop">Shop</option>
																						</select>
																					</div>
																					<input type="submit" value="Login" class="btn btn-info btn-block">
																			 </form>
																			 </div>
																	 </div>
															</div>
													 </div>
											</div>
									</div>
							</div>
					</div>
			</div>
			<!-- /.container -->
	</div>
	<!-- /.intro-header -->
	</div>
	<?php print_r($_SESSION); ?>
	<?php if (!empty(Session::exists('message'))): ?>
		<script type="text/javascript">
			alert("<?php echo Session::get('message')['message'] ?>");
		</script>
		<?php Session::delete('message') ?>
	<?php endif; ?>
</main>
